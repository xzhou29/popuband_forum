<?php

/* posting_buttons.html */
class __TwigTemplate_0028d0902d1f68075a7df5a8ecbc536a5f7985913808fde12eb3bb25856012ff extends Twig_Template
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
        echo "<script>
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 3
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 29
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}
</script>
<script src=\"";
        // line 48
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/editor.js\"></script>

";
        // line 50
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 51
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<label class=\"control-label\">";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t<div id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></div>
</div>
<div class=\"space10\"></div>
";
            // line 56
            // line 57
            if ( !(isset($context["S_BBCODEORDER"]) ? $context["S_BBCODEORDER"] : null)) {
                // line 58
                echo "<div id=\"imgurAnchor\" class=\"btn-toolbar\" role=\"toolbar\">
    <div class=\"btn-group\">
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"b\" name=\"addbbcode0\" onclick=\"bbstyle(0);\" title=\"";
                // line 60
                echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
                echo "\"><i class=\"fa fa-bold\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"i\" name=\"addbbcode2\" onclick=\"bbstyle(2);\" title=\"";
                // line 61
                echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
                echo "\"><i class=\"fa fa-italic\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"u\" name=\"addbbcode4\" onclick=\"bbstyle(4);\" title=\"";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
                echo "\"><i class=\"fa fa-underline\"></i></button>
\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"l\" name=\"addbbcode10\" onclick=\"bbstyle(10);\" title=\"";
                // line 66
                echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
                echo "\"><i class=\"fa fa-list\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"o\" name=\"addbbcode12\" onclick=\"bbstyle(12);\" title=\"";
                // line 67
                echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
                echo "\"><i class=\"fa fa-list-ol\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"y\" name=\"addlistitem\" onclick=\"bbstyle(-1);\" title=\"";
                // line 68
                echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
                echo "\"><i class=\"fa fa-asterisk\"></i></button>
    </div>

\t<div class=\"btn-group\">
\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"c\" name=\"addbbcode8\" onclick=\"bbstyle(8);\" title=\"";
                // line 72
                echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
                echo "\"><i class=\"fa fa-code\"></i></button>
        ";
                // line 73
                if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                    // line 74
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"q\" name=\"addbbcode6\" onclick=\"bbstyle(6);\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
                    echo "\"><i class=\"fa fa-comment\"></i></button>
\t    ";
                }
                // line 75
                echo " 
\t\t";
                // line 76
                if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                    // line 77
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"p\" name=\"addbbcode14\" onclick=\"bbstyle(14);\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
                    echo "\"><i class=\"fa fa-picture-o\"></i></button>
\t    ";
                }
                // line 79
                echo "\t    ";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 80
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"w\" name=\"addbbcode16\" onclick=\"bbstyle(16);\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
                    echo "\"><i class=\"fa fa-link\"></i></button>
\t\t";
                }
                // line 82
                echo "\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
\t    ";
                // line 85
                if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
                    // line 86
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"d\" name=\"addbbcode18\" onclick=\"bbstyle(18);\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
                    echo "\"><i class=\"fa fa-font\"></i></button>
\t\t";
                }
                // line 88
                echo "\t\t <button class=\"btn btn-default\" type=\"button\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
                echo "\" onclick=\"change_palette();\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP");
                echo "\"><i class=\"fa fa-tint\"></i></button>
\t
\t";
                // line 90
                // line 91
                echo "\t
\t<!-- BEGIN custom_tags 
\t     <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                // line 93
                echo $this->getAttribute((isset($context["custom_tags"]) ? $context["custom_tags"] : null), "BBCODE_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute((isset($context["custom_tags"]) ? $context["custom_tags"] : null), "BBCODE_TAG", array());
                echo "\" onclick=\"bbstyle(";
                echo $this->getAttribute((isset($context["custom_tags"]) ? $context["custom_tags"] : null), "BBCODE_ID", array());
                echo ");\"  data-original-title=\"";
                echo $this->getAttribute((isset($context["custom_tags"]) ? $context["custom_tags"] : null), "BBCODE_HELPLINE", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["custom_tags"]) ? $context["custom_tags"] : null), "BBCODE_HELPLINE", array());
                echo "\"><i class=\"fa fa-cog\"></i></button>
