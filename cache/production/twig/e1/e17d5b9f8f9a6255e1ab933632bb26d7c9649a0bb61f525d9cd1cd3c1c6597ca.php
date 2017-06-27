<?php

/* login_body_oauth.html */
class __TwigTemplate_f6a27da501a2ec4586b8b7fa4781fcb74cd26dba05506d66e19c82deb3597a3e extends Twig_Template
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
        echo "<div class=\"clearfix oauth-content\">
<div class=\"signin-text\">
\t<span>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("OR");
        echo "</span>
</div> 
  <ul class=\"list-inline oauth-list-btns text-center\"> 
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "oauth", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["oauth"]) {
            // line 7
            echo "\t <li><a href=\"";
            echo $this->getAttribute($context["oauth"], "REDIRECT_URL", array());
            echo "\" class=\"btn btn-default\">";
            echo $this->getAttribute($context["oauth"], "SERVICE_NAME", array());
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oauth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "login_body_oauth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="clearfix oauth-content">*/
/* <div class="signin-text">*/
/* 	<span>{L_OR}</span>*/
/* </div> */
/*   <ul class="list-inline oauth-list-btns text-center"> */
/* 	<!-- BEGIN oauth -->*/
/* 	 <li><a href="{oauth.REDIRECT_URL}" class="btn btn-default">{oauth.SERVICE_NAME}</a></li>*/
/* 	<!-- END oauth -->*/
/*   </ul>*/
/* </div>*/
/* */
