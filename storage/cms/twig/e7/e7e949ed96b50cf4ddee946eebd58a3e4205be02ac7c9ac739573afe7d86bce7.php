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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/contacts.htm */
class __TwigTemplate_60d689bbf8ff48e419e14615c9c70d96f72e078b5c0990afc75f0e0526297238 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["contactInfo"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 9
            echo "            ";
            // line 10
            echo "            ";
            ob_start();
            // line 11
            echo "\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"block-title\">
\t\t\t\t\t\t<h2 class=\"section-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t<div class=\"block-line\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"adv-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>

\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-items\">

\t\t\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "bullets", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["contact_item"]) {
                // line 23
                echo "\t\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t\t<div class=\"contact-icon\"><img src=\"";
                // line 24
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["contact_item"], "icon", [], "any", false, false, false, 24));
                echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"contact-text\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact_item"], "contact_info", [], "any", false, false, false, 25), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-map\">
\t\t\t\t\t\t\t";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["record"], "map", [], "any", false, false, false, 30);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 35
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 36,  113 => 35,  105 => 30,  101 => 28,  92 => 25,  88 => 24,  85 => 23,  81 => 22,  73 => 17,  66 => 13,  62 => 11,  59 => 10,  57 => 9,  52 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = contactInfo.records %}
{% set displayColumn = contactInfo.displayColumn %}
{% set noRecordsMessage = contactInfo.noRecordsMessage %}
{% set detailsPage = contactInfo.detailsPage %}
{% set detailsKeyColumn = contactInfo.detailsKeyColumn %}
{% set detailsUrlParameter = contactInfo.detailsUrlParameter %}

    {% for record in records %}
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"block-title\">
\t\t\t\t\t\t<h2 class=\"section-title\">{{ record.title }}</h2>
\t\t\t\t\t\t<div class=\"block-line\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"adv-text\">{{ record.text }}</p>

\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t\t<div class=\"contact-items\">

\t\t\t\t\t\t\t{% for contact_item in record.bullets %}
\t\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t\t<div class=\"contact-icon\"><img src=\"{{ contact_item.icon|media }}\" alt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"contact-text\">{{ contact_item.contact_info }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-map\">
\t\t\t\t\t\t\t{{ record.map|raw }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
            {% endspaceless %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/contacts.htm", "");
    }
}
