<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_477b7f1275a91dd4e9854c0d66efcdb1323116ce40ef18fc57aed196a5351664 extends Twig_Template
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
        // line 2
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 3
            echo "<div class=\"btn-group hidden-xs\">
   \t";
            // line 4
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\"><i class=\"fa fa-envelope\"></i></a>";
            }
            // line 5
            echo "\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\"><i class=\"fa fa-print\"></i></a>";
            }
            // line 6
            echo "</div>

<div class=\"btn-group t-";
            // line 8
            if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\">
\t";
            // line 9
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 10
                echo "\t   <a href=\"";
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link btn btn-default t-icon\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"btn-group t-";
                if ( !(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\"></a>
\t";
            }
            // line 12
            echo "\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 13
                echo "\t <a href=\"";
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link t-icon btn btn-default t-";
                if ((isset($context["S_BOOKMARKED_TOPIC"]) ? $context["S_BOOKMARKED_TOPIC"] : null)) {
                    echo "bookmarked";
                } else {
                    echo "bookmark";
                }
                echo "\" title=\"";
                if ((isset($context["S_BOOKMARKED_TOPIC"]) ? $context["S_BOOKMARKED_TOPIC"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC_REMOVE");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                }
                echo "\" data-ajax=\"alt_text\" data-toggle-url=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\"></a>
\t";
            }
            // line 15
            echo "</div>
";
            // line 16
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\"><i class=\"fa fa-legal\"></i></a>";
            }
        }
        // line 18
        // line 19
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 19,  107 => 18,  98 => 16,  95 => 15,  75 => 13,  72 => 12,  56 => 10,  54 => 9,  46 => 8,  42 => 6,  33 => 5,  25 => 4,  22 => 3,  20 => 2,  19 => 1,);
    }
}
/* <!-- EVENT viewtopic_topic_tools_before -->*/
/* <!-- IF not S_IS_BOT and (U_WATCH_TOPIC or U_BOOKMARK_TOPIC or U_BUMP_TOPIC or U_EMAIL_TOPIC or U_PRINT_TOPIC or S_DISPLAY_TOPIC_TOOLS) -->*/
/* <div class="btn-group hidden-xs">*/
/*    	<!-- IF U_EMAIL_TOPIC --><a class="btn btn-default" href="{U_EMAIL_TOPIC}" title="{L_EMAIL_TOPIC}"><i class="fa fa-envelope"></i></a><!-- ENDIF -->*/
/* 	<!-- IF U_PRINT_TOPIC --><a class="btn btn-default" href="{U_PRINT_TOPIC}" title="{L_PRINT_TOPIC}" accesskey="p"><i class="fa fa-print"></i></a><!-- ENDIF -->*/
/* </div>*/
/* */
/* <div class="btn-group t-<!-- IF S_WATCHING_TOPIC -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->">*/
/* 	<!-- IF U_WATCH_TOPIC -->*/
/* 	   <a href="{U_WATCH_TOPIC}" class="watch-topic-link btn btn-default t-icon" title="{S_WATCH_TOPIC_TITLE}" data-ajax="toggle_link" data-toggle-class="btn-group t-<!-- IF not S_WATCHING_TOPIC -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-url="{U_WATCH_TOPIC_TOGGLE}" data-update-all=".watch-topic-link"></a>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF U_BOOKMARK_TOPIC -->*/
/* 	 <a href="{U_BOOKMARK_TOPIC}" class="bookmark-link t-icon btn btn-default t-<!-- IF S_BOOKMARKED_TOPIC -->bookmarked<!-- ELSE -->bookmark<!-- ENDIF -->" title="<!-- IF S_BOOKMARKED_TOPIC -->{L_BOOKMARK_TOPIC_REMOVE}<!-- ELSE -->{L_BOOKMARK_TOPIC}<!-- ENDIF -->" data-ajax="alt_text" data-toggle-url="{S_BOOKMARK_TOGGLE}" data-update-all=".bookmark-link"></a>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* <!-- IF U_BUMP_TOPIC --><a class="btn btn-default" href="{U_BUMP_TOPIC}" title="{L_BUMP_TOPIC}" data-ajax="true"><i class="fa fa-legal"></i></a><!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* <!-- EVENT viewtopic_topic_tools_after -->*/
/* */
/* */
/*     */
