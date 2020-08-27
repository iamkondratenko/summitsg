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
    <form class=\"feedback-modals_form\">
        <label class=\"payment_label\" for=\"paymentDocumentId\">Введите номер договора</label>
        <input type=\"text\" class=\"input-field documentId\" id=\"paymentDocumentId\">
        <label class=\"payment_label\" for=\"paymentFio\">ФИО заказчика</label>
        <input type=\"text\" class=\"input-field fio\" id=\"paymentFio\">
        <label class=\"payment_label\" for=\"paymentPhone\">Ввидете телефон</label>
        <input type=\"text\" class=\"input-field phone\" id=\"paymentPhone\">
        <label class=\"payment_label\" for=\"paymentAddress\">Введите адрес</label>
        <input type=\"text\" class=\"input-field address\" id=\"paymentAddress\">
        <label class=\"payment_label\" for=\"paymentTerm\">Период оплаты</label>
        <input type=\"text\" class=\"input-field paymentTerm\" id=\"paymentTerm\">
        <label class=\"payment_label\" for=\"paymentSum\">Сумма оплаты</label>
        <input type=\"text\" class=\"input-field sum\" id=\"paymentSum\">
        <button id=\"sendingPaymentData\" value=\"Оставить заявку\" class=\"btn-lrg primary-button --unselectable\">Оплатить</button>
    </form>
</div>

<style>
    .form-payment {
        padding: 60px 20%;
    }

    .payment_label {
        width: 70%;
    }
</style>

