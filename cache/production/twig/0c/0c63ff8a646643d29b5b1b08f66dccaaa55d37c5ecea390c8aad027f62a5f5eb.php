<?php

/* reputation_settings.html */
class __TwigTemplate_f4e1b35a62e148a635a3dc6c7389a2194f203e30af7896127eff08079d727fdd extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "reputation_settings.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_REPUTATION_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_REPUTATION_SETTINGS_EXPLAIN");
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
<form id=\"manage_settings\" method=\"post\" action=\"";
        // line 16
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
            // line 19
            echo "\t";
            if ($this->getAttribute($context["options"], "S_LEGEND", array())) {
                // line 20
                echo "\t\t";
                if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", array())) {
                    // line 21
                    echo "\t\t\t</fieldset>
\t\t";
                }
                // line 23
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 24
                echo $this->getAttribute($context["options"], "LEGEND", array());
                echo "</legend>
\t";
            } else {
                // line 26
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"";
                // line 28
                echo $this->getAttribute($context["options"], "KEY", array());
                echo "\">";
                echo $this->getAttribute($context["options"], "TITLE", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if ($this->getAttribute($context["options"], "S_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["options"], "TITLE_EXPLAIN", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 29
                echo $this->getAttribute($context["options"], "CONTENT", array());
                echo "</dd>
\t\t</dl>

\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</fieldset>

<fieldset>
\t<legend>";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 42
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 46
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "reputation_settings.html", 46)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "reputation_settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  138 => 42,  133 => 40,  129 => 39,  124 => 37,  119 => 34,  108 => 29,  95 => 28,  91 => 26,  86 => 24,  83 => 23,  79 => 21,  76 => 20,  73 => 19,  69 => 18,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_ACP_REPUTATION_SETTINGS}</h1>*/
/* */
/* <p>{L_ACP_REPUTATION_SETTINGS_EXPLAIN}</p>*/
/* */
/* <!-- IF S_ERROR -->*/
/* 	<div class="errorbox">*/
/* 		<h3>{L_WARNING}</h3>*/
/* 		<p>{ERROR_MSG}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="manage_settings" method="post" action="{U_ACTION}">*/
/* */
/* <!-- BEGIN options -->*/
/* 	<!-- IF options.S_LEGEND -->*/
/* 		<!-- IF not options.S_FIRST_ROW -->*/
/* 			</fieldset>*/
/* 		<!-- ENDIF -->*/
/* 		<fieldset>*/
/* 			<legend>{options.LEGEND}</legend>*/
/* 	<!-- ELSE -->*/
/* */
/* 		<dl>*/
/* 			<dt><label for="{options.KEY}">{options.TITLE}{L_COLON}</label><!-- IF options.S_EXPLAIN --><br /><span>{options.TITLE_EXPLAIN}</span><!-- ENDIF --></dt>*/
/* 			<dd>{options.CONTENT}</dd>*/
/* 		</dl>*/
/* */
/* 	<!-- ENDIF -->*/
/* <!-- END options -->*/
/* </fieldset>*/
/* */
/* <fieldset>*/
/* 	<legend>{L_ACP_SUBMIT_CHANGES}</legend>*/
/* 	<p class="submit-buttons">*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
