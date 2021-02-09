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

/* themes/custom/VisionCovid/templates/views/views-view-table.html.twig */
class __TwigTemplate_125af52fd3d1ff250e260da47a0678ae97dbe348147a4ec705978f9de0f59a80 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 36
        if (($context["responsive"] ?? null)) {
            // line 37
            echo "  <div class=\"table-responsive\">
";
        }
        // line 40
        $context["classes"] = [0 => "table", 1 => ((        // line 42
($context["bordered"] ?? null)) ? ("table-bordered") : ("")), 2 => ((        // line 43
($context["condensed"] ?? null)) ? ("table-condensed") : ("")), 3 => ((        // line 44
($context["hover"] ?? null)) ? ("table-hover") : ("")), 4 => ((        // line 45
($context["striped"] ?? null)) ? ("table-striped") : ("")), 5 => ((        // line 46
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 49
        echo "<table";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 50
        if (($context["caption_needed"] ?? null)) {
            // line 51
            echo "    <caption>
      ";
            // line 52
            if (($context["caption"] ?? null)) {
                // line 53
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null)), "html", null, true);
                echo "
      ";
            } else {
                // line 55
                echo "        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "
      ";
            }
            // line 57
            echo "      ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 58
                echo "        <details>
          ";
                // line 59
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 60
                    echo "            <summary>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null)), "html", null, true);
                    echo "</summary>
          ";
                }
                // line 62
                echo "          ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 63
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
                    echo "
          ";
                }
                // line 65
                echo "        </details>
      ";
            }
            // line 67
            echo "    </caption>
  ";
        }
        // line 69
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 70
            echo "    <thead>
    <tr>
      ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 73
                echo "        ";
                if ($this->getAttribute($context["column"], "default_classes", [])) {
                    // line 74
                    echo "          ";
                    // line 75
                    $context["column_classes"] = [0 => "views-field", 1 => ("views-field-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 77
($context["fields"] ?? null), $context["key"], [], "array")))];
                    // line 80
                    echo "        ";
                }
                // line 81
                echo "      <th";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["column_classes"] ?? null)], "method"), "setAttribute", [0 => "scope", 1 => "col"], "method")), "html", null, true);
                echo ">";
                // line 82
                if ($this->getAttribute($context["column"], "wrapper_element", [])) {
                    // line 83
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                    echo ">";
                    // line 84
                    if ($this->getAttribute($context["column"], "url", [])) {
                        // line 85
                        echo "<a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "url", [])), "html", null, true);
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "title", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 87
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                    }
                    // line 89
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                    echo ">";
                } else {
                    // line 91
                    if ($this->getAttribute($context["column"], "url", [])) {
                        // line 92
                        echo "<a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "url", [])), "html", null, true);
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "title", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 94
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                    }
                }
                // line 97
                echo "</th>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    </tr>
    </thead>
  ";
        }
        // line 102
        echo "  <tbody>
  ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 104
            echo "    <tr";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "attributes", [])), "html", null, true);
            echo ">
        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", []));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 106
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", [])) {
                    // line 107
                    echo "            ";
                    $context["column_classes"] = [0 => "views-field"];
                    // line 108
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 109
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null)), [0 => ("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"]))]);
                        // line 110
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "          ";
                }
                // line 112
                echo "          ";
                if ((($context["key"] == "title") || ($context["key"] == "field_section"))) {
                    // line 113
                    echo "            <th";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["column_classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    // line 114
                    if ($this->getAttribute($context["column"], "wrapper_element", [])) {
                        // line 115
                        echo "<";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                        echo ">
                ";
                        // line 116
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                            // line 117
                            echo "                 ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true);
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true);
                            echo "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 119
                        echo "                </";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                        echo ">";
                    } else {
                        // line 121
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                            // line 122
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true);
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 125
                    echo "</th>
          ";
                } else {
                    // line 127
                    echo "            <td";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["column_classes"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    // line 128
                    if ($this->getAttribute($context["column"], "wrapper_element", [])) {
                        // line 129
                        echo "<";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                        echo ">
                ";
                        // line 130
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                            // line 131
                            echo "                  ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true);
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true);
                            echo "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "                </";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                        echo ">";
                    } else {
                        // line 135
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                            // line 136
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true);
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 139
                    echo "            </td>
          ";
                }
                // line 141
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "  </tbody>
</table>
";
        // line 146
        if (($context["responsive"] ?? null)) {
            // line 147
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/VisionCovid/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 147,  333 => 146,  329 => 144,  322 => 142,  316 => 141,  312 => 139,  304 => 136,  300 => 135,  295 => 133,  285 => 131,  281 => 130,  276 => 129,  274 => 128,  270 => 127,  266 => 125,  258 => 122,  254 => 121,  249 => 119,  239 => 117,  235 => 116,  230 => 115,  228 => 114,  224 => 113,  221 => 112,  218 => 111,  212 => 110,  209 => 109,  204 => 108,  201 => 107,  198 => 106,  194 => 105,  189 => 104,  185 => 103,  182 => 102,  177 => 99,  170 => 97,  165 => 94,  155 => 92,  153 => 91,  148 => 89,  144 => 87,  134 => 85,  132 => 84,  128 => 83,  126 => 82,  122 => 81,  119 => 80,  117 => 77,  116 => 75,  114 => 74,  111 => 73,  107 => 72,  103 => 70,  100 => 69,  96 => 67,  92 => 65,  86 => 63,  83 => 62,  77 => 60,  75 => 59,  72 => 58,  69 => 57,  63 => 55,  57 => 53,  55 => 52,  52 => 51,  50 => 50,  45 => 49,  43 => 46,  42 => 45,  41 => 44,  40 => 43,  39 => 42,  38 => 40,  34 => 37,  32 => 36,);
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
 * Default theme implementation for displaying a view as a table.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 *   - class: HTML classes that can be used to style contextually through CSS.
 * - title : The title of this group of rows.
 * - header: The table header columns.
 *   - attributes: Remaining HTML attributes for the element.
 *   - content: HTML classes to apply to each header cell, indexed by
 *   the header's key.
 * - caption_needed: Is the caption tag needed.
 * - caption: The caption for this table.
 * - accessibility_description: Extended description for the table details.
 * - accessibility_summary: Summary for the table details.
 * - responsive: Whether or not to use the .table-responsive wrapper.
 * - rows: Table row items. Rows are keyed by row number.
 *   - attributes: HTML classes to apply to each row.
 *   - columns: Row column items. Columns are keyed by column number.
 *     - attributes: HTML classes to apply to each column.
 *     - content: The column content.
 * - bordered: Flag indicating whether or not the table should be bordered.
 * - condensed: Flag indicating whether or not the table should be condensed.
 * - hover: Flag indicating whether or not table rows should be hoverable.
 * - striped: Flag indicating whether or not table rows should be striped.
 * - responsive: Flag indicating whether or not the table should be wrapped to
 *   be responsive (using the Bootstrap Framework .table-responsive wrapper).
 *
 * @ingroup templates
 *
 * @see template_preprocess_views_view_table()
 */
