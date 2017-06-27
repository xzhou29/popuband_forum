<?php

/* addons/header_teaser_body.html */
class __TwigTemplate_d307a321ab022316682043ff517656ace7f0cdf484484c2d51a87209db9030b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"flat-header\">
    <div class=\"masthead\"></div>
    <div class=\"wrapper-head\">
        <div class=\"container\">
            ";
        // line 5
        if ((((isset($context["TEASER_TITLE"]) ? $context["TEASER_TITLE"] : null) != "") || ((isset($context["TEASER_TEXT"]) ? $context["TEASER_TEXT"] : null) != ""))) {
            // line 6
            echo "            <h1>";
            echo (isset($context["TEASER_TITLE"]) ? $context["TEASER_TITLE"] : null);
            echo "</h1>
            <p>";
            // line 7
            echo (isset($context["TEASER_TEXT"]) ? $context["TEASER_TEXT"] : null);
            echo "</p>
            ";
        } else {
            // line 9
            echo "            <h1>PopuBand Music </h1>
            <p>Anyone who's always yearned to learn an instrument can now make it happen in minutes with Populele</p>
            ";
        }
        // line 12
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "addons/header_teaser_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  37 => 9,  32 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="flat-header">*/
/*     <div class="masthead"></div>*/
/*     <div class="wrapper-head">*/
/*         <div class="container">*/
/*             <!-- IF TEASER_TITLE neq '' or TEASER_TEXT neq '' -->*/
/*             <h1>{TEASER_TITLE}</h1>*/
/*             <p>{TEASER_TEXT}</p>*/
/*             <!-- ELSE -->*/
/*             <h1>PopuBand Music </h1>*/
/*             <p>Anyone who's always yearned to learn an instrument can now make it happen in minutes with Populele</p>*/
/*             <!-- ENDIF -->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
