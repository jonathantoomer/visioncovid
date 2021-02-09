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

/* modules/custom/dbhospitalizations/templates/dbhospitalizations.html.twig */
class __TwigTemplate_052af062bb128e999db24415120e7dee60c5fbb9a2052d25fef1d21dbc981974 extends \Twig\Template
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
#dbhospitalizations {
    display: inline-block;
    position: relative;
    width: 100%;
    height: 180px;
    margin-bottom: 10%;
    vertical-align: top;
}

#dbhospitalizations h3 {
     margin-top: 10px;
 }

 #dbhospitalizations .updated {
     margin-bottom: 30px;
 }

  #dbhospitalizations svg{
    display: inline-block;
    position: absolute;
    top: 150px;
    left: 0;
}

#dbhospitalizations text.label {
    font: 13px sans-serif;
    font-weight: bold;
    fill: steelblue;
}
#dbhospitalizations text.value {
    font-size: 120%;
    fill: black;
}

#dbhospitalizations .axisHorizontal path{
    fill: none;
}

#dbhospitalizations .axisHorizontal .tick text {
    font-size: 120%;
}

#dbhospitalizations .axisHorizontal .tick line {
    stroke-width: 1;
    stroke: rgba(0, 0, 0, 0.2);
}

#dbhospitalizations .bar {
    fill: steelblue;
    fill-opacity: .9;
}


</style>
<div";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 58
        if (($context["label"] ?? null)) {
            // line 59
            echo "      <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
    ";
        }
        // line 61
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "</div>";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        // line 63
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
       
        <div id=\"dbhospitalizations\">
            <h2>Hospitalizations with a Respiratory Diagnosis and/or Respiratory Virus Test</h2>
            <h3><span class=\"timeframe\"></span> <span class=\"total\"></span></h3>
            <div class=\"updated\"></div>
            <svg></svg>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/custom/dbhospitalizations/templates/dbhospitalizations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 63,  119 => 62,  115 => 72,  113 => 62,  108 => 61,  100 => 59,  98 => 58,  94 => 57,  90 => 56,  33 => 1,);
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
#dbhospitalizations {
    display: inline-block;
    position: relative;
    width: 100%;
    height: 180px;
    margin-bottom: 10%;
    vertical-align: top;
}

#dbhospitalizations h3 {
     margin-top: 10px;
 }

 #dbhospitalizations .updated {
     margin-bottom: 30px;
 }

  #dbhospitalizations svg{
    display: inline-block;
    position: absolute;
    top: 150px;
    left: 0;
}

#dbhospitalizations text.label {
    font: 13px sans-serif;
    font-weight: bold;
    fill: steelblue;
}
#dbhospitalizations text.value {
    font-size: 120%;
    fill: black;
}

#dbhospitalizations .axisHorizontal path{
    fill: none;
}

#dbhospitalizations .axisHorizontal .tick text {
    font-size: 120%;
}

#dbhospitalizations .axisHorizontal .tick line {
    stroke-width: 1;
    stroke: rgba(0, 0, 0, 0.2);
}

#dbhospitalizations .bar {
    fill: steelblue;
    fill-opacity: .9;
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
       
        <div id=\"dbhospitalizations\">
            <h2>Hospitalizations with a Respiratory Diagnosis and/or Respiratory Virus Test</h2>
            <h3><span class=\"timeframe\"></span> <span class=\"total\"></span></h3>
            <div class=\"updated\"></div>
            <svg></svg>
        </div>
    {% endblock %}
</div>", "modules/custom/dbhospitalizations/templates/dbhospitalizations.html.twig", "C:\\xampp\\htdocs\\d8-chart-test-2\\web\\modules\\custom\\dbhospitalizations\\templates\\dbhospitalizations.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 58, "block" => 62];
        static $filters = ["escape" => 56];
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
