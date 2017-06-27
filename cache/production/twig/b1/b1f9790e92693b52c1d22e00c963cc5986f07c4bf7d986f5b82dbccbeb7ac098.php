<?php

/* jumpbox_options.html */
class __TwigTemplate_f6afc23405afbd722c27a42fdf4d0e045147a0b823bdc988a170cdc56f1e74f6 extends Twig_Template
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
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 2
            echo "<div id=\"jumpbox\" class=\"dropdown\">
  <button class=\"btn btn-default btn-block dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"true\">
   ";
            // line 4
            echo $this->env->getExtension('phpbb')->lang("JUMP_SELECT_FORUM");
            echo "
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu jumpbox-dropdown\" role=\"menu\" style=\"width: 100%;\">
  <!-- <li role=\"presentation\" class=\"dropdown-header\">Dropdown header</li> -->
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 10
                echo "\t ";
                if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array()) !=  -1)) {
                    // line 11
                    echo "\t <li role=\"presentation\" class=\"";
                    if ($this->getAttribute($context["jumpbox_forums"], "level", array())) {
                        echo "jumpbox-sub-link";
                    } elseif ($this->getAttribute($context["jumpbox_forums"], "S_IS_CAT", array())) {
                        echo "jumpbox-cat-link";
                    } else {
                        echo "jumpbox-forum-link";
                    }
                    echo "\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                    echo $this->getAttribute($context["jumpbox_forums"], "LINK", array());
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", array());
                    echo "</a></li>
\t ";
                }
                // line 13
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  </ul>
</div>\t
";
        } else {
        }
    }

    public function getTemplateName()
    {
        return "jumpbox_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  40 => 11,  37 => 10,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_DISPLAY_JUMPBOX -->*/
/* <div id="jumpbox" class="dropdown">*/
/*   <button class="btn btn-default btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">*/
/*    {L_JUMP_SELECT_FORUM}*/
/*     <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu jumpbox-dropdown" role="menu" style="width: 100%;">*/
/*   <!-- <li role="presentation" class="dropdown-header">Dropdown header</li> -->*/
/*     <!-- BEGIN jumpbox_forums -->*/
/* 	 <!-- IF jumpbox_forums.FORUM_ID neq -1 -->*/
/* 	 <li role="presentation" class="<!-- IF jumpbox_forums.level -->jumpbox-sub-link<!-- ELSEIF jumpbox_forums.S_IS_CAT -->jumpbox-cat-link<!-- ELSE -->jumpbox-forum-link<!-- ENDIF -->"><a role="menuitem" tabindex="-1" href="{jumpbox_forums.LINK}"><!-- BEGIN level -->&nbsp;&nbsp;&nbsp;&nbsp;<!-- END level -->{jumpbox_forums.FORUM_NAME}</a></li>*/
/* 	 <!-- ENDIF -->*/
/* 	<!-- END jumpbox_forums -->*/
/*   </ul>*/
/* </div>	*/
/* <!-- ELSE -->*/
/* <!-- ENDIF -->*/
