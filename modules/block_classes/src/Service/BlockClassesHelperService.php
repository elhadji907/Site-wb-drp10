<?php

namespace Drupal\block_classes\Service;

use Drupal\Component\Serialization\Json;
use Drupal\Component\Uuid\UuidInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Database\Connection;
use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\Core\Path\CurrentPathStack;
use Drupal\Core\Path\PathMatcherInterface;
use Drupal\Core\Session\AccountProxy;
use Drupal\path_alias\AliasManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Block Classes Service Class.
 */
class BlockClassesHelperService {

  use StringTranslationTrait;

  /**
   * The UUID service.
   *
   * @var \Drupal\Component\Uuid\UuidInterface
   */
  protected $uuidService;

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * Path Matcher.
   *
   * @var \Drupal\Core\Path\PathMatcherInterface
   */
  protected $pathMatcher;

  /**
   * The current request.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $request;

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $database;

  /**
   * The path alias manager.
   *
   * @var \Drupal\path_alias\AliasManagerInterface
   */
  protected $aliasManager;

  /**
   * The current path.
   *
   * @var \Drupal\Core\Path\CurrentPathStack
   */
  protected $currentPath;

  /**
   * Drupal\Core\Entity\EntityRepositoryInterface service.
   *
   * @var \Drupal\Core\Entity\EntityRepositoryInterface
   */
  protected $entityRepository;

  /**
   * Drupal\Core\Session\AccountProxy definition.
   *
   * @var \Drupal\Core\Session\AccountProxy
   */
  protected $currentUser;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The block entity.
   *
   * @var useDrupal\block\Entity\Block
   */
  protected $blockEntity;

  /**
   * Construct of Block Class service.
   */
  public function __construct(LanguageManagerInterface $language_manager, ConfigFactoryInterface $config_factory, Connection $database, RequestStack $request_stack, PathMatcherInterface $path_matcher, UuidInterface $uuid_service, AliasManagerInterface $alias_manager, CurrentPathStack $current_path, EntityRepositoryInterface $entityRepository, AccountProxy $currentUser, EntityTypeManagerInterface $entity_manager) {
    $this->languageManager = $language_manager;
    $this->pathMatcher = $path_matcher;
    $this->request = $request_stack->getCurrentRequest();
    $this->configFactory = $config_factory;
    $this->database = $database;
    $this->uuidService = $uuid_service;
    $this->aliasManager = $alias_manager;
    $this->currentPath = $current_path;
    $this->entityRepository = $entityRepository;
    $this->currentUser = $currentUser;
    $this->entityTypeManager = $entity_manager;
    $this->blockEntity = $this->entityTypeManager->getStorage('block');
  }

  /**
   * Method to do the presave block.
   */
  public function blockClassesPreSave(&$entity) {
    if (empty($entity->getThirdPartySetting('block_classes', 'title_class'))) {
      $entity->unsetThirdPartySetting('block_classes', 'title_class');
    }
    if (empty($entity->getThirdPartySetting('block_classes', 'content_class'))) {
      $entity->unsetThirdPartySetting('block_classes', 'content_class');
    }
    if (empty($entity->getThirdPartySetting('block_classes', 'block_class'))) {
      $entity->unsetThirdPartySetting('block_classes', 'block_class');
    }
    if (empty($entity->getThirdPartySetting('block_classes', 'attributes'))) {
      $entity->unsetThirdPartySetting('block_classes', 'attributes');
    }
    if (empty($entity->getThirdPartySetting('block_classes', 'replaced_id'))) {
      $entity->unsetThirdPartySetting('block_classes', 'replaced_id');
    }

    // Get the config object.
    $config = $this->configFactory->getEditable('block_classes.settings');

    // Get the default case on settings.
    $default_case = $config->get('default_case', 'standard');

    // Get the block classes.
    $block_title_classes = $entity->getThirdPartySetting('block_classes', 'title_class');
    $block_content_classes = $entity->getThirdPartySetting('block_classes', 'content_class');
    $block_body_classes = $entity->getThirdPartySetting('block_classes', 'block_class');
    $attributes = $entity->getThirdPartySetting('block_classes', 'attributes');

    switch ($default_case) {
      case 'uppercase':
        $block_title_classes = strtoupper($block_title_classes);
        $block_content_classes = strtoupper($block_content_classes);
        $block_body_classes = strtoupper($block_body_classes);
        break;

      case 'lowercase':
        $block_title_classes = strtolower($block_title_classes);
        $block_content_classes = strtolower($block_content_classes);
        $block_body_classes = strtolower($block_body_classes);
        break;
    }

    // Set the Third Party Settings.
    $entity->setThirdPartySetting('block_classes', 'title_class', $block_title_classes);
    $entity->setThirdPartySetting('block_classes', 'content_class', $block_content_classes);
    $entity->setThirdPartySetting('block_classes', 'block_class', $block_body_classes);

    // Get the config object.
    $config = $this->configFactory->getEditable('block_classes.settings');

    // Get the current classes stored.
    $block_classes_stored = $config->get('block_classes_stored');

    // Get the array from JSON.
    $block_classes_stored = Json::decode($block_classes_stored);

    // Verify if is empty.
    if (empty($block_classes_stored)) {
      $block_classes_stored = [];
    }

    // Get the current class and export to array.
    $current_block_classes = explode(' ', $block_body_classes);

    // Use the key the same as value.
    $current_block_classes = array_combine($current_block_classes, $current_block_classes);

    // Merge with the current one.
    $block_classes_to_store = array_merge($current_block_classes, $current_block_classes);

    // Get as JSON.
    $block_classes_to_store = Json::encode($block_classes_to_store);

    // Store in the config.
    $config->set('block_classes_stored', $block_classes_to_store);

    // Save.
    $config->save();

    // Store the id replacement in the settings only if it is enabled in the
    // Global Settings page.
    if (!empty($config->get('enable_id_replacement'))) {

      // Get the id replacement stored.
      $id_replacement_stored = $config->get('id_replacement_stored');

      // Get the array from JSON.
      $id_replacement_stored = Json::decode($id_replacement_stored);

      // Verify if is empty.
      if (empty($id_replacement_stored)) {
        $id_replacement_stored = [];
      }

      // Get the block class.
      $replaced_id = $entity->getThirdPartySetting('block_classes', 'replaced_id');

      // Avoid store empty values.
      if (empty(trim($replaced_id))) {
        return FALSE;
      }

      // Remove the extra spaces.
      $id_replacement_stored[$entity->id()] = trim($replaced_id);

      // Get as JSON.
      $id_replacement_to_store = Json::encode($id_replacement_stored);

      // Store in the config.
      $config->set('id_replacement_stored', $id_replacement_to_store);

      // Save.
      $config->save();

    }

    // If the attribute isn't enabled, skip that.
    if (empty($config->get('enable_attributes'))) {
      return FALSE;
    }

    // Initial value.
    $attribute_keys_stored = '{}';

    $attribute_value_stored = '{}';

    // Get the keys stored.
    if (!empty($config->get('attribute_keys_stored'))) {
      $attribute_keys_stored = $config->get('attribute_keys_stored');
    }

    if (!empty($config->get('attribute_value_stored'))) {
      $attribute_value_stored = $config->get('attribute_value_stored');
    }
  }

}
