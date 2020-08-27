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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//blog/blog.htm */
class __TwigTemplate_5a08d6e331dab440e897b6c600328aaa541d3f81a598b37470862bbf4f89311a extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["postList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["postList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["postList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["postList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["postList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["postList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<section class=\"section\">
\t<div class=\"block-title\">
\t\t<h2 class=\"section-title\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["title_other_news"] ?? null), "html", null, true);
        echo "</h2>
\t\t<div class=\"block-line\"></div>
\t</div>


\t<div class=\"bullets-items\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 17
            echo "            ";
            // line 18
            echo "            ";
            ob_start();
            // line 19
            echo "\t\t\t\t<a href=\"/blog/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"blog-item\" style=\"background-image: url(";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 19));
            echo ")\">
\t\t\t\t\t<div class=\"services-item_holder\">
\t\t\t\t\t\t<h3 class=\"blog-item_title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t<p class=\"blog-item_text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 26
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  97 => 27,  92 => 26,  85 => 22,  81 => 21,  73 => 19,  70 => 18,  68 => 17,  63 => 16,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = postList.records %}
{% set displayColumn = postList.displayColumn %}
{% set noRecordsMessage = postList.noRecordsMessage %}
{% set detailsPage = postList.detailsPage %}
{% set detailsKeyColumn = postList.detailsKeyColumn %}
{% set detailsUrlParameter = postList.detailsUrlParameter %}

<section class=\"section\">
\t<div class=\"block-title\">
\t\t<h2 class=\"section-title\">{{ title_other_news }}</h2>
\t\t<div class=\"block-line\"></div>
\t</div>


\t<div class=\"bullets-items\">
    {% for record in records %}
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
\t\t\t\t<a href=\"/blog/{{ record.slug }}\" class=\"blog-item\" style=\"background-image: url({{ record.picture|media }})\">
\t\t\t\t\t<div class=\"services-item_holder\">
\t\t\t\t\t\t<h3 class=\"blog-item_title\">{{ record.title }}</h3>
\t\t\t\t\t\t<p class=\"blog-item_text\">{{ record.description }}</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
            {% endspaceless %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}

\t</div>
</section>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//blog/blog.htm", "");
    }
}
