<?php

/* overall_footer.html */
class __TwigTemplate_826cd5ac0aa6e17bc37edc88603e25d40c4caa79b50668dc771acc1908bff938 extends Twig_Template
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
        // line 2
        echo "</div>
<!-- page-body id in header -->
</div>
<!-- content-forum in header -->
</div>
<!-- container in header -->
";
        // line 8
        // line 9
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "index"))) {
            // line 10
            $location = "addons/sitesplat_login_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/sitesplat_login_body.html", "overall_footer.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 12
        echo "<section class=\"section-page\">
    <div id=\"rtblock\" class=\"container\">
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "fltl", array()))) {
            // line 15
            echo "        ";
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "        ";
            $location = "addons/recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/recent_topics_body.html", "overall_footer.html", 17)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 18
            echo "        ";
        }
        // line 19
        echo "    </div>
</section>
";
        // line 21
        // line 22
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 23
        } else {
            // line 25
            $location = "addons/call_to_action_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/call_to_action_body.html", "overall_footer.html", 25)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 27
        // line 28
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 29
        } else {
            // line 31
            echo "<!-- add prefooter-->
";
        }
        // line 33
        echo "<footer class=\"burned-asphalt\">
    <!-- Footer block -->
    <div class=\"midnight-\" id=\"sub-footer\">
        <div class=\"container\">
            <div class=\"row bottomLinks\">
                <div class=\"col-sm-6 sm-direction\">
                    <nav>
                        ";
        // line 40
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 41
            echo "                        ";
            // line 42
            echo "                        ";
        } else {
            // line 43
            echo "                        <ul class=\"list-inline footer-nav\">
                            <!-- <li><a href=\"http://google.com\" title=\"\">";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("ADVERTISE");
            echo "</a></li> -->
                            <li><a href=\"";
            // line 45
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></li>
                            <!--   <li><a href=\"";
            // line 46
            echo (isset($context["U_DMCA"]) ? $context["U_DMCA"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("DMCA");
            echo "</a></li> -->
                            <li><a href=\"";
            // line 47
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\" title=\"\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS");
            echo "</a></li>
                            ";
            // line 48
            // line 49
            echo "                            ";
            if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
                // line 50
                echo "                            <li><a href=\"";
                echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
                echo "\" title=\"\">";
                echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
                echo "</a></li>
                            ";
            }
            // line 52
            echo "                            ";
            // line 53
            echo "                        </ul>
                        ";
        }
        // line 55
        echo "                    </nav>
                </div>
                <div class=\"col-sm-6 sm-direction\">
                    <div class=\"clearfix socialbar\">
                        ";
        // line 59
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 60
            echo "                        ";
            // line 61
            echo "                        ";
        } else {
            // line 62
            echo "                        <div class=\"social-network\">
                            <a class=\"google-plus-color\" title=\"Google+\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                            <!-- <a class=\"github-color\" title=\"Github\" href=\"#2\"><i class=\"fa fa-github\"></i></a> -->
                            <!-- <a class=\"behance-color\" title=\"Behance\" href=\"#3\"><i class=\"fa fa-behance\"></i></a> -->
                            <!-- <a class=\"dropbox-color\" title=\"Dropbox\" href=\"#4\"><i class=\"fa fa-dropbox\"></i></a> -->
                            <!-- <a class=\"pinterest-color\" title=\"Pinterest\" href=\"#5\"><i class=\"fa fa-pinterest\"></i></a> -->
                            <a class=\"facebook-color\" title=\"Facebook\" href=\"https://www.facebook.com/populele.us/\"><i class=\"fa fa-facebook\"></i></a>
                            <a class=\"twitter-color\" title=\"Twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <!-- <a class=\"bitbucket-color\" title=\"Bitbucket\" href=\"#8\"><i class=\"fa fa-bitbucket\"></i></a> -->
                            <!-- <a class=\"envato-color\" title=\"Envato\" href=\"#\"><i class=\"icon-moon-envatoleaf\"></i></a> -->
                            <a class=\"rss-color hidden-xs\" title=\"rss\" href=\"";
            // line 72
            echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
            echo "\"><i class=\"fa fa-rss\"></i></a>
                        </div>
                        ";
        }
        // line 75
        echo "                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 sm-direction\">
                </div>
                <div class=\"col-sm-6 sm-direction\">
                    <p class=\"debug-output\">
                        ";
        // line 83
        // line 84
        echo "                        <small>&#45;&nbsp;";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "&nbsp;&#45;</small>
                        ";
        // line 85
        // line 86
        echo "                        ";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<small>";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
            echo "</small>
                        ";
        }
        // line 88
        echo "                        <!-- ";
        echo $this->env->getExtension('phpbb')->lang("FLATBOOTS_VERSION");
        echo " -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id=\"totop\" class=\"top-flat\" href=\"\" onclick=\"return false;\" style=\"display:none;\"></a>
