<?php

/* notification_dropdown.html */
class __TwigTemplate_2aa57cedfa41e8bf174d8be91e7e4bf81e1056c251a90e6631b1f09797d235fc extends Twig_Template
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
        echo "<li>
\t<div id=\"notification_list\" class=\"navbar-wrapper\">
        <div class=\"navbar-notification\">
            <div class=\"row\">
             <div class=\"notification-content\">
\t\t\t   <div id=\"about\" class=\"nano\">
\t\t\t\t<div class=\"nano-content\">
                    <ul class=\"list-unstyled\">
\t\t\t\t\t";
        // line 9
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()))) {
            // line 10
            echo "\t\t\t\t\t\t<li class=\"no_notifications\">
\t\t\t\t\t\t <div class=\"noti-bubble alert alert-default\">";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
            echo "</div><i class=\"fa fa-check\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 15
            echo "\t\t\t\t\t\t<li class=\"";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                echo "noti-unread";
            }
            if ($this->getAttribute($context["notifications"], "STYLING", array())) {
                echo " ";
                echo $this->getAttribute($context["notifications"], "STYLING", array());
            }
            if ( !$this->getAttribute($context["notifications"], "URL", array())) {
                echo " no-url";
            }
            echo "\">
\t\t\t\t\t\t\t";
            // line 16
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                // line 17
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                echo "\" class=\"mark_read icon-mark btn btn-notification\" data-ajax=\"notification.mark_read\"><i class=\"fa fa-check\"></i></a>
\t\t\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t\t    <a class=\"mark_read icon-mark-read btn-notification-read\"><i class=\"fa fa-check\"></i></a>
\t\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                echo "<a class=\"tmp_read icon-mark-read btn-notification-read\"><i class=\"fa fa-check\"></i></a>";
            }
            // line 22
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                // line 23
                echo "\t\t\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                    echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute($context["notifications"], "URL", array());
                } else {
                    echo $this->getAttribute($context["notifications"], "URL", array());
                }
                echo "\">
\t\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t <div class=\"notification-block\">
\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "AVATAR", array())) {
                echo $this->getAttribute($context["notifications"], "AVATAR", array());
            } else {
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            // line 28
            echo "\t\t\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 29
            echo $this->getAttribute($context["notifications"], "FORMATTED_TITLE", array());
            echo "</p>
\t\t\t\t\t\t\t\t\t";
            // line 30
            if ($this->getAttribute($context["notifications"], "REFERENCE", array())) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute($context["notifications"], "REFERENCE", array());
                echo "</p>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "FORUM", array())) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute($context["notifications"], "FORUM", array());
                echo "</p>";
            }
            // line 32
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["notifications"], "REASON", array())) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute($context["notifications"], "REASON", array());
                echo "</p>";
            }
            // line 33
            echo "\t\t\t\t\t\t\t\t\t<p class=\"notification-time pull-right\"><i class=\"fa fa-clock-o\"></i>&nbsp;";
            echo $this->getAttribute($context["notifications"], "TIME", array());
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 35
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                echo "</a>";
            } else {
                echo "</div>";
            }
            // line 36
            echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t    </ul>
                </div>\t\t\t\t
               </div>\t\t\t\t
             </div>   
            </div>
\t\t</div>
\t    <div class=\"navbar-footer\">
            <div class=\"navbar-footer-content\">
                <div class=\"row\">
