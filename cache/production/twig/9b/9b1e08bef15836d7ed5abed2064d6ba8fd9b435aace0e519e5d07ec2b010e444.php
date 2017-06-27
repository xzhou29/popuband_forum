<?php

/* forumlist_body.html */
class __TwigTemplate_a0fb2d6b6e100859882d38c4768057744af47d8bc6f9ccd402a14a588d4c7eb7 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 2
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 3
                echo "\t    
\t\t<!-- Table footer not used at the moment
\t\t\t<tfoot>
             <tr>
                <th>Game Name</th>
                <th>Publisher</th>
                <th>Platform</th>
             </tr>
            </tfoot>
\t\tTable footer not used at the moment -->
\t\t\t
\t\t</table>
\t\t</div>
\t\t</div>
\t";
                // line 17
                echo "\t
\t";
            }
            // line 19
            echo "\t
    ";
            // line 20
            // line 21
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 22
                echo "\t   <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  ";
                // line 24
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } elseif ($this->getAttribute($context["forumrow"], "S_IS_LINK", array())) {
                    echo $this->env->getExtension('phpbb')->lang("LINKS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                // line 25
                echo "\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t\t";
                // line 29
                // line 30
                echo "\t\t\t<tr>
\t\t\t <th data-class=\"expand\">";
                // line 31
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</th>
\t\t\t <th class=\"large110\" data-hide=\"phone\">";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t <th class=\"large21\" data-hide=\"phone\">";
                // line 33
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</th>
\t\t\t</tr>
\t\t";
                // line 35
                echo "\t
\t\t</thead>
\t<tbody>
\t";
            }
            // line 39
            echo "\t";
            // line 40
            echo "\t
\t";
            // line 41
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 42
                echo "\t";
                // line 43
                echo "\t    <tr>
\t\t";
                // line 44
                // line 45
                echo "\t\t\t<td title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t";
                // line 46
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    // line 47
                    echo "\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>
\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t <i class=\"row-icon-font icon-moon-default";
                    // line 50
                    if ($this->getAttribute($context["forumrow"], "S_IS_LINK", array())) {
                        echo " icon-moon-link2";
                    }
                    if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                        echo " forum-unread";
                    } else {
                        echo " forum-read";
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                    echo "\"></i>
\t\t\t</span>
\t\t\t";
                }
                // line 53
                echo "\t\t\t<i class=\"row-icon-font-mini ";
                if ($this->getAttribute($context["forumrow"], "S_LOCKED_FORUM", array())) {
                    echo "icon-moon-lock forum-list-lock";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\"></i>
\t\t\t";
                // line 54
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    echo " <!-- <a class=\"btn-rss pull-right hidden-xs hidden-sm\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\"><i class=\"fa fa-rss rss-color-forum\"></i></a> --> ";
                }
                // line 55
                echo "\t\t\t  <span class=\"desc-wrapper\">
\t\t\t  ";
                // line 56
                // line 57
                echo "\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a><br />
\t\t\t\t";
                // line 58
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<span class=\"description\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                    echo "</span><br />";
                }
                // line 59
                echo "\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 60
                    echo "\t\t\t\t<span class=\"forum-mods\"><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>&nbsp;";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "</span>
