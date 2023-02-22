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

/* themes/contrib/edux/templates/layout/html.html.twig */
class __TwigTemplate_fdb896a6c5f88811ae47deb06de14f51 extends Template
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
        // line 28
        $context["body_classes"] = [0 => (( !        // line 29
($context["root_path"] ?? null)) ? ("homepage") : ("site-page")), 1 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 2 => ((( !twig_get_attribute($this->env, $this->source,         // line 31
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 31) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 31))) ? ("no-sidebar") : ("")), 3 => (((twig_get_attribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("one-sidebar sidebar-left") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-right") : ("")), 5 => (((twig_get_attribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34))) ? ("two-sidebar") : (""))];
        // line 37
        echo "<!DOCTYPE html>
<html";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 38, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 41, $this->source), " | "));
        echo "</title>
    ";
        // line 42
        if ((($context["font_src"] ?? null) == "local")) {
            // line 43
            echo "    <link rel=\"preload\" as=\"font\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 43, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 43, $this->source)), "html", null, true);
            echo "/fonts/noto-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
            echo "/fonts/noto-sans-bold.woff2\" type=\"font/woff2\" crossorigin>
    ";
        } elseif ((        // line 45
($context["font_src"] ?? null) == "googlecdn")) {
            // line 46
            echo "    <link href=\"//fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap\" rel=\"stylesheet\">
    ";
        }
        // line 48
        echo "    <css-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 48, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 49, $this->source), "html", null, true);
        echo "\">
";
        // line 50
        if (($context["styling"] ?? null)) {
            // line 51
            echo "<style>
";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["styling_code"] ?? null), 52, $this->source));
            echo "
</style>
";
        }
        // line 55
        echo "  </head>
  <body";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
        echo ">
    ";
        // line 61
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 64, $this->source), "html", null, true);
        echo "
    ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 65, $this->source), "html", null, true);
        echo "
    ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 66, $this->source), "html", null, true);
        echo "
    ";
        // line 67
        if ((($context["font_src"] ?? null) == "local")) {
            // line 68
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("edux/googlefontslocal"), "html", null, true);
            echo "
    ";
        }
        // line 70
        echo "    <js-bottom-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 70, $this->source), "html", null, true);
        echo "\">
    ";
        // line 71
        if (($context["is_front"] ?? null)) {
            // line 72
            echo "    <script>
    jQuery(\".js-rotating\").Morphist({
      animateIn: 'fadeInUp',
      animateOut: 'fadeOutLeft',
      speed: ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_speed"] ?? null), 76, $this->source), "html", null, true);
            echo ",
    });
    </script>
    ";
        }
        // line 80
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/edux/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 80,  148 => 76,  142 => 72,  140 => 71,  135 => 70,  129 => 68,  127 => 67,  123 => 66,  119 => 65,  115 => 64,  110 => 62,  107 => 61,  103 => 56,  100 => 55,  94 => 52,  91 => 51,  89 => 50,  85 => 49,  80 => 48,  76 => 46,  74 => 45,  70 => 44,  65 => 43,  63 => 42,  59 => 41,  55 => 40,  50 => 38,  47 => 37,  45 => 34,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/edux/templates/layout/html.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\edux\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 42);
        static $filters = array("clean_class" => 30, "escape" => 38, "safe_join" => 41, "raw" => 52, "t" => 62);
        static $functions = array("attach_library" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'safe_join', 'raw', 't'],
                ['attach_library']
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
