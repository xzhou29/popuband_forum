<?php

/* overall_header.html */
class __TwigTemplate_55e4bbfc739c57fd09172c87c0087a9ed6610f6adfeea369c56420d7b18a54a5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"designer\" content=\"SiteSplat http://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat\">
    <meta content=\"";
        // line 8
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" property=\"og:site_name\">
    ";
        // line 9
        // line 10
        echo "    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    ";
        // line 11
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
    <title>
        ";
        // line 13
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "&#40;";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo "&#41;&nbsp;
        ";
        }
        // line 15
        echo "        ";
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "&nbsp;&#45;&nbsp;
        ";
        } elseif (        // line 16
(isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo "&nbsp;&#45;&nbsp;
        ";
        }
        // line 17
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "&nbsp;&#45;&nbsp;";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</title>
    ";
        // line 18
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 19
            echo "    ";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                // line 20
                echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_index");
                echo "\">
    ";
            }
            // line 22
            echo "    ";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                // line 23
                echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_news");
                echo "\">
    ";
            }
            // line 25
            echo "    ";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                // line 26
                echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_forums");
                echo "\">
    ";
            }
            // line 28
            echo "    ";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                // line 29
                echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_topics");
                echo "\">
    ";
            }
            // line 31
            echo "    ";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                // line 32
                echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_topics_active");
                echo "\">
    ";
            }
            // line 34
            echo "    ";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                // line 35
                echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_forum", array("forum_id" => (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null)));
                echo "\">
    ";
            }
            // line 37
            echo "    ";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                // line 38
                echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('routing')->getPath("phpbb_feed_topic", array("topic_id" => (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null)));
                echo "\">
    ";
            }
            // line 40
            echo "    ";
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 43
            echo "    <link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
    ";
        }
        // line 45
        echo "    <!-- Google free font here -->
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>
    <!-- CSS files start here -->
    <link href=\"";
        // line 49
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/stylesheet.css\" rel=\"stylesheet\">
    ";
        // line 50
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 51
            echo "    <link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css\" rel=\"stylesheet\">
    ";
        }
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "
    <!-- Remove the conditional below to use the custom CSS without FLATBOOTS Mini CMS Extension -->
    ";
        // line 56
        if ((isset($context["S_ALLOW_CUSTOMCSS"]) ? $context["S_ALLOW_CUSTOMCSS"] : null)) {
            // line 57
            echo "    <link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/custom.css\" rel=\"stylesheet\">
    ";
        }
        // line 59
        echo "    ";
        // line 60
        echo "    <!-- CSS files stop here -->
    ";
        // line 61
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('pico_reputation', '__main__'));
        $this->env->loadTemplate('@pico_reputation/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 62
        echo "    <!-- magic dust -->
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js\"></script>
</head>

<body data-spy=\"scroll\" data-target=\".scrollspy\" id=\"phpbb\" class=\"section-";
        // line 66
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">
    ";
        // line 67
        // line 68
        echo "    <header id=\"top\" class=\"navbar navbar-inverse navbar-static-top flat-nav\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button data-target=\".flat-nav-collapse\" data-toggle=\"collapse\" type=\"button\" class=\"nav-tog lines-button x navbar-toggle neutro\">
                    <span class=\"sr-only sr-nav\">";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("TOGGLE_NAV");
        echo "</span>
                    <span class=\"lines\"></span>
                </button>
                ";
        // line 75
        if ((isset($context["LOGO_IMAGE_EXIST"]) ? $context["LOGO_IMAGE_EXIST"] : null)) {
            // line 76
            echo "                <a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\"><img style=\"max-height: 60px; max-width:100%; margin-top: -20px;\" class=\"img-responsive\" src=\"";
            echo (isset($context["T_IMAGES_PATH"]) ? $context["T_IMAGES_PATH"] : null);
            echo "../ext/sitesplat/flatbootsminicms/images/logo/";
            echo (isset($context["LOGO_FILENAME"]) ? $context["LOGO_FILENAME"] : null);
            echo "\" alt=\"";
            echo (isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null);
            echo "\" /></a>
                ";
        } elseif (        // line 77
(isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null)) {
            // line 78
            echo "                <a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\">";
            echo (isset($context["LOGO_TEXT"]) ? $context["LOGO_TEXT"] : null);
            echo "</a>
                ";
        } else {
            // line 80
            echo "                <a class=\"navbar-brand\" href=\"";
            if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
                echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            } else {
                echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            }
            echo "\">PopuBand Forum</a>
                ";
        }
        // line 82
        echo "            </div>
            ";
        // line 83
        if ((isset($context["FLATBOOTS_MINI_CMS_ENABLED"]) ? $context["FLATBOOTS_MINI_CMS_ENABLED"] : null)) {
            // line 84
            echo "            ";
            // line 85
            echo "            ";
        } else {
            // line 86
            echo "            ";
            $location = "addons/navigation.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/navigation.html", "overall_header.html", 86)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 87
            echo "            ";
        }
        // line 88
        echo "        </div>
    </header>
    <div class=\"search-input search-input-fullscreen hidden-xs\">
        <form method=\"get\" id=\"search\" action=\"";
        // line 91
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\">
            <fieldset>
                <input name=\"keywords\" id=\"keywords\" type=\"text\" maxlength=\"128\" title=\"";
        // line 93
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" value=\"\" autocomplete=\"off\" />
                <div class=\"close\">&times;</div>
                ";
        // line 95
        echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
        echo "
            </fieldset>
        </form>
    </div>
    ";
        // line 99
        if ( !(isset($context["HIDE_HEADER"]) ? $context["HIDE_HEADER"] : null)) {
            // line 100
            echo "    ";
            if ((isset($context["IN_BADGE"]) ? $context["IN_BADGE"] : null)) {
                // line 101
                echo "    ";
                $location = "@sitesplat_badge/header_badge_teaser.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@sitesplat_badge/header_badge_teaser.html", "overall_header.html", 101)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 102
                echo "    ";
            } else {
                // line 103
                echo "    ";
                $location = "addons/header_teaser_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("addons/header_teaser_body.html", "overall_header.html", 103)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 104
                echo "    ";
            }
            // line 105
            echo "    ";
        } else {
            // line 106
            echo "    <div style=\"padding-top:30px;\" class=\"space-teaser\"></div>
    ";
        }
        // line 108
        echo "    <div class=\"container\">
        <!-- start content -->
        <div id=\"content-forum\">
            ";
        // line 111
        // line 112
        echo "            <div class=\"breadcrumb-line clearfix\">
                <ul class=\"breadcrumb\">
                    <!-- https://developers.google.com/structured-data/testing-tool/ -->
                    ";
        // line 115
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 116
        echo "                    ";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 117
            echo "                    <li><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
                    <li ";
            // line 118
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</span></a></li>
                    ";
        } else {
            // line 120
            echo "                    <li><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\"><span class=\"icon fa fa-home\"></span></a></li>
                    ";
            // line 121
            // line 122
            echo "                    <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb')->lang("INDEX");
            echo "</span></a></li>
                    ";
            // line 123
            // line 124
            echo "                    ";
        }
        // line 125
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 126
            echo "                    <li ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a itemprop=\"url\" href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" ";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                </ul>
                ";
        // line 129
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewforum") || ((isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null) == "viewtopic")))) {
            // line 130
            echo "                <ul class=\"breadcrumb-buttons visible-xxs\">
                    <li>
                        <a href=\"#\" title=\"\" data-toggle=\"modal\" data-target=\"#BreadcrumbMap\">
                            <i class=\"icon fa fa-sitemap\"></i>
                        </a>
                    </li>
                </ul>
                ";
        }
        // line 138
        echo "                ";
        // line 139
        echo "            </div>
            ";
        // line 140
        // line 141
        echo "            <div id=\"page-body\">
                ";
        // line 142
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 143
            echo "                <div class=\"alert alert-warning fade in\">
                    <button data-dismiss=\"alert\" class=\"close\"><span class=\"awe-remove-circle\"></span></button>
                    <i class=\"fa fa-info\"></i>&nbsp;<strong>";
            // line 145
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
                </div>
                ";
        }
        // line 148
        echo "                ";
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 148,  491 => 145,  487 => 143,  485 => 142,  482 => 141,  481 => 140,  478 => 139,  476 => 138,  466 => 130,  464 => 129,  461 => 128,  443 => 126,  438 => 125,  435 => 124,  434 => 123,  425 => 122,  424 => 121,  419 => 120,  410 => 118,  405 => 117,  402 => 116,  399 => 115,  394 => 112,  393 => 111,  388 => 108,  384 => 106,  381 => 105,  378 => 104,  365 => 103,  362 => 102,  349 => 101,  346 => 100,  344 => 99,  337 => 95,  330 => 93,  325 => 91,  320 => 88,  317 => 87,  304 => 86,  301 => 85,  299 => 84,  297 => 83,  294 => 82,  284 => 80,  272 => 78,  270 => 77,  255 => 76,  253 => 75,  247 => 72,  241 => 68,  240 => 67,  232 => 66,  226 => 62,  221 => 61,  218 => 60,  216 => 59,  210 => 57,  208 => 56,  202 => 54,  200 => 53,  194 => 51,  192 => 50,  188 => 49,  182 => 45,  176 => 43,  173 => 42,  170 => 41,  168 => 40,  156 => 38,  153 => 37,  141 => 35,  138 => 34,  128 => 32,  125 => 31,  115 => 29,  112 => 28,  102 => 26,  99 => 25,  89 => 23,  86 => 22,  76 => 20,  73 => 19,  71 => 18,  65 => 17,  59 => 16,  53 => 15,  46 => 13,  41 => 11,  38 => 10,  37 => 9,  33 => 8,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="designer" content="SiteSplat http://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat">*/
/*     <meta content="{SITENAME}" property="og:site_name">*/
/*     <!-- EVENT overall_header_meta -->*/
/*     <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->*/
/*     {META}*/
/*     <title>*/
/*         <!-- IF UNREAD_NOTIFICATIONS_COUNT -->&#40;{UNREAD_NOTIFICATIONS_COUNT}&#41;&nbsp;*/
/*         <!-- ENDIF -->*/
/*         <!-- IF S_IN_MCP -->{L_MCP}&nbsp;&#45;&nbsp;*/
/*         <!-- ELSEIF S_IN_UCP -->{L_UCP}&nbsp;&#45;&nbsp;*/
/*         <!-- ENDIF -->{PAGE_TITLE}&nbsp;&#45;&nbsp;{SITENAME}</title>*/
/*     <!-- IF S_ENABLE_FEEDS -->*/
/*     <!-- IF S_ENABLE_FEEDS_OVERALL -->*/
/*     <link rel="alternate" type="application/atom+xml" title="{L_FEED} - {SITENAME}" href="{{ path('phpbb_feed_index') }}">*/
/*     <!-- ENDIF -->*/
/*     <!-- IF S_ENABLE_FEEDS_NEWS -->*/
/*     <link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_NEWS}" href="{{ path('phpbb_feed_news') }}">*/
/*     <!-- ENDIF -->*/
/*     <!-- IF S_ENABLE_FEEDS_FORUMS -->*/
/*     <link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_ALL_FORUMS}" href="{{ path('phpbb_feed_forums') }}">*/
/*     <!-- ENDIF -->*/
/*     <!-- IF S_ENABLE_FEEDS_TOPICS -->*/
/*     <link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_NEW}" href="{{ path('phpbb_feed_topics') }}">*/
/*     <!-- ENDIF -->*/
/*     <!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE -->*/
/*     <link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}" href="{{ path('phpbb_feed_topics_active') }}">*/
/*     <!-- ENDIF -->*/
/*     <!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID -->*/
/*     <link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}" href="{{ path('phpbb_feed_forum', { forum_id : S_FORUM_ID } ) }}">*/
/*     <!-- ENDIF -->*/
/*     <!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID -->*/
/*     <link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}" href="{{ path('phpbb_feed_topic', { topic_id : S_TOPIC_ID } ) }}">*/
/*     <!-- ENDIF -->*/
/*     <!-- EVENT overall_header_feeds -->*/
/*     <!-- ENDIF -->*/
/*     <!-- IF U_CANONICAL -->*/
/*     <link rel="canonical" href="{U_CANONICAL}" />*/
/*     <!-- ENDIF -->*/
/*     <!-- Google free font here -->*/
/*     <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>*/
/*     <link href='//fonts.googleapis.com/css?family=Asap:700' rel='stylesheet' type='text/css'>*/
/*     <!-- CSS files start here -->*/
/*     <link href="{T_THEME_PATH}/stylesheet.css" rel="stylesheet">*/
/*     <!-- IF S_PLUPLOAD -->*/
/*     <link href="{T_THEME_PATH}/plupload.css" rel="stylesheet">*/
/*     <!-- ENDIF -->*/
/*     <!-- EVENT overall_header_stylesheets_after -->*/
/*     {$STYLESHEETS}*/
/*     <!-- Remove the conditional below to use the custom CSS without FLATBOOTS Mini CMS Extension -->*/
/*     <!-- IF S_ALLOW_CUSTOMCSS -->*/
/*     <link href="{T_THEME_PATH}/custom.css" rel="stylesheet">*/
/*     <!-- ENDIF -->*/
/*     <!-- EVENT override_custom_css -->*/
/*     <!-- CSS files stop here -->*/
/*     <!-- EVENT overall_header_head_append -->*/
/*     <!-- magic dust -->*/
/*     <script src="//cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js"></script>*/
/* </head>*/
/* */
/* <body data-spy="scroll" data-target=".scrollspy" id="phpbb" class="section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/*     <!-- EVENT overall_header_body_before -->*/
/*     <header id="top" class="navbar navbar-inverse navbar-static-top flat-nav">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button data-target=".flat-nav-collapse" data-toggle="collapse" type="button" class="nav-tog lines-button x navbar-toggle neutro">*/
/*                     <span class="sr-only sr-nav">{L_TOGGLE_NAV}</span>*/
/*                     <span class="lines"></span>*/
/*                 </button>*/
/*                 <!-- IF LOGO_IMAGE_EXIST -->*/
/*                 <a class="navbar-brand" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->"><img style="max-height: 60px; max-width:100%; margin-top: -20px;" class="img-responsive" src="{T_IMAGES_PATH}../ext/sitesplat/flatbootsminicms/images/logo/{LOGO_FILENAME}" alt="{LOGO_TEXT}" /></a>*/
/*                 <!-- ELSEIF LOGO_TEXT -->*/
/*                 <a class="navbar-brand" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->">{LOGO_TEXT}</a>*/
/*                 <!-- ELSE -->*/
/*                 <a class="navbar-brand" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->">PopuBand Forum</a>*/
/*                 <!-- ENDIF -->*/
/*             </div>*/
/*             <!-- IF FLATBOOTS_MINI_CMS_ENABLED -->*/
/*             <!-- EVENT flatboots_navigation_instead -->*/
/*             <!-- ELSE -->*/
/*             <!-- INCLUDE addons/navigation.html -->*/
/*             <!-- ENDIF -->*/
/*         </div>*/
/*     </header>*/
/*     <div class="search-input search-input-fullscreen hidden-xs">*/
/*         <form method="get" id="search" action="{U_SEARCH}">*/
/*             <fieldset>*/
/*                 <input name="keywords" id="keywords" type="text" maxlength="128" title="{L_SEARCH_KEYWORDS}" placeholder="{L_SEARCH}" value="" autocomplete="off" />*/
/*                 <div class="close">&times;</div>*/
/*                 {S_SEARCH_HIDDEN_FIELDS}*/
/*             </fieldset>*/
/*         </form>*/
/*     </div>*/
/*     <!-- IF not HIDE_HEADER -->*/
/*     <!-- IF IN_BADGE -->*/
/*     <!-- INCLUDE @sitesplat_badge/header_badge_teaser.html -->*/
/*     <!-- ELSE -->*/
/*     <!-- INCLUDE addons/header_teaser_body.html -->*/
/*     <!-- ENDIF -->*/
/*     <!-- ELSE -->*/
/*     <div style="padding-top:30px;" class="space-teaser"></div>*/
/*     <!-- ENDIF -->*/
/*     <div class="container">*/
/*         <!-- start content -->*/
/*         <div id="content-forum">*/
/*             <!-- EVENT header_breadcrumb_before -->*/
/*             <div class="breadcrumb-line clearfix">*/
/*                 <ul class="breadcrumb">*/
/*                     <!-- https://developers.google.com/structured-data/testing-tool/ -->*/
/*                     <!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/*                     <!-- IF U_SITE_HOME -->*/
/*                     <li><a href="{U_SITE_HOME}"><span class="icon fa fa-home"></span></a></li>*/
/*                     <li {$MICRODATA}><a href="{U_SITE_HOME}" data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_SITE_HOME}</span></a></li>*/
/*                     <!-- ELSE -->*/
/*                     <li><a href="{U_INDEX}"><span class="icon fa fa-home"></span></a></li>*/
/*                     <!-- EVENT overall_header_breadcrumbs_before -->*/
/*                     <li {$MICRODATA}><a href="{U_INDEX}" data-navbar-reference="index" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></li>*/
/*                     <!-- EVENT overall_header_breadcrumbs_after -->*/
/*                     <!-- ENDIF -->*/
/*                     <!-- BEGIN navlinks -->*/
/*                     <li {$MICRODATA}><a itemprop="url" href="{navlinks.U_VIEW_FORUM}" <!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF -->><span itemprop="title">{navlinks.FORUM_NAME}</span></a></li>*/
/*                     <!-- END navlinks -->*/
/*                 </ul>*/
/*                 <!-- IF S_USER_LOGGED_IN and (SCRIPT_NAME == "viewforum" or SCRIPT_NAME == "viewtopic") -->*/
/*                 <ul class="breadcrumb-buttons visible-xxs">*/
/*                     <li>*/
/*                         <a href="#" title="" data-toggle="modal" data-target="#BreadcrumbMap">*/
/*                             <i class="icon fa fa-sitemap"></i>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- EVENT overall_header_breadcrumbs_buttons -->*/
/*             </div>*/
/*             <!-- EVENT overall_header_page_body_before -->*/
/*             <div id="page-body">*/
/*                 <!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/*                 <div class="alert alert-warning fade in">*/
/*                     <button data-dismiss="alert" class="close"><span class="awe-remove-circle"></span></button>*/
/*                     <i class="fa fa-info"></i>&nbsp;<strong>{L_INFORMATION}{L_COLON}</strong>&nbsp;{L_BOARD_DISABLED}*/
/*                 </div>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- EVENT overall_header_content_before -->*/
/* */
