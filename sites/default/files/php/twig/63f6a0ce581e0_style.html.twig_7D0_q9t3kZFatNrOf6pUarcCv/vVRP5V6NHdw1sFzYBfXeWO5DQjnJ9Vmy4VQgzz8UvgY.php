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

/* @edux/template-parts/style.html.twig */
class __TwigTemplate_a87b8eaf79f052e8736772baca8b5c8f extends Template
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
        echo "<style>
";
        // line 3
        echo "body {
  font-size: ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_font_size"] ?? null), 4, $this->source), "html", null, true);
        echo "rem;
  line-height: ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_line_height"] ?? null), 5, $this->source), "html", null, true);
        echo ";
}
p {
  margin-bottom: ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["paragraph_bottom"] ?? null), 8, $this->source), "html", null, true);
        echo "rem;
}
";
        // line 11
        if ( !($context["logo_default"] ?? null)) {
            // line 12
            echo ".site-name {
  font-size: ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_size"] ?? null), 13, $this->source), "html", null, true);
            echo "rem;
  font-weight: ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_weight"] ?? null), 14, $this->source), "html", null, true);
            echo ";
  text-transform: ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_transform"] ?? null), 15, $this->source), "html", null, true);
            echo ";
  line-height: ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_height"] ?? null), 16, $this->source), "html", null, true);
            echo ";
}
.site-slogan {
  font-size: ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_size"] ?? null), 19, $this->source), "html", null, true);
            echo "rem;
  text-transform: ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_transform"] ?? null), 20, $this->source), "html", null, true);
            echo ";
  line-height: ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_height"] ?? null), 21, $this->source), "html", null, true);
            echo ";
  font-style: ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slogan_style"] ?? null), 22, $this->source), "html", null, true);
            echo ";

}
";
        }
        // line 27
        if ( !($context["main_menu_default"] ?? null)) {
            // line 28
            echo ".menu-wrap ul.menu {
  font-size: ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_size"] ?? null), 29, $this->source), "html", null, true);
            echo "rem;
}
.menu-wrap {
  font-weight: ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_weight"] ?? null), 32, $this->source), "html", null, true);
            echo ";
}
.menu-wrap ul.menu > li > a {
  text-transform: ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_transform"] ?? null), 35, $this->source), "html", null, true);
            echo ";
}
.menu-wrap ul.menu ul.submenu {
  fontweight: ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_weight"] ?? null), 38, $this->source), "html", null, true);
            echo ";
}
.menu-wrap ul.menu ul.submenu li {
  font-size: ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_size"] ?? null), 41, $this->source), "html", null, true);
            echo "rem;  
  text-transform: ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_transform"] ?? null), 42, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 45
        echo "@media (min-width: 1170px) {
  .container {
    max-width: ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width"] ?? null), 47, $this->source), "html", null, true);
        echo "px;
  }
}
";
        // line 51
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 52
            echo ".header-top .container,
.header .container,
.page-header .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 59
        if ((($context["main_width"] ?? null) == "main_width_full")) {
            // line 60
            echo ".main-wrapper .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 65
        echo "
";
        // line 66
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 67
            echo ".footer-top footer .container,
.footer-blocks .container,
.footer-bottom-blocks .container,
.footer-bottom .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 76
        if ( !($context["header_main_default"] ?? null)) {
            // line 77
            echo ".header-container {
  padding-top: ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_main_padding_top"] ?? null), 78, $this->source), "html", null, true);
            echo "rem;
  padding-bottom: ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_main_padding_bottom"] ?? null), 79, $this->source), "html", null, true);
            echo "rem;
}
";
        }
        // line 82
        if ( !($context["header_page_default"] ?? null)) {
            // line 83
            echo ".page-header {
  padding-top: ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_padding_top"] ?? null), 84, $this->source), "html", null, true);
            echo "rem;
  padding-bottom: ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_padding_bottom"] ?? null), 85, $this->source), "html", null, true);
            echo "rem; 
}
.region-page-header {
  align-items: ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_content_position"] ?? null), 88, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 92
        if ( !($context["slider_image_bg"] ?? null)) {
            // line 93
            echo ".slider-image {
  background-color: transparent;
  -webkit-animation: none;
  animation: none;
}
";
        }
        // line 99
        echo "
@media (min-width: 768px) {
  ";
        // line 101
        if ( !($context["headings_default"] ?? null)) {
            // line 102
            echo "  h1 {
    font-size: ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_size"] ?? null), 103, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_weight"] ?? null), 104, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_transform"] ?? null), 105, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h1_height"] ?? null), 106, $this->source), "html", null, true);
            echo ";
  }
  h2 {
    font-size: ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_size"] ?? null), 109, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_weight"] ?? null), 110, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_transform"] ?? null), 111, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h2_height"] ?? null), 112, $this->source), "html", null, true);
            echo ";
  }
  h3 {
    font-size: ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_size"] ?? null), 115, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_weight"] ?? null), 116, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_transform"] ?? null), 117, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h3_height"] ?? null), 118, $this->source), "html", null, true);
            echo ";
  }
  h4 {
    font-size: ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_size"] ?? null), 121, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_weight"] ?? null), 122, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_transform"] ?? null), 123, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h4_height"] ?? null), 124, $this->source), "html", null, true);
            echo ";
  }
  h5 {
    font-size: ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_size"] ?? null), 127, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_weight"] ?? null), 128, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_transform"] ?? null), 129, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h5_height"] ?? null), 130, $this->source), "html", null, true);
            echo ";
  }
  h6 {
    font-size: ";
            // line 133
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_size"] ?? null), 133, $this->source), "html", null, true);
            echo "rem;
    font-weight: ";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_weight"] ?? null), 134, $this->source), "html", null, true);
            echo ";
    text-transform: ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_transform"] ?? null), 135, $this->source), "html", null, true);
            echo ";
    line-height: ";
            // line 136
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["h6_height"] ?? null), 136, $this->source), "html", null, true);
            echo ";
  }
  ";
        }
        // line 139
        echo "  ";
        if ( !($context["sidebar_width_default"] ?? null)) {
            // line 140
            echo "  .sidebar-left #main {
    flex: 1 1 calc(100% - ";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 141, $this->source), "html", null, true);
            echo "%);
  }
  .sidebar-right #main {
    flex: 1 1 calc(100% - ";
            // line 144
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 144, $this->source), "html", null, true);
            echo "%);
  }
  .two-sidebar #main {
    flex: 1 1 calc(100% - ";
            // line 147
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 147, $this->source), "html", null, true);
            echo "% - ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 147, $this->source), "html", null, true);
            echo "%);
  }
  #sidebar-left {
    flex: 0 1 ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 150, $this->source), "html", null, true);
            echo "%;
  }
  #sidebar-right {
    flex: 0 1 ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 153, $this->source), "html", null, true);
            echo "%;
  }
  ";
        }
        // line 156
        echo "}
