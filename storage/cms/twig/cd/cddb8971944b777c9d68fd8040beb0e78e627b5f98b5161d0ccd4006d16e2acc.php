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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//services/services.htm */
class __TwigTemplate_eecf94db71cb6198c7af64c710fd5ea03f4ace11a0d4bbee3e1b72732499b847 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["servicesList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["servicesList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["servicesList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["servicesList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["servicesList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["servicesList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<section class=\"section\">
\t<div class=\"block-title\">
\t\t<h2 class=\"section-title\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["serives_title"] ?? null), "html", null, true);
        echo "</h2>
\t\t<div class=\"block-line\"></div>
\t</div>

\t<p class=\"adv-text\">Основные принципы, которым следует наша компания — это ориентация на бескомпромиссное качество предоставляемых охранных услуг, максимальный охват возможных услуг, связанных с охранной и безопасностью, а так же индивидуальный подход к каждому клиенту. За время работы компания «КРОК» накопила опыт охраны объектов от небольшой частной недвижимости до промышленных гигантов, обеспечения личной охраны, установки систем охраны и безопасности всех известных мировых брендов.</p>

\t<div class=\"bullets-items\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 18
            echo "\t\t";
            if ((($context["detailsUrlParameter"] ?? null) != twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 18))) {
                // line 19
                echo "            ";
                // line 20
                echo "            ";
                ob_start();
                // line 21
                echo "\t\t\t\t<a href=\"/services/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, false, 21), "html", null, true);
                echo "\" class=\"services-item\" style=\"background-image: url(";
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "picture", [], "any", false, false, false, 21));
                echo ")\">
\t\t\t\t\t<div class=\"services-item_holder\">
\t\t\t\t\t\t<h3 class=\"service-item_title\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t<p class=\"service-item_text\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 28
                echo "\t\t";
            }
            // line 29
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "


\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//services/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  104 => 30,  99 => 29,  96 => 28,  89 => 24,  85 => 23,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  64 => 17,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = servicesList.records %}
{% set displayColumn = servicesList.displayColumn %}
{% set noRecordsMessage = servicesList.noRecordsMessage %}
{% set detailsPage = servicesList.detailsPage %}
{% set detailsKeyColumn = servicesList.detailsKeyColumn %}
{% set detailsUrlParameter = servicesList.detailsUrlParameter %}

<section class=\"section\">
\t<div class=\"block-title\">
\t\t<h2 class=\"section-title\">{{ serives_title }}</h2>
\t\t<div class=\"block-line\"></div>
\t</div>

\t<p class=\"adv-text\">Основные принципы, которым следует наша компания — это ориентация на бескомпромиссное качество предоставляемых охранных услуг, максимальный охват возможных услуг, связанных с охранной и безопасностью, а так же индивидуальный подход к каждому клиенту. За время работы компания «КРОК» накопила опыт охраны объектов от небольшой частной недвижимости до промышленных гигантов, обеспечения личной охраны, установки систем охраны и безопасности всех известных мировых брендов.</p>

\t<div class=\"bullets-items\">
    {% for record in records %}
\t\t{% if detailsUrlParameter != record.slug %}
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
\t\t\t\t<a href=\"/services/{{ record.slug }}\" class=\"services-item\" style=\"background-image: url({{ record.picture|media }})\">
\t\t\t\t\t<div class=\"services-item_holder\">
\t\t\t\t\t\t<h3 class=\"service-item_title\">{{ record.title }}</h3>
\t\t\t\t\t\t<p class=\"service-item_text\">{{ record.description }}</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
            {% endspaceless %}
\t\t{% endif %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}



\t</div>
</section>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//services/services.htm", "");
    }
}
