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

/* themes/contrib/thex/templates/layout/maintenance-page.html.twig */
class __TwigTemplate_a93004722d58320e06dcf7acd4cfdfbf extends Template
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
        // line 11
        echo "<div id=\"maintenance-page\">
<header class=\"maintenance-header\" role=\"banner\">
 <div class=\"container\">
    <div class=\"site-branding\">
       ";
        // line 15
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 16
            echo "          <div class=\"site-name-slogan\">
             ";
            // line 17
            if (($context["site_name"] ?? null)) {
                // line 18
                echo "                <div class=\"site-name\">
                   <a href=\"";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 19, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\"><h4>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 19, $this->source), "html", null, true);
                echo "</h4></a>
                </div>
             ";
            }
            // line 22
            echo "             ";
            if (($context["site_slogan"] ?? null)) {
                // line 23
                echo "                <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 23, $this->source), "html", null, true);
                echo "</div>
             ";
            }
            // line 25
            echo "          </div> <!--/.site-name-slogan -->
       ";
        }
        // line 27
        echo "    </div> <!-- /.site-branding -->
 </div> <!--/.container -->
</header>
<main id=\"maintenance\">
  <div class=\"container maintenance\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    ";
        // line 33
        if (($context["title"] ?? null)) {
            // line 34
            echo "      <h1 class=\"maintenance-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 34, $this->source), "html", null, true);
            echo "</h1>
    ";
        }
        // line 36
        echo "    <div class=\"maintenance-icon\">
      ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_source($this->env, "@thex/../images/maintenance.svg"));
        echo "
    </div>
    <div class=\"maintenance-message\">
      ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
    </div>
</div> <!-- /.container -->
</main> <!-- /#maintenance -->
</div><!-- /#maintenance-page -->
<!-- Zuvi has custom styling for the maintenance page. -->
";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/maintenance"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/thex/templates/layout/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  103 => 40,  97 => 37,  94 => 36,  88 => 34,  86 => 33,  78 => 27,  74 => 25,  68 => 23,  65 => 22,  55 => 19,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/thex/templates/layout/maintenance-page.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\thex\\templates\\layout\\maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15);
        static $filters = array("escape" => 19, "t" => 19);
        static $functions = array("source" => 37, "attach_library" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['source', 'attach_library']
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