<div class=\"hidden\">
    ";
        // line 97
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
            echo "
    ";
        }
        // line 99
        echo "</div>
<!-- injected via core and ajax JS for the return confirmation actions -->
<div id=\"page-footer\">
    <div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
        <div id=\"darken\">&nbsp;</div>
    </div>
    <div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 105
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
        <button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
        <h3 class=\"alert_title\">&nbsp;</h3>
        <p class=\"alert_text\"></p>
    </div>
    <div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
        <button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
        <div class=\"alert_text\"></div>
    </div>
</div>
<!-- injected via core and ajax JS for the return confirmation actions -->
";
        // line 116
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 117
            echo "<div class=\"modal fade\" id=\"BreadcrumbMap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BreadcrumbsLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"awe-remove-circle\"></span></button>
                <h4 class=\"modal-title\" id=\"BreadcrumbsLabel\">";
            // line 122
            echo $this->env->getExtension('phpbb')->lang("NAVIGATION");
            echo "</h4>
            </div>
            <div class=\"modal-body file-tree\">
                <ul>
                    <li class=\"root\"><a href=\"";
            // line 126
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</a></li>
                    ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 128
                echo "                    <li><a href=\"";
                echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                </ul>
                <i class=\"icon-compass fa fa-compass\"></i>
            </div>
            <div class=\"modal-footer\">
            </div>
        </div>
    </div>
</div>
";
        }
        // line 139
        // line 140
        echo "<script>
// this loads jquery asyncrounously & in parallel
head.load(\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\", \"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js\", \"";
        // line 142
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/forum_fn.min.js\");
</script>
<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 145
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('pico_reputation', '__main__'));
        $this->env->loadTemplate('@pico_reputation/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 146
        echo "<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function() {
    \$('.footable').footable();
    \$(\".selectpicker\").selectpicker();
    \$(\".selectpicker\").tooltip(\"disable\");
    var totop = \$(\"#totop\");
    totop.click(function() {
        \$(\"html, body\").stop(true, true).animate({
            scrollTop: 0
        }, 500);
        return false
    });
    \$(window).scroll(function() {
        if (\$(this).scrollTop() > 600) {
            totop.fadeIn()
        } else {
            totop.fadeOut()
        }
    });
    \$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function() {
        var e = \$(this);
        e.button(\"loading\");
        setTimeout(function() {
            e.button(\"reset\")
        }, 3e3)
    });
    \$(\"input\").iCheck({
        checkboxClass: \"icheckbox_flat-aero\",
        radioClass: \"iradio_flat-aero\"
    });
    \$(\".btn-search\").click(function() {
        \$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()
    });
    \$(\".close\").click(function() {
        \$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")
    });
    \$(\".nav-tog\").click(function() {
        if (\$(this).hasClass(\"neutro\")) {
            \$(this).removeClass(\"neutro\").addClass(\"open\")
        } else {
            \$(this).removeClass(\"open\").addClass(\"neutro\")
        }
    });
    \$('input[data-reset-on-edit]').on('keyup', function() {
        \$(this.getAttribute('data-reset-on-edit')).val('');
    });
    \$('a').tooltip({
        trigger: 'hover',
        container: 'body'
    })
    \$('#notification_list_button').click(function() {
        setTimeout(function() {
            \$(\".nano\").nanoScroller();
        }, 0);
    });
});
";
        // line 204
        if ((isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) {
            // line 205
            echo "head.ready(function() {
    ! function(n) {
        n(\".oauth-content ul > li\").each(function() {
            var i = n(this).find(\"a\").text();
            n(this).find(\"a\").prepend('<i class=\"' + i + '\"></i>')
        })
    }(jQuery)
});
";
        }
        // line 214
        echo "// some function that depends on bootstrap and jquery
";
        // line 215
        if ( !(isset($context["HIDE_FOOTER"]) ? $context["HIDE_FOOTER"] : null)) {
            // line 216
            echo "head.load(\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/vendors/twitterFetcher.min.js\");
head.ready(\"twitterFetcher.min.js\", function(e) {
    var e = {
        profile: {
            screenName: \"";
            // line 220
            if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
                echo (isset($context["TWITTER_SCREEN_NAME"]) ? $context["TWITTER_SCREEN_NAME"] : null);
            } else {
                echo "sitesplat";
            }
            echo "\"
        },
        domId: \"twitter-feed\",
        maxTweets: 1,
        showUser: !1,
        showImages: !0,
        enableLinks: !0
    };
    twitterFetcher.fetch(e)
});
";
        }
        // line 231
        echo "</script>
