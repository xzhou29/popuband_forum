<?php

/* ucp_remind.html */
class __TwigTemplate_7d69002cb106670e5885d0ab75e382737dece3a8d93d2e8124d21aea7369f9c4 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_remind.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "\t<div class=\"side-segment\"><h3>";
        echo $this->env->getExtension('phpbb')->lang("SEND_PASSWORD");
        echo "</h3></div>
<div class=\"well\">
<form class=\"form-horizontal\" action=\"";
        // line 4
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" method=\"post\" id=\"remind\">
  <fieldset>
  <div class=\"col-md-6\">
    <div class=\"form-group\">
\t\t<label for=\"username\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
          <div class=\"input-icon left\">
\t        <i class=\"fa fa-user\"></i>
\t\t    <input class=\"form-control input-sm\" type=\"text\" name=\"username\" id=\"username\" value=\"";
        // line 11
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\"/>
\t\t  </div>
\t</div>
    <div class=\"form-group\">
\t\t<label for=\"email\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
          <div class=\"input-icon left\">
\t        <i class=\"icon-moon-email\"></i>
\t\t    <input class=\"form-control input-sm\" type=\"text\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" placeholder=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("UCP_REG_EMAIL_PLACEHOLDER");
        echo "\"/>
\t\t  </div>
\t</div> 
\t<div class=\"form-group\">
\t";
        // line 22
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t<button type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-default\" value=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" tabindex=\"2\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("SENDING");
        echo "<i class='fa-spin fa fa-spinner fa-lg'></i>\">";
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</button>
\t\t<button type=\"reset\" value=\"";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-default\">";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "</button>
\t";
        // line 25
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</div> 
   </div>
  </fieldset>
  </form>
</div>
";
        // line 31
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_remind.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_remind.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  92 => 25,  86 => 24,  78 => 23,  74 => 22,  67 => 18,  60 => 15,  51 => 11,  44 => 8,  37 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* 	<div class="side-segment"><h3>{L_SEND_PASSWORD}</h3></div>*/
/* <div class="well">*/
/* <form class="form-horizontal" action="{S_PROFILE_ACTION}" method="post" id="remind">*/
/*   <fieldset>*/
/*   <div class="col-md-6">*/
/*     <div class="form-group">*/
/* 		<label for="username">{L_USERNAME}{L_COLON}</label>*/
/*           <div class="input-icon left">*/
/* 	        <i class="fa fa-user"></i>*/
/* 		    <input class="form-control input-sm" type="text" name="username" id="username" value="{USERNAME}" placeholder="{L_USERNAME}"/>*/
/* 		  </div>*/
/* 	</div>*/
/*     <div class="form-group">*/
/* 		<label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label>*/
/*           <div class="input-icon left">*/
/* 	        <i class="icon-moon-email"></i>*/
/* 		    <input class="form-control input-sm" type="text" name="email" id="email" size="25" maxlength="100" placeholder="{L_UCP_REG_EMAIL_PLACEHOLDER}"/>*/
/* 		  </div>*/
/* 	</div> */
/* 	<div class="form-group">*/
/* 	{S_HIDDEN_FIELDS}*/
/* 		<button type="submit" name="submit" id="submit" class="btn btn-default" value="{L_SUBMIT}" tabindex="2" data-loading-text="{L_SENDING}<i class='fa-spin fa fa-spinner fa-lg'></i>">{L_SUBMIT}</button>*/
/* 		<button type="reset" value="{L_RESET}" name="reset" class="btn btn-default">{L_RESET}</button>*/
/* 	{S_FORM_TOKEN}*/
/* 	</div> */
/*    </div>*/
/*   </fieldset>*/
/*   </form>*/
/* </div>*/
/* <!-- INCLUDE overall_footer.html -->*/
