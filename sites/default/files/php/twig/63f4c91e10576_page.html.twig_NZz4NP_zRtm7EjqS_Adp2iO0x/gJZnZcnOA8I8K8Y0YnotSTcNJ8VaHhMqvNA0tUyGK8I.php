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

/* themes/contrib/edux/templates/layout/page.html.twig */
class __TwigTemplate_59fa8253a7c575b0c5a26a2bce8725a1 extends Template
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
        $this->loadTemplate("@edux/template-parts/header/header.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 1)->display($context);
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 2)) {
            // line 3
            echo "  ";
            $this->loadTemplate("@thex/template-parts/header/header-page.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 3)->display($context);
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 5)) {
            // line 6
            echo "  ";
            $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 6)->display($context);
        }
        // line 8
        echo "<div class=\"main-wrapper clear\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 13)) {
            // line 14
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 14)->display($context);
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div class=\"node-content\">
          ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
        </div>
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 19)) {
            // line 20
            echo "          ";
            $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 20)->display($context);
            // line 21
            echo "        ";
        }
        // line 22
        echo "      </main>
    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 23)) {
            // line 24
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 24)->display($context);
            // line 25
            echo "    ";
        }
        // line 26
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 26)) {
            // line 27
            echo "      ";
            $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 27)->display($context);
            // line 28
            echo "    ";
        }
        // line 29
        echo "    </div><!--/main-container -->
  </div><!--/container -->
</div><!--/main-wrapper -->
";
        // line 32
        $this->loadTemplate("@edux/template-parts/footer.html.twig", "themes/contrib/edux/templates/layout/page.html.twig", 32)->display($context);
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/edux/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  109 => 32,  104 => 29,  101 => 28,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 13,  53 => 8,  49 => 6,  47 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/edux/templates/layout/page.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\edux\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 17);
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
