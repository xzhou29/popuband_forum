<?php

/* addons/navigation.html */
class __TwigTemplate_8dc4589e3de9a699359ee1801161f74cf27e1b2cc184821ed087b9dbe9d95823 extends Twig_Template
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
        echo "<!-- Main navigation block -->
<nav class=\"collapse navbar-collapse flat-nav-collapse\" aria-label=\"Primary\">
    ";
        // line 3
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 4
            echo "    <div class=\"user-login hidden-lg hidden-md hidden-sm\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"dropdown dropdown-avatar\">
                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"user-menu\">
                    ";
            // line 8
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;
                    ";
            }
            // line 9
            echo "&nbsp;<span>";
            echo $this->env->getExtension('phpbb')->lang("WELCOME_INDEX");
            echo "&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
                </a>
                <ul class=\"dropdown-menu usermenu\">
                    <li><a title=\"\" href=\"";
            // line 12
            echo (isset($context["U_UCP_PREFERENCE"]) ? $context["U_UCP_PREFERENCE"] : null);
            echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE");
            echo "</a></li>
                    ";
            // line 13
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 14
                echo "                    <li><a title=\"\" href=\"";
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\"><i class=\"fa fa-inbox\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("UCP_MESSAGES");
                echo "&nbsp;&nbsp;<span class=\"badge badge-info\">";
                if (((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null) && (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null))) {
                    echo (isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null);
                } else {
                    echo (isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null);
                }
                echo "</span></a></li>
                    ";
            }
            // line 16
            echo "                    ";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 17
                echo "                    <li><a title=\"\" href=\"";
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\"><i class=\"fa fa-bell\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "&nbsp;&nbsp;";
                if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array()))) {
                } else {
                    echo "<span class=\"badge badge-info\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</span>";
                }
                echo "</a></li>
                    ";
            }
            // line 19
            echo "                    ";
            // line 20
            echo "                    <li><a title=\"\" href=\"";
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\"><i class=\"fa fa-cog\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("UCP_PROFILE_SETTINGS");
            echo "</a></li>
                    ";
            // line 21
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                // line 22
                echo "                    <li><a title=\"\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a></li>
                    ";
            }
            // line 24
            echo "                    ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                // line 25
                echo "                    <li><a href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a></li>
                    ";
            }
            // line 27
            echo "                    ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                // line 28
                echo "                    <li><a href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a></li>
                    ";
            }
            // line 30
            echo "                    ";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 31
                echo "                    <li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-random\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
                    ";
            }
            // line 33
            echo "                    <li><a title=\"\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></li>
                    ";
            // line 34
            // line 35
            echo "                </ul>
            </li>
        </ul>
    </div>
    ";
        }
        // line 40
        echo "    <ul class=\"nav navbar-nav navbar-nav-fancy\">
        <li class=\"\"><a href=\"";
        // line 41
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("HOME");
        echo "</a></li>
        <li class=\"dropdown\">
            <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Forum &nbsp;<b class=\"caret\"></b></a>
            <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                ";
        // line 46
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 47
            echo "                <li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\"><i class=\"fa fa-search\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
                ";
            // line 48
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 49
                echo "                <li><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\"><i class=\"fa fa-comment\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
                ";
            }
            // line 51
            echo "                ";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 52
                echo "                <li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\"><i class=\"fa fa-thumbs-up\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
                ";
            }
            // line 54
            echo "                <li><a href=\"";
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\"><i class=\"fa fa-star\"></i>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
                ";
        }
        // line 56
        echo "                ";
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
            // line 57
            echo "                <li><a href=\"";
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" data-ajax=\"mark_forums_read\"><i class=\"fa fa-check\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a></li>
                ";
        }
        // line 59
        echo "                ";
        // line 60
        echo "                <li><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\"><i class=\"fa fa-question-circle\"></i>";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
                ";
        // line 61
        // line 62
        echo "                ";
        if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
            // line 63
            echo "                <li><a href=\"";
            echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
            echo "\"><i class=\"fa fa-group\"></i>";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a></li>
                ";
        }
        // line 65
        echo "                ";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            // line 66
            echo "                <li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\"><i class=\"fa fa-trophy\"></i>";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>
                ";
        }
        // line 68
        echo "            </ul>
        </li>
        <li class=\"dropdown\">
            <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "&nbsp;<b class=\"caret\"></b></a>
            <span class=\"dropdown-arrow\"></span>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 74
        echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
        echo "\"><i class=\"fa fa-search fa\"></i>";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
        echo "</a></li>
                ";
        // line 75
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null))) {
            // line 76
            echo "                ";
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 77
                echo "                <li><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\"><i class=\"fa fa-comments\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
                <li><a href=\"";
                // line 78
                echo (isset($context["SITESPLAT_SEARCH_LAST_DAY"]) ? $context["SITESPLAT_SEARCH_LAST_DAY"] : null);
                echo "\"><i class=\"fa fa-sort-numeric-asc\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SITESPLAT_SEARCH_LAST_DAY");
                echo "</a></li>
                <li><a href=\"";
                // line 79
                echo (isset($context["SITESPLAT_SEARCH_WEEK"]) ? $context["SITESPLAT_SEARCH_WEEK"] : null);
                echo "\"><i class=\"fa fa-sort-alpha-asc\"></i>";
                echo $this->env->getExtension('phpbb')->lang("SITESPLAT_SEARCH_WEEK");
                echo "</a></li>
                ";
            }
            // line 81
            echo "                ";
        }
        // line 82
        echo "                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("DEMO_HEADER_MENU");
        echo "</li>
                <li><a href=\"#\">";
        // line 84
        echo $this->env->getExtension('phpbb')->lang("DEMO_LINK");
        echo "</a></li>
                <li><a href=\"#\">";
        // line 85
        echo $this->env->getExtension('phpbb')->lang("DEMO_LINK");
        echo "</a></li>
            </ul>
        </li>
        <li><a href=\"";
        // line 88
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\"> F A Q &nbsp; <i class=\"fa fa-question-circle\"></i></a></li>
    </ul>
    ";
        // line 90
        // line 91
        echo "    ";
        if ( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 92
            echo "    <ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
        <li><a class=\"btn-search\" style=\"margin: 0;\" href=\"javascript:void(0)\"><span>Quick Search &nbsp;<i class=\"fa fa-search\"></i></span></a></li>
        ";
            // line 94
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) &&  !((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null)))) {
                // line 95
                echo "        <li><a class=\"btn\" href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">Register </a></li>
        ";
            }
            // line 97
            echo "        ";
            if ( !(isset($context["ENABLE_POPUP_LOGIN"]) ? $context["ENABLE_POPUP_LOGIN"] : null)) {
                // line 98
                echo "        <li><a class=\"btn\" href=\"";
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo " &nbsp;<i class=\"fa fa-sign-in\"></i></a></li>
        ";
            } else {
                // line 100
                echo "        <li><a class=\"btn\" href=\"\" data-toggle=\"modal\" data-target=\"#modal-login\" role=\"button\" data-toggle=\"modal\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo " &nbsp;<i class=\"fa fa-sign-in\"></i></a></li>
        ";
            }
            // line 102
            echo "    </ul>
    ";
        }
        // line 104
        echo "    ";
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 105
            echo "    <div class=\"user-login hidden-xs\">
        <ul class=\"nav navbar-nav navbar-right navbar-nav-fancy\">
            <li><a class=\"btn-search\" href=\"javascript:void(0)\"><span>Quick Search &nbsp;<i class=\"fa fa-search\"></i></span></a></li>
            ";
            // line 108
            // line 109
            echo "            ";
            // line 110
            echo "            ";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 111
                echo "            <li class=\"dropdown dropdown-avatar dropdown-notification\">
                <a id=\"notification_list_button\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i>";
                // line 112
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notifications", array())) && (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null))) {
                    echo "<em class=\"notifications badge badge-danger\">";
                    echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                    echo "</em>";
                }
                echo "</a>
                <ul class=\"dropdown-menu user-login-drop arrow-up\">
                    <li><a href=\"";
                // line 114
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" class=\"notification-heading\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a></li>
                    ";
                // line 115
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "addons/navigation.html", 115)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 116
                echo "                </ul>
            </li>
            ";
            }
            // line 119
            echo "            <li class=\"dropdown dropdown-avatar\">
                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                    ";
            // line 121
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "&nbsp;
                    ";
            } else {
                // line 122
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">
                    ";
            }
            // line 123
            echo "&nbsp;<span>Welcome&#44;&nbsp;";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "<i class=\"caret\"></i></span>
                </a>
                ";
            // line 125
            if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-warning\">";
                echo (isset($context["PM_NEW_COUNT_BADGE"]) ? $context["PM_NEW_COUNT_BADGE"] : null);
                echo "</em>
                ";
            } elseif (            // line 126
(isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                echo "<em class=\"notifications-pm badge badge-success\">";
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</em>
                ";
            }
            // line 128
            echo "                <ul class=\"dropdown-menu user-login-drop arrow-up\">
                    ";
            // line 129
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 130
                echo "                    <li>
                        ";
                // line 131
                if ((isset($context["S_USER_NEW_PRIVMSG"]) ? $context["S_USER_NEW_PRIVMSG"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                    echo "\">";
                    echo (isset($context["PM_NEW_COUNT"]) ? $context["PM_NEW_COUNT"] : null);
                    echo "</a>
                        ";
                } elseif (                // line 132
(isset($context["S_USER_UNREAD_PRIVMSG"]) ? $context["S_USER_UNREAD_PRIVMSG"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                    echo "\">";
                    echo (isset($context["PM_UNREAD_COUNT"]) ? $context["PM_UNREAD_COUNT"] : null);
                    echo "</a>
                        ";
                } else {
                    // line 133
                    echo "<a href=\"";
                    echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("NO_PMS_INFO");
                    echo "</a>
                        ";
                }
                // line 135
                echo "                    </li>
                    ";
            }
            // line 137
            echo "                    <li>
                        <div class=\"navbar-wrapper\">
                            <div class=\"navbar-content navbar-avatar\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-xs-5\">
                                        ";
            // line 142
            if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
                echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
                echo "
                                        ";
            } else {
                // line 143
                echo "<img src=\"";
                echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                echo "/images/user4.png\" alt=\"No avatar\">
                                        ";
            }
            // line 145
            echo "                                        <p class=\"text-center\">
                                            <a href=\"";
            // line 146
            echo (isset($context["U_UCP_PROFILE_AVATAR"]) ? $context["U_UCP_PROFILE_AVATAR"] : null);
            echo "\">
                                                <small>";
            // line 147
            echo $this->env->getExtension('phpbb')->lang("CHANGE_AVATAR");
            echo "</small>
                                            </a>
                                        </p>
                                    </div>
                                    <div class=\"col-md-7 col-xs-7\"><span>";
            // line 151
            echo (isset($context["CURRENT_USERNAME_FULL"]) ? $context["CURRENT_USERNAME_FULL"] : null);
            echo "</span>
                                        <p class=\"text-muted small\">";
            // line 152
            echo (isset($context["USER_EMAIL_MENU"]) ? $context["USER_EMAIL_MENU"] : null);
            echo "</p>
                                        ";
            // line 153
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<a class=\"btn btn-info btn-sm btn-block\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\"><i class=\"fa fa-user-md\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL_GENERAL");
                echo "</a>
                                        ";
            }
            // line 155
            echo "                                        ";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<a class=\"btn btn-warning btn-sm btn-block\" href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\"><i class=\"fa fa-legal\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR_PANEL_GENERAL");
                echo "</a>
                                        ";
            }
            // line 157
            echo "                                        ";
            if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) &&  !((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null)))) {
                echo "<a class=\"btn btn-success btn-sm btn-block\" href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\"><i class=\"fa fa-user\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("USER_PANEL");
                echo "</a>
                                        ";
            }
            // line 159
            echo "                                    </div>
                                </div>
                            </div>
                            ";
            // line 162
            // line 163
            echo "                            <div class=\"navbar-footer\">
                                <div class=\"navbar-footer-content\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm\" href=\"";
            // line 166
            echo (isset($context["U_UCP_PROFILE_SETTINGS"]) ? $context["U_UCP_PROFILE_SETTINGS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD");
            echo "</a></div>
                                        <div class=\"col-md-6 col-xs-6\"><a class=\"btn btn-default btn-sm pull-right\" href=\"";
            // line 167
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGOUT");
            echo "</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    ";
        }
        // line 178
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "addons/navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 178,  559 => 167,  553 => 166,  548 => 163,  547 => 162,  542 => 159,  532 => 157,  522 => 155,  513 => 153,  509 => 152,  505 => 151,  498 => 147,  494 => 146,  491 => 145,  485 => 143,  479 => 142,  472 => 137,  468 => 135,  460 => 133,  451 => 132,  443 => 131,  440 => 130,  438 => 129,  435 => 128,  428 => 126,  422 => 125,  416 => 123,  410 => 122,  404 => 121,  400 => 119,  395 => 116,  383 => 115,  377 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  359 => 108,  354 => 105,  351 => 104,  347 => 102,  341 => 100,  333 => 98,  330 => 97,  324 => 95,  322 => 94,  318 => 92,  315 => 91,  314 => 90,  309 => 88,  303 => 85,  299 => 84,  295 => 83,  292 => 82,  289 => 81,  282 => 79,  276 => 78,  269 => 77,  266 => 76,  264 => 75,  258 => 74,  252 => 71,  247 => 68,  239 => 66,  236 => 65,  228 => 63,  225 => 62,  224 => 61,  217 => 60,  215 => 59,  207 => 57,  204 => 56,  196 => 54,  188 => 52,  185 => 51,  177 => 49,  175 => 48,  168 => 47,  166 => 46,  156 => 41,  153 => 40,  146 => 35,  145 => 34,  138 => 33,  130 => 31,  127 => 30,  119 => 28,  116 => 27,  108 => 25,  105 => 24,  97 => 22,  95 => 21,  88 => 20,  86 => 19,  71 => 17,  68 => 16,  54 => 14,  52 => 13,  46 => 12,  37 => 9,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- Main navigation block -->*/
/* <nav class="collapse navbar-collapse flat-nav-collapse" aria-label="Primary">*/
/*     <!-- IF S_USER_LOGGED_IN -->*/
/*     <div class="user-login hidden-lg hidden-md hidden-sm">*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*             <li class="dropdown dropdown-avatar">*/
/*                 <a href="javascript:void(0)" data-toggle="dropdown" class="user-menu">*/
/*                     <!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}&nbsp;*/
/*                     <!-- ENDIF -->&nbsp;<span>{L_WELCOME_INDEX}&#44;&nbsp;{CURRENT_USERNAME_SIMPLE}<i class="caret"></i></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu usermenu">*/
/*                     <li><a title="" href="{U_UCP_PREFERENCE}"><i class="fa fa-user"></i>&nbsp;{L_UCP_PROFILE}</a></li>*/
/*                     <!-- IF S_DISPLAY_PM -->*/
/*                     <li><a title="" href="{U_PRIVATEMSGS}"><i class="fa fa-inbox"></i>&nbsp;{L_UCP_MESSAGES}&nbsp;&nbsp;<span class="badge badge-info"><!-- IF S_DISPLAY_PM and S_USER_UNREAD_PRIVMSG -->{S_USER_UNREAD_PRIVMSG}<!-- ELSE -->{S_USER_NEW_PRIVMSG}<!-- ENDIF --></span></a></li>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/*                     <li><a title="" href="{U_VIEW_ALL_NOTIFICATIONS}"><i class="fa fa-bell"></i>&nbsp;{L_NOTIFICATIONS}&nbsp;&nbsp;<!-- IF not .notifications --><!-- ELSE --><span class="badge badge-info">{NOTIFICATIONS_COUNT}</span><!-- ENDIF --></a></li>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- EVENT overall_header_mobile_navigation_append -->*/
/*                     <li><a title="" href="{U_UCP_PROFILE_SETTINGS}"><i class="fa fa-cog"></i>&nbsp;{L_UCP_PROFILE_SETTINGS}</a></li>*/
/*                     <!-- IF U_ACP -->*/
/*                     <li><a title="" href="{U_ACP}"><i class="fa fa-user-md"></i>&nbsp;{L_ADMIN_PANEL_GENERAL}</a></li>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- IF U_MCP -->*/
/*                     <li><a href="{U_MCP}"><i class="fa fa-legal"></i>&nbsp;{L_MODERATOR_PANEL_GENERAL}</a></li>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- IF S_REGISTERED_USER and not (U_ACP or U_MCP) -->*/
/*                     <li><a href="{U_PROFILE}"><i class="fa fa-user"></i>&nbsp;{L_USER_PANEL}</a></li>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- IF U_RESTORE_PERMISSIONS -->*/
/*                     <li><a href="{U_RESTORE_PERMISSIONS}"><i class="fa fa-random"></i>&nbsp;{L_RESTORE_PERMISSIONS}</a></li>*/
/*                     <!-- ENDIF -->*/
/*                     <li><a title="" href="{U_LOGIN_LOGOUT}"><i class="fa fa-power-off"></i>&nbsp;{L_LOGOUT}</a></li>*/
/*                     <!-- EVENT overall_header_mobile_navigation_ending -->*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     <!-- ENDIF -->*/
/*     <ul class="nav navbar-nav navbar-nav-fancy">*/
/*         <li class=""><a href="{U_INDEX}">{L_HOME}</a></li>*/
/*         <li class="dropdown">*/
/*             <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Forum &nbsp;<b class="caret"></b></a>*/
/*             <span class="dropdown-arrow"></span>*/
/*             <ul class="dropdown-menu">*/
/*                 <!-- IF S_DISPLAY_SEARCH or (S_USER_LOGGED_IN and not S_IS_BOT) -->*/
/*                 <li><a href="{U_SEARCH_UNANSWERED}"><i class="fa fa-search"></i>{L_SEARCH_UNANSWERED}</a></li>*/
/*                 <!-- IF S_LOAD_UNREADS -->*/
/*                 <li><a href="{U_SEARCH_UNREAD}"><i class="fa fa-comment"></i>{L_SEARCH_UNREAD}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- IF S_USER_LOGGED_IN -->*/
/*                 <li><a href="{U_SEARCH_NEW}"><i class="fa fa-thumbs-up"></i>{L_SEARCH_NEW}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <li><a href="{U_SEARCH_ACTIVE_TOPICS}"><i class="fa fa-star"></i>{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/*                 <li><a href="{U_MARK_FORUMS}" data-ajax="mark_forums_read"><i class="fa fa-check"></i>{L_MARK_FORUMS_READ}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- EVENT overall_header_navigation_prepend -->*/
/*                 <li><a href="{U_FAQ}"><i class="fa fa-question-circle"></i>{L_FAQ}</a></li>*/
/*                 <!-- EVENT overall_header_navigation_append -->*/
/*                 <!-- IF S_DISPLAY_MEMBERLIST -->*/
/*                 <li><a href="{U_MEMBERLIST}"><i class="fa fa-group"></i>{L_MEMBERLIST}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- IF U_TEAM -->*/
/*                 <li><a href="{U_TEAM}"><i class="fa fa-trophy"></i>{L_THE_TEAM}</a></li>*/
/*                 <!-- ENDIF -->*/
/*             </ul>*/
/*         </li>*/
/*         <li class="dropdown">*/
/*             <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">{L_SEARCH}&nbsp;<b class="caret"></b></a>*/
/*             <span class="dropdown-arrow"></span>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{U_SEARCH}"><i class="fa fa-search fa"></i>{L_SEARCH_ADV}</a></li>*/
/*                 <!-- IF not S_IS_BOT and S_USER_LOGGED_IN -->*/
/*                 <!-- IF S_DISPLAY_SEARCH -->*/
/*                 <li><a href="{U_SEARCH_SELF}"><i class="fa fa-comments"></i>{L_SEARCH_SELF}</a></li>*/
/*                 <li><a href="{SITESPLAT_SEARCH_LAST_DAY}"><i class="fa fa-sort-numeric-asc"></i>{L_SITESPLAT_SEARCH_LAST_DAY}</a></li>*/
/*                 <li><a href="{SITESPLAT_SEARCH_WEEK}"><i class="fa fa-sort-alpha-asc"></i>{L_SITESPLAT_SEARCH_WEEK}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- ENDIF -->*/
/*                 <li class="divider"></li>*/
/*                 <li class="dropdown-header">{L_DEMO_HEADER_MENU}</li>*/
/*                 <li><a href="#">{L_DEMO_LINK}</a></li>*/
/*                 <li><a href="#">{L_DEMO_LINK}</a></li>*/
/*             </ul>*/
/*         </li>*/
/*         <li><a href="{U_FAQ}"> F A Q &nbsp; <i class="fa fa-question-circle"></i></a></li>*/
/*     </ul>*/
/*     <!-- EVENT overall_header_navigation_new -->*/
/*     <!-- IF not S_USER_LOGGED_IN -->*/
/*     <ul class="nav navbar-nav navbar-right navbar-nav-fancy">*/
/*         <li><a class="btn-search" style="margin: 0;" href="javascript:void(0)"><span>Quick Search &nbsp;<i class="fa fa-search"></i></span></a></li>*/
/*         <!-- IF not S_IS_BOT and S_REGISTER_ENABLED and not (S_SHOW_COPPA or S_REGISTRATION) -->*/
/*         <li><a class="btn" href="{U_REGISTER}">Register </a></li>*/
/*         <!-- ENDIF -->*/
/*         <!-- IF not ENABLE_POPUP_LOGIN -->*/
/*         <li><a class="btn" href="{U_LOGIN_LOGOUT}">{L_LOGIN} &nbsp;<i class="fa fa-sign-in"></i></a></li>*/
/*         <!-- ELSE -->*/
/*         <li><a class="btn" href="" data-toggle="modal" data-target="#modal-login" role="button" data-toggle="modal">{L_LOGIN} &nbsp;<i class="fa fa-sign-in"></i></a></li>*/
/*         <!-- ENDIF -->*/
/*     </ul>*/
/*     <!-- ENDIF -->*/
/*     <!-- IF S_USER_LOGGED_IN -->*/
/*     <div class="user-login hidden-xs">*/
/*         <ul class="nav navbar-nav navbar-right navbar-nav-fancy">*/
/*             <li><a class="btn-search" href="javascript:void(0)"><span>Quick Search &nbsp;<i class="fa fa-search"></i></span></a></li>*/
/*             <!-- EVENT navigation_controls_before -->*/
/*             <!-- EVENT navigation_controls_after -->*/
/*             <!-- IF S_NOTIFICATIONS_DISPLAY -->*/
/*             <li class="dropdown dropdown-avatar dropdown-notification">*/
/*                 <a id="notification_list_button" href="javascript:void(0)" data-toggle="dropdown"><i class="fa fa-bell"></i><!-- IF .notifications and NOTIFICATIONS_COUNT --><em class="notifications badge badge-danger">{NOTIFICATIONS_COUNT}</em><!-- ENDIF --></a>*/
/*                 <ul class="dropdown-menu user-login-drop arrow-up">*/
/*                     <li><a href="{U_VIEW_ALL_NOTIFICATIONS}" class="notification-heading">{L_NOTIFICATIONS}</a></li>*/
/*                     <!-- INCLUDE notification_dropdown.html -->*/
/*                 </ul>*/
/*             </li>*/
/*             <!-- ENDIF -->*/
/*             <li class="dropdown dropdown-avatar">*/
/*                 <a href="javascript:void(0)" data-toggle="dropdown">*/
/*                     <!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}&nbsp;*/
/*                     <!-- ELSE --><img src="{T_THEME_PATH}/images/user4.png" alt="No avatar">*/
/*                     <!-- ENDIF -->&nbsp;<span>Welcome&#44;&nbsp;{CURRENT_USERNAME_SIMPLE}<i class="caret"></i></span>*/
/*                 </a>*/
/*                 <!-- IF S_USER_NEW_PRIVMSG --><em class="notifications-pm badge badge-warning">{PM_NEW_COUNT_BADGE}</em>*/
/*                 <!-- ELSEIF S_USER_UNREAD_PRIVMSG --><em class="notifications-pm badge badge-success">{PRIVATE_MESSAGE_COUNT}</em>*/
/*                 <!-- ENDIF -->*/
/*                 <ul class="dropdown-menu user-login-drop arrow-up">*/
/*                     <!-- IF S_DISPLAY_PM -->*/
/*                     <li>*/
/*                         <!-- IF S_USER_NEW_PRIVMSG --><a href="{U_PRIVATEMSGS}">{PM_NEW_COUNT}</a>*/
/*                         <!-- ELSEIF S_USER_UNREAD_PRIVMSG--><a href="{U_PRIVATEMSGS}">{PM_UNREAD_COUNT}</a>*/
/*                         <!-- ELSE --><a href="{U_PRIVATEMSGS}">{L_NO_PMS_INFO}</a>*/
/*                         <!-- ENDIF -->*/
/*                     </li>*/
/*                     <!-- ENDIF -->*/
/*                     <li>*/
/*                         <div class="navbar-wrapper">*/
/*                             <div class="navbar-content navbar-avatar">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-5 col-xs-5">*/
/*                                         <!-- IF CURRENT_USER_AVATAR -->{CURRENT_USER_AVATAR}*/
/*                                         <!-- ELSE --><img src="{T_THEME_PATH}/images/user4.png" alt="No avatar">*/
/*                                         <!-- ENDIF -->*/
/*                                         <p class="text-center">*/
/*                                             <a href="{U_UCP_PROFILE_AVATAR}">*/
/*                                                 <small>{L_CHANGE_AVATAR}</small>*/
/*                                             </a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <div class="col-md-7 col-xs-7"><span>{CURRENT_USERNAME_FULL}</span>*/
/*                                         <p class="text-muted small">{USER_EMAIL_MENU}</p>*/
/*                                         <!-- IF U_ACP --><a class="btn btn-info btn-sm btn-block" href="{U_ACP}"><i class="fa fa-user-md"></i>&nbsp;{L_ADMIN_PANEL_GENERAL}</a>*/
/*                                         <!-- ENDIF -->*/
/*                                         <!-- IF U_MCP --><a class="btn btn-warning btn-sm btn-block" href="{U_MCP}"><i class="fa fa-legal"></i>&nbsp;{L_MODERATOR_PANEL_GENERAL}</a>*/
/*                                         <!-- ENDIF -->*/
/*                                         <!-- IF S_REGISTERED_USER and not (U_ACP or U_MCP) --><a class="btn btn-success btn-sm btn-block" href="{U_PROFILE}"><i class="fa fa-user"></i>&nbsp;{L_USER_PANEL}</a>*/
/*                                         <!-- ENDIF -->*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- EVENT navbar_header_profile_list_after -->*/
/*                             <div class="navbar-footer">*/
/*                                 <div class="navbar-footer-content">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-6 col-xs-6"><a class="btn btn-default btn-sm" href="{U_UCP_PROFILE_SETTINGS}">{L_CHANGE_PASSWORD}</a></div>*/
/*                                         <div class="col-md-6 col-xs-6"><a class="btn btn-default btn-sm pull-right" href="{U_LOGIN_LOGOUT}">{L_LOGOUT}</a></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     <!-- ENDIF -->*/
/* </nav>*/
/* */
