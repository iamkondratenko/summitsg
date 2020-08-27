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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/payment.htm */
class __TwigTemplate_5a420e59d341612596959ca9bcc98525c76e75ecc6200170190793db1e89fddf extends \Twig\Template
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
        echo "<div class=\"form-payment\" >
    <h3 class=\"feedback-title\">Опалата услуг</h3>
    <form action=\"/\" class=\"feedback-modals_form\">
        <input type=\"text\" class=\"input-field documentId\" placeholder=\"Введите номер договора\">
        <input type=\"email\" class=\"input-field fio\" placeholder=\"ФИО заказчика\">
        <input type=\"phone\" class=\"input-field phone\" placeholder=\"Ввидете телефон\">
        <input type=\"text\" class=\"input-field adress\" placeholder=\"Введите адрес\">
        <input type=\"text\" class=\"input-field paymentTerm\" placeholder=\"Период оплаты\">
        <input type=\"phone\" class=\"input-field sum\" placeholder=\"Сумма оплаты\">
        <button type=\"submit\" value=\"Оставить заявку\" class=\"btn-lrg primary-button --unselectable\">Оставить заявку</button>
    </form>
</div>

<style>
    .form-payment {
        padding: 60px 20%;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/payment.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-payment\" >
    <h3 class=\"feedback-title\">Опалата услуг</h3>
    <form action=\"/\" class=\"feedback-modals_form\">
        <input type=\"text\" class=\"input-field documentId\" placeholder=\"Введите номер договора\">
        <input type=\"email\" class=\"input-field fio\" placeholder=\"ФИО заказчика\">
        <input type=\"phone\" class=\"input-field phone\" placeholder=\"Ввидете телефон\">
        <input type=\"text\" class=\"input-field adress\" placeholder=\"Введите адрес\">
        <input type=\"text\" class=\"input-field paymentTerm\" placeholder=\"Период оплаты\">
        <input type=\"phone\" class=\"input-field sum\" placeholder=\"Сумма оплаты\">
        <button type=\"submit\" value=\"Оставить заявку\" class=\"btn-lrg primary-button --unselectable\">Оставить заявку</button>
    </form>
</div>

<style>
    .form-payment {
        padding: 60px 20%;
    }
</style>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/payment.htm", "");
    }
}
