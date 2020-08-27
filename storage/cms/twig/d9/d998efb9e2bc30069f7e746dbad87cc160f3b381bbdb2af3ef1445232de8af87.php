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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//services/services-post.htm */
class __TwigTemplate_4947feebb695ab10015a10009ba39938896f9bd1bccdcb0a1b4d824fd39feb7e extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["servicesDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["servicesDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["servicesDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "   <div class=\"post main-banner\">
        <div class=\"slide post-picture\" style=\"background: url( ";
            // line 7
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "picture", [], "any", false, false, false, 7));
            echo " ) ;\">
            <h1 class=\"main-banner-item__title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</h1>
            <p class=\"main-banner-item__description\">
                ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 10), "html", null, true);
            echo "
            </p>
            <button class=\"btn-lrg secondary-button --unselectable\">Заказать услугу</button>
        </div>
    </div>

    <section class=\"section post\">
        <div class=\"post-content\">
            <p class=\"text\">";
            // line 18
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, false, 18);
            echo "</p>
        </div>
    </section>
";
        } else {
            // line 22
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
        // line 24
        echo "
";
        // line 25
        if (($context["record"] ?? null)) {
            // line 26
            echo "
    

";
        } else {
            // line 30
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//services/services-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  89 => 26,  87 => 25,  84 => 24,  78 => 22,  71 => 18,  60 => 10,  55 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = servicesDetails.record %}
{% set displayColumn = servicesDetails.displayColumn %}
{% set notFoundMessage = servicesDetails.notFoundMessage %}

{% if record %}
   <div class=\"post main-banner\">
        <div class=\"slide post-picture\" style=\"background: url( {{ record.picture|media }} ) ;\">
            <h1 class=\"main-banner-item__title\">{{ record.title }}</h1>
            <p class=\"main-banner-item__description\">
                {{ record.description }}
            </p>
            <button class=\"btn-lrg secondary-button --unselectable\">Заказать услугу</button>
        </div>
    </div>

    <section class=\"section post\">
        <div class=\"post-content\">
            <p class=\"text\">{{ record.text|raw }}</p>
        </div>
    </section>
{% else %}
    {{ notFoundMessage }}
{% endif %}

{% if record %}

    

{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//services/services-post.htm", "");
    }
}
