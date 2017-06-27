<?php

/* display_options.html */
class __TwigTemplate_450bdc358e9daeb1789f4ed560598f5efe3f54fbbc22eab6556d22402f4d335b extends Twig_Template
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
        echo "<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
        <div class=\"sorting collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 7
        if ((isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null)) {
            echo "\t
\t\t\t\t\t    <div class=\"col-md-6 col-sm-6\"> 
                         <label for=\"sk\">";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              <select class=\"selectpicker\" data-width=\"auto\" data-container=\"body\" name=\"sk\" id=\"sk\">";
            // line 11
            echo (isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null);
            echo "</select>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\"> 
                         <label for=\"sd\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("SORT_DIRECTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              <div class=\"input-group\">
\t\t\t\t\t\t\t     <select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" data-container=\"body\" name=\"sd\" id=\"sd\">";
            // line 18
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select>
\t\t\t\t\t\t\t    <span class=\"input-group-btn\">
                                 <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "</button>
\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t  </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 25
            echo "\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"st\">";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("DISPLAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 29
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "
                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"sk\">";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 35
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"sd\">";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
            // line 42
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "</button>
\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 49
        echo "\t
\t\t\t\t\t</div>
                </div>
\t\t\t</div>
\t\t</div> 
\t</fieldset> 
</div>



";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 49,  106 => 44,  101 => 42,  95 => 39,  88 => 35,  83 => 33,  76 => 29,  70 => 27,  66 => 25,  57 => 20,  52 => 18,  45 => 15,  38 => 11,  32 => 9,  27 => 7,  19 => 1,);
    }
}
/* <div class="hidden-xs">*/
/* 	<fieldset class="controls-row">*/
/*         <div class="sorting collapse">*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-body">*/
/* 					<div class="row">*/
/* 					<!-- IF S_SORT_OPTIONS -->	*/
/* 					    <div class="col-md-6 col-sm-6"> */
/*                          <label for="sk">{L_SORT_BY}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/*                               <select class="selectpicker" data-width="auto" data-container="body" name="sk" id="sk">{S_SORT_OPTIONS}</select>*/
/*                             </div>*/
/* 						</div>*/
/* 						<div class="col-md-6 col-sm-6"> */
/*                          <label for="sd">{L_SORT_DIRECTION}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/*                               <div class="input-group">*/
/* 							     <select class="selectpicker" data-style="btn btn-default form-control" data-width="auto" data-container="body" name="sd" id="sd">{S_ORDER_SELECT}</select>*/
/* 							    <span class="input-group-btn">*/
/*                                  <button class="btn btn-default" name="sort" type="submit">{L_GO}</button>*/
/* 							    </span>*/
/* 							  </div>*/
/*                             </div>*/
/* 						</div>*/
/* 					<!-- ELSE -->	*/
/* 						<div class="col-md-4 col-sm-4"> */
/*                          <label for="st">{L_DISPLAY}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/*                               {S_SELECT_SORT_DAYS}*/
/*                             </div>*/
/* 						</div>*/
/* 	                    <div class="col-md-4 col-sm-4"> */
/*                           <label for="sk">{L_SORT_BY}</label>*/
/*                             <div class="control-row">*/
/*                               {S_SELECT_SORT_KEY}*/
/*                             </div>*/
/* 						</div>*/
/* 						<div class="col-md-4 col-sm-4"> */
/*                            <label for="sd">{L_SORT_BY}</label>*/
/*                             <div class="control-row">*/
/* 							<div class="input-group">*/
/*                              {S_SELECT_SORT_DIR}*/
/* 							 <span class="input-group-btn">*/
/*                               <button class="btn btn-default" name="sort" type="submit">{L_GO}</button>*/
/* 							 </span>*/
/* 							</div>*/
/* 						    </div>   */
/* 						</div>*/
/* 					<!-- ENDIF -->	*/
/* 					</div>*/
/*                 </div>*/
/* 			</div>*/
/* 		</div> */
/* 	</fieldset> */
/* </div>*/
/* */
/* */
/* */
/* */
