<?php

/* search_body.html */
class __TwigTemplate_c1bf9ce325298bd7c7526860bd91dbd78d74449c53c5980f8cfa10fd415bcd5e extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "  <div class=\"side-segment\"><h3>";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</h3></div>
  
  ";
        // line 4
        // line 5
        echo "
<form method=\"get\" action=\"";
        // line 6
        echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
        echo "\" data-focus=\"keywords\" autocomplete=\"off\">
 <div class=\"well\">
\t<h3>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("SEARCH_QUERY");
        echo "</h3>
\t";
        // line 9
        // line 10
        echo "  <fieldset>
    ";
        // line 11
        // line 12
        echo "\t<div class=\"form-group\">
\t\t <label class=\"control-label\" for=\"skwrds\">";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span>
          <div class=\"input-group\">
\t        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
\t\t    <input class=\"form-control input-sm\" type=\"text\" placeholder=\"";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("SEARCH_USR_PLACEHOLDER");
        echo "\" name=\"keywords\" id=\"skwrds\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\"/>
\t\t  </div> 
\t</div>
\t<div class=\"form-group\">
\t  <input type=\"radio\" checked=\"checked\" name=\"terms\" id=\"terms1\" value=\"all\"><label class=\"checkbox-inline\" for=\"terms1\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ALL_TERMS");
        echo "</label>
\t  <input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\"><label class=\"checkbox-inline\" for=\"terms2\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ANY_TERMS");
        echo "</label>
\t <div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"author\">";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span>
         <div class=\"input-group\">
\t       <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
\t\t   <input class=\"form-control input-sm\" type=\"text\" placeholder=\"";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("SEARCH_USR_PLACEHOLDER");
        echo "\" name=\"author\" id=\"author\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo "\"/>
\t\t</div> 
\t</div>
\t";
        // line 32
        // line 33
        echo "  </fieldset>
    ";
        // line 34
        // line 35
        echo " </div>


<div class=\"well\">
\t<h3>";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("SEARCH_OPTIONS");
        echo "</h3>
    ";
        // line 40
        // line 41
        echo "\t<fieldset>
\t";
        // line 42
        // line 43
        echo "\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"search_forum\">";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span>
       <select class=\"selectpicker\" data-container=\"body\" data-selected-text-format=\"count\" name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo "\">";
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select>
     <div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t <label class=\"control-label\" for=\"search_child1\">";
        // line 50
        echo $this->env->getExtension('phpbb')->lang("SEARCH_SUBFORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
      <input type=\"radio\" checked=\"checked\" name=\"sc\" id=\"search_child1\" value=\"1\"><label class=\"radio-inline\" for=\"search_child1\">";
        // line 51
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t  <input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\"><label class=\"radio-inline\" for=\"search_child2\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"sf1\">";
        // line 57
        echo $this->env->getExtension('phpbb')->lang("SEARCH_WITHIN");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
     <input type=\"radio\" checked=\"checked\" name=\"sf\" id=\"sf1\" value=\"all\"><label class=\"radio-inline\" for=\"sf1\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_MSG");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\"><label class=\"radio-inline\" for=\"sf2\">";
        // line 59
        echo $this->env->getExtension('phpbb')->lang("SEARCH_MSG_ONLY");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\"><label class=\"radio-inline\" for=\"sf3\">";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_ONLY");
        echo "</label>
\t <input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\"><label class=\"radio-inline\" for=\"sf4\">";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FIRST_POST");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\"> 
\t   <label class=\"control-label\" for=\"show_results1\">";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_RESULTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
    <input type=\"radio\" checked=\"checked\" name=\"sr\" id=\"show_results1\" value=\"posts\"><label class=\"radio-inline\" for=\"show_results1\">";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo "</label>
