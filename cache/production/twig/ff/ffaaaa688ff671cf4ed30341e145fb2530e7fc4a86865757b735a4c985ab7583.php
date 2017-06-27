<?php

/* @pico_reputation/event/viewtopic_body_postrow_custom_fields_before.html */
class __TwigTemplate_582f6efabc9e0cf821fa01e52d3cff4ff8bfd141cc23467f830cf766c3af56a0 extends Twig_Template
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
        if (((isset($context["S_REPUTATION"]) ? $context["S_REPUTATION"] : null) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR", array()))) {
            // line 2
            echo "\t<dd id=\"profile-";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\" class=\"profile-posts\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("REPUTATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_VIEW_REPUTATION", array())) {
                echo "<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_VIEW_USER_REPUTATION", array());
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\">";
            }
            echo "<span>";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "USER_REPUTATION", array());
            echo "</span>";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_VIEW_REPUTATION", array())) {
                echo "</a>";
            }
            echo "</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/viewtopic_body_postrow_custom_fields_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_REPUTATION and postrow.U_POST_AUTHOR -->*/
/* 	<dd id="profile-{postrow.POSTER_ID}" class="profile-posts"><strong>{L_REPUTATION}{L_COLON}</strong> <!-- IF postrow.S_VIEW_REPUTATION --><a href="{postrow.U_VIEW_USER_REPUTATION}" data-referer="_referer={U_REPUTATION_REFERER}"><!-- ENDIF --><span>{postrow.USER_REPUTATION}</span><!-- IF postrow.S_VIEW_REPUTATION --></a><!-- ENDIF --></dd>*/
/* <!-- ENDIF -->*/
/* */