<script>

    document.getElementById('sendingPaymentData').addEventListener('click', sendingPaymentForm, false);
    let documentID = document.getElementById('paymentDocumentId')
    documentID.addEventListener('change', checkClientData, false);

    class PaymentData {
        constructor(paymentDocumentId, paymentFio, paymentPhone, paymentAddress, paymentTerm, paymentSum) {
            this.paymentDocumentId = paymentDocumentId;
            this.paymentFio = paymentFio;
            this.paymentPhone = paymentPhone;
            this.paymentAddress = paymentAddress;
            this.paymentTerm = paymentTerm;
            this.paymentSum = paymentSum;
        }

        static createNewPayment() {
            return new PaymentData(
                document.getElementById('paymentDocumentId'),
                document.getElementById('paymentFio'),
                document.getElementById('paymentPhone'),
                document.getElementById('paymentAddress'),
                document.getElementById('paymentTerm'),
                document.getElementById('paymentSum')
            )
        }

    }

    function sendingPaymentForm(e){
        e.preventDefault()
        let payment = PaymentData.createNewPayment()

        var data = JSON.stringify({
            \"paymentDocumentId\": payment.paymentSum.value,
            \"paymentFio\": payment.paymentFio.value,
            \"paymentPhone\": payment.paymentPhone.value,
            \"paymentAddress\": payment.paymentAddress.value,
            \"paymentTerm\": payment.paymentTerm.value,
            \"paymentSum\": payment.paymentSum.value,
        });

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener(\"readystatechange\", function () {
            if (this.readyState === this.DONE) {
                console.log(this.responseText);
            }
        });

        xhr.open(\"POST\", \"/api/set-payment/\");
        xhr.setRequestHeader(\"content-type\", \"application/json\");

        xhr.send(data);
    }

    function checkClientData(){

        let payment = PaymentData.createNewPayment()
        var data = JSON.stringify({
            \"paymentDocumentId\": \"test\"
        });

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener(\"readystatechange\", function () {
            if (this.readyState === this.DONE) {
                let result = JSON.parse(this.responseText);
                payment.paymentFio.value = result.paymentFio
                payment.paymentPhone.value = result.paymentPhone
                payment.paymentAddress.value = result.paymentAddress
                payment.paymentTerm.value = result.paymentTerm
                payment.paymentSum.value = result.paymentSum
            }
        });

        xhr.open(\"POST\", \"/api/check-client/\");
        xhr.setRequestHeader(\"content-type\", \"application/json\");

        xhr.send(data);}
</script>";
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
    <form class=\"feedback-modals_form\">
        <label class=\"payment_label\" for=\"paymentDocumentId\">Введите номер договора</label>
        <input type=\"text\" class=\"input-field documentId\" id=\"paymentDocumentId\">
        <label class=\"payment_label\" for=\"paymentFio\">ФИО заказчика</label>
        <input type=\"text\" class=\"input-field fio\" id=\"paymentFio\">
        <label class=\"payment_label\" for=\"paymentPhone\">Ввидете телефон</label>
        <input type=\"text\" class=\"input-field phone\" id=\"paymentPhone\">
        <label class=\"payment_label\" for=\"paymentAddress\">Введите адрес</label>
        <input type=\"text\" class=\"input-field address\" id=\"paymentAddress\">
        <label class=\"payment_label\" for=\"paymentTerm\">Период оплаты</label>
        <input type=\"text\" class=\"input-field paymentTerm\" id=\"paymentTerm\">
        <label class=\"payment_label\" for=\"paymentSum\">Сумма оплаты</label>
        <input type=\"text\" class=\"input-field sum\" id=\"paymentSum\">
        <button id=\"sendingPaymentData\" value=\"Оставить заявку\" class=\"btn-lrg primary-button --unselectable\">Оплатить</button>
    </form>
</div>

<style>
    .form-payment {
        padding: 60px 20%;
    }

    .payment_label {
        width: 70%;
    }
</style>

<script>

    document.getElementById('sendingPaymentData').addEventListener('click', sendingPaymentForm, false);
    let documentID = document.getElementById('paymentDocumentId')
    documentID.addEventListener('change', checkClientData, false);

    class PaymentData {
        constructor(paymentDocumentId, paymentFio, paymentPhone, paymentAddress, paymentTerm, paymentSum) {
            this.paymentDocumentId = paymentDocumentId;
            this.paymentFio = paymentFio;
            this.paymentPhone = paymentPhone;
            this.paymentAddress = paymentAddress;
            this.paymentTerm = paymentTerm;
            this.paymentSum = paymentSum;
        }

        static createNewPayment() {
            return new PaymentData(
                document.getElementById('paymentDocumentId'),
                document.getElementById('paymentFio'),
                document.getElementById('paymentPhone'),
                document.getElementById('paymentAddress'),
                document.getElementById('paymentTerm'),
                document.getElementById('paymentSum')
            )
        }

    }

    function sendingPaymentForm(e){
        e.preventDefault()
        let payment = PaymentData.createNewPayment()

        var data = JSON.stringify({
            \"paymentDocumentId\": payment.paymentSum.value,
            \"paymentFio\": payment.paymentFio.value,
            \"paymentPhone\": payment.paymentPhone.value,
            \"paymentAddress\": payment.paymentAddress.value,
            \"paymentTerm\": payment.paymentTerm.value,
            \"paymentSum\": payment.paymentSum.value,
        });

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener(\"readystatechange\", function () {
            if (this.readyState === this.DONE) {
                console.log(this.responseText);
            }
        });

        xhr.open(\"POST\", \"/api/set-payment/\");
        xhr.setRequestHeader(\"content-type\", \"application/json\");

        xhr.send(data);
    }

    function checkClientData(){

        let payment = PaymentData.createNewPayment()
        var data = JSON.stringify({
            \"paymentDocumentId\": \"test\"
        });

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener(\"readystatechange\", function () {
            if (this.readyState === this.DONE) {
                let result = JSON.parse(this.responseText);
                payment.paymentFio.value = result.paymentFio
                payment.paymentPhone.value = result.paymentPhone
                payment.paymentAddress.value = result.paymentAddress
                payment.paymentTerm.value = result.paymentTerm
                payment.paymentSum.value = result.paymentSum
            }
        });

        xhr.open(\"POST\", \"/api/check-client/\");
        xhr.setRequestHeader(\"content-type\", \"application/json\");

        xhr.send(data);}
</script>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/payment.htm", "");
    }
}
