<?php

/* ucp_auth_link_oauth.html */
class __TwigTemplate_85ed143333f0b419b73d86ada2010eaa23c4282d27273da9a5432e95241b6bc7 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "oauth", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["oauth"]) {
            // line 2
            echo "\t<form id=\"ucp\" method=\"post\" action=\"";
            echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
            echo "\">
\t\t<fieldset class=\"framed-ucp\">
\t     <legend>";
            // line 4
            echo $this->getAttribute($context["oauth"], "SERVICE_NAME", array());
            echo "</legend>
\t\t\t";
            // line 5
            if ($this->getAttribute($context["oauth"], "UNIQUE_ID", array())) {
                // line 6
                echo "\t\t\t  <label class=\"control-label\">";
                echo $this->env->getExtension('phpbb')->lang("UCP_AUTH_LINK_ID");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t<div class=\"row\"> 
            <div class=\"col-md-6\"> \t\t\t
\t\t\t<div class=\"input-group\">  
\t\t\t<input class=\"form-control\" type=\"text\" value=\"";
                // line 10
                echo $this->getAttribute($context["oauth"], "UNIQUE_ID", array());
                echo "\" readonly>
\t\t\t <span class=\"input-group-btn\">
\t\t\t  <button type=\"submit\" name=\"submit\" tabindex=\"6\" value=\"";
                // line 12
                echo $this->env->getExtension('phpbb')->lang("UCP_AUTH_LINK_UNLINK");
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-unlink\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("UCP_AUTH_LINK_UNLINK");
                echo "</button>\t\t\t 
\t\t\t </span>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
            } else {
                // line 18
                echo "\t\t\t<div>";
                echo $this->env->getExtension('phpbb')->lang("UCP_AUTH_LINK_ASK");
                echo "</div>
\t\t\t <button type=\"submit\" name=\"submit\" tabindex=\"6\" value=\"";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("UCP_AUTH_LINK_LINK");
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-link\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("UCP_AUTH_LINK_LINK");
                echo "</button>
\t\t\t";
            }
            // line 21
            echo "\t\t</fieldset>
\t\t";
            // line 22
            echo $this->getAttribute($context["oauth"], "HIDDEN_FIELDS", array());
            echo "
\t\t";
            // line 23
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t";
            // line 24
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</form>
\t<div class=\"space10\"></div>
\t<div class=\"space10\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oauth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ucp_auth_link_oauth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  79 => 23,  75 => 22,  72 => 21,  65 => 19,  60 => 18,  49 => 12,  44 => 10,  35 => 6,  33 => 5,  29 => 4,  23 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN oauth -->*/
/* 	<form id="ucp" method="post" action="{S_UCP_ACTION}">*/
/* 		<fieldset class="framed-ucp">*/
/* 	     <legend>{oauth.SERVICE_NAME}</legend>*/
/* 			<!-- IF oauth.UNIQUE_ID -->*/
/* 			  <label class="control-label">{L_UCP_AUTH_LINK_ID}{L_COLON}</label>*/
/* 			<div class="row"> */
/*             <div class="col-md-6"> 			*/
/* 			<div class="input-group">  */
/* 			<input class="form-control" type="text" value="{oauth.UNIQUE_ID}" readonly>*/
/* 			 <span class="input-group-btn">*/
/* 			  <button type="submit" name="submit" tabindex="6" value="{L_UCP_AUTH_LINK_UNLINK}" class="btn btn-danger"><i class="fa fa-unlink"></i>&nbsp;{L_UCP_AUTH_LINK_UNLINK}</button>			 */
/* 			 </span>*/
/* 			</div>*/
/* 			</div>*/
/* 			</div>*/
/* 			<!-- ELSE -->*/
/* 			<div>{L_UCP_AUTH_LINK_ASK}</div>*/
/* 			 <button type="submit" name="submit" tabindex="6" value="{L_UCP_AUTH_LINK_LINK}" class="btn btn-success"><i class="fa fa-link"></i>&nbsp;{L_UCP_AUTH_LINK_LINK}</button>*/
/* 			<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 		{oauth.HIDDEN_FIELDS}*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		{S_FORM_TOKEN}*/
/* 	</form>*/
/* 	<div class="space10"></div>*/
/* 	<div class="space10"></div>*/
/* <!-- END oauth -->*/
/* */
