<?php

/* ucp_header.html */
class __TwigTemplate_5372318d772ce231c4c9346de0f4fc1215fc87260cb2a8335c6e858ce7bbd61a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<h2>";
        echo $this->env->getExtension('phpbb')->lang("UCP");
        echo "</h2>
<div class=\"panel has-nav-tabs no-border\">
\t<ul class=\"nav nav-tabs\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 6
            echo "\t\t<li ";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", array())) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", array());
            echo "\">";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t</ul>

";
        // line 10
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 11
            echo "<form id=\"postform\" method=\"post\" action=\"";
            echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
            echo "\"";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
";
        }
        // line 13
        echo "
<div class=\"panel-content\">
 <div class=\"panel-body\">
  <div class=\"row\">
  
  <!-- col-md-12 ucp_footer
   <div class=\"col-md-12\">
   -->
   
<div class=\"col-md-3\">
\t<div class=\"list-group\">
\t\t";
        // line 24
        if ((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
            // line 25
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 26
                echo "\t\t\t\t";
                if (((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) &&  !$this->getAttribute($context["t_block2"], "S_LAST_ROW", array()))) {
                    // line 27
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                        // line 28
                        echo "\t\t\t\t\t <a class=\"list-group-item active\" href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\">";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 30
                        echo "\t\t\t\t\t <a class=\"list-group-item\" href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\">";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</a>
\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t";
                }
                // line 33
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "folder", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                echo "\t
\t\t\t\t";
                // line 36
                if ($this->getAttribute($context["folder"], "S_CUR_FOLDER", array())) {
                    // line 37
                    echo "\t\t\t\t <a class=\"list-group-item active\" href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo "</strong> <span class=\"badge\">";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo "</span>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t <a class=\"list-group-item\" href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo "</strong> <span class=\"badge\">";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo "</span>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</a>
\t\t\t\t";
                }
                // line 41
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t";
        }
        // line 43
        echo "
\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 45
            echo "\t\t\t";
            if ((((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && $this->getAttribute($context["t_block2"], "S_LAST_ROW", array())) ||  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null))) {
                // line 46
                echo "\t\t\t\t";
                if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                    // line 47
                    echo "\t\t\t\t\t<a class=\"list-group-item active\" href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\">";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t<a class=\"list-group-item\" href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\">";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "</a>
\t\t\t\t";
                }
                // line 51
                echo "\t\t\t";
            }
            // line 52
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</div>
\t\t
\t\t<div class=\"space10\"></div>
";
        // line 56
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
            // line 57
            echo "<div class=\"panel panel-default panel-poll\">
<div class=\"panel-body\">
 <div id=\"scrollbar-two\">
    <div class=\"scrollbar\"><div class=\"track\"><div class=\"thumb\"><div class=\"end\"></div></div></div></div>
     <div class=\"viewport\">
      <div class=\"overview\">
\t\t <ul class=\"media-list\">
\t\t  
\t\t  ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 66
                echo "\t\t  <li class=\"media friends-avatar\">
\t\t   ";
                // line 67
                if ( !$this->getAttribute($context["friends_online"], "AVATAR", array())) {
                    echo "<img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/user1.png\">";
                } else {
                    echo $this->getAttribute($context["friends_online"], "AVATAR", array());
                }
                // line 68
                echo "<div class=\"media-body\">
\t\t\t ";
                // line 69
                echo $this->getAttribute($context["friends_online"], "USERNAME_FULL", array());
                echo "
\t\t\t <p><small class=\"text-success\"><strong>";
                // line 70
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_ONLINE");
                echo "</strong></small>";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo "&nbsp;&nbsp;<button type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_online"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"btn btn-xs btn-success\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "</button>";
                }
                echo "</p>
\t\t   </div>
\t\t  </li>
\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t 
\t\t ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 76
                echo "\t\t  <li class=\"media friends-avatar\">
\t\t   ";
                // line 77
                if ( !$this->getAttribute($context["friends_offline"], "AVATAR", array())) {
                    echo "<img src=\"";
                    echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                    echo "/images/user4.png\">";
                } else {
                    echo $this->getAttribute($context["friends_offline"], "AVATAR", array());
                }
                // line 78
                echo "<div class=\"media-body\">
\t\t\t ";
                // line 79
                echo $this->getAttribute($context["friends_offline"], "USERNAME_FULL", array());
                echo "