\t     END custom_tags -->
\t
\t";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 97
                    echo "\t";
                    if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "youtube")) {
                        // line 98
                        echo "\t <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo "\" onclick=\"bbstyle(";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo ");\" title=\"";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                        echo "\"><i class=\"fa fa-youtube\"></i></button>
\t";
                    }
                    // line 100
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "\t
\t";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 103
                    echo "\t";
                    if (($this->getAttribute($context["custom_tags"], "BBCODE_TAG", array()) == "c")) {
                        // line 104
                        echo "\t <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo "\" onclick=\"bbstyle(";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                        echo ");\" title=\"";
                        echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                        echo "\"><i class=\"fa fa-text-width\"></i></button>
\t";
                    }
                    // line 106
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "   </div>

\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
                // line 109
                echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
                echo "\">
\t\t<option value=\"50\">";
                // line 110
                echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
                echo "</option>
\t\t<option value=\"85\">";
                // line 111
                echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
                echo "</option>
\t\t<option data-icon=\"fa fa-font\" value=\"100\" selected=\"selected\">";
                // line 112
                echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
                echo "</option>
\t\t";
                // line 113
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                    // line 114
                    echo "\t\t\t<option value=\"150\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                    echo "</option>
\t\t\t";
                    // line 115
                    if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                        // line 116
                        echo "\t\t\t\t<option value=\"200\">";
                        echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                        echo "</option>
\t\t\t";
                    }
                    // line 118
                    echo "\t\t";
                }
                // line 119
                echo "\t</select>
\t
\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode_custom\" onchange=\"bbstyle(this.form.addbbcode_custom.options[this.form.addbbcode_custom.selectedIndex].value*1);this.form.addbbcode_custom.selectedIndex = 0;\">
\t  <option data-icon=\"fa fa-cog\" value=\"100\" selected=\"selected\">";
                // line 122
                echo $this->env->getExtension('phpbb')->lang("BBCODES");
                echo "</option>
      ";
                // line 123
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 124
                    echo "      <option value=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                    echo "</option>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "   
    </select>
