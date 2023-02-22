<?php

namespace Drupal\block_classes\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Extension\ExtensionList;
use Drupal\Core\Routing\RouteMatchInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\block\Entity\Block;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Component\Serialization\Json;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Controller routines for help routes.
 */
class BlockClassesController extends ControllerBase {

  /**
   * The current route match.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $routeMatch;

  /**
   * The extension list module.
   *
   * @var \Drupal\Core\Extension\ExtensionList
   */
  protected $extensionListModule;

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The Request Stack.
   *
   * @var \Symfony\Component\HttpFoundation\RequestStack
   */
  protected $requestStack;

  /**
   * Creates a new HelpController.
   */
  public function __construct(RouteMatchInterface $route_match, ExtensionList $extension_list_module, ConfigFactoryInterface $config_factory, RequestStack $requestStack) {
    $this->routeMatch = $route_match;
    $this->extensionListModule = $extension_list_module;
    $this->configFactory = $config_factory;
    $this->requestStack = $requestStack;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('current_route_match'),
      $container->get('extension.list.module'),
      $container->get('config.factory'),
      $container->get('request_stack')
    );
  }

  /**
   * Method to show the block list.
   */
  public function blockList() {

    // Get config object.
    $config = $this->configFactory->getEditable('block_classes.settings');
    $table = '<table>';
    $table .= '<thead>';
    $table .= '<tr>';
    $table .= '<th>' . $this->t('Block') . '</th>';
    $table .= '<th>' . $this->t('Class') . '</th>';
    $table .= '<th>' . $this->t('Attributes') . '</th>';
    $table .= '<th>' . $this->t('Edit') . '</th>';
    $table .= '<th colspan="2" class="block-class-text-center">' . $this->t('Delete') . '</th>';
    $table .= '</tr>';
    $table .= '</thead>';
    $table .= '<tbody>';

    // Load blocks. Todo: We'll implements DI here @codingStandardsIgnoreLine
    $blocks = Block::loadMultiple();

    // Get the quantity of blocks available.
    $qty_blocks = count($blocks);

    // Initial value.
    $page = (int) 1;

    if (!empty($this->requestStack->getCurrentRequest()->query->get('page'))) {
      $page = (int) $this->requestStack->getCurrentRequest()->query->get('page');
    }

    // Get the default items per page. By default is 50.
    $items_per_page = 50;

    // If there is a settings defined with this items get this value there.
    if (!empty($config->get('items_per_page'))) {

      // Update the items per page with the value from settings page.
      $items_per_page = $config->get('items_per_page');
    }

    $from = ($page - 1) * 5;
    $to = ($from + $items_per_page);

    $index = 1;

    foreach ($blocks as $block) {

      if ($index < $from) {
        $index++;
        continue;
      }

      if ($index > $to) {
        break;
      }

      if (empty($block->getThirdPartySetting('block_classes', 'classes')) && empty($block->getThirdPartySetting('block_classes', 'attributes'))) {
        continue;
      }

      // Get the block classes configured.
      $block_class = $block->getThirdPartySetting('block_classes', 'classes');

      // Get the attributes.
      $attributes = $block->getThirdPartySetting('block_classes', 'attributes');

      // If classes is empty, and there are attributes but the flag to enable
      // attributes is off, skip.
      if (empty($block_class) && !empty($attributes) && empty($config->get('enable_attributes'))) {
        continue;
      }

      // Put one attribute per line.
      $attributes = str_replace(PHP_EOL, '<br>', $attributes);

      $table .= '<tr>';
      $table .= '<td>' . '<a href="/admin/structure/block/manage/' . $block->id() . '">' . $block->label() . '</a></td>';
      $table .= '<td>' . $block_class . '</td>';
      $table .= '<td>' . $attributes . '</td>';
      $table .= '<td>' . '<a href="/admin/structure/block/manage/' . $block->id() . '">' . $this->t('Edit') . '</a></td>';
      $table .= '<td>' . '<a href="/admin/config/content/block-class/delete/' . $block->id() . '">' . $this->t('Delete') . '</a></td>';
      $table .= '<td>' . '<a href="/admin/config/content/block-class/delete-attribute/' . $block->id() . '">' . $this->t('Delete Attributes') . '</a></td>';
      $table .= '</tr>';

      $index++;
    }

    $table .= '</tbody>';
    $table .= '</table>';

    $markup = $table;

    if ($qty_blocks > $items_per_page) {
      $markup .= '<nav>';
      $markup .= '<ul class="pager__items">';
      $markup .= '<li class="pager__item pager__item--next">';
      $markup .= '<a href="?page=' . ($page + 1) . '">';
      $markup .= '<span>Next ›</span>';
      $markup .= '</a>';
      $markup .= '</li>';
      $markup .= '</ul>';
      $markup .= '</ul>';
    }

    $build = [
      '#markup' => $markup,
      '#attached' => [
        'library' => [
          'block_classes/block-class',
        ],
      ],
    ];

    return $build;

  }

  /**
   * Method to show the block list.
   */
  public function classList() {

    $table = '<table>';
    $table .= '<thead>';
    $table .= '<tr>';
    $table .= '<th>' . $this->t('Class') . '</th>';
    $table .= '</tr>';
    $table .= '</thead>';
    $table .= '<tbody>';

    $block_classes_stored = [];

    $config = $this->configFactory->getEditable('block_classes.settings');

    // Get config object.
    if (!empty($config->get('block_classes_stored'))) {
      $block_classes_stored = $config->get('block_classes_stored');
    }

    // Get the array.
    $block_classes_stored = Json::decode($block_classes_stored);

    // Get the array values and id in the keys.
    $block_classes_stored = array_values($block_classes_stored);

    foreach ($block_classes_stored as $block_class) {

      $table .= '<tr>';
      $table .= '<td>' . $block_class . '</td>';
      $table .= '</tr>';

    }

    $table .= '</tbody>';
    $table .= '</table>';

    $markup = $table;

    $build = [
      '#markup' => $markup,
    ];

    return $build;

  }

  /**
   * Method to show the attribute list.
   */
  public function attributeList() {

    $table = '<table>';
    $table .= '<thead>';
    $table .= '<tr>';
    $table .= '<th>' . $this->t('Attributes') . '</th>';
    $table .= '</tr>';
    $table .= '</thead>';
    $table .= '<tbody>';

    $attributes_inline = [];

    $config = $this->configFactory->getEditable('block_classes.settings');

    // Get config object.
    if (!empty($config->get('attributes_inline'))) {
      $attributes_inline = $config->get('attributes_inline');
    }

    // Get the array.
    $attributes_inline = Json::decode($attributes_inline);

    // Get the array values and id in the keys.
    $attributes_inline = array_values($attributes_inline);

    foreach ($attributes_inline as $attribute_inline) {

      $table .= '<tr>';
      $table .= '<td>' . $attribute_inline . '</td>';
      $table .= '</tr>';

    }

    $table .= '</tbody>';
    $table .= '</table>';

    $markup = $table;

    $build = [
      '#markup' => $markup,
    ];

    return $build;

  }

}
