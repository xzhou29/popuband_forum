<?php

/* display_options_viewforum.html */
class __TwigTemplate_d588c6116e64d22591afaecaf66820320a0f471586d6b4cd60085c8809a107d9 extends Twig_Template
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
        echo "<fieldset class=\"controls-row\">
        <div class=\"sorting collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t<form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo (isset($context["S_FORUM_ACTION"]) ? $context["S_FORUM_ACTION"] : null);
        echo "\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3\"> 
                         <label for=\"st\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("DISPLAY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 10
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-3 col-sm-3\"> 
                          <label for=\"sk\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 16
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
                            </div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3\">  
                           <label for=\"sd\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 23
        echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"col-md-3 col-sm-3\"> 
                      <label accesskey=\"j\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                       <div class=\"control-row\">
                         ";
        // line 34
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "display_options_viewforum.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "                       </div>
\t\t\t\t\t</div>
                   </div>
                </div>
\t\t\t</div>
\t\t</div> 
</fieldset> ";
    }

    public function getTemplateName()
    {
        return "display_options_viewforum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  85 => 34,  79 => 32,  69 => 25,  64 => 23,  57 => 20,  50 => 16,  44 => 14,  37 => 10,  31 => 8,  26 => 6,  19 => 1,);
    }
}
/* <fieldset class="controls-row">*/
/*         <div class="sorting collapse">*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-body">*/
/* 					 <div class="row">*/
/* 					<form class="form-horizontal" method="post" action="{S_FORUM_ACTION}">*/
/* 						<div class="col-md-3 col-sm-3"> */
/*                          <label for="st">{L_DISPLAY}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/*                               {S_SELECT_SORT_DAYS}*/
/*                             </div>*/
/* 						</div>*/
/* 	                    <div class="col-md-3 col-sm-3"> */
/*                           <label for="sk">{L_SORT_BY}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/*                               {S_SELECT_SORT_KEY}*/
/*                             </div>*/
/* 						</div>				*/
/* 						<div class="col-md-3 col-sm-3">  */
/*                            <label for="sd">{L_SORT_BY}{L_COLON}</label>*/
/*                             <div class="control-row">*/
/* 							<div class="input-group">*/
/*                              {S_SELECT_SORT_DIR}*/
/* 							 <span class="input-group-btn">*/
/*                               <button class="btn btn-default" name="sort" type="submit">{L_GO}</button>*/
/* 							</span>*/
/* 							</div>*/
/* 						    </div>   */
/* 						</div>*/
/* 					</form>*/
/* 					<div class="col-md-3 col-sm-3"> */
/*                       <label accesskey="j">{L_JUMP_TO}{L_COLON}</label>*/
/*                        <div class="control-row">*/
/*                          <!-- INCLUDE jumpbox_options.html -->*/
/*                        </div>*/
/* 					</div>*/
/*                    </div>*/
/*                 </div>*/
/* 			</div>*/
/* 		</div> */
/* </fieldset> */
