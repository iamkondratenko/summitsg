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
        echo "<section class=\"section\">
\t<div class=\"block-title\">
\t\t<h2 class=\"section-title\">Новости</h2>
\t\t<div class=\"block-line\"></div>
\t</div>
\t

\t<div class=\"bullets-items\">
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url(";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shutterstock_1299308713-2.png");
        echo ")\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url(";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shutterstock_1299308713-2.png");
        echo ")\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url(";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shutterstock_1299308713-2.png");
        echo ")\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url(";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shutterstock_1299308713-2.png");
        echo ")\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url(";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shutterstock_1299308713-2.png");
        echo ")\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url(";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shutterstock_1299308713-2.png");
        echo ")\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t

\t
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
        return array (  92 => 39,  83 => 33,  74 => 27,  65 => 21,  56 => 15,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\">
\t<div class=\"block-title\">
\t\t<h2 class=\"section-title\">Новости</h2>
\t\t<div class=\"block-line\"></div>
\t</div>
\t

\t<div class=\"bullets-items\">
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url({{ 'assets/images/shutterstock_1299308713-2.png'|theme }})\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url({{ 'assets/images/shutterstock_1299308713-2.png'|theme }})\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url({{ 'assets/images/shutterstock_1299308713-2.png'|theme }})\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url({{ 'assets/images/shutterstock_1299308713-2.png'|theme }})\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url({{ 'assets/images/shutterstock_1299308713-2.png'|theme }})\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t<a href=\"#\" class=\"blog-item\" style=\"background-image: url({{ 'assets/images/shutterstock_1299308713-2.png'|theme }})\">
\t\t\t<div class=\"services-item_holder\">
\t\t\t\t<h3 class=\"blog-item_title\">Мобильное приложение</h3>
\t\t\t\t<p class=\"blog-item_text\">В число наиболее востребованных услуг охранной фирмы входит охрана квартир</p>
\t\t\t</div>
\t\t</a>
\t\t

\t
\t</div>
</section>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//blog/blog.htm", "");
    }
}
