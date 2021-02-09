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

/* modules/custom/dbencounters/templates/dbencounters.html.twig */
class __TwigTemplate_79db1fb59f09b6fe14c99e19dd752ec506a8b7657349eda0f2eac8e7410a3742 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style>
    #dbencounters {
        display: inline-block;
        position: relative;
        width: 100%;
        height: 200px;
        margin-bottom: 20%;
        vertical-align: top;
    }

    #dbencounters h3 {
        margin-top: 10px;
    }

    #dbencounters .updated {
        margin-bottom: 30px;
    }

    #dbencounters svg{
        display: inline-block;
        position: absolute;
        top: 150px;
        left: 0;
    }

    #dbencounters text.label {
        font: 13px sans-serif;
        font-weight: bold;
        fill: steelblue;
    }
    #dbencounters text.value {
        font-size: 120%;
        fill: black;
    }

    #dbencounters .axisHorizontal path{
        fill: none;
    }

    #dbencounters .axisHorizontal .tick line {
        stroke-width: 1;
        stroke: rgba(0, 0, 0, 0.2);
    }

    #dbencounters .axisHorizontal .tick text {
        font-size: 120%;
    }

    #dbencounters .bar {
        fill: steelblue;
        fill-opacity: .9;
    }
    #dbencounters text.nTotal {
        font-size: 13px;
        fill: black;
    }   
</style>


<div";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 62
        if (($context["label"] ?? null)) {
            // line 63
            echo "      <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
    ";
        }
        // line 65
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "</div>";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        // line 67
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
       
        <div id=\"dbencounters\">
            <h2>Encounters with Respiratory Diagnosis and/or Respiratory Virus Test</h2>
            <h3><span class=\"timeframe\"></span> <span class=\"total\"></span></h3>
            <div class=\"updated\"></div>
            <svg></svg>
         </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/custom/dbencounters/templates/dbencounters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 67,  123 => 66,  119 => 76,  117 => 66,  112 => 65,  104 => 63,  102 => 62,  98 => 61,  94 => 60,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>
    #dbencounters {
        display: inline-block;
        position: relative;
        width: 100%;
        height: 200px;
        margin-bottom: 20%;
        vertical-align: top;
    }

    #dbencounters h3 {
        margin-top: 10px;
    }

    #dbencounters .updated {
        margin-bottom: 30px;
    }

    #dbencounters svg{
        display: inline-block;
        position: absolute;
        top: 150px;
        left: 0;
    }

    #dbencounters text.label {
        font: 13px sans-serif;
        font-weight: bold;
        fill: steelblue;
    }
    #dbencounters text.value {
        font-size: 120%;
        fill: black;
    }

    #dbencounters .axisHorizontal path{
        fill: none;
    }

    #dbencounters .axisHorizontal .tick line {
        stroke-width: 1;
        stroke: rgba(0, 0, 0, 0.2);
    }

    #dbencounters .axisHorizontal .tick text {
        font-size: 120%;
    }

    #dbencounters .bar {
        fill: steelblue;
        fill-opacity: .9;
    }
    #dbencounters text.nTotal {
        font-size: 13px;
        fill: black;
    }   
</style>


<div{{ attributes }}>
    {{ title_prefix }}
    {% if label %}
      <h2{{ title_attributes }}>{{label}}</h2>
    {% endif %}
    {{ title_suffix }}
    {% block content %}
        {{content}}
       
        <div id=\"dbencounters\">
            <h2>Encounters with Respiratory Diagnosis and/or Respiratory Virus Test</h2>
            <h3><span class=\"timeframe\"></span> <span class=\"total\"></span></h3>
            <div class=\"updated\"></div>
            <svg></svg>
         </div>
    {% endblock %}
</div>", "modules/custom/dbencounters/templates/dbencounters.html.twig", "C:\\xampp\\htdocs\\d8-chart-test-2\\web\\modules\\custom\\dbencounters\\templates\\dbencounters.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 62, "block" => 66];
        static $filters = ["escape" => 60];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
                []
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
