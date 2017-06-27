<?php

/* posting_editor.html */
class __TwigTemplate_167f5d48f709e50e34fccc3935ff69aeef4daea860a85002465b2402896ba980 extends Twig_Template
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
        echo "<fieldset>
\t";
        // line 2
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 3
            echo "\t<div class=\"space10\"></div>
\t <div class=\"space10\"></div>
\t<div class=\"alert alert-info fade in\">
       ";
            // line 6
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "
    </div>
\t";
        }
        // line 9
        echo "
\t";
        // line 10
        if (((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null) || (isset($context["S_SHOW_PM_ICONS"]) ? $context["S_SHOW_PM_ICONS"] : null))) {
            // line 11
            echo "\t<div class=\"hidden-xs\">
\t <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"icon\">";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t <div class=\"controls controls-row\"> 
      <div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\"><label for=\"icon\">";
            // line 15
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label></div>
     ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\"><label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"\" title=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_NAME", array());
                echo "\" /></label></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t </div> 
\t </div>
\t</div>
\t";
        }
        // line 21
        echo "
\t";
        // line 22
        if (( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && (isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null))) {
            // line 23
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
\t<div class=\"input-icon left\">
\t  <i class=\"fa fa-user\"></i>
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" tabindex=\"1\" name=\"username\" id=\"username\" value=\"";
            // line 28
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\">
\t </div> 
\t</div> 
\t</div>
\t";
        }
        // line 33
        echo "
    ";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        if ((((isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null) || (isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) || (isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            // line 37
            echo "\t<div class=\"control-group\"> 
\t<label class=\"control-label\" for=\"subject\">";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div class=\"row\">
\t <div class=\"";
            // line 40
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "col-md-12";
            } else {
                echo "col-xs-12 col-lg-8";
            }
            echo "\">
     ";
            // line 41
            echo "  
\t   <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "\" name=\"subject\" id=\"subject\" maxlength=\"";
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "100";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo (isset($context["DRAFT_SUBJECT"]) ? $context["DRAFT_SUBJECT"] : null);
            echo "\">
\t ";
            // line 43
            // line 44
            echo "\t </div> 
\t </div> 
\t </div>
\t ";
            // line 47
            if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
                // line 48
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 49
                echo "\t\t";
                $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "posting_editor.html", 49)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 50
                echo "\t ";
            }
            // line 51
            echo "\t";
        }
        // line 52
        echo "
    ";
        // line 53
        // line 54
        echo "\t
\t ";
        // line 55
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 55)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 56
        echo "
\t <div class=\"space10\"></div>

 <div class=\"row\">
\t";
        // line 60
        // line 61
        echo "    <div class=\"";
        if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
            echo "col-md-12";
        } else {
            echo "col-md-8";
        }
        echo "\"> 
      <span id=\"dragNdrop\">
\t   <textarea class=\"form-control\" rows=\"10\" ";
        // line 63
        if ((((isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null) &&  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) &&  !(isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            echo "name=\"signature\" id=\"signature\" ";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" placeholder=\"\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo (isset($context["DRAFT_MESSAGE"]) ? $context["DRAFT_MESSAGE"] : null);
        echo (isset($context["IMGUR_IMAGE"]) ? $context["IMGUR_IMAGE"] : null);
        echo (isset($context["GYAZO_IMAGE"]) ? $context["GYAZO_IMAGE"] : null);
        echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
        echo "</textarea>
\t  </span> 
\t</div>
\t";
        // line 66
        // line 67
        echo "
\t<div class=\"col-md-4\">
    ";
        // line 69
        echo "\t
\t\t
\t\t";
        // line 71
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
            // line 72
            echo "\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("SMILIES");
            echo "
\t\t  ";
            // line 73
            if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
                // line 74
                echo "\t\t\t<a class=\"btn-link btn-xs\" href=\"";
                echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
                echo "\" onclick=\"popup(this.href, 450, 350, '_phpbbsmilies'); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
                echo "\"><i class=\"fa fa-plus\"></i></a>
\t\t  ";
            }
            // line 76
            echo "\t\t</strong><br />
\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 78
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t";
        }
        // line 81
        echo "\t\t
\t<div class=\"hidden-xs\">\t
    ";
        // line 83
        // line 84
        echo "\t\t";
        if ((isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null)) {
            // line 85
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()))) {
                echo "<hr />";
            }
            // line 86
            echo "\t\t";
            echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
            echo "<br />
