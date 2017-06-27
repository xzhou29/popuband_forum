<?php

/* reputation_rate.html */
class __TwigTemplate_fe3163d8e82cb1967582b77c19105117f6caa92f56a7942e7889bdcea5671ea1 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "reputation_rate.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_REPUTATION_RATE");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_REPUTATION_RATE_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"rate\" method=\"post\" action=\"";
        // line 16
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<fieldset>
\t<dl>
\t\t<dt><label for=\"username\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("ENTER_USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"username\" name=\"username\" value=\"";
        // line 21
        echo (isset($context["RS_USERNAME"]) ? $context["RS_USERNAME"] : null);
        echo "\" /></dd>
\t\t<dd>[ <a href=\"";
        // line 22
        echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a> ]</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("RS_POINTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "<label></dt>
\t\t<dd><input name=\"points\" type=\"text\" class=\"text small\" maxlength=\"100\" id=\"points\" value=\"";
        // line 26
        echo (isset($context["RS_POINTS"]) ? $context["RS_POINTS"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("RS_COMMENT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "<label></dt>
\t\t<dd><textarea name=\"comment\" id=\"comment\" class=\"inputbox\" rows=\"3\" cols=\"70\">";
        // line 30
        echo (isset($context["RS_COMMENT"]) ? $context["RS_COMMENT"] : null);
        echo "</textarea></dd>
\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 37
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

</form>

";
        // line 42
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "reputation_rate.html", 42)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "reputation_rate.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  120 => 37,  115 => 35,  111 => 34,  104 => 30,  99 => 29,  93 => 26,  88 => 25,  80 => 22,  76 => 21,  71 => 20,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a name="maincontent"></a>*/
/* */
/* <h1>{L_ACP_REPUTATION_RATE}</h1>*/
/* */
/* <p>{L_ACP_REPUTATION_RATE_EXPLAIN}</p>*/
/* */
/* <!-- IF S_ERROR -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{ERROR_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="rate" method="post" action="{U_ACTION}">*/
/* */
/* <fieldset>*/
/* 	<dl>*/
/* 		<dt><label for="username">{L_ENTER_USERNAME}{L_COLON}</label></dt>*/
/* 		<dd><input class="text medium" type="text" id="username" name="username" value="{RS_USERNAME}" /></dd>*/
/* 		<dd>[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label>{L_RS_POINTS}{L_COLON}<label></dt>*/
/* 		<dd><input name="points" type="text" class="text small" maxlength="100" id="points" value="{RS_POINTS}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label>{L_RS_COMMENT}{L_COLON}<label></dt>*/
/* 		<dd><textarea name="comment" id="comment" class="inputbox" rows="3" cols="70">{RS_COMMENT}</textarea></dd>*/
/* 	</dl>*/
/* */
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
