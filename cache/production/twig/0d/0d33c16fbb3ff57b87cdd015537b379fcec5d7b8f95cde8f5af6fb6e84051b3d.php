<?php

/* @pico_reputation/event/index_body_stat_blocks_before.html */
class __TwigTemplate_2b7ca053d0aa6168ad5c70c80162cde3e85d01e71575ffbb4778547c0be941e2 extends Twig_Template
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
        if ((isset($context["S_RS_TOPLIST"]) ? $context["S_RS_TOPLIST"] : null)) {
            // line 2
            echo "\t<div class=\"stat-block reputation-toplist\">
\t\t<h3>";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("RS_TOPLIST");
            echo "</h3>
\t\t<p>";
            // line 4
            echo $this->env->getExtension('phpbb')->lang("RS_TOPLIST_EXPLAIN");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "
\t\t\t";
            // line 5
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "toplist", array()))) {
                // line 6
                echo "\t\t\t\t<strong>
\t\t\t\t";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "toplist", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["toplist"]) {
                    // line 8
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["toplist"], "S_DIRECTION", array()) && $this->getAttribute($context["toplist"], "S_FIRST_ROW", array()))) {
                        echo $this->env->getExtension('phpbb')->lang("RS_NEW_LINE");
                    }
                    // line 9
                    echo "\t\t\t\t\t";
                    echo $this->getAttribute($context["toplist"], "USERNAME_FULL", array());
                    echo "
\t\t\t\t\t(";
                    // line 10
                    if ((isset($context["S_VIEW_REPUTATION"]) ? $context["S_VIEW_REPUTATION"] : null)) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["toplist"], "U_VIEW_USER_REPUTATION", array());
                        echo "\">";
                    }
                    echo $this->getAttribute($context["toplist"], "USER_REPUTATION", array());
                    if ((isset($context["S_VIEW_REPUTATION"]) ? $context["S_VIEW_REPUTATION"] : null)) {
                        echo "</a>";
                    }
                    echo ")";
                    if (($this->getAttribute($context["toplist"], "S_DIRECTION", array()) &&  !$this->getAttribute($context["toplist"], "S_LAST_ROW", array()))) {
                        echo $this->env->getExtension('phpbb')->lang("RS_NEW_LINE");
                    } elseif ( !$this->getAttribute($context["toplist"], "S_LAST_ROW", array())) {
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    }
                    // line 11
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toplist'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "\t\t\t\t</strong>
\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("RS_NO_USERS");
                echo "
\t\t\t";
            }
            // line 16
            echo "\t\t</p>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/index_body_stat_blocks_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  78 => 14,  74 => 12,  68 => 11,  52 => 10,  47 => 9,  42 => 8,  38 => 7,  35 => 6,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_RS_TOPLIST -->*/
/* 	<div class="stat-block reputation-toplist">*/
/* 		<h3>{L_RS_TOPLIST}</h3>*/
/* 		<p>{L_RS_TOPLIST_EXPLAIN}{L_COLON}*/
/* 			<!-- IF .toplist -->*/
/* 				<strong>*/
/* 				<!-- BEGIN toplist -->*/
/* 					<!-- IF toplist.S_DIRECTION and toplist.S_FIRST_ROW -->{L_RS_NEW_LINE}<!-- ENDIF -->*/
/* 					{toplist.USERNAME_FULL}*/
/* 					(<!-- IF S_VIEW_REPUTATION --><a href="{toplist.U_VIEW_USER_REPUTATION}"><!-- ENDIF -->{toplist.USER_REPUTATION}<!-- IF S_VIEW_REPUTATION --></a><!-- ENDIF -->)<!-- IF toplist.S_DIRECTION and not toplist.S_LAST_ROW -->{L_RS_NEW_LINE}<!-- ELSE IF not toplist.S_LAST_ROW -->{L_COMMA_SEPARATOR}<!-- ENDIF -->*/
/* 				<!-- END toplist -->*/
/* 				</strong>*/
/* 			<!-- ELSE -->*/
/* 				{L_RS_NO_USERS}*/
/* 			<!-- ENDIF -->*/
/* 		</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
