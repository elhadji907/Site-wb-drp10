<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/edux/templates/content/comment.html.twig */
class __TwigTemplate_b17f48ca1437e8b31bf442bf250c557e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        $context["classes"] = [0 => (((        // line 69
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["comment"] ?? null), "owner", [], "any", false, false, true, 70), "anonymous", [], "any", false, false, true, 70)) ? ("comment-by-anonymous") : ("")), 2 => (((        // line 71
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 71)))) ? ("comment-by-author") : (""))];
        // line 74
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "js-comment", 1 => "comment", 2 => ($context["classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
        echo ">
  ";
        // line 80
        echo "  <header class=\"comment-header\">
    ";
        // line 81
        if (($context["comment_user_pic"] ?? null)) {
            // line 82
            echo "      <div class=\"comment-user-picture\">
        ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 83, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 86
        echo "    <div class=\"comment-meta\">
      ";
        // line 87
        if (($context["title"] ?? null)) {
            // line 88
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 88, $this->source), "html", null, true);
            echo "
        <h3";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "comment-title"], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 89, $this->source), "html", null, true);
            echo "</h3>
        ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 92
        echo "      <p>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 92, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 92, $this->source), "html", null, true);
        echo " <mark class=\"hidden\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 92, $this->source), "html", null, true);
        echo "\"></mark></p>
      ";
        // line 93
        if (($context["parent"] ?? null)) {
            // line 94
            echo "        <p class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 94, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 96
        echo "    </div> <!-- /.single-comment-meta -->
  </header>
  <div class=\"comment-body\">
    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 99, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/edux/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 99,  101 => 96,  95 => 94,  93 => 93,  84 => 92,  79 => 90,  73 => 89,  68 => 88,  66 => 87,  63 => 86,  57 => 83,  54 => 82,  52 => 81,  49 => 80,  44 => 74,  42 => 71,  41 => 70,  40 => 69,  39 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/edux/templates/content/comment.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\edux\\templates\\content\\comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 68, "if" => 81);
        static $filters = array("escape" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
