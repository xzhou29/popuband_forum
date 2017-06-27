<?php

/* reputation_overview.html */
class __TwigTemplate_b86e03ab4f601a7e8fbc4f34c1e6cd71a970b749f492a915dd5eebcf308d97b2 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "reputation_overview.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_REPUTATION_SYSTEM");
        echo "</h1>

<form id=\"acp_reputation\" method=\"post\" action=\"";
        // line 7
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
<fieldset>
\t<dl>
\t\t<dt><label for=\"repuation_enable\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("RS_ENABLE");
        echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"reputation_enable\" name=\"reputation_enable\" value=\"1\"";
        // line 11
        if ((isset($context["S_REPUTATION_ENABLED"]) ? $context["S_REPUTATION_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"reputation_enable\" value=\"0\"";
        // line 12
        if ( !(isset($context["S_REPUTATION_ENABLED"]) ? $context["S_REPUTATION_ENABLED"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label></dd>
\t</dl>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 18
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

<fieldset>
\t<form id=\"action_sync\" method=\"post\" action=\"";
        // line 23
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t<dl>
\t\t<dt><label for=\"action_sync\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("RS_SYNC");
        echo "</label><br />";
        echo $this->env->getExtension('phpbb')->lang("RS_SYNC_EXPLAIN");
        echo "</dt>
\t\t<dd><input type=\"hidden\" name=\"action\" value=\"sync\" /><input class=\"button2\" type=\"submit\" id=\"action_sync\" name=\"action_sync\" value=\"";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("RUN");
        echo "\" /></dd>
\t</dl>
\t</form>
\t";
        // line 29
        if ((isset($context["S_FOUNDER"]) ? $context["S_FOUNDER"] : null)) {
            // line 30
            echo "\t<form id=\"action_truncate\" method=\"post\" action=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\" data-ajax=\"true\">
\t<dl>
\t\t<dt><label for=\"action_truncate\">";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("RS_TRUNCATE");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("RS_TRUNCATE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"hidden\" name=\"action\" value=\"truncate\" /><input class=\"button2\" type=\"submit\" id=\"action_truncate\" name=\"action_truncate\" value=\"";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("RUN");
            echo "\" /></dd>
\t</dl>
\t</form>
\t";
        }
        // line 37
        echo "</fieldset>

";
        // line 39
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "reputation_overview.html", 39)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "reputation_overview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  124 => 37,  117 => 33,  111 => 32,  105 => 30,  103 => 29,  97 => 26,  91 => 25,  86 => 23,  78 => 18,  73 => 16,  69 => 15,  59 => 12,  51 => 11,  47 => 10,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_REPUTATION_SYSTEM}</h1>*/
/* */
/* <form id="acp_reputation" method="post" action="{U_ACTION}">*/
/* <fieldset>*/
/* 	<dl>*/
/* 		<dt><label for="repuation_enable">{L_RS_ENABLE}</label></dt>*/
/* 		<dd><label><input type="radio" class="radio" id="reputation_enable" name="reputation_enable" value="1"<!-- IF S_REPUTATION_ENABLED --> checked="checked"<!-- ENDIF --> /> {L_ENABLED}</label>*/
/* 			<label><input type="radio" class="radio" name="reputation_enable" value="0"<!-- IF not S_REPUTATION_ENABLED --> checked="checked"<!-- ENDIF --> /> {L_DISABLED}</label></dd>*/
/* 	</dl>*/
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <fieldset>*/
/* 	<form id="action_sync" method="post" action="{U_ACTION}">*/
/* 	<dl>*/
/* 		<dt><label for="action_sync">{L_RS_SYNC}</label><br />{L_RS_SYNC_EXPLAIN}</dt>*/
/* 		<dd><input type="hidden" name="action" value="sync" /><input class="button2" type="submit" id="action_sync" name="action_sync" value="{L_RUN}" /></dd>*/
/* 	</dl>*/
/* 	</form>*/
/* 	<!-- IF S_FOUNDER -->*/
/* 	<form id="action_truncate" method="post" action="{U_ACTION}" data-ajax="true">*/
/* 	<dl>*/
/* 		<dt><label for="action_truncate">{L_RS_TRUNCATE}</label><br /><span>{L_RS_TRUNCATE_EXPLAIN}</span></dt>*/
/* 		<dd><input type="hidden" name="action" value="truncate" /><input class="button2" type="submit" id="action_truncate" name="action_truncate" value="{L_RUN}" /></dd>*/
/* 	</dl>*/
/* 	</form>*/
/* 	<!-- ENDIF -->*/
/* </fieldset>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
