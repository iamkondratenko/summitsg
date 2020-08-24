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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/banner.htm */
class __TwigTemplate_62ff807773b8b4f4521104cf35f7a943ca4733504b84353f0b5dfefd97832b23 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<div class=\"main-banner\">
    <div class=\"slides\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 11
            echo "            ";
            ob_start();
            echo " 
                <div class=\"slide\" style=\"background: url( ";
            // line 12
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 12));
            echo " ) ;\">

                    <h1 class=\"main-banner-item__title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</h1>
                        <p class=\"main-banner-item__description\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 16), "html", null, true);
            echo "
                        </p>
                            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "button_url", [], "any", false, false, false, 18), "html", null, true);
            echo "\" class=\"btn-lrg secondary-button --unselectable\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "button_text", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
                </div>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 21
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</div>

<div class=\"nav\">
            <div class=\"btn-group\">
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 29
            echo "            ";
            ob_start();
            echo " 
                ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                // line 31
                echo "                    <div class=\"btn active\"></div>
                ";
            } else {
                // line 33
                echo "                    <div class=\"btn\"></div>
                ";
            }
            // line 35
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 36
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 37
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div></div>

</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 39,  156 => 37,  143 => 36,  140 => 35,  136 => 33,  132 => 31,  130 => 30,  125 => 29,  107 => 28,  101 => 24,  92 => 22,  87 => 21,  79 => 18,  74 => 16,  69 => 14,  64 => 12,  59 => 11,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = mainBanner.records %}
{% set displayColumn = mainBanner.displayColumn %}
{% set noRecordsMessage = mainBanner.noRecordsMessage %}
{% set detailsPage = mainBanner.detailsPage %}
{% set detailsKeyColumn = mainBanner.detailsKeyColumn %}
{% set detailsUrlParameter = mainBanner.detailsUrlParameter %}

<div class=\"main-banner\">
    <div class=\"slides\">
    {% for record in records %}
            {% spaceless %} 
                <div class=\"slide\" style=\"background: url( {{ record.picture|media }} ) ;\">

                    <h1 class=\"main-banner-item__title\">{{ record.title }}</h1>
                        <p class=\"main-banner-item__description\">
                            {{ record.description }}
                        </p>
                            <a href=\"{{ record.button_url }}\" class=\"btn-lrg secondary-button --unselectable\">{{ record.button_text }}</a>
                </div>
            {% endspaceless %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</div>

<div class=\"nav\">
            <div class=\"btn-group\">
{% for record in records %}
            {% spaceless %} 
                {% if loop.first %}
                    <div class=\"btn active\"></div>
                {% else %}
                    <div class=\"btn\"></div>
                {% endif %}
            {% endspaceless %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</div></div>

</div>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/banner.htm", "");
    }
}
