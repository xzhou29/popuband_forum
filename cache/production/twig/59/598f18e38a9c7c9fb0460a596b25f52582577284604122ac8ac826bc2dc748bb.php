<?php

/* pagination.html */
class __TwigTemplate_916bfa88d78fc89aef1d723bbbde0941e517548a8ad301a547e2b5c419344c6c extends Twig_Template
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
        if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
            // line 2
            echo "<li><a class=\"pagination-trigger\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a></li>
<li>  
  <!-- Popover pagination hidden content -->
  <div class=\"pagination_content\" style=\"display: none\">
      <div class=\"page-jump-form\">
\t\t<div class=\"input-group input-group-sm\">
\t\t <input type=\"number\" class=\"inputbox form-control\" onkeypress=\"keyPage(this, event)\" title=\"";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
            echo "\" data-per-page=\"";
            echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
            echo "\" data-start-name=\"";
            echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
            echo "\" min=\"1\" max=\"999999\" />
\t\t<div class=\"input-group-btn\">
\t\t <input type=\"button\" class=\"btn btn-default btn-sm\" value=\"";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" onclick=\"pageJump(\$(this.parentNode.parentNode).find('.inputbox'))\" />
\t\t</div>
\t\t</div>
\t\t</div>\t
  </div>  
  <!-- Popover pagination hidden title -->
  <div class=\"pagination_header\" style=\"display: none\">
     ";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE_NUMBER");
            echo "
  </div> 
</li>
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
    \$(function(){
    // Enabling Popover pagination - JS (hidden content and title capturing)
    \$(\".pagination-trigger\").popover({
        html : true, 
        content: function() {
          return \$('.pagination_content').html();
        },
        title: function() {
          return \$('.pagination_header').html();
        }
    });
    });
});
</script>
";
        }
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 40
            echo "\t";
            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                // line 41
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"prev\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a></li>
\t";
            } elseif ($this->getAttribute(            // line 42
$context["pagination"], "S_IS_CURRENT", array())) {
                // line 43
                echo "\t<li class=\"active\"><a>";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a></li>
\t";
            } elseif ($this->getAttribute(            // line 44
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                // line 45
                echo "\t<li class=\"ellipsis\" role=\"separator\"><a>";
                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                echo "</a></li>
\t";
            } elseif ($this->getAttribute(            // line 46
$context["pagination"], "S_IS_NEXT", array())) {
                // line 47
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" rel=\"next\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a></li>
\t";
            } else {
                // line 49
                echo "\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" role=\"button\">";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  117 => 49,  109 => 47,  107 => 46,  102 => 45,  100 => 44,  95 => 43,  93 => 42,  86 => 41,  83 => 40,  79 => 39,  76 => 38,  52 => 17,  42 => 10,  31 => 8,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/* <li><a class="pagination-trigger">{PAGE_NUMBER}</a></li>*/
/* <li>  */
/*   <!-- Popover pagination hidden content -->*/
/*   <div class="pagination_content" style="display: none">*/
/*       <div class="page-jump-form">*/
/* 		<div class="input-group input-group-sm">*/
/* 		 <input type="number" class="inputbox form-control" onkeypress="keyPage(this, event)" title="{L_JUMP_PAGE}" data-per-page="{PER_PAGE}" data-base-url="{BASE_URL|e('html_attr')}" data-start-name="{START_NAME}" min="1" max="999999" />*/
/* 		<div class="input-group-btn">*/
/* 		 <input type="button" class="btn btn-default btn-sm" value="{L_GO}" onclick="pageJump($(this.parentNode.parentNode).find('.inputbox'))" />*/
/* 		</div>*/
/* 		</div>*/
/* 		</div>	*/
/*   </div>  */
/*   <!-- Popover pagination hidden title -->*/
/*   <div class="pagination_header" style="display: none">*/
/*      {L_JUMP_TO_PAGE_NUMBER}*/
/*   </div> */
/* </li>*/
/* <script>*/
/* // some function that depends on bootstrap and jquery*/
/* head.ready(function () {*/
/*     $(function(){*/
/*     // Enabling Popover pagination - JS (hidden content and title capturing)*/
/*     $(".pagination-trigger").popover({*/
/*         html : true, */
/*         content: function() {*/
/*           return $('.pagination_content').html();*/
/*         },*/
/*         title: function() {*/
/*           return $('.pagination_header').html();*/
/*         }*/
/*     });*/
/*     });*/
/* });*/
/* </script>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- BEGIN pagination -->*/
/* 	<!-- IF pagination.S_IS_PREV -->*/
/* 	<li><a href="{pagination.PAGE_URL}" rel="prev" role="button">{L_PREVIOUS}</a></li>*/
/* 	<!-- ELSEIF pagination.S_IS_CURRENT -->*/
/* 	<li class="active"><a>{pagination.PAGE_NUMBER}</a></li>*/
/* 	<!-- ELSEIF pagination.S_IS_ELLIPSIS -->*/
/* 	<li class="ellipsis" role="separator"><a>{L_ELLIPSIS}</a></li>*/
/* 	<!-- ELSEIF pagination.S_IS_NEXT -->*/
/* 	<li><a href="{pagination.PAGE_URL}" rel="next" role="button">{L_NEXT}</a></li>*/
/* 	<!-- ELSE -->*/
/* 	<li><a href="{pagination.PAGE_URL}" role="button">{pagination.PAGE_NUMBER}</a></li>*/
/* 	<!-- ENDIF -->*/
/* <!-- END pagination -->*/
/* */
/* */
