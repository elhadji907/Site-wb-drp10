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

/* @edux/template-parts/slider.html.twig */
class __TwigTemplate_48835b8c69058ddbfc03cd0da10290b7 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("edux/slider"), "html", null, true);
        echo "
<section class=\"slider\">
  <div class=\"container slider-container\">
    <div class=\"slider-text\">
      <ul class=\"js-rotating\">
        ";
        // line 6
        if ((($context["slider_code"] ?? null) != "")) {
            // line 7
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["slider_code"] ?? null), 7, $this->source), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<button>,<mark>,<hr>"));
            echo "
        ";
        } else {
            // line 9
            echo "        <li>
  \t\t\t\t<h1>Limitless <em>Learning</em> And Get More Possibilities</h1>
  \t\t\t\t<p>EduX Theme is packed full of all the amazing features and options for you to create an amazing education website.</p>
  \t\t\t\t<a class=\"button-dark\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1><em>Pratical</em> Teachings and <em>Social</em> Development</h1>
  \t\t\t\t<p>Learn anytime with our free online study materials and videos. Get your doubts cleared by expert teachers.</p>
  \t\t\t\t<a class=\"button-dark\" href=\"#\">Get Started</a>
  \t\t\t</li>
  \t\t\t<li>
  \t\t\t\t<h1>Learn New <em>Skills</em>, Advance Your <em>Career</em></h1>
  \t\t\t\t<p>We have high academic programs and fully qualified faculties with over 12 years of teaching experience.</p>
  \t\t\t\t<a class=\"button-dark\" href=\"#\">Get Started</a>
  \t\t\t</li>
        ";
        }
        // line 25
        echo "      </ul> <!--/.home-slider -->
    </div><!-- /slider-text -->
    <div class=\"slider-image\">
      ";
        // line 28
        if ((($context["slider_image_path"] ?? null) != "")) {
            // line 29
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slider_image_path"] ?? null), 29, $this->source), "html", null, true);
            echo "\" alt=\"slider image\" />
      ";
        } else {
            // line 31
            echo "        <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source), "html", null, true);
            echo "/images/demo/slider.svg\" alt=\"slider image\" />
      ";
        }
        // line 33
        echo "    </div><!-- /slider-image -->
  </div> <!--/.container -->
</section>
";
    }

    public function getTemplateName()
    {
        return "@edux/template-parts/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  86 => 31,  80 => 29,  78 => 28,  73 => 25,  55 => 9,  49 => 7,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@edux/template-parts/slider.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\edux\\templates\\template-parts\\slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 1, "raw" => 7, "striptags" => 7);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'striptags'],
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