<!-- injected via a module or an include -->
";
        // line 233
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "
";
        // line 234
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 235
            echo "<!-- // lets load the plupload crap super huge files because... wait for it wait for it. \"swear here\" -->
";
            // line 236
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 236)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 238
        // line 239
        echo "<!-- Google Analytics: change UA-XXXXXXXX-X to be your site's ID. -->
";
        // line 240
        echo (isset($context["GOOGLE_ANALYTICS"]) ? $context["GOOGLE_ANALYTICS"] : null);
        echo "
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 240,  466 => 239,  465 => 238,  452 => 236,  449 => 235,  447 => 234,  443 => 233,  439 => 231,  421 => 220,  413 => 216,  411 => 215,  408 => 214,  397 => 205,  395 => 204,  335 => 146,  330 => 145,  324 => 142,  320 => 140,  319 => 139,  308 => 130,  297 => 128,  293 => 127,  287 => 126,  280 => 122,  273 => 117,  271 => 116,  255 => 105,  241 => 102,  236 => 99,  230 => 97,  217 => 88,  209 => 86,  208 => 85,  203 => 84,  202 => 83,  192 => 75,  186 => 72,  174 => 62,  171 => 61,  169 => 60,  167 => 59,  161 => 55,  157 => 53,  155 => 52,  147 => 50,  144 => 49,  143 => 48,  137 => 47,  131 => 46,  125 => 45,  121 => 44,  118 => 43,  115 => 42,  113 => 41,  111 => 40,  102 => 33,  98 => 31,  96 => 29,  94 => 28,  93 => 27,  80 => 25,  78 => 23,  76 => 22,  75 => 21,  71 => 19,  68 => 18,  55 => 17,  52 => 16,  50 => 15,  48 => 14,  44 => 12,  31 => 10,  29 => 9,  28 => 8,  20 => 2,  19 => 1,);
    }
}
/* <!-- EVENT overall_footer_content_after -->*/
/* </div>*/
/* <!-- page-body id in header -->*/
/* </div>*/
/* <!-- content-forum in header -->*/
/* </div>*/
/* <!-- container in header -->*/
/* <!-- EVENT overall_footer_page_body_after -->*/
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT and SCRIPT_NAME == "index" -->*/
/* <!-- INCLUDE addons/sitesplat_login_body.html -->*/
/* <!-- ENDIF -->*/
/* <section class="section-page">*/
/*     <div id="rtblock" class="container">*/
/*         <!-- IF .fltl -->*/
/*         <!-- EVENT fltl -->*/
/*         <!-- ELSE -->*/
/*         <!-- INCLUDE addons/recent_topics_body.html -->*/
/*         <!-- ENDIF -->*/
/*     </div>*/
/* </section>*/
/* <!-- EVENT call_to_action_before -->*/
/* <!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/* <!-- EVENT call_to_action_body_instead -->*/
/* <!-- ELSE -->*/
/* <!-- INCLUDE addons/call_to_action_body.html -->*/
/* <!-- ENDIF -->*/
/* <!-- EVENT call_to_action_after -->*/
/* <!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/* <!-- EVENT prefooter_instead -->*/
/* <!-- ELSE -->*/
/* <!-- add prefooter-->*/
/* <!-- ENDIF -->*/
/* <footer class="burned-asphalt">*/
/*     <!-- Footer block -->*/
/*     <div class="midnight-" id="sub-footer">*/
/*         <div class="container">*/
/*             <div class="row bottomLinks">*/
/*                 <div class="col-sm-6 sm-direction">*/
/*                     <nav>*/
/*                         <!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/*                         <!-- EVENT footer_links_instead -->*/
/*                         <!-- ELSE -->*/
/*                         <ul class="list-inline footer-nav">*/
/*                             <!-- <li><a href="http://google.com" title="">{L_ADVERTISE}</a></li> -->*/
/*                             <li><a href="{U_PRIVACY}" title="">{L_PRIVACY}</a></li>*/
/*                             <!--   <li><a href="{U_DMCA}" title="">{L_DMCA}</a></li> -->*/
/*                             <li><a href="{U_TERMS_USE}" title="">{L_TERMS}</a></li>*/
/*                             <!-- EVENT overall_footer_teamlink_before -->*/
/*                             <!-- IF U_CONTACT_US -->*/
/*                             <li><a href="{U_CONTACT_US}" title="">{L_CONTACT_US}</a></li>*/
/*                             <!-- ENDIF -->*/
/*                             <!-- EVENT overall_footer_teamlink_after -->*/
/*                         </ul>*/
/*                         <!-- ENDIF -->*/
/*                     </nav>*/
/*                 </div>*/
/*                 <div class="col-sm-6 sm-direction">*/
/*                     <div class="clearfix socialbar">*/
/*                         <!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/*                         <!-- EVENT footer_social_instead -->*/
/*                         <!-- ELSE -->*/
/*                         <div class="social-network">*/
/*                             <a class="google-plus-color" title="Google+" href="#"><i class="fa fa-google-plus"></i></a>*/
/*                             <!-- <a class="github-color" title="Github" href="#2"><i class="fa fa-github"></i></a> -->*/
/*                             <!-- <a class="behance-color" title="Behance" href="#3"><i class="fa fa-behance"></i></a> -->*/
/*                             <!-- <a class="dropbox-color" title="Dropbox" href="#4"><i class="fa fa-dropbox"></i></a> -->*/
/*                             <!-- <a class="pinterest-color" title="Pinterest" href="#5"><i class="fa fa-pinterest"></i></a> -->*/
/*                             <a class="facebook-color" title="Facebook" href="https://www.facebook.com/populele.us/"><i class="fa fa-facebook"></i></a>*/
/*                             <a class="twitter-color" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>*/
/*                             <!-- <a class="bitbucket-color" title="Bitbucket" href="#8"><i class="fa fa-bitbucket"></i></a> -->*/
/*                             <!-- <a class="envato-color" title="Envato" href="#"><i class="icon-moon-envatoleaf"></i></a> -->*/
/*                             <a class="rss-color hidden-xs" title="rss" href="{U_FEED}"><i class="fa fa-rss"></i></a>*/
/*                         </div>*/
/*                         <!-- ENDIF -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6 sm-direction">*/
/*                 </div>*/
/*                 <div class="col-sm-6 sm-direction">*/
/*                     <p class="debug-output">*/
/*                         <!-- EVENT overall_footer_timezone_before -->*/
/*                         <small>&#45;&nbsp;{S_TIMEZONE}&nbsp;&#45;</small>*/
/*                         <!-- EVENT overall_footer_timezone_after -->*/
/*                         <!-- IF DEBUG_OUTPUT --><small>{DEBUG_OUTPUT}</small>*/
/*                         <!-- ENDIF -->*/
/*                         <!-- {L_FLATBOOTS_VERSION} -->*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <a id="totop" class="top-flat" href="" onclick="return false;" style="display:none;"></a>*/
/* <div class="hidden">*/
/*     <!-- IF not S_IS_BOT -->{RUN_CRON_TASK}*/
/*     <!-- ENDIF -->*/
/* </div>*/
/* <!-- injected via core and ajax JS for the return confirmation actions -->*/
/* <div id="page-footer">*/
/*     <div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/*         <div id="darken">&nbsp;</div>*/
/*     </div>*/
/*     <div id="phpbb_alert" class="alert alert-default phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/*         <button type="button" class="close alert_close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/*         <h3 class="alert_title">&nbsp;</h3>*/
/*         <p class="alert_text"></p>*/
/*     </div>*/
/*     <div id="phpbb_confirm" class="alert alert-default phpbb_alert">*/
/*         <button type="button" class="close alert_close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/*         <div class="alert_text"></div>*/
/*     </div>*/
/* </div>*/
/* <!-- injected via core and ajax JS for the return confirmation actions -->*/
/* <!-- IF S_USER_LOGGED_IN and (SCRIPT_NAME == "viewforum" or SCRIPT_NAME == "viewtopic") -->*/
/* <div class="modal fade" id="BreadcrumbMap" tabindex="-1" role="dialog" aria-labelledby="BreadcrumbsLabel">*/
/*     <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="awe-remove-circle"></span></button>*/
/*                 <h4 class="modal-title" id="BreadcrumbsLabel">{L_NAVIGATION}</h4>*/
/*             </div>*/
/*             <div class="modal-body file-tree">*/
/*                 <ul>*/
/*                     <li class="root"><a href="{U_INDEX}">{L_INDEX}</a></li>*/
/*                     <!-- BEGIN navlinks -->*/
/*                     <li><a href="{navlinks.U_VIEW_FORUM}">{navlinks.FORUM_NAME}</a></li>*/
/*                     <!-- END navlinks -->*/
/*                 </ul>*/
/*                 <i class="icon-compass fa fa-compass"></i>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT ss_overall_footer_scripts_before -->*/
/* <script>*/
/* // this loads jquery asyncrounously & in parallel*/
/* head.load("//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js", "{T_THEME_PATH}/vendors/forum_fn.min.js");*/
/* </script>*/
/* <!-- we use this event to load the JS scripts properly via the extension system -->*/
/* <!-- EVENT overall_footer_after -->*/
/* <!-- injected via a module or an include -->*/
/* <script>*/
/* // some function that depends on bootstrap and jquery*/
/* head.ready(function() {*/
/*     $('.footable').footable();*/
/*     $(".selectpicker").selectpicker();*/
/*     $(".selectpicker").tooltip("disable");*/
/*     var totop = $("#totop");*/
/*     totop.click(function() {*/
/*         $("html, body").stop(true, true).animate({*/
/*             scrollTop: 0*/
/*         }, 500);*/
/*         return false*/
/*     });*/
/*     $(window).scroll(function() {*/
/*         if ($(this).scrollTop() > 600) {*/
/*             totop.fadeIn()*/
/*         } else {*/
/*             totop.fadeOut()*/
/*         }*/
/*     });*/
/*     $("button[data-loading-text], input[data-loading-text], .btn-load").click(function() {*/
/*         var e = $(this);*/
/*         e.button("loading");*/
/*         setTimeout(function() {*/
/*             e.button("reset")*/
/*         }, 3e3)*/
/*     });*/
/*     $("input").iCheck({*/
/*         checkboxClass: "icheckbox_flat-aero",*/
/*         radioClass: "iradio_flat-aero"*/
/*     });*/
/*     $(".btn-search").click(function() {*/
/*         $(".search-input").toggleClass("open").find("input").focus()*/
/*     });*/
/*     $(".close").click(function() {*/
/*         $(this).prev("input").val("").parents(".search-input").removeClass("open")*/
/*     });*/
/*     $(".nav-tog").click(function() {*/
/*         if ($(this).hasClass("neutro")) {*/
/*             $(this).removeClass("neutro").addClass("open")*/
/*         } else {*/
/*             $(this).removeClass("open").addClass("neutro")*/
/*         }*/
/*     });*/
/*     $('input[data-reset-on-edit]').on('keyup', function() {*/
/*         $(this.getAttribute('data-reset-on-edit')).val('');*/
/*     });*/
/*     $('a').tooltip({*/
/*         trigger: 'hover',*/
/*         container: 'body'*/
/*     })*/
/*     $('#notification_list_button').click(function() {*/
/*         setTimeout(function() {*/
/*             $(".nano").nanoScroller();*/
/*         }, 0);*/
/*     });*/
/* });*/
/* <!-- IF PROVIDER_TEMPLATE_FILE -->*/
/* head.ready(function() {*/
/*     ! function(n) {*/
/*         n(".oauth-content ul > li").each(function() {*/
/*             var i = n(this).find("a").text();*/
/*             n(this).find("a").prepend('<i class="' + i + '"></i>')*/
/*         })*/
/*     }(jQuery)*/
/* });*/
/* <!-- ENDIF -->*/
/* // some function that depends on bootstrap and jquery*/
/* <!-- IF not HIDE_FOOTER -->*/
/* head.load("{T_THEME_PATH}/vendors/twitterFetcher.min.js");*/
/* head.ready("twitterFetcher.min.js", function(e) {*/
/*     var e = {*/
/*         profile: {*/
/*             screenName: "<!-- IF FLATBOOTS_MINI_CMS_ENABLED -->{TWITTER_SCREEN_NAME}<!-- ELSE -->sitesplat<!-- ENDIF -->"*/
/*         },*/
/*         domId: "twitter-feed",*/
/*         maxTweets: 1,*/
/*         showUser: !1,*/
/*         showImages: !0,*/
/*         enableLinks: !0*/
/*     };*/
/*     twitterFetcher.fetch(e)*/
/* });*/
/* <!-- ENDIF -->*/
/* </script>*/
/* <!-- injected via a module or an include -->*/
/* {$SCRIPTS}*/
/* <!-- IF S_PLUPLOAD -->*/
/* <!-- // lets load the plupload crap super huge files because... wait for it wait for it. "swear here" -->*/
/* <!-- INCLUDE plupload.html -->*/
/* <!-- ENDIF -->*/
/* <!-- EVENT overall_footer_body_after -->*/
/* <!-- Google Analytics: change UA-XXXXXXXX-X to be your site's ID. -->*/
/* {GOOGLE_ANALYTICS}*/
/* </body>*/
/* */
/* </html>*/
/* */
