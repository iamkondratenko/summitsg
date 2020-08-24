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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//post.htm */
class __TwigTemplate_f914dac67c1313211f6d4ac75fc774d62a8ea516cf5dbcaeaa0e80ae7dd7d4fe extends \Twig\Template
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
        echo "<div class=\"post main-banner\">
    <div class=\"slide post-picture\" style=\"background: url( ";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-banner/item-1.png");
        echo " ) ;\">

        <h1 class=\"main-banner-item__title\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
        <p class=\"main-banner-item__description\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, false, 6), "html", null, true);
        echo "
        </p>
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "button_url", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"btn-lrg secondary-button --unselectable\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "button_text", [], "any", false, false, false, 8), "html", null, true);
        echo "</a>
    </div>
</div>

<section class=\"section post\">
    <div class=\"post-content\">
        <p class=\"text\">Основные принципы, которым следует наша компания — это ориентация на бескомпромиссное качество предоставляемых охранных услуг, максимальный охват возможных услуг, связанных с охранной и безопасностью, а так же индивидуальный подход к каждому клиенту. За время работы компания «КРОК» накопила опыт охраны объектов от небольшой частной недвижимости до промышленных гигантов, обеспечения личной охраны, установки систем охраны и безопасности всех известных мировых брендов.</p>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"post main-banner\">
    <div class=\"slide post-picture\" style=\"background: url( {{ 'assets/images/main-banner/item-1.png'|theme }} ) ;\">

        <h1 class=\"main-banner-item__title\">{{ record.title }}</h1>
        <p class=\"main-banner-item__description\">
            {{ record.description }}
        </p>
        <a href=\"{{ record.button_url }}\" class=\"btn-lrg secondary-button --unselectable\">{{ record.button_text }}</a>
    </div>
</div>

<section class=\"section post\">
    <div class=\"post-content\">
        <p class=\"text\">Основные принципы, которым следует наша компания — это ориентация на бескомпромиссное качество предоставляемых охранных услуг, максимальный охват возможных услуг, связанных с охранной и безопасностью, а так же индивидуальный подход к каждому клиенту. За время работы компания «КРОК» накопила опыт охраны объектов от небольшой частной недвижимости до промышленных гигантов, обеспечения личной охраны, установки систем охраны и безопасности всех известных мировых брендов.</p>
    </div>
</section>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//post.htm", "");
    }
}
