<?php

/* login_body.html */
class __TwigTemplate_4199f096a9c7d0d49667b5326b8cc1f37a13f93b14cbdeb53cce0f8ea89dae19 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        if ((isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null)) {
            // line 3
            echo "<div class=\"alert alert-info fade in\">
    <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 4
            echo (isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null);
            echo "</strong>
</div>
";
        }
        // line 7
        if ((isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null)) {
            // line 8
            echo "<div class=\"alert alert-danger fade in\">
    <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 9
            echo (isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null);
            echo "</strong>
</div>
";
        }
        // line 12
        echo "<div class=\"panel-login panel-w-form login-full\">
    <div class=\"row\">
        ";
        // line 14
        if (((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null) &&  !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null))) {
            // line 15
            echo "        <div class=\"col-sm-6\">
            <div class=\"signin-text\">
                <span>Create Account</span>
            </div>
            <p>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
            echo "</p>
            <p><a href=\"";
            // line 20
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
            <p><a href=\"";
            // line 21
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a></p>
        </div>
        ";
        } elseif (        // line 23
(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null)) {
            // line 24
            echo "        <div class=\"col-sm-6\">
            <div class=\"signin-text\">
                <span>";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIPS");
            echo "</span>
            </div>
            <p>";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_INTRO");
            echo "</p>
            <ul>
                <li>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_ONE");
            echo "</li>
                <li>";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_TWO");
            echo "</li>
                <li>";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("ADMIN_TIP_THREE");
            echo "</li>
            </ul>
            <p>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("SITESPLAT_URL");
            echo "</p>
        </div>
        ";
        } else {
            // line 37
            echo "        <div class=\"col-sm-6\">
            <div class=\"signin-text\">
                <span>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
            </div>
            <p>";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("REGISTRATION_DISABLED");
            echo "</p>
            <p><a href=\"";
            // line 42
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></p>
            <p><a href=\"mailto:";
            // line 43
            echo (isset($context["BOARD_EMAIL"]) ? $context["BOARD_EMAIL"] : null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_WEBMASTER");
            echo "</a></p>
        </div>
        ";
        }
        // line 46
        echo "        <div class=\"col-sm-6\">
            <div class=\"signin-text\">
                <span>SIGN IN</span>
            </div>
            <form action=\"";
        // line 50
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" method=\"post\" id=\"login\">
                <fieldset>
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"";
        // line 53
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                        <div class=\"form-icon\">
                            <input type=\"text\" class=\"form-control input-lg\" tabindex=\"1\" name=\"";
        // line 55
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" id=\"";
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\">
                            <span class=\"fa fa-user login-form-icon\"></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"";
        // line 60
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
                        <div class=\"form-icon\">
                            <input type=\"password\" class=\"form-control input-lg\" tabindex=\"2\" id=\"";
        // line 62
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" name=\"";
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
                            <span class=\"fa fa-lock login-form-icon\"></span>
                        </div>
                    </div>
                    ";
        // line 66
        if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
            // line 67
            echo "                    ";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 68
                echo "                    <div class=\"checkbox pull-right\">
                        <label for=\"autologin\">
                            <input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\">Remember Me</label>
                        <label for=\"viewonline\">
                            <input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\">Login Hide</label>
                    </div>
                    ";
            }
            // line 75
            echo "                    ";
        }
        // line 76
        echo "                    <button type=\"submit\" class=\"btn btn btn-primary\" tabindex=\"6\" name=\"login\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" data-loading-text=\"";
        echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
        echo " <i class='fa-spin fa fa-spinner fa-lg'></i>\">Login</button>
                    ";
        // line 77
        if (((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null) && ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null) || (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)))) {
            // line 78
            echo "                    <div class=\"space10\"></div>
                    <p>
                        ";
            // line 80
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
                        ";
            }
            // line 82
            echo "                        ";
            if ((isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESEND_ACTIVATION");
                echo "</a>
                        ";
            }
            // line 84
            echo "                    </p>
                    ";
        }
        // line 86
        echo "                    ";
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 87
            echo "                    <div class=\"space10\"></div>
                    ";
            // line 88
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 89
            echo "                    ";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "login_body.html", 89)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 90
            echo "                    ";
        }
        // line 91
        echo "                    ";
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo " ";
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
                </fieldset>
            </form>
            ";
        // line 94
        // line 95
        echo "            ";
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null))) {
            // line 96
            echo "            ";
            $location = (("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . ""), "login_body.html", 96)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 97
            echo "            ";
        }
        // line 98
        echo "        </div>
    </div>
</div>
";
        // line 101
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 101)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 101,  312 => 98,  309 => 97,  296 => 96,  293 => 95,  292 => 94,  283 => 91,  280 => 90,  267 => 89,  264 => 88,  261 => 87,  258 => 86,  254 => 84,  244 => 82,  235 => 80,  231 => 78,  229 => 77,  222 => 76,  219 => 75,  210 => 68,  207 => 67,  205 => 66,  194 => 62,  186 => 60,  172 => 55,  164 => 53,  158 => 50,  152 => 46,  144 => 43,  134 => 42,  130 => 41,  125 => 39,  121 => 37,  115 => 34,  110 => 32,  106 => 31,  102 => 30,  97 => 28,  92 => 26,  88 => 24,  86 => 23,  79 => 21,  69 => 20,  65 => 19,  59 => 15,  57 => 14,  53 => 12,  47 => 9,  44 => 8,  42 => 7,  36 => 4,  33 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <!-- IF LOGIN_EXPLAIN -->*/
/* <div class="alert alert-info fade in">*/
/*     <i class="fa fa-warning"></i><strong>&nbsp;{LOGIN_EXPLAIN}</strong>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF LOGIN_ERROR -->*/
/* <div class="alert alert-danger fade in">*/
/*     <i class="fa fa-warning"></i><strong>&nbsp;{LOGIN_ERROR}</strong>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <div class="panel-login panel-w-form login-full">*/
/*     <div class="row">*/
/*         <!-- IF S_REGISTER_ENABLED and not S_ADMIN_AUTH -->*/
/*         <div class="col-sm-6">*/
/*             <div class="signin-text">*/
/*                 <span>Create Account</span>*/
/*             </div>*/
/*             <p>{L_LOGIN_INFO}</p>*/
/*             <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/*             <p><a href="{U_REGISTER}" class="btn btn-default btn-reg-login">{L_REGISTER}</a></p>*/
/*         </div>*/
/*         <!-- ELSEIF S_ADMIN_AUTH -->*/
/*         <div class="col-sm-6">*/
/*             <div class="signin-text">*/
/*                 <span>{L_ADMIN_TIPS}</span>*/
/*             </div>*/
/*             <p>{L_ADMIN_TIP_INTRO}</p>*/
/*             <ul>*/
/*                 <li>{L_ADMIN_TIP_ONE}</li>*/
/*                 <li>{L_ADMIN_TIP_TWO}</li>*/
/*                 <li>{L_ADMIN_TIP_THREE}</li>*/
/*             </ul>*/
/*             <p>{L_SITESPLAT_URL}</p>*/
/*         </div>*/
/*         <!-- ELSE -->*/
/*         <div class="col-sm-6">*/
/*             <div class="signin-text">*/
/*                 <span>{L_CREATE_ACCOUNT_DISABLED}</span>*/
/*             </div>*/
/*             <p>{L_REGISTRATION_DISABLED}</p>*/
/*             <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/*             <p><a href="mailto:{BOARD_EMAIL}?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!" class="btn btn-default">{L_CONTACT_WEBMASTER}</a></p>*/
/*         </div>*/
/*         <!-- ENDIF -->*/
/*         <div class="col-sm-6">*/
/*             <div class="signin-text">*/
/*                 <span>SIGN IN</span>*/
/*             </div>*/
/*             <form action="{S_LOGIN_ACTION}" method="post" id="login">*/
/*                 <fieldset>*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="{USERNAME_CREDENTIAL}">{L_USERNAME}{L_COLON}</label>*/
/*                         <div class="form-icon">*/
/*                             <input type="text" class="form-control input-lg" tabindex="1" name="{USERNAME_CREDENTIAL}" id="{USERNAME_CREDENTIAL}" value="{USERNAME}" placeholder="{L_USERNAME}">*/
/*                             <span class="fa fa-user login-form-icon"></span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="{PASSWORD_CREDENTIAL}">{L_PASSWORD}{L_COLON}</label>*/
/*                         <div class="form-icon">*/
/*                             <input type="password" class="form-control input-lg" tabindex="2" id="{PASSWORD_CREDENTIAL}" name="{PASSWORD_CREDENTIAL}" placeholder="{L_PASSWORD}" autocomplete="off">*/
/*                             <span class="fa fa-lock login-form-icon"></span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- IF S_DISPLAY_FULL_LOGIN -->*/
/*                     <!-- IF S_AUTOLOGIN_ENABLED -->*/
/*                     <div class="checkbox pull-right">*/
/*                         <label for="autologin">*/
/*                             <input type="checkbox" name="autologin" id="autologin" tabindex="4">Remember Me</label>*/
/*                         <label for="viewonline">*/
/*                             <input type="checkbox" name="viewonline" id="viewonline" tabindex="5">Login Hide</label>*/
/*                     </div>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- ENDIF -->*/
/*                     <button type="submit" class="btn btn btn-primary" tabindex="6" name="login" value="{L_LOGIN}" data-loading-text="{L_LOADING_LOG_IN} <i class='fa-spin fa fa-spinner fa-lg'></i>">Login</button>*/
/*                     <!-- IF S_DISPLAY_FULL_LOGIN and (U_SEND_PASSWORD or U_RESEND_ACTIVATION) -->*/
/*                     <div class="space10"></div>*/
/*                     <p>*/
/*                         <!-- IF U_SEND_PASSWORD --><a href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a>*/
/*                         <!-- ENDIF -->*/
/*                         <!-- IF U_RESEND_ACTIVATION -->&nbsp;&#124;&nbsp;<a href="{U_RESEND_ACTIVATION}">{L_RESEND_ACTIVATION}</a>*/
/*                         <!-- ENDIF -->*/
/*                     </p>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/*                     <div class="space10"></div>*/
/*                     <!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/*                     <!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/*                     <!-- ENDIF -->*/
/*                     {S_LOGIN_REDIRECT} {S_HIDDEN_FIELDS}*/
/*                 </fieldset>*/
/*             </form>*/
/*             <!-- EVENT login_body_form_after -->*/
/*             <!-- IF not S_ADMIN_AUTH and PROVIDER_TEMPLATE_FILE -->*/
/*             <!-- INCLUDE {PROVIDER_TEMPLATE_FILE} -->*/
/*             <!-- ENDIF -->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
