<?php

/* ucp_auth_link.html */
class __TwigTemplate_b99e20a7efa28986d9285ddb643e351294ced47aef17db0d8ddec796f16b588e extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_auth_link.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"tab-pane active\">
\t<fieldset class=\"framed-ucp\">
\t <legend>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("UCP_AUTH_LINK_TITLE");
        echo "</legend>
\t\t";
        // line 5
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<div class=\"alert alert-warning\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</div>";
        }
        // line 6
        echo "
\t\t";
        // line 7
        if ((isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) {
            // line 8
            echo "\t\t\t";
            $location = (("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . ""), "ucp_auth_link.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 9
            echo "\t\t";
        }
        // line 10
        echo "\t\t
\t</fieldset>\t
</div>
";
        // line 13
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_auth_link.html", 13)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_auth_link.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  66 => 10,  63 => 9,  50 => 8,  48 => 7,  45 => 6,  39 => 5,  35 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* <div class="tab-pane active">*/
/* 	<fieldset class="framed-ucp">*/
/* 	 <legend>{L_UCP_AUTH_LINK_TITLE}</legend>*/
/* 		<!-- IF ERROR --><div class="alert alert-warning">{ERROR}</div><!-- ENDIF -->*/
/* */
/* 		<!-- IF PROVIDER_TEMPLATE_FILE -->*/
/* 			<!-- INCLUDE {PROVIDER_TEMPLATE_FILE} -->*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 	</fieldset>	*/
/* </div>*/
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