\t<input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\"><label class=\"radio-inline\" for=\"show_results2\">";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("TOPICS");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"sk\">";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("RESULT_SORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div>";
        // line 74
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "</div> 
\t <div class=\"space10\"></div>
\t<input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\"> <label class=\"radio-inline\" for=\"sa\">";
        // line 76
        echo $this->env->getExtension('phpbb')->lang("SORT_ASCENDING");
        echo "</label>
\t<input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\"> <label class=\"radio-inline\" for=\"sd\">";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("SORT_DESCENDING");
        echo "</label>
\t<div class=\"control-group\"></div>
\t</div>
\t
\t<div class=\"form-group\">
\t   <label class=\"control-label\" for=\"st\">";
        // line 82
        echo $this->env->getExtension('phpbb')->lang("RESULT_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div>";
        // line 83
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "</div>
\t<div class=\"control-group\"></div>
\t</div>
   
   
   <div class=\"form-group\">
   <div class=\"row\">
   <div class=\"col-md-3 col-sm-5 col-xs-6\">
   <label class=\"control-label\" for=\"pc\">";
        // line 91
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
  <div class=\"input-group\">
     <select class=\"selectpicker input-group-btn\" data-container=\"body\" data-width=\"120px\" name=\"ch\" id=\"pc\" title=\"";
        // line 93
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo "\">";
        echo (isset($context["S_CHARACTER_OPTIONS"]) ? $context["S_CHARACTER_OPTIONS"] : null);
        echo "</select>
     <span class=\"input-group-addon\">";
        // line 94
        echo $this->env->getExtension('phpbb')->lang("POST_CHARACTERS");
        echo "</span>
   </div>
   </div>
   </div>
   </div>
   
   ";
        // line 100
        // line 101
        echo "   
  </fieldset>

</div>

\t<fieldset class=\"form-actions\">
\t\t";
        // line 107
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<button type=\"reset\" value=\"";
        // line 108
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 109
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"btn btn-default\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCHING");
        echo "<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</button>
\t</fieldset>
</form>
";
        // line 112
        // line 113
        echo "<div class=\"space10\"></div>
 
";
        // line 115
        echo " 
";
        // line 116
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()))) {
            // line 117
            echo "   <div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t <i class=\"fa fa-tags\"></i>&nbsp;";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\" class=\"name\">";
            // line 125
            echo $this->env->getExtension('phpbb')->lang("RECENT_SEARCHES");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 130
                echo "\t\t<tr>
\t\t\t<td><a href=\"";
                // line 131
                echo $this->getAttribute($context["recentsearch"], "U_KEYWORDS", array());
                echo "\">";
                echo $this->getAttribute($context["recentsearch"], "KEYWORDS", array());
                echo "</a></td>
\t\t\t<td class=\"active\"><span>&nbsp;";
                // line 132
                echo $this->getAttribute($context["recentsearch"], "TIME", array());
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 135
                echo "\t\t<tr>
\t\t\t<td colspan=\"2\">";
                // line 136
                echo $this->env->getExtension('phpbb')->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "\t</tbody>
\t</table>
\t</div>
\t</div>
";
        }
        // line 144
        // line 145
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 145)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 145,  363 => 144,  356 => 139,  347 => 136,  344 => 135,  336 => 132,  330 => 131,  327 => 130,  322 => 129,  315 => 125,  306 => 119,  302 => 117,  300 => 116,  297 => 115,  293 => 113,  292 => 112,  282 => 109,  276 => 108,  272 => 107,  264 => 101,  263 => 100,  254 => 94,  248 => 93,  242 => 91,  231 => 83,  226 => 82,  218 => 77,  214 => 76,  209 => 74,  204 => 73,  196 => 68,  192 => 67,  187 => 66,  179 => 61,  175 => 60,  171 => 59,  167 => 58,  162 => 57,  154 => 52,  150 => 51,  145 => 50,  135 => 45,  128 => 44,  125 => 43,  124 => 42,  121 => 41,  120 => 40,  116 => 39,  110 => 35,  109 => 34,  106 => 33,  105 => 32,  97 => 29,  88 => 26,  80 => 21,  76 => 20,  67 => 16,  58 => 13,  55 => 12,  54 => 11,  51 => 10,  50 => 9,  46 => 8,  41 => 6,  38 => 5,  37 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/*   <div class="side-segment"><h3>{L_SEARCH}</h3></div>*/
/*   */
/*   <!-- EVENT search_body_form_before -->*/
/* */
/* <form method="get" action="{S_SEARCH_ACTION}" data-focus="keywords" autocomplete="off">*/
/*  <div class="well">*/
/* 	<h3>{L_SEARCH_QUERY}</h3>*/
/* 	<!-- EVENT search_body_search_query_before -->*/
/*   <fieldset>*/
/*     <!-- EVENT search_body_search_query_prepend -->*/
/* 	<div class="form-group">*/
/* 		 <label class="control-label" for="skwrds">{L_SEARCH_KEYWORDS}{L_COLON}</label><span class="help-block">{L_SEARCH_KEYWORDS_EXPLAIN}</span>*/
/*           <div class="input-group">*/
/* 	        <span class="input-group-addon"><i class="fa fa-search"></i></span>*/
/* 		    <input class="form-control input-sm" type="text" placeholder="{L_SEARCH_USR_PLACEHOLDER}" name="keywords" id="skwrds" title="{L_SEARCH_KEYWORDS}"/>*/
/* 		  </div> */
/* 	</div>*/
/* 	<div class="form-group">*/
/* 	  <input type="radio" checked="checked" name="terms" id="terms1" value="all"><label class="checkbox-inline" for="terms1">{L_SEARCH_ALL_TERMS}</label>*/
/* 	  <input type="radio" name="terms" id="terms2" value="any"><label class="checkbox-inline" for="terms2">{L_SEARCH_ANY_TERMS}</label>*/
/* 	 <div class="control-group"></div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="form-group">*/
/* 		<label class="control-label" for="author">{L_SEARCH_AUTHOR}{L_COLON}</label><span class="help-block">{L_SEARCH_AUTHOR_EXPLAIN}</span>*/
/*          <div class="input-group">*/
/* 	       <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/* 		   <input class="form-control input-sm" type="text" placeholder="{L_SEARCH_USR_PLACEHOLDER}" name="author" id="author" title="{L_SEARCH_AUTHOR}"/>*/
/* 		</div> */
/* 	</div>*/
/* 	<!-- EVENT search_body_search_query_append -->*/
/*   </fieldset>*/
/*     <!-- EVENT search_body_search_query_after -->*/
/*  </div>*/
/* */
/* */
/* <div class="well">*/
/* 	<h3>{L_SEARCH_OPTIONS}</h3>*/
/*     <!-- EVENT search_body_search_options_before -->*/
/* 	<fieldset>*/
/* 	<!-- EVENT search_body_search_options_prepend -->*/
/* 	<div class="form-group">*/
/* 	   <label class="control-label" for="search_forum">{L_SEARCH_FORUMS}{L_COLON}</label><span class="help-block">{L_SEARCH_FORUMS_EXPLAIN}</span>*/
/*        <select class="selectpicker" data-container="body" data-selected-text-format="count" name="fid[]" id="search_forum" multiple="multiple" size="8" title="{L_SEARCH_FORUMS}">{S_FORUM_OPTIONS}</select>*/
/*      <div class="control-group"></div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="form-group">*/
/* 	 <label class="control-label" for="search_child1">{L_SEARCH_SUBFORUMS}{L_COLON}</label>*/
/*       <input type="radio" checked="checked" name="sc" id="search_child1" value="1"><label class="radio-inline" for="search_child1">{L_YES}</label>*/
/* 	  <input type="radio" name="sc" id="search_child2" value="0"><label class="radio-inline" for="search_child2">{L_NO}</label>*/
/* 	<div class="control-group"></div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="form-group">*/
/* 	   <label class="control-label" for="sf1">{L_SEARCH_WITHIN}{L_COLON}</label>*/
/*      <input type="radio" checked="checked" name="sf" id="sf1" value="all"><label class="radio-inline" for="sf1">{L_SEARCH_TITLE_MSG}</label>*/
/* 	 <input type="radio" name="sf" id="sf2" value="msgonly"><label class="radio-inline" for="sf2">{L_SEARCH_MSG_ONLY}</label>*/
/* 	 <input type="radio" name="sf" id="sf3" value="titleonly"><label class="radio-inline" for="sf3">{L_SEARCH_TITLE_ONLY}</label>*/
/* 	 <input type="radio" name="sf" id="sf4" value="firstpost"><label class="radio-inline" for="sf4">{L_SEARCH_FIRST_POST}</label>*/
/* 	<div class="control-group"></div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="form-group"> */
/* 	   <label class="control-label" for="show_results1">{L_DISPLAY_RESULTS}{L_COLON}</label>*/
/*     <input type="radio" checked="checked" name="sr" id="show_results1" value="posts"><label class="radio-inline" for="show_results1">{L_POSTS}</label>*/
/* 	<input type="radio" name="sr" id="show_results2" value="topics"><label class="radio-inline" for="show_results2">{L_TOPICS}</label>*/
/* 	<div class="control-group"></div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="form-group">*/
/* 	   <label class="control-label" for="sk">{L_RESULT_SORT}{L_COLON}</label>*/
/* 	<div>{S_SELECT_SORT_KEY}</div> */
/* 	 <div class="space10"></div>*/
/* 	<input type="radio" name="sd" id="sa" value="a"> <label class="radio-inline" for="sa">{L_SORT_ASCENDING}</label>*/
/* 	<input type="radio" name="sd" id="sd" value="d" checked="checked"> <label class="radio-inline" for="sd">{L_SORT_DESCENDING}</label>*/
/* 	<div class="control-group"></div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="form-group">*/
/* 	   <label class="control-label" for="st">{L_RESULT_DAYS}{L_COLON}</label>*/
/* 	<div>{S_SELECT_SORT_DAYS}</div>*/
/* 	<div class="control-group"></div>*/
/* 	</div>*/
/*    */
/*    */
/*    <div class="form-group">*/
/*    <div class="row">*/
/*    <div class="col-md-3 col-sm-5 col-xs-6">*/
/*    <label class="control-label" for="pc">{L_RETURN_FIRST}{L_COLON}</label>*/
/*   <div class="input-group">*/
/*      <select class="selectpicker input-group-btn" data-container="body" data-width="120px" name="ch" id="pc" title="{L_RETURN_FIRST}">{S_CHARACTER_OPTIONS}</select>*/
/*      <span class="input-group-addon">{L_POST_CHARACTERS}</span>*/
/*    </div>*/
/*    </div>*/
/*    </div>*/
/*    </div>*/
/*    */
/*    <!-- EVENT search_body_search_options_append -->*/
/*    */
/*   </fieldset>*/
/* */
/* </div>*/
/* */
/* 	<fieldset class="form-actions">*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		<button type="reset" value="{L_RESET}" name="reset" class="btn btn-default">{L_RESET}</button>*/
/* 		<button type="submit" name="submit" value="{L_SEARCH}" class="btn btn-default" data-loading-text="{L_SEARCHING}<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>">{L_SEARCH}</button>*/
/* 	</fieldset>*/
/* </form>*/
/* <!-- EVENT search_body_form_after -->*/
/* <div class="space10"></div>*/
/*  */
/* <!-- EVENT search_body_recent_search_before --> */
/* <!-- IF .recentsearch -->*/
/*    <div class="panel panel-forum">*/
/* 	<div class="panel-heading">*/
/* 	 <i class="fa fa-tags"></i>&nbsp;{L_SEARCH_KEYWORDS}*/
/* 	</div>*/
/* 	<div class="panel-inner">*/
/*     <table class="footable table table-striped table-primary table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th colspan="2" class="name">{L_RECENT_SEARCHES}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN recentsearch -->*/
/* 		<tr>*/
/* 			<td><a href="{recentsearch.U_KEYWORDS}">{recentsearch.KEYWORDS}</a></td>*/
/* 			<td class="active"><span>&nbsp;{recentsearch.TIME}</span></td>*/
/* 		</tr>*/
/* 	<!-- BEGINELSE -->*/
/* 		<tr>*/
/* 			<td colspan="2">{L_NO_RECENT_SEARCHES}</td>*/
/* 		</tr>*/
/* 	<!-- END recentsearch -->*/
/* 	</tbody>*/
/* 	</table>*/
/* 	</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT search_body_recent_search_after -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