\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t";
                if (($this->getAttribute($context["forumrow"], "SUBFORUMS", array()) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 63
                    echo "\t\t\t\t ";
                    // line 64
                    echo "\t\t\t\t <span class=\"subforums\">
\t\t\t\t  <strong>";
                    // line 65
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo "</strong>
                    ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        echo "\t\t\t\t  
\t\t\t\t     ";
                        // line 67
                        if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo "<i class=\"fa fa-external-link-square\"></i>&nbsp;";
                        }
                        echo "<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" ";
                        if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo "target=\"_blank\"";
                        }
                        echo " class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } elseif ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo $this->env->getExtension('phpbb')->lang("SUBFORUM_LINK");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 68
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " 
\t\t\t\t </span>
\t\t\t\t ";
                    // line 70
                    // line 71
                    echo "\t\t\t\t";
                }
                // line 72
                echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                // line 74
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 75
                    echo "\t\t\t<td colspan=\"2\"><span class=\"stats-wrapper\">";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_REDIRECTS");
                    echo "&nbsp;";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></td>
            ";
                } elseif ($this->getAttribute(                // line 76
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 77
                    echo "\t\t\t<td>&nbsp;</td>\t\t
\t\t\t<td>&nbsp;</td>\t\t\t\t
\t\t\t";
                } elseif ( !$this->getAttribute(                // line 79
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 80
                    echo "\t\t\t<td class=\"stats-col\">
\t\t\t <span class=\"stats-wrapper\">
\t\t\t ";
                    // line 82
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "&nbsp;<br />";
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo "&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo " 
\t\t\t ";
                    // line 83
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 84
                        echo "\t\t\t  <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("FORUMLIST_UNAPPROVED");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    } elseif ($this->getAttribute(                    // line 85
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 86
                        echo "\t\t\t  <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("FORUMLIST_UNAPPROVED_POST");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    }
                    // line 88
                    echo "\t\t\t ";
                    // line 89
                    echo "\t\t\t </span>
\t\t\t</td>\t
\t\t\t<td>
\t\t\t  <span class=\"last-wrapper text-overflow\">
\t\t\t   ";
                    // line 93
                    // line 94
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                        // line 95
                        echo "\t\t\t\t ";
                        // line 96
                        echo "\t\t\t\t <a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                        echo "\" title=\"\" class=\"lastsubject\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                        echo "</a><br />
\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo "&nbsp;";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t";
                        // line 99
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            echo "<a class=\"moderator-item\" href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                            echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
                        }
                        // line 100
                        echo "\t\t\t\t<br /><span class=\"forum-time\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "</span>";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "&nbsp;";
                    }
                    // line 101
                    echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                }
                // line 104
                echo "\t\t";
                echo "\t
\t\t</tr>
\t";
                // line 106
                echo "\t
\t";
            }
            // line 108
            echo "
\t";
            // line 109
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 110
                echo "\t </tbody>
