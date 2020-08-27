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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/bullets.htm */
class __TwigTemplate_a67382b78ecd5a2ed4cd8aed88da8ec765afbb099d5dc481365c803e0d5950b1 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["bulletList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["bulletList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["bulletList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["bulletList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["bulletList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["bulletList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
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

\t\t\t\t\t<div class=\"bullets-items\">
\t\t\t\t\t\t<div class=\"bullets-item\">
\t\t\t\t\t\t\t<div class=\"bullet-item_icon\">
\t\t\t\t\t\t\t\t<img alt=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_title_1", [], "any", false, false, false, 22), "html", null, true);
            echo "\" src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "adv_icon_1", [], "any", false, false, false, 22));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"bullet-item_title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_title_1", [], "any", false, false, false, 24), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<p class=\"bullet-item_text\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_text_1", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bullets-item\">
\t\t\t\t\t\t\t<div class=\"bullet-item_icon\">
\t\t\t\t\t\t\t\t<img alt=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_title_2", [], "any", false, false, false, 29), "html", null, true);
            echo "\" src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "adv_icon_2", [], "any", false, false, false, 29));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"bullet-item_title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_title_2", [], "any", false, false, false, 31), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<p class=\"bullet-item_text\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_text_2", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bullets-item\">
\t\t\t\t\t\t\t<div class=\"bullet-item_icon\">
\t\t\t\t\t\t\t\t<img alt=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_title_3", [], "any", false, false, false, 36), "html", null, true);
            echo "\" src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "adv_icon_3", [], "any", false, false, false, 36));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"bullet-item_title\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_title_3", [], "any", false, false, false, 38), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<p class=\"bullet-item_text\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "adv_text_3", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 44
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
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
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/bullets.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  136 => 44,  128 => 39,  124 => 38,  117 => 36,  110 => 32,  106 => 31,  99 => 29,  92 => 25,  88 => 24,  81 => 22,  73 => 17,  66 => 13,  62 => 11,  59 => 10,  57 => 9,  52 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = bulletList.records %}
{% set displayColumn = bulletList.displayColumn %}
{% set noRecordsMessage = bulletList.noRecordsMessage %}
{% set detailsPage = bulletList.detailsPage %}
{% set detailsKeyColumn = bulletList.detailsKeyColumn %}
{% set detailsUrlParameter = bulletList.detailsUrlParameter %}

    {% for record in records %}
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
\t\t\t\t<section class=\"section\">
\t\t\t\t\t<div class=\"block-title\">
\t\t\t\t\t\t<h2 class=\"section-title\">{{ record.title }}</h2>
\t\t\t\t\t\t<div class=\"block-line\"></div>
\t\t\t\t\t</div>

\t\t\t\t\t<p class=\"adv-text\">{{ record.text }}</p>

\t\t\t\t\t<div class=\"bullets-items\">
\t\t\t\t\t\t<div class=\"bullets-item\">
\t\t\t\t\t\t\t<div class=\"bullet-item_icon\">
\t\t\t\t\t\t\t\t<img alt=\"{{ record.adv_title_1 }}\" src=\"{{ record.adv_icon_1|media }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"bullet-item_title\">{{ record.adv_title_1 }}</h3>
\t\t\t\t\t\t\t<p class=\"bullet-item_text\">{{ record.adv_text_1 }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bullets-item\">
\t\t\t\t\t\t\t<div class=\"bullet-item_icon\">
\t\t\t\t\t\t\t\t<img alt=\"{{ record.adv_title_2 }}\" src=\"{{ record.adv_icon_2|media }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"bullet-item_title\">{{ record.adv_title_2 }}</h3>
\t\t\t\t\t\t\t<p class=\"bullet-item_text\">{{ record.adv_text_2 }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bullets-item\">
\t\t\t\t\t\t\t<div class=\"bullet-item_icon\">
\t\t\t\t\t\t\t\t<img alt=\"{{ record.adv_title_3 }}\" src=\"{{ record.adv_icon_3|media }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 class=\"bullet-item_title\">{{ record.adv_title_3 }}</h3>
\t\t\t\t\t\t\t<p class=\"bullet-item_text\">{{ record.adv_text_3 }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
            {% endspaceless %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/bullets.htm", "");
    }
}
