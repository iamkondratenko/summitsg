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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/pages/blog-post-page.htm */
class __TwigTemplate_cdc5223199f77e1738eb85ab1f80e682c9dc0de3853af25fc035ade05ed1b403 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/blog/post"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title_other_news'] = "Другие новости"        ;
        $context['__cms_partial_params']['recordsPerPage'] = 4        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/blog/blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/pages/blog-post-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"/blog/post\" %}
{% partial \"/blog/blog\" title_other_news='Другие новости' recordsPerPage=4 %}", "/Users/alexkondratenko/git/summitsg/themes/ssg/pages/blog-post-page.htm", "");
    }
}