\t\t";
            // line 87
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 88
                echo "\t\t\t";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo "<br />
\t\t\t";
                // line 89
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo "<br />
\t\t\t";
                // line 90
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo "<br />
\t\t";
            }
            // line 92
            echo "\t\t";
            echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
            echo "
\t\t";
        }
        // line 94
        echo "\t\t";
        if (((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null) || (isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null))) {
            // line 95
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<hr />";
            }
            // line 96
            echo "\t\t\t";
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "<strong><a href=\"";
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 97
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<strong><a href=\"#topic-review\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 98
            echo "\t\t";
        }
        // line 99
        echo "\t </div>
\t</div>
 </div>
</fieldset>

";
        // line 104
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 105
            echo "
";
            // line 106
            if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
                // line 107
                echo "</div> <!-- // needed for posting_pm_layout.html to close the tabbed panel -->
";
            }
            // line 108
            echo "\t

<div class=\"space10\"></div>

\t";
            // line 112
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 113
                echo "\t\t<fieldset class=\"form-actions\">
\t\t\t";
                // line 114
                echo (isset($context["S_HIDDEN_ADDRESS_FIELD"]) ? $context["S_HIDDEN_ADDRESS_FIELD"] : null);
                echo "
\t\t\t";
                // line 115
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 116
                // line 117
                echo "\t\t\t";
                if ((isset($context["S_HAS_DRAFTS"]) ? $context["S_HAS_DRAFTS"] : null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOADING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" onclick=\"load_draft = true;\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "</span><i class=\"visible-xs fa fa-upload fa-btn-fx\"></i></button>";
                }
                // line 118
                echo "\t\t\t";
                if ((isset($context["S_SAVE_ALLOWED"]) ? $context["S_SAVE_ALLOWED"] : null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\"><span class=\"hidden-xs\">";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "</span><i class=\"visible-xs fa fa-floppy-o fa-btn-fx\"></i></button>";
                }
                // line 119
                echo "\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\"";
                if ( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " >";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "</button>
\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                // line 120
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</button>
\t\t</fieldset>
\t";
            }
            // line 123
            echo "\t
<div class=\"space10\"></div>

";
            // line 126
            if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                // line 127
                echo "<script>
function addClass(e,s){e.classList?e.classList.add(s):e.className+=\" \"+s}function removeClass(e,s){e.classList?e.classList.remove(s):e.className=e.className.replace(new RegExp(\"(^|\\\\b)\"+s.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function txtDropClicked(){removeClassesOnFocus(!1),addClass(document.getElementById(\"message\"),\"dropzone-wrap\"),addClass(document.getElementById(\"dragNdrop\"),\"dropzone-content\")}function removeClassesOnFocus(e){var s=e===!1?document.getElementById(\"message\"):e.target;removeClass(s,\"dropzone-wrap\"),removeClass(s.parentNode,\"dropzone-content\")}window.addEventListener(\"load\",function(){document.getElementById(\"ToggleTxTDrop\").addEventListener(\"click\",txtDropClicked),document.getElementById(\"message\").addEventListener(\"focus\",removeClassesOnFocus)});
</script>
";
            }
            // line 131
            echo "
    <!-- // panel has-nav-tabs no-border with tab start tag here posting_layout.html -->
    <!-- // we also need to hide the tabbed panel if in drafts and the PM attach option is disabled -->
\t<div";
            // line 134
            if (((isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) &&  !(isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null))) {
                echo " style=\"display:none;\"";
            }
            echo " class=\"panel has-nav-tabs panel-default\">
\t\t\t<ul class=\"nav nav-tabs\">\t
\t\t\t\t<li ";
            // line 136
            if ((isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo " class=\"";
            if (((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null) || (isset($context["GYAZO_DIRECT_LINK"]) ? $context["GYAZO_DIRECT_LINK"] : null))) {
            } else {
                echo "active";
            }
            echo "\"><a data-toggle=\"tab\" href=\"#options-panel-below\"><span>";
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</span></a></li>
\t\t\t\t";
            // line 137
            if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                echo "<li class=\"";
                if ((isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-attach-body-html\" id=\"ToggleTxTDrop\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ADD_ATTACHMENT");
                echo "</span></a></li>";
            }
            // line 138
            echo "\t\t\t\t";
            if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "posting") && (isset($context["IN_IMGUR"]) ? $context["IN_IMGUR"] : null))) {
                echo "<li class=\"";
                if ((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-imgur-html\"><span>";
                echo $this->env->getExtension('phpbb')->lang("IMGUR_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 139
            echo "\t\t\t\t";
            if ((((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "posting") && (isset($context["IN_GYAZO"]) ? $context["IN_GYAZO"] : null))) {
                echo "<li class=\"";
                if ((isset($context["GYAZO_DIRECT_LINK"]) ? $context["GYAZO_DIRECT_LINK"] : null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-gyazo-html\"><span>";
                echo $this->env->getExtension('phpbb')->lang("GYAZO_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 140
            echo "\t\t\t\t";
            if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-poll-html\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                echo "</span></a></li>";
            }
            // line 141
            echo "\t\t\t";
            // line 142
            echo "\t\t\t</ul>
\t
    <div class=\"tab-content panel-content\">
\t   
\t\t<div class=\"panel-body tab-pane";
            // line 146
            if (((isset($context["IMGUR_DELETEHASH"]) ? $context["IMGUR_DELETEHASH"] : null) || (isset($context["GYAZO_DIRECT_LINK"]) ? $context["GYAZO_DIRECT_LINK"] : null))) {
            } else {
                echo " active";
            }
            echo "\" id=\"options-panel-below\">
\t\t
\t\t";
            // line 148
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 149
                echo "\t\t<fieldset>
\t\t";
                // line 150
                // line 151
                echo "\t\t\t";
                if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                    // line 152
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_bbcode\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
                    echo "</label>
\t\t\t";
                }
                // line 154
                echo "\t\t\t";
                if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
                    // line 155
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_smilies\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
                    echo "</label>
\t\t\t";
                }
                // line 157
                echo "\t\t\t";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 158
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"disable_magic_url\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
                    echo "</label>
\t\t\t";
                }
                // line 160
                echo "\t\t\t";
                if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
                    // line 161
                    echo "\t\t\t <input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"attach_sig\">";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
                    echo "</label>
\t\t\t";
                }
                // line 163
                echo "\t\t\t";
                if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
                    // line 164
                    echo "\t\t\t <input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"notify\">";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
                    echo "</label>
\t\t\t";
                }
                // line 166
                echo "\t\t\t";
                if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
                    // line 167
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"lock_topic\">";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</label>
\t\t\t";
                }
                // line 169
                echo "\t\t\t";
                if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
                    // line 170
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"lock_post\">";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                    echo "&#93;</label>
\t\t\t";
                }
                // line 172
                echo "\t\t\t";
                if ((((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null) || (isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null)) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 173
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 175
                echo "\t\t\t";
                if (((isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null) || (isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null))) {
                    // line 176
                    echo "\t\t\t <input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    echo (isset($context["S_SOFTDELETE_CHECKED"]) ? $context["S_SOFTDELETE_CHECKED"] : null);
                    echo "><label class=\"check-control\" for=\"delete\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_SOFT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_SOFT_WARN");
                    echo "&#93;</label>
\t\t\t <input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\"><label class=\"check-control\" for=\"delete_permanent\">";
                    // line 177
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENT");
                    echo "&nbsp;&#91;";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENT_WARN");
                    echo "&#93;</label>\t
\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 180
                echo "\t\t\t
\t\t\t";
                // line 181
                if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
                    // line 182
                    echo "\t\t    <div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_type-0\">";
                    // line 183
                    if ((isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                    }
                    echo ":</label>
\t         <div class=\"controls controls-row\"> 
             ";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        // line 186
                        echo "\t\t\t  <input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"";
                        echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                        echo "><label class=\"radio-inline\" for=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\">";
                        echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                        echo "</label>
\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "\t         </div> 
\t\t\t <div class=\"space10\"></div>
\t        </div>
\t\t\t";
                }
                // line 192
                echo "
\t\t\t";
                // line 193
                if (((isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 194
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_time_limit\">";
                    // line 195
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label><span class=\"help-block\">";
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</span>
\t\t\t<div class=\"input-group col-xs-8 col-sm-2 col-md-2\">
\t\t       <input type=\"number\" class=\"form-control input-sm\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 197
                    echo (isset($context["TOPIC_TIME_LIMIT"]) ? $context["TOPIC_TIME_LIMIT"] : null);
                    echo "\">
\t\t      <span class=\"input-group-addon\">";
                    // line 198
                    echo $this->env->getExtension('phpbb')->lang("DAYS");
                    echo "</span>
\t         </div>
\t\t\t <div class=\"space10\"></div>
\t       </div>
\t\t\t";
                }
                // line 203
                echo "\t\t\t
\t\t\t";
                // line 204
                if ((isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) {
                    // line 205
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"edit_reason\">";
                    // line 206
                    echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t        <div class=\"row\"> 
\t\t\t<div class=\"col-xs-8 col-sm-5 col-md-5\"> 
             <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
                    // line 209
                    echo $this->env->getExtension('phpbb')->lang("EDIT_LINK_PLACEHOLDER");
                    echo "\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                    echo "\">
\t        </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 214
                echo "\t\t ";
                echo "\t
\t\t</fieldset>
\t\t";
            }
            // line 217
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 217,  748 => 214,  738 => 209,  731 => 206,  728 => 205,  726 => 204,  723 => 203,  715 => 198,  711 => 197,  703 => 195,  700 => 194,  698 => 193,  695 => 192,  689 => 188,  672 => 186,  668 => 185,  659 => 183,  656 => 182,  654 => 181,  651 => 180,  643 => 177,  634 => 176,  631 => 175,  627 => 173,  624 => 172,  614 => 170,  611 => 169,  603 => 167,  600 => 166,  592 => 164,  589 => 163,  581 => 161,  578 => 160,  570 => 158,  567 => 157,  559 => 155,  556 => 154,  548 => 152,  545 => 151,  544 => 150,  541 => 149,  539 => 148,  531 => 146,  525 => 142,  523 => 141,  516 => 140,  504 => 139,  492 => 138,  482 => 137,  469 => 136,  462 => 134,  457 => 131,  451 => 127,  449 => 126,  444 => 123,  434 => 120,  421 => 119,  410 => 118,  399 => 117,  398 => 116,  394 => 115,  390 => 114,  387 => 113,  385 => 112,  379 => 108,  375 => 107,  373 => 106,  370 => 105,  368 => 104,  361 => 99,  358 => 98,  351 => 97,  342 => 96,  337 => 95,  334 => 94,  328 => 92,  323 => 90,  319 => 89,  314 => 88,  312 => 87,  307 => 86,  302 => 85,  299 => 84,  298 => 83,  294 => 81,  291 => 80,  272 => 78,  268 => 77,  265 => 76,  257 => 74,  255 => 73,  250 => 72,  248 => 71,  244 => 69,  240 => 67,  239 => 66,  223 => 63,  213 => 61,  212 => 60,  206 => 56,  194 => 55,  191 => 54,  190 => 53,  187 => 52,  184 => 51,  181 => 50,  168 => 49,  164 => 48,  162 => 47,  157 => 44,  156 => 43,  142 => 42,  139 => 41,  131 => 40,  125 => 38,  122 => 37,  120 => 36,  117 => 35,  116 => 34,  113 => 33,  105 => 28,  97 => 24,  94 => 23,  92 => 22,  89 => 21,  83 => 17,  58 => 16,  50 => 15,  44 => 13,  40 => 11,  38 => 10,  35 => 9,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/* 	<!-- IF ERROR -->*/
/* 	<div class="space10"></div>*/
/* 	 <div class="space10"></div>*/
/* 	<div class="alert alert-info fade in">*/
/*        {ERROR}*/
/*     </div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SHOW_TOPIC_ICONS or S_SHOW_PM_ICONS -->*/
/* 	<div class="hidden-xs">*/
/* 	 <div class="control-group"> */
/* 	   <label class="control-label" for="icon">{L_ICON}{L_COLON}</label>*/
/* 	 <div class="controls controls-row"> */
/*       <div class="radio"><input type="radio" name="icon" id="icon" value="0" checked="checked" tabindex="1"><label for="icon"><!-- IF S_SHOW_TOPIC_ICONS -->{L_NO_TOPIC_ICON}<!-- ELSE -->{L_NO_PM_ICON}<!-- ENDIF --></label></div>*/
/*      <!-- BEGIN topic_icon --><div class="radio"><input type="radio" name="icon" id="icon-{topic_icon.ICON_ID}" value="{topic_icon.ICON_ID}" {topic_icon.S_ICON_CHECKED} tabindex="1"><label for="icon-{topic_icon.ICON_ID}"><img src="{topic_icon.ICON_IMG}" width="{topic_icon.ICON_WIDTH}" height="{topic_icon.ICON_HEIGHT}" alt="" title="{topic_icon.ICON_NAME}" /></label></div><!-- END topic_icon -->*/
/* 	 </div> */
/* 	 </div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_PRIVMSGS and S_DISPLAY_USERNAME -->*/
/* 	<div class="control-group"> */
/* 	   <label class="control-label" for="username">{L_USERNAME}{L_COLON}</label>*/
/* 	<div class="controls controls-row"> */
/* 	<div class="input-icon left">*/
/* 	  <i class="fa fa-user"></i>*/
/*        <input type="text" class="form-control input-sm" placeholder="" tabindex="1" name="username" id="username" value="{USERNAME}">*/
/* 	 </div> */
/* 	</div> */
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/*     <!-- EVENT posting_editor_subject_before -->*/
/* */
/* 	<!-- IF S_POST_ACTION or S_PRIVMSGS or S_EDIT_DRAFT -->*/
/* 	<div class="control-group"> */
/* 	<label class="control-label" for="subject">{L_SUBJECT}{L_COLON}</label>*/
/* 	<div class="row">*/
/* 	 <div class="<!-- IF S_EDIT_DRAFT -->col-md-12<!-- ELSE -->col-xs-12 col-lg-8<!-- ENDIF -->">*/
/*      <!-- EVENT posting_editor_subject_prefix -->  */
/* 	   <input type="text" class="form-control input-sm" placeholder="{L_SUBJECT}{L_COLON}" name="subject" id="subject" maxlength="<!-- IF S_NEW_MESSAGE -->100<!-- ELSE -->124<!-- ENDIF -->" tabindex="2" value="{SUBJECT}{DRAFT_SUBJECT}">*/
/* 	 <!-- EVENT posting_editor_subject_postfix -->*/
/* 	 </div> */
/* 	 </div> */
/* 	 </div>*/
/* 	 <!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 		<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 		<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 	 <!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/*     <!-- EVENT posting_editor_subject_after -->*/
/* 	*/
/* 	 <!-- INCLUDE posting_buttons.html -->*/
/* */
/* 	 <div class="space10"></div>*/
/* */
/*  <div class="row">*/
/* 	<!-- EVENT posting_editor_message_before -->*/
/*     <div class="<!-- IF S_EDIT_DRAFT -->col-md-12<!-- ELSE -->col-md-8<!-- ENDIF -->"> */
/*       <span id="dragNdrop">*/
/* 	   <textarea class="form-control" rows="10" <!-- IF S_UCP_ACTION and not S_PRIVMSGS and not S_EDIT_DRAFT -->name="signature" id="signature" <!-- ELSE -->name="message" id="message"<!-- ENDIF --> tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();" placeholder="">{MESSAGE}{DRAFT_MESSAGE}{IMGUR_IMAGE}{GYAZO_IMAGE}{SIGNATURE}</textarea>*/
/* 	  </span> */
/* 	</div>*/
/* 	<!-- EVENT posting_editor_message_after -->*/
/* */
/* 	<div class="col-md-4">*/
/*     <!-- EVENT posting_editor_smilies_before -->	*/
/* 		*/
/* 		<!-- IF S_SMILIES_ALLOWED and .smiley -->*/
/* 		<strong>{L_SMILIES}*/
/* 		  <!-- IF S_SHOW_SMILEY_LINK and S_SMILIES_ALLOWED -->*/
/* 			<a class="btn-link btn-xs" href="{U_MORE_SMILIES}" onclick="popup(this.href, 450, 350, '_phpbbsmilies'); return false;" title="{L_MORE_SMILIES}"><i class="fa fa-plus"></i></a>*/
/* 		  <!-- ENDIF -->*/
/* 		</strong><br />*/
/* 			<!-- BEGIN smiley -->*/
/* 				<a href="#" onclick="insert_text('{smiley.A_SMILEY_CODE}', true); return false;"><img src="{smiley.SMILEY_IMG}" width="{smiley.SMILEY_WIDTH}" height="{smiley.SMILEY_HEIGHT}" alt="{smiley.SMILEY_CODE}" title="{smiley.SMILEY_DESC}" /></a>*/
/* 			<!-- END smiley -->*/
/* 		<!-- ENDIF -->*/
/* 		*/
/* 	<div class="hidden-xs">	*/
/*     <!-- EVENT posting_editor_smilies_after -->*/
/* 		<!-- IF BBCODE_STATUS -->*/
/* 		<!-- IF .smiley --><hr /><!-- ENDIF -->*/
/* 		{BBCODE_STATUS}<br />*/
/* 		<!-- IF S_BBCODE_ALLOWED -->*/
/* 			{IMG_STATUS}<br />*/
/* 			{FLASH_STATUS}<br />*/
/* 			{URL_STATUS}<br />*/
/* 		<!-- ENDIF -->*/
/* 		{SMILIES_STATUS}*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_EDIT_DRAFT || S_DISPLAY_REVIEW -->*/
/* 			<!-- IF S_DISPLAY_REVIEW --><hr /><!-- ENDIF -->*/
/* 			<!-- IF S_EDIT_DRAFT --><strong><a href="{S_UCP_ACTION}">{L_BACK_TO_DRAFTS}</a></strong><!-- ENDIF -->*/
/* 			<!-- IF S_DISPLAY_REVIEW --><strong><a href="#topic-review">{L_TOPIC_REVIEW}</a></strong><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	 </div>*/
/* 	</div>*/
/*  </div>*/
/* </fieldset>*/
/* */
/* <!-- IF $EXTRA_POSTING_OPTIONS eq 1 -->*/
/* */
/* <!-- IF S_COMPOSE_PM -->*/
/* </div> <!-- // needed for posting_pm_layout.html to close the tabbed panel -->*/
/* <!-- ENDIF -->	*/
/* */
/* <div class="space10"></div>*/
/* */
/* 	<!-- IF not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 		<fieldset class="form-actions">*/
/* 			{S_HIDDEN_ADDRESS_FIELD}*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			<!-- EVENT posting_editor_submit_buttons -->*/
/* 			<!-- IF S_HAS_DRAFTS --><button type="submit" class="btn btn-default" data-loading-text="{L_LOADING}&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>" accesskey="d" tabindex="8" name="load" value="{L_LOAD_DRAFT}" onclick="load_draft = true;"><span class="hidden-xs">{L_LOAD_DRAFT}</span><i class="visible-xs fa fa-upload fa-btn-fx"></i></button><!-- ENDIF -->*/
/* 			<!-- IF S_SAVE_ALLOWED --><button type="submit" class="btn btn-default" data-loading-text="{L_SAVING}&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>" accesskey="k" tabindex="7" name="save" value="{L_SAVE_DRAFT}"><span class="hidden-xs">{L_SAVE_DRAFT}</span><i class="visible-xs fa fa-floppy-o fa-btn-fx"></i></button><!-- ENDIF -->*/
/* 			<button type="submit" class="btn btn-default" data-loading-text="{L_LOADING}&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>" tabindex="5" name="preview" value="{L_PREVIEW}"<!-- IF not S_PRIVMSGS --> onclick="document.getElementById('postform').action += '#preview';"<!-- ENDIF --> >{L_PREVIEW}</button>*/
/* 			<button type="submit" class="btn btn-default" data-loading-text="{L_LOADING}&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>" accesskey="s" tabindex="6" name="post" value="{L_SUBMIT}">{L_SUBMIT}</button>*/
/* 		</fieldset>*/
/* 	<!-- ENDIF -->*/
/* 	*/
/* <div class="space10"></div>*/
/* */
/* <!-- IF S_SHOW_ATTACH_BOX -->*/
/* <script>*/
/* function addClass(e,s){e.classList?e.classList.add(s):e.className+=" "+s}function removeClass(e,s){e.classList?e.classList.remove(s):e.className=e.className.replace(new RegExp("(^|\\b)"+s.split(" ").join("|")+"(\\b|$)","gi")," ")}function txtDropClicked(){removeClassesOnFocus(!1),addClass(document.getElementById("message"),"dropzone-wrap"),addClass(document.getElementById("dragNdrop"),"dropzone-content")}function removeClassesOnFocus(e){var s=e===!1?document.getElementById("message"):e.target;removeClass(s,"dropzone-wrap"),removeClass(s.parentNode,"dropzone-content")}window.addEventListener("load",function(){document.getElementById("ToggleTxTDrop").addEventListener("click",txtDropClicked),document.getElementById("message").addEventListener("focus",removeClassesOnFocus)});*/
/* </script>*/
/* <!-- ENDIF -->*/
/* */
/*     <!-- // panel has-nav-tabs no-border with tab start tag here posting_layout.html -->*/
/*     <!-- // we also need to hide the tabbed panel if in drafts and the PM attach option is disabled -->*/
/* 	<div<!-- IF S_SHOW_DRAFTS and not S_SHOW_ATTACH_BOX --> style="display:none;"<!-- ENDIF --> class="panel has-nav-tabs panel-default">*/
/* 			<ul class="nav nav-tabs">	*/
/* 				<li <!-- IF S_SHOW_DRAFTS -->style="display:none;"<!-- ENDIF --> class="<!-- IF IMGUR_DELETEHASH or GYAZO_DIRECT_LINK --><!-- ELSE -->active<!-- ENDIF -->"><a data-toggle="tab" href="#options-panel-below"><span>{L_OPTIONS}</span></a></li>*/
/* 				<!-- IF S_SHOW_ATTACH_BOX --><li class="<!-- IF S_SHOW_DRAFTS -->active<!-- ENDIF -->"><a data-toggle="tab" href="#posting-attach-body-html" id="ToggleTxTDrop"><span>{L_ADD_ATTACHMENT}</span></a></li><!-- ENDIF -->*/
/* 				<!-- IF SCRIPT_NAME == "posting" and IN_IMGUR --><li class="<!-- IF IMGUR_DELETEHASH -->active<!-- ENDIF -->"><a data-toggle="tab" href="#posting-imgur-html"><span>{L_IMGUR_UPLOAD_TITLE}</span></a></li><!-- ELSE --><!-- ENDIF -->*/
/* 				<!-- IF SCRIPT_NAME == "posting" and IN_GYAZO --><li class="<!-- IF GYAZO_DIRECT_LINK -->active<!-- ENDIF -->"><a data-toggle="tab" href="#posting-gyazo-html"><span>{L_GYAZO_UPLOAD_TITLE}</span></a></li><!-- ELSE --><!-- ENDIF -->*/
/* 				<!-- IF S_SHOW_POLL_BOX || S_POLL_DELETE --><li class=""><a data-toggle="tab" href="#posting-poll-html"><span>{L_ADD_POLL}</span></a></li><!-- ENDIF -->*/
/* 			<!-- EVENT posting_editor_add_panel_tab -->*/
/* 			</ul>*/
/* 	*/
/*     <div class="tab-content panel-content">*/
/* 	   */
/* 		<div class="panel-body tab-pane<!-- IF IMGUR_DELETEHASH or GYAZO_DIRECT_LINK --><!-- ELSE --> active<!-- ENDIF -->" id="options-panel-below">*/
/* 		*/
/* 		<!-- IF not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 		<fieldset>*/
/* 		<!-- EVENT posting_editor_options_prepend -->*/
/* 			<!-- IF S_BBCODE_ALLOWED -->*/
/* 			 <input type="checkbox" name="disable_bbcode" id="disable_bbcode"{S_BBCODE_CHECKED}><label class="check-control" for="disable_bbcode">{L_DISABLE_BBCODE}</label>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_SMILIES_ALLOWED -->*/
/* 			 <input type="checkbox" name="disable_smilies" id="disable_smilies"{S_SMILIES_CHECKED}><label class="check-control" for="disable_smilies">{L_DISABLE_SMILIES}</label>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LINKS_ALLOWED -->*/
/* 			 <input type="checkbox" name="disable_magic_url" id="disable_magic_url"{S_MAGIC_URL_CHECKED}><label class="check-control" for="disable_magic_url">{L_DISABLE_MAGIC_URL}</label>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_SIG_ALLOWED -->*/
/* 			 <input type="checkbox" name="attach_sig" id="attach_sig"{S_SIGNATURE_CHECKED}><label class="check-control" for="attach_sig">{L_ATTACH_SIG}</label>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_NOTIFY_ALLOWED -->*/
/* 			 <input type="checkbox" name="notify" id="notify"{S_NOTIFY_CHECKED}><label class="check-control" for="notify">{L_NOTIFY_REPLY}</label>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LOCK_TOPIC_ALLOWED -->*/
/* 			 <input type="checkbox" name="lock_topic" id="lock_topic"{S_LOCK_TOPIC_CHECKED}><label class="check-control" for="lock_topic">{L_LOCK_TOPIC}</label>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LOCK_POST_ALLOWED -->*/
/* 			 <input type="checkbox" name="lock_post" id="lock_post"{S_LOCK_POST_CHECKED}><label class="check-control" for="lock_post">{L_LOCK_POST}&nbsp;&#91;{L_LOCK_POST_EXPLAIN}&#93;</label>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_TYPE_TOGGLE or S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<hr class="dashed" />*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_SOFTDELETE_ALLOWED or S_DELETE_ALLOWED -->*/
/* 			 <input type="checkbox" name="delete" id="delete" {S_SOFTDELETE_CHECKED}><label class="check-control" for="delete">{L_DELETE_POST_SOFT}&nbsp;&#91;{L_DELETE_POST_SOFT_WARN}&#93;</label>*/
/* 			 <input type="checkbox" name="delete_permanent" id="delete_permanent"><label class="check-control" for="delete_permanent">{L_DELETE_POST_PERMANENT}&nbsp;&#91;{L_DELETE_POST_PERMANENT_WARN}&#93;</label>	*/
/* 			<hr class="dashed" />*/
/* 			<!-- ENDIF -->*/
/* 			*/
/* 			<!-- IF S_TYPE_TOGGLE -->*/
/* 		    <div class="control-group"> */
/* 	         <label class="control-label" for="topic_type-0"><!-- IF S_EDIT_POST -->{L_CHANGE_TOPIC_TO}<!-- ELSE -->{L_POST_TOPIC_AS}<!-- ENDIF -->:</label>*/
/* 	         <div class="controls controls-row"> */
/*              <!-- BEGIN topic_type -->*/
/* 			  <input type="radio" name="topic_type" id="topic_type-{topic_type.VALUE}" value="{topic_type.VALUE}"{topic_type.S_CHECKED}><label class="radio-inline" for="topic_type-{topic_type.VALUE}">{topic_type.L_TOPIC_TYPE}</label>*/
/* 			 <!-- END topic_type -->*/
/* 	         </div> */
/* 			 <div class="space10"></div>*/
/* 	        </div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<div class="control-group"> */
/* 	         <label class="control-label" for="topic_time_limit">{L_STICK_TOPIC_FOR}{L_COLON}</label><span class="help-block">{L_STICK_TOPIC_FOR_EXPLAIN}</span>*/
/* 			<div class="input-group col-xs-8 col-sm-2 col-md-2">*/
/* 		       <input type="number" class="form-control input-sm" min="0" max="999" name="topic_time_limit" id="topic_time_limit" value="{TOPIC_TIME_LIMIT}">*/
/* 		      <span class="input-group-addon">{L_DAYS}</span>*/
/* 	         </div>*/
/* 			 <div class="space10"></div>*/
/* 	       </div>*/
/* 			<!-- ENDIF -->*/
/* 			*/
/* 			<!-- IF S_EDIT_REASON -->*/
/* 			<div class="control-group"> */
/* 	         <label class="control-label" for="edit_reason">{L_EDIT_REASON}{L_COLON}</label>*/
/* 	        <div class="row"> */
/* 			<div class="col-xs-8 col-sm-5 col-md-5"> */
/*              <input type="text" class="form-control input-sm" placeholder="{L_EDIT_LINK_PLACEHOLDER}" name="edit_reason" id="edit_reason" value="{EDIT_REASON}">*/
/* 	        </div>*/
/* 			</div>*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* 		 <!-- EVENT posting_editor_options_append -->	*/
/* 		</fieldset>*/
/* 		<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