\t\t\t\t   <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm\" href=\"";
        // line 47
        echo (isset($context["U_NOTIFICATION_SETTINGS"]) ? $context["U_NOTIFICATION_SETTINGS"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("SETTINGS");
        echo "</a></div>
                  ";
        // line 48
        if ((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null)) {
            echo "    
\t\t\t\t   <div id=\"mark_all_notifications\" class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm pull-right\" href=\"";
            // line 49
            echo (isset($context["U_MARK_ALL_NOTIFICATIONS"]) ? $context["U_MARK_ALL_NOTIFICATIONS"] : null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL_READ");
            echo "</a></div>
                  ";
        }
        // line 51
        echo "\t\t\t\t</div>
            </div>
        </div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 51,  171 => 49,  167 => 48,  161 => 47,  150 => 38,  143 => 36,  137 => 35,  131 => 33,  124 => 32,  117 => 31,  111 => 30,  107 => 29,  104 => 28,  95 => 27,  91 => 25,  79 => 23,  76 => 22,  71 => 21,  67 => 19,  61 => 17,  59 => 16,  45 => 15,  40 => 14,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <li>*/
/* 	<div id="notification_list" class="navbar-wrapper">*/
/*         <div class="navbar-notification">*/
/*             <div class="row">*/
/*              <div class="notification-content">*/
/* 			   <div id="about" class="nano">*/
/* 				<div class="nano-content">*/
/*                     <ul class="list-unstyled">*/
/* 					<!-- IF not .notifications -->*/
/* 						<li class="no_notifications">*/
/* 						 <div class="noti-bubble alert alert-default">{L_NO_NOTIFICATIONS}</div><i class="fa fa-check"></i>*/
/* 						</li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- BEGIN notifications -->*/
/* 						<li class="<!-- IF notifications.UNREAD -->noti-unread<!-- ENDIF --><!-- IF notifications.STYLING --> {notifications.STYLING}<!-- ENDIF --><!-- IF not notifications.URL --> no-url<!-- ENDIF -->">*/
/* 							<!-- IF notifications.UNREAD -->*/
/* 								<a href="{notifications.U_MARK_READ}" class="mark_read icon-mark btn btn-notification" data-ajax="notification.mark_read"><i class="fa fa-check"></i></a>*/
/* 							<!-- ELSE -->*/
/* 							    <a class="mark_read icon-mark-read btn-notification-read"><i class="fa fa-check"></i></a>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF notifications.UNREAD --><a class="tmp_read icon-mark-read btn-notification-read"><i class="fa fa-check"></i></a><!-- ENDIF -->*/
/* 							<!-- IF notifications.URL -->*/
/* 								<a class="notification-block" href="<!-- IF notifications.UNREAD -->{notifications.U_MARK_READ}" data-real-url="{notifications.URL}<!-- ELSE -->{notifications.URL}<!-- ENDIF -->">*/
/* 							<!-- ELSE -->*/
/* 							 <div class="notification-block">*/
/* 							<!-- ENDIF -->*/
/* 								<!-- IF notifications.AVATAR -->{notifications.AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/no_avatar.gif" alt="" /><!-- ENDIF -->*/
/* 								<div class="notification_text">*/
/* 									<p class="notification-title">{notifications.FORMATTED_TITLE}</p>*/
/* 									<!-- IF notifications.REFERENCE --><p class="notification-reference">{notifications.REFERENCE}</p><!-- ENDIF -->*/
/* 									<!-- IF notifications.FORUM --><p class="notification-forum">{notifications.FORUM}</p><!-- ENDIF -->*/
/* 									<!-- IF notifications.REASON --><p class="notification-reason">{notifications.REASON}</p><!-- ENDIF -->*/
/* 									<p class="notification-time pull-right"><i class="fa fa-clock-o"></i>&nbsp;{notifications.TIME}</p>*/
/* 								</div>*/
/* 							<!-- IF notifications.URL --></a><!-- ELSE --></div><!-- ENDIF -->*/
/* 						</li>*/
/* 					<!-- END notifications -->*/
/* 				    </ul>*/
/*                 </div>				*/
/*                </div>				*/
/*              </div>   */
/*             </div>*/
/* 		</div>*/
/* 	    <div class="navbar-footer">*/
/*             <div class="navbar-footer-content">*/
/*                 <div class="row">*/
/* 				   <div class="col-md-6 col-xs-6"><a class="btn btn-default btn-sm" href="{U_NOTIFICATION_SETTINGS}">{L_SETTINGS}</a></div>*/
/*                   <!-- IF NOTIFICATIONS_COUNT -->    */
/* 				   <div id="mark_all_notifications" class="col-md-6 col-xs-6"><a class="btn btn-default btn-sm pull-right" href="{U_MARK_ALL_NOTIFICATIONS}" data-ajax="notification.mark_all_read">{L_MARK_ALL_READ}</a></div>*/
/*                   <!-- ENDIF -->*/
/* 				</div>*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </li>*/
/* */
