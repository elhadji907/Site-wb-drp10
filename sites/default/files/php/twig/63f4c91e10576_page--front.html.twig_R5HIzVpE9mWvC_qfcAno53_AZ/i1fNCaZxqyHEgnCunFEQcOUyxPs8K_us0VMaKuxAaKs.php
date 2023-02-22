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

/* themes/contrib/edux/templates/layout/page--front.html.twig */
class __TwigTemplate_9a638f1e15ae28d5df132e3e24272f28 extends Template
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
        // line 1
        $this->loadTemplate("@edux/template-parts/header/header.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 1)->display($context);
        // line 2
        if (($context["slider_show"] ?? null)) {
            // line 3
            echo "  ";
            $this->loadTemplate("@edux/template-parts/slider.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 3)->display($context);
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 5)) {
            // line 6
            echo "  ";
            $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 6)->display($context);
        }
        // line 8
        echo "<div class=\"main-wrapper\">
  ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home_top", [], "any", false, false, true, 9)) {
            // line 10
            echo "    ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_home_top.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 10)->display($context);
            // line 11
            echo "  ";
        }
        // line 12
        echo "  <div class=\"container\">
    <div class=\"main-container\">
      ";
        // line 14
        if (($context["front_sidebar"] ?? null)) {
            // line 15
            echo "        <main id=\"main\" class=\"frontpage-main main-content\">
      ";
        } else {
            // line 17
            echo "        <main id=\"front-main\" class=\"frontpage-main main-content\">
      ";
        }
        // line 19
        echo "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 20)) {
            // line 21
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 21)->display($context);
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <div class=\"node-content\">
          ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 26)) {
            // line 27
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 27)->display($context);
            // line 28
            echo "        ";
        }
        // line 29
        echo "      </main>
    ";
        // line 30
        if ((($context["front_sidebar"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 30))) {
            // line 31
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 31)->display($context);
            // line 32
            echo "    ";
        }
        // line 33
        echo "    ";
        if ((($context["front_sidebar"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33))) {
            // line 34
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 34)->display($context);
            // line 35
            echo "    ";
        }
        // line 36
        echo "    </div><!--/main-container -->
  </div><!--/container -->
  ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_home_bottom", [], "any", false, false, true, 38)) {
            // line 39
            echo "    ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_home_bottom.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 39)->display($context);
            // line 40
            echo "  ";
        }
        // line 41
        echo "</div><!--/main-wrapper -->
";
        // line 42
        $this->loadTemplate("@edux/template-parts/footer.html.twig", "themes/contrib/edux/templates/layout/page--front.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/edux/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  137 => 41,  134 => 40,  131 => 39,  129 => 38,  125 => 36,  122 => 35,  119 => 34,  116 => 33,  113 => 32,  110 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  97 => 26,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  81 => 20,  78 => 19,  74 => 17,  70 => 15,  68 => 14,  64 => 12,  61 => 11,  58 => 10,  56 => 9,  53 => 8,  49 => 6,  47 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/edux/templates/layout/page--front.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\edux\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
