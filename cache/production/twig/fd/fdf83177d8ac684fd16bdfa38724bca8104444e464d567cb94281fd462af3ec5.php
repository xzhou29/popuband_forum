<?php

/* quickreply_editor.html */
class __TwigTemplate_04e5d5a3955ec7e5df89d53ade03209ca9634a679a31174176471fe2eedbe82c extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo (isset($context["U_QR_ACTION"]) ? $context["U_QR_ACTION"] : null);
        echo "\" id=\"qr_postform\">
";
        // line 2
        // line 3
        echo "    <div class=\"widget-content\">\t\t\t
\t <div class=\"space10\"></div>
\t ";
        // line 5
        // line 6
        echo "\t\t<label class=\"sr-only\" for=\"subject\">";
        echo $this->env->getExtension('phpbb')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
        <div class=\"form-group\">
         <input class=\"form-control input-sm\" type=\"text\" name=\"subject\" id=\"subject\" value=\"";
        // line 8
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "\"/>
        </div> 
         <label class=\"sr-only\" for=\"message\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("MESSAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t    ";
        // line 11
        // line 12
        echo "\t\t<div class=\"form-group\">
\t\t <textarea class=\"form-control ccount\" name=\"message\" id=\"message\" rows=\"3\" placeholder=\"";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_ENTER_PLACEHOLDER");
        echo "\"></textarea>
        </div>
\t\t";
        // line 15
        // line 16
        echo "    </div>
    <div class=\"widget-footer\"> 
\t  <div class=\"form-group\">
\t\t";
        // line 19
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t";
        // line 20
        echo (isset($context["QR_HIDDEN_FIELDS"]) ? $context["QR_HIDDEN_FIELDS"] : null);
        echo "
\t\t<button type=\"submit\" class=\"btn btn-default\" tabindex=\"7\" name=\"post\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t\t<button type=\"submit\" class=\"btn btn-default\" tabindex=\"6\" name=\"preview\" value=\"";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
        echo "\" id=\"qr_full_editor\" autocomplete=\"off\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING");
        echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("FULL_EDITOR");
        echo "</button>
     </div>
\t</div>
";
        // line 25
        // line 26
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  88 => 25,  78 => 22,  70 => 21,  66 => 20,  62 => 19,  57 => 16,  56 => 15,  51 => 13,  48 => 12,  47 => 11,  42 => 10,  37 => 8,  30 => 6,  29 => 5,  25 => 3,  24 => 2,  19 => 1,);
    }
}
/* <form method="post" action="{U_QR_ACTION}" id="qr_postform">*/
/* <!-- EVENT quickreply_editor_panel_before -->*/
/*     <div class="widget-content">			*/
/* 	 <div class="space10"></div>*/
/* 	 <!-- EVENT quickreply_editor_subject_before -->*/
/* 		<label class="sr-only" for="subject">{L_SUBJECT}{L_COLON}</label>*/
/*         <div class="form-group">*/
/*          <input class="form-control input-sm" type="text" name="subject" id="subject" value="{SUBJECT}"/>*/
/*         </div> */
/*          <label class="sr-only" for="message">{L_MESSAGE}{L_COLON}</label>*/
/* 	    <!-- EVENT quickreply_editor_message_before -->*/
/* 		<div class="form-group">*/
/* 		 <textarea class="form-control ccount" name="message" id="message" rows="3" placeholder="{L_MESSAGE_ENTER_PLACEHOLDER}"></textarea>*/
/*         </div>*/
/* 		<!-- EVENT quickreply_editor_message_after -->*/
/*     </div>*/
/*     <div class="widget-footer"> */
/* 	  <div class="form-group">*/
/* 		{S_FORM_TOKEN}*/
/* 		{QR_HIDDEN_FIELDS}*/
/* 		<button type="submit" class="btn btn-default" tabindex="7" name="post" value="{L_SUBMIT}" autocomplete="off" data-loading-text="{L_LOADING}<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>">{L_SUBMIT}</button>*/
/* 		<button type="submit" class="btn btn-default" tabindex="6" name="preview" value="{L_FULL_EDITOR}" id="qr_full_editor" autocomplete="off" data-loading-text="{L_LOADING}<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>">{L_FULL_EDITOR}</button>*/
/*      </div>*/
/* 	</div>*/
/* <!-- EVENT quickreply_editor_panel_after -->*/
/* </form>*/
/* */
