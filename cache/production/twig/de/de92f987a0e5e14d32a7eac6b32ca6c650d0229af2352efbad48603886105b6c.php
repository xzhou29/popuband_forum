<?php

/* index_body.html */
class __TwigTemplate_e93fc73ab69a15f9326575f0aab57e75ea5a750072c0c1f1d2723ceeaf8e2e42 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        // line 5
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('pico_reputation', '__main__'));
        $this->env->loadTemplate('@pico_reputation/event/index_body_stat_blocks_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 6
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 7
            echo "<!-- <div class=\"panel panel-forum panel-stats\">
 <div class=\"panel-heading\">";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_STATISTICS");
            echo "</div>
 <div class=\"panel-body\">
    <div class=\"row\">
\t  <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-acqua\">";
            // line 12
            echo (isset($context["SITESPLAT_CURRENTLY_ONLINE"]) ? $context["SITESPLAT_CURRENTLY_ONLINE"] : null);
            echo "&nbsp;<a data-toggle=\"collapse\" data-target=\".sorting\" href=\"javascript:void(0);\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
            echo "\"><i class=\"fa fa-angle-double-down\"></i></a></span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-seppia\">";
            // line 15
            echo (isset($context["SITESPLAT_RECORD_ONLINE"]) ? $context["SITESPLAT_RECORD_ONLINE"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_MOST_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-melograno\">";
            // line 18
            echo (isset($context["SITESPLAT_TOTAL_POSTS"]) ? $context["SITESPLAT_TOTAL_POSTS"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_TOTAL_POSTS");
            echo "</strong>
\t   </div>
\t   
\t <div class=\"visible-xs space10\"></div>
\t  <div class=\"visible-xs space10\"></div>
\t  
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-drank\">";
            // line 25
            echo (isset($context["SITESPLAT_TOTAL_TOPICS"]) ? $context["SITESPLAT_TOTAL_TOPICS"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_TOTAL_TOPICS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-orange\">";
            // line 28
            echo (isset($context["SITESPLAT_TOTAL_USERS"]) ? $context["SITESPLAT_TOTAL_USERS"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_TOTAL_USERS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-red\">";
            // line 31
            echo (isset($context["SITESPLAT_NEWEST_USER"]) ? $context["SITESPLAT_NEWEST_USER"] : null);
            echo "</span><strong>";
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_NEWEST_MEMBER");
            echo "</strong>
\t   </div> 
\t</div>
 </div> -->
";
            // line 35
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 36
                echo "<div class=\"panel-footer sorting collapse\">
    <div class=\"row\">
        ";
                // line 38
                // line 39
                echo "        <div class=\"col-md-6\">
            <span class=\"stats-heading\">";
                // line 40
                echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
                echo "&nbsp;&#40;";
                echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
                echo "&#41;&nbsp;";
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                }
                echo "</span>
            ";
                // line 41
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    // line 42
                    echo "            <div class=\"space10\"></div>
            <small>";
                    // line 43
                    echo $this->env->getExtension('phpbb')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "&nbsp;";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                    echo "</small>
            ";
                }
                // line 45
                echo "        </div>
        ";
                // line 46
                // line 47
                echo "        <div class=\"col-md-12\">
            ";
                // line 48
                // line 49
                echo "            <div class=\"space10\"></div>
            <p>";
                // line 50
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "</p>
            ";
                // line 51
                // line 52
                echo "            ";
                if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
                    // line 53
                    echo "            ";
                    // line 54
                    echo "            ";
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                        // line 55
                        echo "            <p>";
                        echo $this->env->getExtension('phpbb')->lang("SITESPLAT_BIRTHDAYS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "&nbsp;<strong>";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                            echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                            if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                                echo "&nbsp;&#40;";
                                echo $this->getAttribute($context["birthdays"], "AGE", array());
                                echo "&#41;";
                            }
                            if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                                echo "&#44;&nbsp;";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</strong></p>
            ";
                    }
                    // line 57
                    echo "            ";
                    // line 58
                    echo "            ";
                }
                // line 59
                echo "        </div>
        ";
                // line 60
                // line 61
                echo "    </div>
</div>
";
            }
            // line 64
            echo "</div>
";
        }
        // line 66
        // line 67
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 67,  220 => 66,  216 => 64,  211 => 61,  210 => 60,  207 => 59,  204 => 58,  202 => 57,  178 => 55,  175 => 54,  173 => 53,  170 => 52,  169 => 51,  165 => 50,  162 => 49,  161 => 48,  158 => 47,  157 => 46,  154 => 45,  146 => 43,  143 => 42,  141 => 41,  127 => 40,  124 => 39,  123 => 38,  119 => 36,  117 => 35,  108 => 31,  100 => 28,  92 => 25,  80 => 18,  72 => 15,  62 => 12,  55 => 8,  52 => 7,  50 => 6,  45 => 5,  44 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <!-- EVENT index_body_forumlist_body_before -->*/
/* <!-- INCLUDE forumlist_body.html -->*/
/* <!-- EVENT index_body_forumlist_body_after -->*/
/* <!-- EVENT index_body_stat_blocks_before -->*/
/* <!-- IF S_USER_LOGGED_IN -->*/
/* <!-- <div class="panel panel-forum panel-stats">*/
/*  <div class="panel-heading">{L_SITESPLAT_STATISTICS}</div>*/
/*  <div class="panel-body">*/
/*     <div class="row">*/
/* 	  <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-acqua">{SITESPLAT_CURRENTLY_ONLINE}&nbsp;<a data-toggle="collapse" data-target=".sorting" href="javascript:void(0);" title="{L_EXPAND_VIEW}"><i class="fa fa-angle-double-down"></i></a></span><strong>{L_SITESPLAT_USERS_ONLINE}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-seppia">{SITESPLAT_RECORD_ONLINE}</span><strong>{L_SITESPLAT_MOST_USERS_ONLINE}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-melograno">{SITESPLAT_TOTAL_POSTS}</span><strong>{L_SITESPLAT_TOTAL_POSTS}</strong>*/
/* 	   </div>*/
/* 	   */
/* 	 <div class="visible-xs space10"></div>*/
/* 	  <div class="visible-xs space10"></div>*/
/* 	  */
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-drank">{SITESPLAT_TOTAL_TOPICS}</span><strong>{L_SITESPLAT_TOTAL_TOPICS}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-orange">{SITESPLAT_TOTAL_USERS}</span><strong>{L_SITESPLAT_TOTAL_USERS}</strong>*/
/* 	   </div>*/
/* 	   <div class="col-md-2 col-sm-2 col-xs-4 text-center">*/
/* 	    <span class="output text-red">{SITESPLAT_NEWEST_USER}</span><strong>{L_SITESPLAT_NEWEST_MEMBER}</strong>*/
/* 	   </div> */
/* 	</div>*/
/*  </div> -->*/
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* <div class="panel-footer sorting collapse">*/
/*     <div class="row">*/
/*         <!-- EVENT index_body_block_stats_legend_before -->*/
/*         <div class="col-md-6">*/
/*             <span class="stats-heading">{TOTAL_USERS_ONLINE}&nbsp;&#40;{L_ONLINE_EXPLAIN}&#41;&nbsp;<!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}" title="{L_WHO_IS_ONLINE}"><i class="fa fa-question-circle"></i></a><!-- ENDIF --></span>*/
/*             <!-- IF LEGEND -->*/
/*             <div class="space10"></div>*/
/*             <small>{L_LEGEND}{L_COLON}&nbsp;{LEGEND}</small>*/
/*             <!-- ENDIF -->*/
/*         </div>*/
/*         <!-- EVENT index_body_block_stats_prepend -->*/
/*         <div class="col-md-12">*/
/*             <!-- EVENT index_body_block_online_prepend -->*/
/*             <div class="space10"></div>*/
/*             <p>{LOGGED_IN_USER_LIST}</p>*/
/*             <!-- EVENT index_body_block_online_append -->*/
/*             <!-- IF S_DISPLAY_BIRTHDAY_LIST -->*/
/*             <!-- EVENT index_body_block_birthday_prepend -->*/
/*             <!-- IF .birthdays -->*/
/*             <p>{L_SITESPLAT_BIRTHDAYS}{L_COLON}&nbsp;<strong><!-- BEGIN birthdays -->{birthdays.USERNAME}<!-- IF birthdays.AGE !== '' -->&nbsp;&#40;{birthdays.AGE}&#41;<!-- ENDIF --><!-- IF not birthdays.S_LAST_ROW -->&#44;&nbsp;<!-- ENDIF --><!-- END birthdays --></strong></p>*/
/*             <!-- ENDIF -->*/
/*             <!-- EVENT index_body_block_birthday_append -->*/
/*             <!-- ENDIF -->*/
/*         </div>*/
/*         <!-- EVENT index_body_block_stats_append -->*/
/*     </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT index_body_stat_blocks_after -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