#}
{% if responsive %}
  <div class=\"table-responsive\">
{% endif %}
{%
  set classes = [
    'table',
    bordered ? 'table-bordered',
    condensed ? 'table-condensed',
    hover ? 'table-hover',
    striped ? 'table-striped',
    sticky ? 'sticky-enabled',
  ]
%}
<table{{ attributes.addClass(classes) }}>
  {% if caption_needed %}
    <caption>
      {% if caption %}
        {{ caption }}
      {% else %}
        {{ title }}
      {% endif %}
      {% if (summary is not empty) or (description is not empty) %}
        <details>
          {% if summary is not empty %}
            <summary>{{ summary }}</summary>
          {% endif %}
          {% if description is not empty %}
            {{ description }}
          {% endif %}
        </details>
      {% endif %}
    </caption>
  {% endif %}
  {% if header %}
    <thead>
    <tr>
      {% for key, column in header %}
        {% if column.default_classes %}
          {%
          set column_classes = [
          'views-field',
          'views-field-' ~ fields[key],
          ]
          %}
        {% endif %}
      <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>
        {%- if column.wrapper_element -%}
          <{{ column.wrapper_element }}>
          {%- if column.url -%}
            <a href=\"{{ column.url }}\" title=\"{{ column.title }}\">{{ column.content }}{{ column.sort_indicator }}</a>
          {%- else -%}
            {{ column.content }}{{ column.sort_indicator }}
          {%- endif -%}
          </{{ column.wrapper_element }}>
        {%- else -%}
          {%- if column.url -%}
            <a href=\"{{ column.url }}\" title=\"{{ column.title }}\">{{ column.content }}{{ column.sort_indicator }}</a>
          {%- else -%}
            {{- column.content }}{{ column.sort_indicator }}
          {%- endif -%}
        {%- endif -%}
        </th>
      {% endfor %}
    </tr>
    </thead>
  {% endif %}
  <tbody>
  {% for row in rows %}
    <tr{{ row.attributes }}>
        {% for key, column in row.columns %}
          {% if column.default_classes %}
            {% set column_classes = [ 'views-field' ] %}
            {% for field in column.fields %}
              {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}
            {% endfor %}
          {% endif %}
          {% if key == \"title\" or key == \"field_section\" %}
            <th{{ column.attributes.addClass(column_classes) }}>
              {%- if column.wrapper_element -%}
                <{{ column.wrapper_element }}>
                {% for content in column.content %}
                 {{ content.separator }}{{ content.field_output }}
                {% endfor %}
                </{{ column.wrapper_element }}>
              {%- else -%}
                {% for content in column.content %}
                  {{- content.separator }}{{ content.field_output -}} 
                {% endfor %}
              {%- endif -%}
            </th>
          {% else %}
            <td{{ column.attributes.addClass(column_classes) }}>
              {%- if column.wrapper_element -%}
                <{{ column.wrapper_element }}>
                {% for content in column.content %}
                  {{ content.separator }}{{ content.field_output }}
                {% endfor %}
                </{{ column.wrapper_element }}>
              {%- else -%}
                {% for content in column.content %}
                 {{- content.separator }}{{ content.field_output -}}
                {% endfor %}
              {%- endif %}
            </td>
          {% endif %}
        {% endfor %}
    </tr>
  {% endfor %}
  </tbody>
</table>
{% if responsive %}
  </div>
{% endif %}
", "themes/custom/VisionCovid/templates/views/views-view-table.html.twig", "C:\\xampp\\htdocs\\d8-chart-test-2\\web\\themes\\custom\\VisionCovid\\templates\\views\\views-view-table.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 36, "set" => 40, "for" => 72];
        static $filters = ["escape" => 49, "merge" => 109];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'merge'],
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
