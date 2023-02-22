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

/* @edux/template-parts/footer.html.twig */
class __TwigTemplate_b6362fd1ba6d0c1b86a58f11917456ff extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1)) {
            // line 2
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@edux/template-parts/footer.html.twig", 2)->display($context);
        }
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 4) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 4))) {
            // line 5
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@edux/template-parts/footer.html.twig", 5)->display($context);
        }
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 7) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 7))) {
            // line 8
            echo "  ";
            $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@edux/template-parts/footer.html.twig", 8)->display($context);
        }
        // line 10
        if (($context["all_icons_show"] ?? null)) {
            // line 11
            echo "<div class=\"footer footer-social\">
  <div class=\"container text-center\">
    ";
            // line 13
            $this->loadTemplate("@edux/template-parts/components/social-icons.html.twig", "@edux/template-parts/footer.html.twig", 13)->display($context);
            // line 14
            echo "  </div><!-- /container -->
</div>
";
        }
        // line 17
        if ((($context["copyright_text"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_last", [], "any", false, false, true, 17))) {
            // line 18
            echo "  <footer class=\"footer-bottom footer\">
    <div class=\"container\">
      <div class=\"footer-bottom-container\">
        ";
            // line 21
            if (($context["copyright_text"] ?? null)) {
                // line 22
                echo "          ";
                $this->loadTemplate("@thex/template-parts/footer/footer-copyright.html.twig", "@edux/template-parts/footer.html.twig", 22)->display($context);
                // line 23
                echo "        ";
            }
            // line 24
            echo "        ";
            $this->loadTemplate("@thex/template-parts/footer/footer-bottom-last.html.twig", "@edux/template-parts/footer.html.twig", 24)->display($context);
            // line 25
            echo "      </div><!-- /footer-bottom-container -->
    </div><!-- /container -->
  </footer><!-- /footer-bottom -->
";
        }
        // line 29
        echo "
";
        // line 30
        if (($context["scrolltotop_on"] ?? null)) {
            // line 31
            echo "  <div class=\"scrolltop\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["scrolltotop_icon_style"] ?? null), 31, $this->source));
            echo "</div>
";
        }
        // line 33
        $this->loadTemplate("@edux/template-parts/style.html.twig", "@edux/template-parts/footer.html.twig", 33)->display($context);
        // line 34
        if (($context["fontawesome_four"] ?? null)) {
            // line 35
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome4"), "html", null, true);
            echo "
";
        }
        // line 37
        if (($context["fontawesome_five"] ?? null)) {
            // line 38
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome5"), "html", null, true);
            echo "
";
        }
        // line 40
        if (($context["bootstrapicons"] ?? null)) {
            // line 41
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/bootstrap-icons"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@edux/template-parts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 41,  123 => 40,  117 => 38,  115 => 37,  109 => 35,  107 => 34,  105 => 33,  99 => 31,  97 => 30,  94 => 29,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  77 => 21,  72 => 18,  70 => 17,  65 => 14,  63 => 13,  59 => 11,  57 => 10,  53 => 8,  51 => 7,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@edux/template-parts/footer.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\edux\\templates\\template-parts\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array("raw" => 31, "escape" => 35);
        static $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['raw', 'escape'],
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
