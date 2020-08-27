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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//modals/modals.htm */
class __TwigTemplate_293d89f46e32ec2660c14951dbe844c5094a1f9fc544a6061c673af3d3299f46 extends \Twig\Template
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
        echo "<div class=\"modals\">
    <div class=\"feedback-modals\" >
        <h3 class=\"feedback-title\">Оставить зявку</h3>
        <form action=\"/\" class=\"feedback-modals_form\">
            <input type=\"text\" class=\"input-field name\" placeholder=\"Введите имя\">
            <input type=\"email\" class=\"input-field email\" placeholder=\"Введите email\">
            <input type=\"phone\" class=\"input-field phone\" placeholder=\"Ввидете телефон\">
            <button type=\"submit\" value=\"Оставить заявку\" class=\"btn-lrg primary-button --unselectable\">Оставить заявку</button>
        </form>
    </div>
    <div class=\"modals_background\"></div>
</div>

<style>

    h3.feedback-title {
        text-align: center;
        margin: 16px auto;
    }

    .modals {
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.70);
        position: fixed;
        top: 0;
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feedback-modals {
        width: 500px;
        height: auto;
        background: rgba(15, 19, 29);
        margin: 0 auto;
        align-items: center;
        justify-content: center;
        z-index: 999;
        padding: 36px;
    }

    .feedback-label {
        width: 70%;
        font-size: 14px;
    }

    .feedback-modals_form {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    input.input-field {
        height: 55px;
        width: 70%;
        border-radius: 6px;
        font-size: 16px;
        padding: 0 16px;
        margin: 12px;
        background: #1C2333;
        border: 1px solid #414C66;
        color: #fff;
    }

    .btn-lrg {
        font-size: 1.2em;
        min-width: 200px;
        border-radius: 6px;
        padding: 15px 32px;
        text-align: center;
        cursor: pointer;
    }

    .modals {
        display: none;
    }

    .modals.is-showing {
        display: flex;
    }

    .modals_background {
        width: 100%;
        height: 100%;
        display: block;
        position: absolute;
        z-index: 0;
    }

</style>

<script>
    let modalsRoot = document.querySelector('.modals');
    let closeButton = document.querySelector('.modals_background')
    let nodeBody = document.querySelector('body')
    function openFeedback(topic) {
        modalsRoot.classList.toggle('is-showing')
        nodeBody.style.overflow = 'hidden';
        closeButton.addEventListener('click', function (){
            openFeedback()
            nodeBody.style.overflow = 'auto';
        })
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//modals/modals.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modals\">
    <div class=\"feedback-modals\" >
        <h3 class=\"feedback-title\">Оставить зявку</h3>
        <form action=\"/\" class=\"feedback-modals_form\">
            <input type=\"text\" class=\"input-field name\" placeholder=\"Введите имя\">
            <input type=\"email\" class=\"input-field email\" placeholder=\"Введите email\">
            <input type=\"phone\" class=\"input-field phone\" placeholder=\"Ввидете телефон\">
            <button type=\"submit\" value=\"Оставить заявку\" class=\"btn-lrg primary-button --unselectable\">Оставить заявку</button>
        </form>
    </div>
    <div class=\"modals_background\"></div>
</div>

<style>

    h3.feedback-title {
        text-align: center;
        margin: 16px auto;
    }

    .modals {
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.70);
        position: fixed;
        top: 0;
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feedback-modals {
        width: 500px;
        height: auto;
        background: rgba(15, 19, 29);
        margin: 0 auto;
        align-items: center;
        justify-content: center;
        z-index: 999;
        padding: 36px;
    }

    .feedback-label {
        width: 70%;
        font-size: 14px;
    }

    .feedback-modals_form {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    input.input-field {
        height: 55px;
        width: 70%;
        border-radius: 6px;
        font-size: 16px;
        padding: 0 16px;
        margin: 12px;
        background: #1C2333;
        border: 1px solid #414C66;
        color: #fff;
    }

    .btn-lrg {
        font-size: 1.2em;
        min-width: 200px;
        border-radius: 6px;
        padding: 15px 32px;
        text-align: center;
        cursor: pointer;
    }

    .modals {
        display: none;
    }

    .modals.is-showing {
        display: flex;
    }

    .modals_background {
        width: 100%;
        height: 100%;
        display: block;
        position: absolute;
        z-index: 0;
    }

</style>

<script>
    let modalsRoot = document.querySelector('.modals');
    let closeButton = document.querySelector('.modals_background')
    let nodeBody = document.querySelector('body')
    function openFeedback(topic) {
        modalsRoot.classList.toggle('is-showing')
        nodeBody.style.overflow = 'hidden';
        closeButton.addEventListener('click', function (){
            openFeedback()
            nodeBody.style.overflow = 'auto';
        })
    }
</script>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//modals/modals.htm", "");
    }
}
