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

/* /Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/contacts.htm */
class __TwigTemplate_60d689bbf8ff48e419e14615c9c70d96f72e078b5c0990afc75f0e0526297238 extends \Twig\Template
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
\t\t<h2 class=\"section-title\">Контакты</h2>
\t\t<div class=\"block-line\"></div>
\t</div>
\t
\t<p class=\"adv-text\">Основные принципы, которым следует наша компания — это ориентация на бескомпромиссное качество предоставляемых охранных услуг, максимальный охват возможных услуг, связанных с охранной и безопасностью, а так же индивидуальный подход к каждому клиенту. За время работы компания «КРОК» накопила опыт охраны объектов от небольшой частной недвижимости до промышленных гигантов, обеспечения личной охраны, установки систем охраны и безопасности всех известных мировых брендов.</p>

\t<div class=\"contact\">
\t\t<div class=\"contact-items\">
\t\t\t<div class=\"contact-item\">
\t\t\t\t<div class=\"contact-icon\"><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pin.svg");
        echo "\" alt=\"\"></div>
\t\t\t\t<div class=\"contact-text\">г. Днепр, ул. Шевченко, д. 20, <br>офис 10 </div>
\t\t\t</div>
\t\t\t<div class=\"contact-item\">
\t\t\t\t<div class=\"contact-icon\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pin.svg");
        echo "\" alt=\"\"></div>
\t\t\t\t<div class=\"contact-text\">г. Днепр, ул. Шевченко, д. 20, <br>офис 10 </div>
\t\t\t</div>
\t\t\t<div class=\"contact-item\">
\t\t\t\t<div class=\"contact-icon\"><img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pin.svg");
        echo "\" alt=\"\"></div>
\t\t\t\t<div class=\"contact-text\">г. Днепр, ул. Шевченко, д. 20, <br>офис 10 </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"contact-map\">
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d42327.32026588334!2d34.919153410397215!3d48.4669372814115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x40dbe3c3280999ff%3A0xb481d5d34b3c859c!2z0J3QvtCy0L7QutC-0LTQsNGG0YzQutC40Lkg0YDQsNC50L7QvSwg0JTQvdGW0L_RgNC-zIEsINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA0OTAwMA!3m2!1d48.4688302!2d34.9517375!5e0!3m2!1suk!2sua!4v1598297797214!5m2!1suk!2sua\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  57 => 16,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\">
\t<div class=\"block-title\">
\t\t<h2 class=\"section-title\">Контакты</h2>
\t\t<div class=\"block-line\"></div>
\t</div>
\t
\t<p class=\"adv-text\">Основные принципы, которым следует наша компания — это ориентация на бескомпромиссное качество предоставляемых охранных услуг, максимальный охват возможных услуг, связанных с охранной и безопасностью, а так же индивидуальный подход к каждому клиенту. За время работы компания «КРОК» накопила опыт охраны объектов от небольшой частной недвижимости до промышленных гигантов, обеспечения личной охраны, установки систем охраны и безопасности всех известных мировых брендов.</p>

\t<div class=\"contact\">
\t\t<div class=\"contact-items\">
\t\t\t<div class=\"contact-item\">
\t\t\t\t<div class=\"contact-icon\"><img src=\"{{ 'assets/images/pin.svg'|theme }}\" alt=\"\"></div>
\t\t\t\t<div class=\"contact-text\">г. Днепр, ул. Шевченко, д. 20, <br>офис 10 </div>
\t\t\t</div>
\t\t\t<div class=\"contact-item\">
\t\t\t\t<div class=\"contact-icon\"><img src=\"{{ 'assets/images/pin.svg'|theme }}\" alt=\"\"></div>
\t\t\t\t<div class=\"contact-text\">г. Днепр, ул. Шевченко, д. 20, <br>офис 10 </div>
\t\t\t</div>
\t\t\t<div class=\"contact-item\">
\t\t\t\t<div class=\"contact-icon\"><img src=\"{{ 'assets/images/pin.svg'|theme }}\" alt=\"\"></div>
\t\t\t\t<div class=\"contact-text\">г. Днепр, ул. Шевченко, д. 20, <br>офис 10 </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"contact-map\">
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d42327.32026588334!2d34.919153410397215!3d48.4669372814115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x40dbe3c3280999ff%3A0xb481d5d34b3c859c!2z0J3QvtCy0L7QutC-0LTQsNGG0YzQutC40Lkg0YDQsNC50L7QvSwg0JTQvdGW0L_RgNC-zIEsINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA0OTAwMA!3m2!1d48.4688302!2d34.9517375!5e0!3m2!1suk!2sua!4v1598297797214!5m2!1suk!2sua\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t</div>
\t</div>
</section>", "/Users/alexkondratenko/git/summitsg/themes/ssg/partials//site/contacts.htm", "");
    }
}