\t</table>
\t</div>
\t</div>
\t";
                // line 114
                // line 115
                echo "\t";
            }
            // line 116
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            echo "\t<div class=\"well\">
\t\t<strong>";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 119,  389 => 118,  383 => 116,  380 => 115,  379 => 114,  373 => 110,  371 => 109,  368 => 108,  364 => 106,  359 => 104,  354 => 101,  346 => 100,  338 => 99,  330 => 98,  322 => 96,  320 => 95,  317 => 94,  316 => 93,  310 => 89,  308 => 88,  300 => 86,  298 => 85,  291 => 84,  289 => 83,  279 => 82,  275 => 80,  273 => 79,  269 => 77,  267 => 76,  260 => 75,  258 => 74,  254 => 72,  251 => 71,  250 => 70,  241 => 68,  211 => 67,  205 => 66,  201 => 65,  198 => 64,  196 => 63,  193 => 62,  184 => 60,  181 => 59,  175 => 58,  168 => 57,  167 => 56,  164 => 55,  152 => 54,  143 => 53,  128 => 50,  125 => 49,  119 => 47,  117 => 46,  112 => 45,  111 => 44,  108 => 43,  106 => 42,  104 => 41,  101 => 40,  99 => 39,  93 => 35,  88 => 33,  84 => 32,  80 => 31,  77 => 30,  76 => 29,  70 => 25,  58 => 24,  54 => 22,  51 => 21,  50 => 20,  47 => 19,  43 => 17,  27 => 3,  24 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN forumrow -->*/
/* 	<!-- IF (forumrow.S_IS_CAT and not forumrow.S_FIRST_ROW) or forumrow.S_NO_CAT  -->*/
/* 	    */
/* 		<!-- Table footer not used at the moment*/
/* 			<tfoot>*/
/*              <tr>*/
/*                 <th>Game Name</th>*/
/*                 <th>Publisher</th>*/
/*                 <th>Platform</th>*/
/*              </tr>*/
/*             </tfoot>*/
/* 		Table footer not used at the moment -->*/
/* 			*/
/* 		</table>*/
/* 		</div>*/
/* 		</div>*/
/* 	<!-- EVENT forumlist_body_category_footer -->	*/
/* 	<!-- ENDIF -->*/
/* 	*/
/*     <!-- EVENT forumlist_body_category_header_before -->*/
/* 	<!-- IF forumrow.S_IS_CAT or forumrow.S_FIRST_ROW or forumrow.S_NO_CAT -->*/
/* 	   <div class="panel panel-forum">*/
/* 	     <div class="panel-heading">*/
/* 		  <!-- IF forumrow.S_IS_CAT --><a href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a><!-- ELSEIF forumrow.S_IS_LINK -->{L_LINKS}<!-- ELSE -->{L_FORUM}<!-- ENDIF -->*/
/* 		 </div>*/
/* 		 <div class="panel-inner">*/
/* 		<table class="footable table table-striped table-primary table-hover">*/
/* 		<thead>*/
/* 		<!-- EVENT forumlist_body_category_header_row_prepend -->*/
/* 			<tr>*/
/* 			 <th data-class="expand">{L_TITLE}</th>*/
/* 			 <th class="large110" data-hide="phone">{L_TOPICS_POSTS_STATISTICS}</th>*/
/* 			 <th class="large21" data-hide="phone">{L_LAST_POST}</th>*/
/* 			</tr>*/
/* 		<!-- EVENT forumlist_body_category_header_row_append -->	*/
/* 		</thead>*/
/* 	<tbody>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT forumlist_body_category_header_after -->*/
/* 	*/
/* 	<!-- IF not forumrow.S_IS_CAT -->*/
/* 	<!-- EVENT forumlist_body_forum_row_before -->*/
/* 	    <tr>*/
/* 		<!-- EVENT forumlist_body_forum_row_prepend -->*/
/* 			<td title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/* 			<!-- IF forumrow.FORUM_IMAGE -->*/
/* 			<span class="forum-image">{forumrow.FORUM_IMAGE}</span>*/
/* 			<!-- ELSE -->*/
/* 			<span class="icon-wrapper">*/
/* 			 <i class="row-icon-font icon-moon-default<!-- IF forumrow.S_IS_LINK --> icon-moon-link2<!-- ENDIF --><!-- IF forumrow.S_UNREAD_FORUM --> forum-unread<!-- ELSE --> forum-read<!-- ENDIF -->" title="{forumrow.FORUM_FOLDER_IMG_ALT}"></i>*/
/* 			</span>*/
/* 			<!-- ENDIF -->*/
/* 			<i class="row-icon-font-mini <!-- IF forumrow.S_LOCKED_FORUM -->icon-moon-lock forum-list-lock<!-- ENDIF -->" title="{forumrow.FORUM_FOLDER_IMG_ALT}"></i>*/
/* 			<!-- IF S_ENABLE_FEEDS and forumrow.S_FEED_ENABLED --> <!-- <a class="btn-rss pull-right hidden-xs hidden-sm" title="{L_FEED} - {forumrow.FORUM_NAME}" href="{U_FEED}?f={forumrow.FORUM_ID}"><i class="fa fa-rss rss-color-forum"></i></a> --> <!-- ENDIF -->*/
/* 			  <span class="desc-wrapper">*/
/* 			  <!-- EVENT ss_forumlist_body_forum_row_desc_wrapper -->*/
/* 				<a href="{forumrow.U_VIEWFORUM}" class="forumtitle">{forumrow.FORUM_NAME}</a><br />*/
/* 				<!-- IF forumrow.FORUM_DESC --><span class="description">{forumrow.FORUM_DESC}</span><br /><!-- ENDIF -->*/
/* 				<!-- IF forumrow.MODERATORS -->*/
/* 				<span class="forum-mods"><strong>{forumrow.L_MODERATOR_STR}{L_COLON}</strong>&nbsp;{forumrow.MODERATORS}</span>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF forumrow.SUBFORUMS and forumrow.S_LIST_SUBFORUMS -->*/
/* 				 <!-- EVENT forumlist_body_subforums_before -->*/
/* 				 <span class="subforums">*/
/* 				  <strong>{forumrow.L_SUBFORUM_STR}</strong>*/
/*                     <!-- BEGIN subforum -->				  */
/* 				     <!-- IF forumrow.subforum.IS_LINK --><i class="fa fa-external-link-square"></i>&nbsp;<!-- ENDIF --><a href="{forumrow.subforum.U_SUBFORUM}" <!-- IF forumrow.subforum.IS_LINK -->target="_blank"<!-- ENDIF --> class="subforum<!-- IF forumrow.subforum.S_UNREAD --> unread<!-- ELSE --> read<!-- ENDIF -->" title="<!-- IF forumrow.subforum.S_UNREAD -->{L_UNREAD_POSTS}<!-- ELSEIF forumrow.subforum.IS_LINK -->{L_SUBFORUM_LINK}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{forumrow.subforum.SUBFORUM_NAME}</a><!-- IF not forumrow.subforum.S_LAST_ROW -->{L_COMMA_SEPARATOR}<!-- ENDIF -->*/
/* 					<!-- END subforum --> */
/* 				 </span>*/
/* 				 <!-- EVENT forumlist_body_subforums_after -->*/
/* 				<!-- ENDIF -->*/
/* 			  </span>*/
/* 			</td>*/
/* 			<!-- IF forumrow.CLICKS -->*/
/* 			<td colspan="2"><span class="stats-wrapper">{L_FORUM_REDIRECTS}&nbsp;{forumrow.CLICKS}</span></td>*/
/*             <!-- ELSEIF forumrow.S_IS_LINK -->*/
/* 			<td>&nbsp;</td>		*/
/* 			<td>&nbsp;</td>				*/
/* 			<!-- ELSEIF not forumrow.S_IS_LINK -->*/
/* 			<td class="stats-col">*/
/* 			 <span class="stats-wrapper">*/
/* 			 {forumrow.TOPICS}&nbsp;{L_TOPICS}&nbsp;<br />{forumrow.POSTS}&nbsp;{L_POSTS} */
/* 			 <!-- IF forumrow.U_UNAPPROVED_TOPICS -->*/
/* 			  <a href="{forumrow.U_UNAPPROVED_TOPICS}" title="{L_FORUMLIST_UNAPPROVED}"><i class="fa fa-question-circle"></i></a>*/
/* 			 <!-- ELSEIF forumrow.U_UNAPPROVED_POSTS -->*/
/* 			  <a href="{forumrow.U_UNAPPROVED_POSTS}" title="{L_FORUMLIST_UNAPPROVED_POST}"><i class="fa fa-question-circle"></i></a>*/
/* 			 <!-- ENDIF -->*/
/* 			 <!-- EVENT ss_forumlist_body_forum_row_stats_append -->*/
/* 			 </span>*/
/* 			</td>	*/
/* 			<td>*/
/* 			  <span class="last-wrapper text-overflow">*/
/* 			   <!-- EVENT titles_avatars_forumview -->*/
/* 				<!-- IF forumrow.S_DISPLAY_SUBJECT -->*/
/* 				 <!-- EVENT forumlist_body_last_post_title_prepend -->*/
/* 				 <a href="{forumrow.U_LAST_POST}" title="" class="lastsubject">{forumrow.LAST_POST_SUBJECT_TRUNCATED}</a><br />*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF forumrow.LAST_POST_TIME -->{L_POST_BY_AUTHOR}&nbsp;{forumrow.LAST_POSTER_FULL}*/
/* 				<!-- IF not S_IS_BOT --><a class="moderator-item" href="{forumrow.U_LAST_POST}" title="{L_FORUMLIST_LASTPOST}"><i class="mobile-post fa fa-sign-out"></i></a><!-- ENDIF -->*/
/* 				<br /><span class="forum-time">{forumrow.LAST_POST_TIME}</span><!-- ELSE -->{L_NO_POSTS}&nbsp;<!-- ENDIF -->*/
/* 			  </span>*/
/* 			</td>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- EVENT forumlist_body_forum_row_append -->	*/
/* 		</tr>*/
/* 	<!-- EVENT forumlist_body_forum_row_after -->	*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF forumrow.S_LAST_ROW -->*/
/* 	 </tbody>*/
/* 	</table>*/
/* 	</div>*/
/* 	</div>*/
/* 	<!-- EVENT forumlist_body_last_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<div class="well">*/
/* 		<strong>{L_NO_FORUMS}</strong>*/
/* 	</div>*/
/* <!-- END forumrow -->*/
/* */
