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

/* modules/custom/dbtests/templates/dbtests.html.twig */
class __TwigTemplate_b8aea2db86d8d9ac18962368b3a529bcab16bc626197aabca940c70c22e1d53a extends \Twig\Template
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
#dbtests {
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    display: inline-block;
    position: relative;
    width: 100%;
    height: 600px;
    margin-bottom: 20%;
    vertical-align: top;
}

#dbtests h3 {
    margin-top: 10px;
}

#dbtests .updated {
    margin-bottom: 30px;
}

#dbtests svg{
    display: inline-block;
    position: absolute;
    top: 150px;
    left: 0;
}

#dbtests text.label {
    font: 13px sans-serif;
    font-weight: bold;
    fill: steelblue;
}
#dbtests text.value {
    font-size: 120%;
    fill: black;
}

#dbtests .axisHorizontal path{
    fill: none;
}

#dbtests .axisHorizontal .tick line {
    stroke-width: 1;
    stroke: rgba(0, 0, 0, 0.2);
}

#dbtests .axisHorizontal .tick text {
    font-size: 120%;
}

#dbtests .bar {
    fill: steelblue;
    fill-opacity: .9;
}

#dbtests text.nTotal {
    font-size: 13px;
    fill: black;
} 

</style>
<div";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 63
        if (($context["label"] ?? null)) {
            // line 64
            echo "      <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
    ";
        }
        // line 66
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "</div>";
    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        // line 68
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
       
        <div id=\"dbtests\">
            <h2>Type of Respiratory Tests</h2>
            <h3><span class=\"timeframe\"></span> <span class=\"total\"></span></h3>
            <div class=\"updated\"></div>
            <svg></svg>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/custom/dbtests/templates/dbtests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 68,  124 => 67,  120 => 77,  118 => 67,  113 => 66,  105 => 64,  103 => 63,  99 => 62,  95 => 61,  33 => 1,);
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
#dbtests {
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    display: inline-block;
    position: relative;
    width: 100%;
    height: 600px;
    margin-bottom: 20%;
    vertical-align: top;
}

#dbtests h3 {
    margin-top: 10px;
}

#dbtests .updated {
    margin-bottom: 30px;
}

#dbtests svg{
    display: inline-block;
    position: absolute;
    top: 150px;
    left: 0;
}

#dbtests text.label {
    font: 13px sans-serif;
    font-weight: bold;
    fill: steelblue;
}
#dbtests text.value {
    font-size: 120%;
    fill: black;
}

#dbtests .axisHorizontal path{
    fill: none;
}

#dbtests .axisHorizontal .tick line {
    stroke-width: 1;
    stroke: rgba(0, 0, 0, 0.2);
}

#dbtests .axisHorizontal .tick text {
    font-size: 120%;
}

#dbtests .bar {
    fill: steelblue;
    fill-opacity: .9;
}

#dbtests text.nTotal {
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
       
        <div id=\"dbtests\">
            <h2>Type of Respiratory Tests</h2>
            <h3><span class=\"timeframe\"></span> <span class=\"total\"></span></h3>
            <div class=\"updated\"></div>
            <svg></svg>
        </div>
    {% endblock %}
</div>", "modules/custom/dbtests/templates/dbtests.html.twig", "C:\\xampp\\htdocs\\d8-chart-test-2\\web\\modules\\custom\\dbtests\\templates\\dbtests.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 63, "block" => 67];
        static $filters = ["escape" => 61];
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