";
        // line 157
        if ( !($context["sidebar_block_default"] ?? null)) {
            // line 158
            echo ".sidebar .block {
  padding: ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_padding"] ?? null), 159, $this->source), "html", null, true);
            echo "px;
  border-radius: ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_radius"] ?? null), 160, $this->source), "html", null, true);
            echo "px;
  margin-bottom: ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_margin"] ?? null), 161, $this->source), "html", null, true);
            echo "rem;
}
.sidebar .block-title {
  font-size: ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_title_font_size"] ?? null), 164, $this->source), "html", null, true);
            echo "rem;
  text-transform: ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_title_transform"] ?? null), 165, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 169
        if ( !($context["page_title_default"] ?? null)) {
            // line 170
            echo ".page-title {
  font-size: ";
            // line 171
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_size_mobile"] ?? null), 171, $this->source), "html", null, true);
            echo "rem;
  text-transform: ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_transform"] ?? null), 172, $this->source), "html", null, true);
            echo ";
}
@media (min-width: 768px) {
  .page-title {
    font-size: ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_size_desktop"] ?? null), 176, $this->source), "html", null, true);
            echo "rem;
  }
}
";
        }
        // line 180
        if (($context["highlight_author_comment"] ?? null)) {
            // line 181
            echo ".comment-by-author {
  box-shadow: 0 0 3px 1px var(--theme-color);
}
";
        }
        // line 185
        if ((($context["scrolltotop_on"] ?? null) &&  !($context["scrolltotop_default"] ?? null))) {
            // line 186
            echo ".scrolltop {
  ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_position"] ?? null), 187, $this->source), "html", null, true);
            echo ": 10px;
  bottom: ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_bottom"] ?? null), 188, $this->source), "html", null, true);
            echo "px;
  font-size: ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_icon_size"] ?? null), 189, $this->source), "html", null, true);
            echo "px;
  border-radius: ";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scrolltotop_icon_radius"] ?? null), 190, $this->source), "html", null, true);
            echo ";
}
";
        }
        // line 193
        if ( !($context["button_default"] ?? null)) {
            // line 194
            echo "a.button, .button, button, [type=\"button\"], [type=\"reset\"], [type=\"submit\"] {
  padding: ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_padding"] ?? null), 195, $this->source), "html", null, true);
            echo ";
  border-radius: ";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_radius"] ?? null), 196, $this->source), "html", null, true);
            echo "px;
}
";
        }
        // line 199
        echo "</style>";
    }

    public function getTemplateName()
    {
        return "@edux/template-parts/style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 199,  482 => 196,  478 => 195,  475 => 194,  473 => 193,  467 => 190,  463 => 189,  459 => 188,  455 => 187,  452 => 186,  450 => 185,  444 => 181,  442 => 180,  435 => 176,  428 => 172,  424 => 171,  421 => 170,  419 => 169,  413 => 165,  409 => 164,  403 => 161,  399 => 160,  395 => 159,  392 => 158,  390 => 157,  387 => 156,  381 => 153,  375 => 150,  367 => 147,  361 => 144,  355 => 141,  352 => 140,  349 => 139,  343 => 136,  339 => 135,  335 => 134,  331 => 133,  325 => 130,  321 => 129,  317 => 128,  313 => 127,  307 => 124,  303 => 123,  299 => 122,  295 => 121,  289 => 118,  285 => 117,  281 => 116,  277 => 115,  271 => 112,  267 => 111,  263 => 110,  259 => 109,  253 => 106,  249 => 105,  245 => 104,  241 => 103,  238 => 102,  236 => 101,  232 => 99,  224 => 93,  222 => 92,  216 => 88,  210 => 85,  206 => 84,  203 => 83,  201 => 82,  195 => 79,  191 => 78,  188 => 77,  186 => 76,  176 => 67,  174 => 66,  171 => 65,  164 => 60,  162 => 59,  153 => 52,  151 => 51,  145 => 47,  141 => 45,  135 => 42,  131 => 41,  125 => 38,  119 => 35,  113 => 32,  107 => 29,  104 => 28,  102 => 27,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  60 => 11,  55 => 8,  49 => 5,  45 => 4,  42 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@edux/template-parts/style.html.twig", "C:\\xamppp\\htdocs\\drupal\\themes\\contrib\\edux\\templates\\template-parts\\style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
