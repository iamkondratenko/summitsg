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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/pages/home.htm */
class __TwigTemplate_3e144a8a4520fb3412bc5b2d412511f86f02eef57da7502b6ba9ea8258b9931a extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/site/banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/site/bullets"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['serives_title'] = "Услуги"        ;
        $context['__cms_partial_params']['post_per_page'] = 9        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/services/services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title_other_news'] = "Новости"        ;
        $context['__cms_partial_params']['recordsPerPage'] = 6        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/blog/blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("/site/contacts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  51 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"/site/banner\" %}
{% partial \"/site/bullets\" %}
{% partial \"/services/services\" serives_title='Услуги' post_per_page=9  %}
{% partial \"/blog/blog\" title_other_news='Новости' recordsPerPage=6 %}
{% partial \"/site/contacts\" %}", "/Users/alexkondratenko/git/summitsg/themes/ssg/pages/home.htm", "");
    }
}