\t
</div>
";
            }
            // line 130
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 130,  388 => 125,  375 => 124,  371 => 123,  367 => 122,  362 => 119,  359 => 118,  353 => 116,  351 => 115,  346 => 114,  344 => 113,  340 => 112,  336 => 111,  332 => 110,  328 => 109,  324 => 107,  318 => 106,  308 => 104,  305 => 103,  301 => 102,  298 => 101,  292 => 100,  282 => 98,  279 => 97,  275 => 96,  261 => 93,  257 => 91,  256 => 90,  248 => 88,  242 => 86,  240 => 85,  235 => 82,  229 => 80,  226 => 79,  220 => 77,  218 => 76,  215 => 75,  209 => 74,  207 => 73,  203 => 72,  196 => 68,  192 => 67,  188 => 66,  181 => 62,  177 => 61,  173 => 60,  169 => 58,  167 => 57,  166 => 56,  158 => 52,  155 => 51,  153 => 50,  148 => 48,  141 => 44,  134 => 40,  123 => 31,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  36 => 9,  23 => 3,  19 => 1,);
    }
}
/* <script>*/
/* 	var form_name = 'postform';*/
/* 	var text_name = <!-- IF $SIG_EDIT -->'signature'<!-- ELSE -->'message'<!-- ENDIF -->;*/
/* 	var load_draft = false;*/
/* 	var upload = false;*/
/* */
/* 	// Define the bbCode tags*/
/* 	var bbcode = new Array();*/
/* 	var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'<!-- BEGIN custom_tags -->, {custom_tags.BBCODE_NAME}<!-- END custom_tags -->);*/
/* 	var imageTag = false;*/
/* */
/* 	// Helpline messages*/
/* 	var help_line = {*/
/* 		b: '{LA_BBCODE_B_HELP}',*/
/* 		i: '{LA_BBCODE_I_HELP}',*/
/* 		u: '{LA_BBCODE_U_HELP}',*/
/* 		q: '{LA_BBCODE_Q_HELP}',*/
/* 		c: '{LA_BBCODE_C_HELP}',*/
/* 		l: '{LA_BBCODE_L_HELP}',*/
/* 		o: '{LA_BBCODE_O_HELP}',*/
/* 		p: '{LA_BBCODE_P_HELP}',*/
/* 		w: '{LA_BBCODE_W_HELP}',*/
/* 		a: '{LA_BBCODE_A_HELP}',*/
/* 		s: '{LA_BBCODE_S_HELP}',*/
/* 		f: '{LA_BBCODE_F_HELP}',*/
/* 		y: '{LA_BBCODE_Y_HELP}',*/
/* 		d: '{LA_BBCODE_D_HELP}'*/
/* 		<!-- BEGIN custom_tags -->*/
/* 			,cb_{custom_tags.BBCODE_ID}: '{custom_tags.A_BBCODE_HELPLINE}'*/
/* 		<!-- END custom_tags -->*/
/* 	}*/
/* */
/* 	function change_palette()*/
/* 	{*/
/* 		phpbb.toggleDisplay('colour_palette');*/
/* 		e = document.getElementById('colour_palette');*/
/* */
/* 		if (e.style.display == 'block')*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR_HIDE}';*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR}';*/
/* 		}*/
/* 	}*/
/* </script>*/
/* <script src="{T_THEME_PATH}/vendors/editor.js"></script>*/
/* */
/* <!-- IF S_BBCODE_ALLOWED -->*/
/* <div id="colour_palette" style="display: none;">*/
/* 	<label class="control-label">{L_FONT_COLOR}{L_COLON}</label>*/
/* 	<div id="color_palette_placeholder" data-orientation="h" data-height="12" data-width="15" data-bbcode="true"></div>*/
/* </div>*/
/* <div class="space10"></div>*/
/* <!-- EVENT posting_editor_buttons_before -->*/
/* <!-- IF not S_BBCODEORDER -->*/
/* <div id="imgurAnchor" class="btn-toolbar" role="toolbar">*/
/*     <div class="btn-group">*/
/*          <button class="btn btn-default" type="button" accesskey="b" name="addbbcode0" onclick="bbstyle(0);" title="{L_BBCODE_B_HELP}"><i class="fa fa-bold"></i></button>*/
/*          <button class="btn btn-default" type="button" accesskey="i" name="addbbcode2" onclick="bbstyle(2);" title="{L_BBCODE_I_HELP}"><i class="fa fa-italic"></i></button>*/
/*          <button class="btn btn-default" type="button" accesskey="u" name="addbbcode4" onclick="bbstyle(4);" title="{L_BBCODE_U_HELP}"><i class="fa fa-underline"></i></button>*/
/* 	</div>*/
/* 	*/
/* 	<div class="btn-group hidden-xs">*/
/*          <button class="btn btn-default" type="button" accesskey="l" name="addbbcode10" onclick="bbstyle(10);" title="{L_BBCODE_L_HELP}"><i class="fa fa-list"></i></button>*/
/*          <button class="btn btn-default" type="button" accesskey="o" name="addbbcode12" onclick="bbstyle(12);" title="{L_BBCODE_O_HELP}"><i class="fa fa-list-ol"></i></button>*/
/*          <button class="btn btn-default" type="button" accesskey="y" name="addlistitem" onclick="bbstyle(-1);" title="{L_BBCODE_LISTITEM_HELP}"><i class="fa fa-asterisk"></i></button>*/
/*     </div>*/
/* */
/* 	<div class="btn-group">*/
/* 	     <button class="btn btn-default" type="button" accesskey="c" name="addbbcode8" onclick="bbstyle(8);" title="{L_BBCODE_C_HELP}"><i class="fa fa-code"></i></button>*/
/*         <!-- IF S_BBCODE_QUOTE -->*/
/* 	     <button class="btn btn-default" type="button" accesskey="q" name="addbbcode6" onclick="bbstyle(6);" title="{L_BBCODE_Q_HELP}"><i class="fa fa-comment"></i></button>*/
/* 	    <!-- ENDIF --> */
/* 		<!-- IF S_BBCODE_IMG -->*/
/* 	     <button class="btn btn-default" type="button" accesskey="p" name="addbbcode14" onclick="bbstyle(14);" title="{L_BBCODE_P_HELP}"><i class="fa fa-picture-o"></i></button>*/
/* 	    <!-- ENDIF -->*/
/* 	    <!-- IF S_LINKS_ALLOWED -->*/
/* 	     <button class="btn btn-default" type="button" accesskey="w" name="addbbcode16" onclick="bbstyle(16);" title="{L_BBCODE_W_HELP}"><i class="fa fa-link"></i></button>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* 	*/
/* 	<div class="btn-group hidden-xs">*/
/* 	    <!-- IF S_BBCODE_FLASH -->*/
/* 	     <button class="btn btn-default" type="button" accesskey="d" name="addbbcode18" onclick="bbstyle(18);" title="{L_BBCODE_D_HELP}"><i class="fa fa-font"></i></button>*/
/* 		<!-- ENDIF -->*/
/* 		 <button class="btn btn-default" type="button" name="bbpalette" id="bbpalette" value="{L_FONT_COLOR}" onclick="change_palette();" title="{L_BBCODE_S_HELP}"><i class="fa fa-tint"></i></button>*/
/* 	*/
/* 	<!-- EVENT posting_editor_buttons_custom_tags_before -->*/
/* 	*/
/* 	<!-- BEGIN custom_tags */
/* 	     <button class="btn btn-default" type="button" name="addbbcode{custom_tags.BBCODE_ID}" value="{custom_tags.BBCODE_TAG}" onclick="bbstyle({custom_tags.BBCODE_ID});"  data-original-title="{custom_tags.BBCODE_HELPLINE}" title="{custom_tags.BBCODE_HELPLINE}"><i class="fa fa-cog"></i></button>*/
/* 	     END custom_tags -->*/
/* 	*/
/* 	<!-- BEGIN custom_tags -->*/
/* 	<!-- IF custom_tags.BBCODE_TAG eq 'youtube' -->*/
/* 	 <button class="btn btn-default" type="button" name="addbbcode{custom_tags.BBCODE_ID}" onclick="bbstyle({custom_tags.BBCODE_ID});" title="{custom_tags.BBCODE_HELPLINE}"><i class="fa fa-youtube"></i></button>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- END custom_tags -->*/
/* 	*/
/* 	<!-- BEGIN custom_tags -->*/
/* 	<!-- IF custom_tags.BBCODE_TAG eq 'c' -->*/
/* 	 <button class="btn btn-default" type="button" name="addbbcode{custom_tags.BBCODE_ID}" onclick="bbstyle({custom_tags.BBCODE_ID});" title="{custom_tags.BBCODE_HELPLINE}"><i class="fa fa-text-width"></i></button>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- END custom_tags -->*/
/*    </div>*/
/* */
/* 	<select class="selectpicker hidden-xs" data-style="btn-default" data-width="auto" name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="{L_BBCODE_F_HELP}">*/
/* 		<option value="50">{L_FONT_TINY}</option>*/
/* 		<option value="85">{L_FONT_SMALL}</option>*/
/* 		<option data-icon="fa fa-font" value="100" selected="selected">{L_FONT_NORMAL}</option>*/
/* 		<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 150 -->*/
/* 			<option value="150">{L_FONT_LARGE}</option>*/
/* 			<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 200 -->*/
/* 				<option value="200">{L_FONT_HUGE}</option>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	</select>*/
/* 	*/
/* 	<select class="selectpicker hidden-xs" data-style="btn-default" data-width="auto" name="addbbcode_custom" onchange="bbstyle(this.form.addbbcode_custom.options[this.form.addbbcode_custom.selectedIndex].value*1);this.form.addbbcode_custom.selectedIndex = 0;">*/
/* 	  <option data-icon="fa fa-cog" value="100" selected="selected">{L_BBCODES}</option>*/
/*       <!-- BEGIN custom_tags -->*/
/*       <option value="{custom_tags.BBCODE_ID}" title="{custom_tags.BBCODE_HELPLINE}">{custom_tags.BBCODE_TAG}</option>*/
/*       <!-- END custom_tags -->   */
/*     </select>*/
/* 	*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT posting_editor_buttons_after -->*/
/* <!-- ENDIF -->*/
/* */
