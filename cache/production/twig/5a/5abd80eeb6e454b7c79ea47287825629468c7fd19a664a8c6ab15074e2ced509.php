<?php

/* @pico_reputation/event/viewtopic_body_post_buttons_before.html */
class __TwigTemplate_785eb5f67a859eb470c5caf7ea2d8b67e809a552374d8569edf65427c680f80e extends Twig_Template
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
        if (((isset($context["S_REPUTATION"]) ? $context["S_REPUTATION"] : null) && (isset($context["S_FORUM_REPUTATION"]) ? $context["S_FORUM_REPUTATION"] : null))) {
            // line 2
            echo "\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_RATE_POST", array())) {
                // line 3
                echo "\t\t<li data-skip-responsive=\"true\">
\t\t\t<a href=\"";
                // line 4
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_RATE_POST_POSITIVE", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_POSITIVE", array());
                echo "\" class=\"button button-icon-only rate-good-icon";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array());
                }
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\">
\t\t\t\t<i class=\"icon fa-thumbs-up fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</li>
\t";
            }
            // line 9
            echo "\t";
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_RATE_POST", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_RATE_POST_NEGATIVE", array()))) {
                // line 10
                echo "\t\t<li data-skip-responsive=\"true\">
\t\t\t<a href=\"";
                // line 11
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_RATE_POST_NEGATIVE", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_RATE_POST_NEGATIVE", array());
                echo "\" class=\"button button-icon-only rate-bad-icon";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_VOTE_CLASS", array());
                }
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\">
\t\t\t\t<i class=\"icon fa-thumbs-down fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t</li>
\t";
            }
            // line 16
            echo "\t<li data-skip-responsive=\"true\">
\t\t";
            // line 17
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_VIEW_REPUTATION", array())) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_VIEW_POST_REPUTATION", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_POST_REPUTATION", array());
                echo "\" class=\"button post-reputation ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION_CLASS", array());
                echo "\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\"><span>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION", array());
                echo "</span></a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<div title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RS_POST_REPUTATION", array());
                echo "\" class=\"button post-reputation ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION_CLASS", array());
                echo " guest\" data-referer=\"_referer=";
                echo (isset($context["U_REPUTATION_REFERER"]) ? $context["U_REPUTATION_REFERER"] : null);
                echo "\"><span>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUTATION", array());
                echo "</span></div>
\t\t";
            }
            // line 22
            echo "\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/viewtopic_body_post_buttons_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  86 => 20,  72 => 18,  70 => 17,  67 => 16,  50 => 11,  47 => 10,  44 => 9,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_REPUTATION and S_FORUM_REPUTATION-->*/
/* 	<!-- IF postrow.S_RATE_POST -->*/
/* 		<li data-skip-responsive="true">*/
/* 			<a href="{postrow.U_RATE_POST_POSITIVE}" title="{postrow.RS_RATE_POST_POSITIVE}" class="button button-icon-only rate-good-icon<!-- IF postrow.POST_VOTE_CLASS --> {postrow.POST_VOTE_CLASS}<!-- ENDIF -->" data-referer="_referer={U_REPUTATION_REFERER}">*/
/* 				<i class="icon fa-thumbs-up fa-fw" aria-hidden="true"></i>*/
/* 			</a>*/
/* 		</li>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF postrow.S_RATE_POST and postrow.S_RATE_POST_NEGATIVE -->*/
/* 		<li data-skip-responsive="true">*/
/* 			<a href="{postrow.U_RATE_POST_NEGATIVE}" title="{postrow.RS_RATE_POST_NEGATIVE}" class="button button-icon-only rate-bad-icon<!-- IF postrow.POST_VOTE_CLASS --> {postrow.POST_VOTE_CLASS}<!-- ENDIF -->" data-referer="_referer={U_REPUTATION_REFERER}">*/
/* 				<i class="icon fa-thumbs-down fa-fw" aria-hidden="true"></i>*/
/* 			</a>*/
/* 		</li>*/
/* 	<!-- ENDIF -->*/
/* 	<li data-skip-responsive="true">*/
/* 		<!-- IF postrow.S_VIEW_REPUTATION -->*/
/* 			<a href="{postrow.U_VIEW_POST_REPUTATION}" title="{postrow.RS_POST_REPUTATION}" class="button post-reputation {postrow.POST_REPUTATION_CLASS}" data-referer="_referer={U_REPUTATION_REFERER}"><span>{postrow.POST_REPUTATION}</span></a>*/
/* 		<!-- ELSE -->*/
/* 			<div title="{postrow.RS_POST_REPUTATION}" class="button post-reputation {postrow.POST_REPUTATION_CLASS} guest" data-referer="_referer={U_REPUTATION_REFERER}"><span>{postrow.POST_REPUTATION}</span></div>*/
/* 		<!-- ENDIF -->*/
/* 	</li>*/
/* <!-- ENDIF -->*/
/* */
