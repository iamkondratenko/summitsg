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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials/site/about.htm */
class __TwigTemplate_a88675e99e9a0168b1fd9136b7341d66ef24177358f01f5ce5f7b119f97f9a91 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["About"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["About"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["About"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["About"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["About"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["About"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
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
            echo "                <div class=\"post main-banner\">
                    <div class=\"slide post-picture\" style=\"background: url( ";
            // line 12
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 12));
            echo " ) ;\">
                        <h1 class=\"main-banner-item__title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</h1>

                    </div>
                </div>

                <section class=\"section post\">
                    <div class=\"post-content\">
                        <p class=\"text\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 20);
            echo "</p>
                    </div>
                </section>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 24
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
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
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials/site/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  86 => 24,  79 => 20,  69 => 13,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  52 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = About.records %}
{% set displayColumn = About.displayColumn %}
{% set noRecordsMessage = About.noRecordsMessage %}
{% set detailsPage = About.detailsPage %}
{% set detailsKeyColumn = About.detailsKeyColumn %}
{% set detailsUrlParameter = About.detailsUrlParameter %}

    {% for record in records %}
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                <div class=\"post main-banner\">
                    <div class=\"slide post-picture\" style=\"background: url( {{ record.picture|media }} ) ;\">
                        <h1 class=\"main-banner-item__title\">{{ record.title }}</h1>

                    </div>
                </div>

                <section class=\"section post\">
                    <div class=\"post-content\">
                        <p class=\"text\">{{ record.text|raw }}</p>
                    </div>
                </section>
            {% endspaceless %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials/site/about.htm", "");
    }
}
