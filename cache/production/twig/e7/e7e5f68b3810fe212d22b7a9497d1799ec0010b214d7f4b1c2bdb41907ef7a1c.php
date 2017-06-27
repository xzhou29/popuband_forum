<?php

/* ucp_footer.html */
class __TwigTemplate_8219a4fc4ed8510555c4552d8ebe6ab4d3b31e4ff0209764dae6d2b1cdfd9ceb extends Twig_Template
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
        echo "\t  </div>
 </div>
<!-- col-md-12 ucp_header
</div>
-->
\t
\t</div>
 </div>
</div>

";
        // line 11
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 12
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
</form>
";
        }
        // line 14
        echo "\t


</div> <!-- panel has-nav-tabs no-border in ucp_header -->\t

";
        // line 19
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "ucp_footer.html", 19)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 20
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_footer.html", 20)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 21
        echo "
<!-- once head.load is not used any longer this needs to be moved above the overall_footer -->
";
        // line 23
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
            // line 24
            echo "<script>
// lets load and call the function only if there is an user added as a friend
head.load(\"";
            // line 26
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/vendors/jquery.tinyscrollbar.min.js\");
head.ready('jquery.tinyscrollbar.min.js', function() {
    \$(\"#scrollbar-two\").tinyscrollbar();
});
</script>
";
        }
        // line 32
        echo "<script>
 head.load(\"";
        // line 33
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/jupload.min.js\");
</script>";
    }

    public function getTemplateName()
    {
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  89 => 32,  80 => 26,  76 => 24,  74 => 23,  70 => 21,  58 => 20,  46 => 19,  39 => 14,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/* 	  </div>*/
/*  </div>*/
/* <!-- col-md-12 ucp_header*/
/* </div>*/
/* -->*/
/* 	*/
/* 	</div>*/
/*  </div>*/
/* </div>*/
/* */
/* <!-- IF S_COMPOSE_PM -->*/
/* {S_FORM_TOKEN}*/
/* </form>*/
/* <!-- ENDIF -->	*/
/* */
/* */
/* </div> <!-- panel has-nav-tabs no-border in ucp_header -->	*/
/* */
/* <!-- INCLUDE jumpbox_options.html -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
/* <!-- once head.load is not used any longer this needs to be moved above the overall_footer -->*/
/* <!-- IF .friends_online or .friends_offline -->*/
/* <script>*/
/* // lets load and call the function only if there is an user added as a friend*/
/* head.load("{T_THEME_PATH}/vendors/jquery.tinyscrollbar.min.js");*/
/* head.ready('jquery.tinyscrollbar.min.js', function() {*/
/*     $("#scrollbar-two").tinyscrollbar();*/
/* });*/
/* </script>*/
/* <!-- ENDIF -->*/
/* <script>*/
/*  head.load("{T_THEME_PATH}/vendors/jupload.min.js");*/
/* </script>*/