\t\t\t <p><small class=\"text-danger\"><strong>";
                // line 80
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_OFFLINE");
                echo "</strong></small>";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo "&nbsp;&nbsp;<button type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_offline"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"btn btn-xs btn-default\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "</button>";
                }
                echo "</p>
\t\t   </div>
\t\t  </li>
\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t 
\t\t </ul>
    </div>
   </div>
</div>
 
</div>
</div>
";
        }
        // line 93
        echo "
";
        // line 94
        if ((isset($context["S_SHOW_COLOUR_LEGEND"]) ? $context["S_SHOW_COLOUR_LEGEND"] : null)) {
            // line 95
            echo "\t<div class=\"panel panel-default panel-poll\">
    <div class=\"panel-body\">
\t  <ul class=\"list-unstyled\">
\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_colour_info", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                echo " 
\t\t<li>
\t\t   <i class=\"fa fa-envelope";
                // line 100
                if ($this->getAttribute($context["pm_colour_info"], "CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute($context["pm_colour_info"], "CLASS", array());
                }
                echo "\"></i> ";
                if ($this->getAttribute($context["pm_colour_info"], "IMG", array())) {
                    echo $this->getAttribute($context["pm_colour_info"], "IMG", array());
                    echo " ";
                }
                echo $this->getAttribute($context["pm_colour_info"], "LANG", array());
                echo "
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t  </ul>
\t</div>
\t</div>
";
        }
        // line 107
        echo "</div>
   
<div class=\"col-md-9\">
  <div class=\"tab-content\">";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 107,  362 => 103,  344 => 100,  337 => 98,  332 => 95,  330 => 94,  327 => 93,  316 => 84,  296 => 80,  292 => 79,  289 => 78,  281 => 77,  278 => 76,  274 => 75,  271 => 74,  251 => 70,  247 => 69,  244 => 68,  236 => 67,  233 => 66,  229 => 65,  219 => 57,  217 => 56,  212 => 53,  206 => 52,  203 => 51,  195 => 49,  187 => 47,  184 => 46,  181 => 45,  177 => 44,  174 => 43,  171 => 42,  165 => 41,  149 => 39,  133 => 37,  131 => 36,  125 => 35,  122 => 34,  116 => 33,  113 => 32,  105 => 30,  97 => 28,  94 => 27,  91 => 26,  86 => 25,  84 => 24,  71 => 13,  63 => 11,  61 => 10,  57 => 8,  42 => 6,  38 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <h2>{L_UCP}</h2>*/
/* <div class="panel has-nav-tabs no-border">*/
/* 	<ul class="nav nav-tabs">*/
/* 		<!-- BEGIN t_block1 -->*/
/* 		<li <!-- IF t_block1.S_SELECTED -->class="active"<!-- ENDIF -->><a href="{t_block1.U_TITLE}">{t_block1.L_TITLE}</a></li>*/
/* 		<!-- END t_block1 -->*/
/* 	</ul>*/
/* */
/* <!-- IF S_COMPOSE_PM -->*/
/* <form id="postform" method="post" action="{S_POST_ACTION}"{S_FORM_ENCTYPE}>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="panel-content">*/
/*  <div class="panel-body">*/
/*   <div class="row">*/
/*   */
/*   <!-- col-md-12 ucp_footer*/
/*    <div class="col-md-12">*/
/*    -->*/
/*    */
/* <div class="col-md-3">*/
/* 	<div class="list-group">*/
/* 		<!-- IF S_PRIVMSGS -->*/
/* 			<!-- BEGIN t_block2 -->*/
/* 				<!-- IF S_PRIVMSGS and not t_block2.S_LAST_ROW -->*/
/* 					<!-- IF t_block2.S_SELECTED -->*/
/* 					 <a class="list-group-item active" href="{t_block2.U_TITLE}">{t_block2.L_TITLE}</a>*/
/* 					<!-- ELSE -->*/
/* 					 <a class="list-group-item" href="{t_block2.U_TITLE}">{t_block2.L_TITLE}</a>*/
/* 					<!-- ENDIF -->*/
/* 				<!-- ENDIF -->*/
/* 			<!-- END t_block2 -->*/
/* */
/* 			<!-- BEGIN folder -->	*/
/* 				<!-- IF folder.S_CUR_FOLDER -->*/
/* 				 <a class="list-group-item active" href="{folder.U_FOLDER}"><!-- IF folder.UNREAD_MESSAGES > 0 --><strong>{folder.FOLDER_NAME}</strong> <span class="badge">{folder.UNREAD_MESSAGES}</span><!-- ELSE -->{folder.FOLDER_NAME}<!-- ENDIF --></a>*/
/* 				<!-- ELSE -->*/
/* 				 <a class="list-group-item" href="{folder.U_FOLDER}"><!-- IF folder.UNREAD_MESSAGES > 0 --><strong>{folder.FOLDER_NAME}</strong> <span class="badge">{folder.UNREAD_MESSAGES}</span><!-- ELSE -->{folder.FOLDER_NAME}<!-- ENDIF --></a>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- END folder -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- BEGIN t_block2 -->*/
/* 			<!-- IF (S_PRIVMSGS and t_block2.S_LAST_ROW) or not S_PRIVMSGS -->*/
/* 				<!-- IF t_block2.S_SELECTED -->*/
/* 					<a class="list-group-item active" href="{t_block2.U_TITLE}">{t_block2.L_TITLE}</a>*/
/* 				<!-- ELSE -->*/
/* 					<a class="list-group-item" href="{t_block2.U_TITLE}">{t_block2.L_TITLE}</a>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END t_block2 -->*/
/* 	</div>*/
/* 		*/
/* 		<div class="space10"></div>*/
/* <!-- IF .friends_online or .friends_offline -->*/
/* <div class="panel panel-default panel-poll">*/
/* <div class="panel-body">*/
/*  <div id="scrollbar-two">*/
/*     <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>*/
/*      <div class="viewport">*/
/*       <div class="overview">*/
/* 		 <ul class="media-list">*/
/* 		  */
/* 		  <!-- BEGIN friends_online -->*/
/* 		  <li class="media friends-avatar">*/
/* 		   <!-- IF not friends_online.AVATAR --><img src="{T_THEME_PATH}/images/user1.png"><!-- ELSE -->{friends_online.AVATAR}<!-- ENDIF --->*/
/* 		   <div class="media-body">*/
/* 			 {friends_online.USERNAME_FULL}*/
/* 			 <p><small class="text-success"><strong>{L_FRIENDS_ONLINE}</strong></small><!-- IF S_SHOW_PM_BOX -->&nbsp;&nbsp;<button type="submit" name="add_to[{friends_online.USER_ID}]" value="{L_ADD}" class="btn btn-xs btn-success">{L_ADD}</button><!-- ENDIF --></p>*/
/* 		   </div>*/
/* 		  </li>*/
/* 		 <!-- END friends_online -->*/
/* 		 */
/* 		 <!-- BEGIN friends_offline -->*/
/* 		  <li class="media friends-avatar">*/
/* 		   <!-- IF not friends_offline.AVATAR --><img src="{T_THEME_PATH}/images/user4.png"><!-- ELSE -->{friends_offline.AVATAR}<!-- ENDIF --->*/
/* 		   <div class="media-body">*/
/* 			 {friends_offline.USERNAME_FULL}*/
/* 			 <p><small class="text-danger"><strong>{L_FRIENDS_OFFLINE}</strong></small><!-- IF S_SHOW_PM_BOX -->&nbsp;&nbsp;<button type="submit" name="add_to[{friends_offline.USER_ID}]" value="{L_ADD}" class="btn btn-xs btn-default">{L_ADD}</button><!-- ENDIF --></p>*/
/* 		   </div>*/
/* 		  </li>*/
/* 		 <!-- END friends_offline -->*/
/* 		 */
/* 		 </ul>*/
/*     </div>*/
/*    </div>*/
/* </div>*/
/*  */
/* </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SHOW_COLOUR_LEGEND -->*/
/* 	<div class="panel panel-default panel-poll">*/
/*     <div class="panel-body">*/
/* 	  <ul class="list-unstyled">*/
/* 		<!-- BEGIN pm_colour_info --> */
/* 		<li>*/
/* 		   <i class="fa fa-envelope<!-- IF pm_colour_info.CLASS --> {pm_colour_info.CLASS}<!-- ENDIF -->"></i> <!-- IF pm_colour_info.IMG -->{pm_colour_info.IMG} <!-- ENDIF -->{pm_colour_info.LANG}*/
/* 		</li>*/
/* 		<!-- END pm_colour_info -->*/
/* 	  </ul>*/
/* 	</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* </div>*/
/*    */
/* <div class="col-md-9">*/
/*   <div class="tab-content">*/
