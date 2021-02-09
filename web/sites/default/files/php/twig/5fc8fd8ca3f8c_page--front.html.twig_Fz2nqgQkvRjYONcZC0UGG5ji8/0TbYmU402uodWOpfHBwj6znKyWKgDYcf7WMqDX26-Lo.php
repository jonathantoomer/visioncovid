<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/VisionCovid/templates/system/page--front.html.twig */
class __TwigTemplate_58a38e6e914d6ed6ae0592a4181e4dd6e049c7ef23c819d13e7e646de4d38c23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 79
        echo "
";
        // line 81
        $this->displayBlock('main', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 143
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : ("container-fluid"))];
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      

     ";
        // line 68
        $this->loadTemplate("@VisionCovid/includes/header.html.twig", "themes/custom/VisionCovid/templates/system/page--front.html.twig", 68)->display($context);
        // line 69
        echo "
      <div class=\"container-fluid header-image\">
        <img alt=\"\" class=\"img-responsive\" src=\"";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/corona-graphics.jpg\" >
        <div class=\"caption\">
          <h2 class=\"h3\">Welcome to the VISION/COVID Data Portal. Here you will find summary information about data submitted to date. This site is updated nightly and will reflect interim data submission metrics as sites submit their data for validation. </h2>
        </div>
      </div>
    </header>
  ";
    }

    // line 81
    public function block_main($context, array $blocks = [])
    {
        // line 82
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">
        ";
        // line 85
        echo "      
      <section";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "col-sm-12"], "method")), "html", null, true);
        echo ">

        ";
        // line 89
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 90
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 93
            echo "        ";
        }
        // line 94
        echo "
        ";
        // line 96
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 97
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 100
            echo "        ";
        }
        // line 101
        echo "
        ";
        // line 103
        echo "        
          <a id=\"main-content\"></a>
          <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-xs-12\"> 
                    <div class=\"thumbnail-container counts-container\">
                        <a href=\"/variable-distributions\" class=\"thumbnail\"> 
                            <img alt=\"Counts\" id=\"counts\" src=\"";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/horizontal-chart.jpg\">  
                            <div class=\"caption\">
                                <div class=\"h4\">Variable Distributions</div>
                            </div>
                         </a>
                    </div>
                    <div class=\"thumbnail-sub\">
                       <a href=\"/variable-distributions\" class=\"h5\">View distributions of specific variables – overall and among all sites</a>
                    </div>
                </div> 
               <div class=\"col-md-6 col-xs-12\"> 
                    <div class=\"thumbnail-container tables-container\">
                        <a href=\"/data-submissions\" class=\"thumbnail\"> 
                            <img alt=\"Data Submissions\" id=\"tables\" src=\"";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/vaccination.jpg\">
                            <div class=\"caption\">
                                <div class=\"h4\">Data Submissions</div>
                            </div>
                        </a>
                    </div>
                    <div  class=\"thumbnail-sub\">
                      <a href=\"/variable-distributions\" class=\"h5\">View report on data file submissions</a>
                    </div>
                </div> 
            </div>
        
      </section>

      
    </div>
  </div>
";
    }

    // line 90
    public function block_highlighted($context, array $blocks = [])
    {
        // line 91
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 97
    public function block_help($context, array $blocks = [])
    {
        // line 98
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 143
    public function block_footer($context, array $blocks = [])
    {
        // line 144
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/VisionCovid/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 145,  208 => 144,  205 => 143,  198 => 98,  195 => 97,  188 => 91,  185 => 90,  162 => 123,  145 => 110,  136 => 103,  133 => 101,  130 => 100,  127 => 97,  124 => 96,  121 => 94,  118 => 93,  115 => 90,  112 => 89,  107 => 86,  104 => 85,  98 => 82,  95 => 81,  83 => 71,  79 => 69,  77 => 68,  70 => 65,  68 => 62,  67 => 61,  66 => 59,  64 => 58,  61 => 57,  55 => 143,  53 => 142,  50 => 141,  48 => 81,  45 => 79,  41 => 57,  39 => 56,  37 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : \"container-fluid\",
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      

     {% include '@VisionCovid/includes/header.html.twig' %}

      <div class=\"container-fluid header-image\">
        <img alt=\"\" class=\"img-responsive\" src=\"{{ base_path }}{{ active_theme_path() }}/images/corona-graphics.jpg\" >
        <div class=\"caption\">
          <h2 class=\"h3\">Welcome to the VISION/COVID Data Portal. Here you will find summary information about data submitted to date. This site is updated nightly and will reflect interim data submission metrics as sites submit their data for validation. </h2>
        </div>
      </div>
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">
        {# Content #}
      
      <section{{ content_attributes.addClass('col-sm-12') }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        
          <a id=\"main-content\"></a>
          <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-xs-12\"> 
                    <div class=\"thumbnail-container counts-container\">
                        <a href=\"/variable-distributions\" class=\"thumbnail\"> 
                            <img alt=\"Counts\" id=\"counts\" src=\"{{ base_path }}{{ active_theme_path() }}/images/horizontal-chart.jpg\">  
                            <div class=\"caption\">
                                <div class=\"h4\">Variable Distributions</div>
                            </div>
                         </a>
                    </div>
                    <div class=\"thumbnail-sub\">
                       <a href=\"/variable-distributions\" class=\"h5\">View distributions of specific variables – overall and among all sites</a>
                    </div>
                </div> 
               <div class=\"col-md-6 col-xs-12\"> 
                    <div class=\"thumbnail-container tables-container\">
                        <a href=\"/data-submissions\" class=\"thumbnail\"> 
                            <img alt=\"Data Submissions\" id=\"tables\" src=\"{{ base_path }}{{ active_theme_path() }}/images/vaccination.jpg\">
                            <div class=\"caption\">
                                <div class=\"h4\">Data Submissions</div>
                            </div>
                        </a>
                    </div>
                    <div  class=\"thumbnail-sub\">
                      <a href=\"/variable-distributions\" class=\"h5\">View report on data file submissions</a>
                    </div>
                </div> 
            </div>
        
      </section>

      
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/custom/VisionCovid/templates/system/page--front.html.twig", "C:\\xampp\\htdocs\\d8-chart-test-2\\web\\themes\\custom\\VisionCovid\\templates\\system\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 54, "if" => 56, "block" => 57, "include" => 68];
        static $filters = ["clean_class" => 62, "escape" => 65];
        static $functions = ["active_theme_path" => 71];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['clean_class', 'escape'],
                ['active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
