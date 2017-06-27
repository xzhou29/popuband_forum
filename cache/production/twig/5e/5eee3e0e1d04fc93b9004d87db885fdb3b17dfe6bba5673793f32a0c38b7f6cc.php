<?php

/* addons/sitesplat_login_body.html */
class __TwigTemplate_c68f15fff8526259d01292cd90ac443bdd5a19e4f928ab59845f8d2a06d82ecf extends Twig_Template
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
        echo "<div class=\"panel-login panel-w-form\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
            // line 5
            echo "            <div class=\"col-sm-6\">
                <div class=\"signin-text\">
                    <span>Create Account</span>
                </div>
                <p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
            echo "</p>
                <p><a href=\"";
            // line 10
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
                <p><a href=\"";
            // line 11
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a></p>
            </div>
            ";
        } else {
            // line 14
            echo "            <div class=\"col-sm-6\">
                <div class=\"signin-text\">
                    <span>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
                </div>
                <p>";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("REGISTRATION_DISABLED");
            echo "</p>
                <p><a href=\"";
            // line 19
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
                <p><a href=\"mailto:";
            // line 20
            echo (isset($context["BOARD_EMAIL"]) ? $context["BOARD_EMAIL"] : null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_WEBMASTER");
            echo "</a></p>
            </div>
            ";
        }
        // line 23
        echo "            <div class=\"col-sm-6\">
                <div class=\"signin-text\">
                    <span>SIGN IN</span>
                </div>
                ";
        // line 27
        // line 28
        echo "                <form method=\"post\" action=\"";
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\">
                    <fieldset>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"username\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"form-icon\">
                                <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\">
                                <span class=\"fa fa-user login-form-icon\"></span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"password\">";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                            <div class=\"form-icon\">
                                <input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
                                <span class=\"fa fa-lock login-form-icon\"></span>
                            </div>
                        </div>
                        ";
        // line 44
        if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
            // line 45
            echo "                        <div class=\"checkbox pull-right\">
                            <label for=\"autologin\">
                                <input type=\"checkbox\" name=\"autologin\" id=\"autologin\">Remember Me</label>
                        </div>
                        ";
        }
        // line 50
        echo "                        <button type=\"submit\" class=\"btn btn-primary\" name=\"login\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
        echo "<i class='fa-spin fa fa-spinner fa-lg'></i>\">Login</button>
                        ";
        // line 51
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
                    </fieldset>
                </form>
                ";
        // line 54
        // line 55
        echo "                ";
        // line 56
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "addons/sitesplat_login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  149 => 55,  148 => 54,  142 => 51,  135 => 50,  128 => 45,  126 => 44,  119 => 40,  113 => 38,  105 => 33,  99 => 31,  92 => 28,  91 => 27,  85 => 23,  77 => 20,  67 => 19,  63 => 18,  58 => 16,  54 => 14,  46 => 11,  36 => 10,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel-login panel-w-form">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <!-- IF S_REGISTER_ENABLED -->*/
/*             <div class="col-sm-6">*/
/*                 <div class="signin-text">*/
/*                     <span>Create Account</span>*/
/*                 </div>*/
/*                 <p>{L_LOGIN_INFO}</p>*/
/*                 <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/*                 <p><a href="{U_REGISTER}" class="btn btn-default btn-reg-login">{L_REGISTER}</a></p>*/
/*             </div>*/
/*             <!-- ELSE -->*/
/*             <div class="col-sm-6">*/
/*                 <div class="signin-text">*/
/*                     <span>{L_CREATE_ACCOUNT_DISABLED}</span>*/
/*                 </div>*/
/*                 <p>{L_REGISTRATION_DISABLED}</p>*/
/*                 <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/*                 <p><a href="mailto:{BOARD_EMAIL}?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!" class="btn btn-default">{L_CONTACT_WEBMASTER}</a></p>*/
/*             </div>*/
/*             <!-- ENDIF -->*/
/*             <div class="col-sm-6">*/
/*                 <div class="signin-text">*/
/*                     <span>SIGN IN</span>*/
/*                 </div>*/
/*                 <!-- EVENT login_body_before -->*/
/*                 <form method="post" action="{S_LOGIN_ACTION}">*/
/*                     <fieldset>*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="username">{L_USERNAME}{L_COLON}</label>*/
/*                             <div class="form-icon">*/
/*                                 <input type="text" class="form-control input-lg" name="username" id="username" placeholder="{L_USERNAME}">*/
/*                                 <span class="fa fa-user login-form-icon"></span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="sr-only" for="password">{L_PASSWORD}{L_COLON}</label>*/
/*                             <div class="form-icon">*/
/*                                 <input type="password" class="form-control input-lg" name="password" id="password" placeholder="{L_PASSWORD}" autocomplete="off">*/
/*                                 <span class="fa fa-lock login-form-icon"></span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- IF S_AUTOLOGIN_ENABLED -->*/
/*                         <div class="checkbox pull-right">*/
/*                             <label for="autologin">*/
/*                                 <input type="checkbox" name="autologin" id="autologin">Remember Me</label>*/
/*                         </div>*/
/*                         <!-- ENDIF -->*/
/*                         <button type="submit" class="btn btn-primary" name="login" value="{L_LOGIN}" data-loading-text="{L_LOADING_LOG_IN}<i class='fa-spin fa fa-spinner fa-lg'></i>">Login</button>*/
/*                         {S_LOGIN_REDIRECT}*/
/*                     </fieldset>*/
/*                 </form>*/
/*                 <!-- EVENT login_body_form_after -->*/
/*                 <!-- EVENT login_body_after -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
