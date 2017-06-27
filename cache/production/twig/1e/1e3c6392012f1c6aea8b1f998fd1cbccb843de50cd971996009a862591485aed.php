<?php

/* memberlist_view.html */
class __TwigTemplate_aaf3fbbeb57c09ecbbfbdcbe07a3d5fdae0f133f739c8cc6cc3a473147dca877 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo " ";
        // line 3
        echo "<form method=\"post\" action=\"";
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" id=\"viewprofile\">
 <div class=\"side-segment\"><h3>";
        // line 4
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h3></div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-profile text-muted\">
                <div class=\"panel-heading text-center bg-profile\">
\t\t\t\t <div class=\"pull-left pos-abs l-25\">
\t\t\t\t\t";
        // line 11
        if ((isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-pencil\"></i></a>";
        }
        // line 12
        echo "\t\t\t\t </div>
\t\t\t\t <div class=\"pull-right pos-abs r-25\">
\t\t\t\t\t";
        // line 14
        if (((isset($context["U_ACP"]) ? $context["U_ACP"] : null) || (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null))) {
            // line 15
            echo "\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t  <a href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-xs btn-primary\" title=\"";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "\"><i class=\"fa fa-cog\"></i></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t";
            // line 19
            if ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("USER_BAN");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 22
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t </div>
\t\t\t\t 
\t\t\t\t <div class=\"profile-avatar\">
\t\t\t\t  ";
        // line 30
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
        }
        // line 31
        echo "\t\t\t\t  ";
        if ( !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 32
            echo "\t\t\t\t   <img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.gif\" alt=\"\" />
\t\t\t      ";
        }
        // line 34
        echo "\t\t\t\t </div>

                    <h4>";
        // line 36
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color:";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo ";font-weight:bold;\">";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</span>";
        } else {
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        }
        echo "</h4>
                   
\t\t\t\t   ";
        // line 38
        // line 39
        echo "\t\t\t\t\t";
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<p>";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</p>";
        }
        // line 40
        echo "\t\t\t\t   ";
        // line 41
        echo "\t\t\t\t   
\t\t\t\t   ";
        // line 42
        echo " \t
                    ";
        // line 43
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<p>";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</p>";
        }
        // line 44
        echo "\t\t\t\t   ";
        echo "\t
\t\t\t\t\t  
\t\t\t\t\t  <!-- <small>@SiteSplat</small> -->
                </div>
\t\t\t\t";
        // line 48
        if ((isset($context["INTERESTS"]) ? $context["INTERESTS"] : null)) {
            // line 49
            echo "\t\t\t\t<div class=\"panel-body\"> 
                <div class=\"text-center\"> 
\t\t\t\t    <h5>";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("INTERESTS");
            echo "</h5>
                    <p>";
            // line 52
            echo (isset($context["INTERESTS"]) ? $context["INTERESTS"] : null);
            echo "</p>
                </div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t";
        // line 57
        // line 58
        echo "\t\t\t\t";
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_ZEBRA"]) ? $context["S_ZEBRA"] : null))) {
            // line 59
            echo "                <div class=\"btn-group btn-group-justified\" role=\"group\">
\t\t\t\t";
            // line 60
            if ((isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null)) {
                // line 61
                echo "\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t<a class=\"btn btn-default zebra\" title=\"\" href=\"";
                // line 62
                echo (isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null);
                echo "\" data-ajax=\"zebra\"><i class=\"icon-moon-heart-broken\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</a>
\t\t\t\t</div>
\t\t\t\t";
            } elseif (            // line 64
(isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null)) {
                // line 65
                echo "\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t<a class=\"btn btn-default zebra\" title=\"\" href=\"";
                // line 66
                echo (isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null);
                echo "\" data-ajax=\"zebra\"><i class=\"fa fa-times\"></i>&nbsp;<i class=\"fa fa-bug\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</a>
\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t";
                if ((isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null)) {
                    // line 70
                    echo "\t\t\t\t    <div class=\"btn-group\" role=\"group\">
\t\t\t\t    <a class=\"btn btn-default zebra\" title=\"\" href=\"";
                    // line 71
                    echo (isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null);
                    echo "\" data-ajax=\"zebra\"><i class=\"fa fa-heart\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t";
                if ((isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null)) {
                    // line 75
                    echo "\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t<a class=\"btn btn-default zebra\" title=\"\" href=\"";
                    // line 76
                    echo (isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null);
                    echo "\" data-ajax=\"zebra\"><i class=\"fa fa-bug\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</a>
\t\t\t\t    </div>
\t\t\t\t";
                }
                // line 78
                echo "\t
\t\t\t    ";
            }
            // line 80
            echo "\t\t\t\t</div>\t\t\t\t\t
\t\t        ";
        }
        // line 81
        echo " 
\t\t\t\t";
        // line 82
        // line 83
        echo "\t\t\t\t</div>
            </div>
    \t</div>
\t
\t    <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><strong><span class=\"fa fa-address-card-o\"></span>&nbsp;";
        // line 89
        echo $this->env->getExtension('phpbb')->lang("BIO");
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            echo "<span class=\"label label-default\">";
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "&nbsp;";
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "</span>";
        }
        echo "</strong></div>
                <div class=\"panel-body\">
                    <ul class=\"list-unstyled list-info text-muted\">
\t\t\t\t\t";
        // line 92
        // line 93
        echo "                        <li>
                            <span class=\"fa fa-user\"></span>
                            <label>";
        // line 95
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "</label>
                            ";
        // line 96
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color:";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo ";font-weight:bold;\">";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</span>";
        } else {
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        }
        // line 97
        echo "                        </li>
\t\t\t\t\t    <li>
                            <span class=\"fa fa-globe\"></span>
                            <label>";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("USER_STATUS");
        echo "</label>
                            ";
        // line 101
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("ONLINE");
        } else {
            echo $this->env->getExtension('phpbb')->lang("OFF_LINE");
        }
        // line 102
        echo "                        </li>
                        ";
        // line 103
        if (((isset($context["AGE"]) ? $context["AGE"] : null) !== "")) {
            // line 104
            echo "\t\t\t\t\t\t<li>
                        <span class=\"fa fa-birthday-cake\"></span>
                           <label>";
            // line 106
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo "</label>
                           ";
            // line 107
            echo (isset($context["AGE"]) ? $context["AGE"] : null);
            echo "
                        </li>
\t\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t\t\t";
        // line 111
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 112
            echo "\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 113
                echo "\t\t\t\t        <li>
                           <span class=\"fa fa-cog\"></span>
                           <label>";
                // line 115
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo "</label>
                            ";
                // line 116
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "
                        </li>
\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t
\t\t\t\t\t\t";
        // line 120
        // line 121
        echo "\t\t\t\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('pico_reputation', '__main__'));
        $this->env->loadTemplate('@pico_reputation/event/memberlist_view_user_statistics_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 122
        echo "                    </ul>
\t\t\t\t  <div class=\"space10\"></div>
                </div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t    <div class=\"clearfix mini-profile-contact-wrapper\">
\t\t\t\t\t\t<ul class=\"mini-profile-contact pull-right\">
\t\t\t\t\t\t    ";
        // line 128
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<li><a class=\"default-contact\" href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "\"><i class=\"icon-moon-pm\"></i></a></li>";
        }
        // line 129
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<li><a class=\"default-contact\" href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "\"><i class=\"icon-moon-email\"></i></a></li>";
        }
        // line 130
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["U_JABBER"]) ? $context["U_JABBER"] : null) && (isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null))) {
            echo "<li><a class=\"default-contact\" href=\"";
            echo (isset($context["U_JABBER"]) ? $context["U_JABBER"] : null);
            echo "\" onclick=\"popup(this.href, 550, 320); return false;\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "\"><i class=\"fa fa-comment\"></i></a></li>";
        }
        // line 131
        echo "\t\t\t                ";
        // line 132
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 133
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 134
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t<li><a class=\"default-contact\" href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                    echo "\"><i class=\"icon-moon-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                    echo "\"></i></a></li>
\t\t\t\t\t\t\t\t";
                }
                // line 137
                echo "\t\t\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "\t\t\t\t\t\t\t";
        // line 140
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t    </div>
            </div>
        </div>
\t
    </div>
</form>
 
<div class=\"clearfix\">
";
        // line 150
        // line 151
        echo "<div class=\"side-segment\"><h3>";
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3></div>

    <div class=\"ui-timeline text-muted\">
\t    ";
        // line 154
        // line 155
        echo "            <div class=\"tl-item\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-caption\">
                            <a class=\"btn btn-primary btn-block\" href=\"#\">";
        // line 159
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tl-item\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\">";
        // line 168
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</div>
                        <div class=\"tl-icon square-icon sm bg-info\"><i class=\"fa fa-automobile\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-primary\">";
        // line 171
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "&nbsp;";
        echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_P_JOINED");
        echo "</h4>
                            <p>";
        // line 172
        echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_P_EXPL");
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"tl-item alt\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\">";
        // line 181
        echo (isset($context["LAST_ACTIVE"]) ? $context["LAST_ACTIVE"] : null);
        echo "</div>
                        <div class=\"tl-icon square-icon sm bg-warning\"><i class=\"fa fa-eye\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-danger\">";
        // line 184
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo "</h4>
                            <p>";
        // line 185
        echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_P_DATE_EXPL");
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>

\t\t\t
\t\t\t<div class=\"tl-item\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\"></div>
                        <div class=\"tl-icon square-icon sm bg-success\"><i class=\"fa fa-comments\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-warning\">";
        // line 198
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo "</h4>
                            <p>
\t\t\t\t\t\t\t";
        // line 200
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "&nbsp;
\t\t\t\t\t\t\t";
        // line 201
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "&#45;<strong><a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\">&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 202
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo "&#40;";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo "&nbsp;&#47;&nbsp;";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo "&#41;";
        }
        // line 203
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            echo "&#40;<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>&#41;";
        } elseif ((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            echo "&#40;";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "&#41;";
        }
        // line 204
        echo "\t\t\t\t\t\t\t</p>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t";
        // line 210
        if (((isset($context["S_SHOW_ACTIVITY"]) ? $context["S_SHOW_ACTIVITY"] : null) && (isset($context["POSTS"]) ? $context["POSTS"] : null))) {
            // line 211
            echo "\t\t\t<div class=\"tl-item alt\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\"></div>
                        <div class=\"tl-icon square-icon sm bg-primary\"><i class=\"fa fa-check\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-success\">";
            // line 217
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo "</h4>
                            <p>";
            // line 218
            if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
                echo "<a href=\"";
                echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
                echo "</a>&nbsp;&#40;";
                echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
                echo "&nbsp;&#47;&nbsp;";
                echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
                echo "&#41;";
            } else {
                echo "&nbsp;&#45;&nbsp;";
            }
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tl-item\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\"></div>
                        <div class=\"tl-icon square-icon sm bg-info\"><i class=\"fa fa-fire\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-warning\">";
            // line 231
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo "</h4>
                            <p>";
            // line 232
            if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
                echo "<a href=\"";
                echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
                echo "</a>&nbsp;&#40;";
                echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
                echo "&nbsp;&#47;&nbsp;";
                echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
                echo "&#41;";
            } else {
                echo "&nbsp;&#45;&nbsp;";
            }
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t";
        }
        // line 238
        echo "\t\t\t
\t\t   ";
        // line 239
        if ((isset($context["S_WARNINGS"]) ? $context["S_WARNINGS"] : null)) {
            // line 240
            echo "            <div class=\"tl-item alt\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\"></div>
                        <div class=\"tl-icon square-icon sm bg-success\"><i class=\"fa fa-exclamation-triangle\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-warning\">";
            // line 246
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo "</h4>
                            <p>";
            // line 247
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "&nbsp;";
            if (((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null) || (isset($context["U_WARN"]) ? $context["U_WARN"] : null))) {
                echo "&#91;";
                if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_NOTES"]) ? $context["U_NOTES"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                    echo "</a>";
                }
                if ((isset($context["U_WARN"]) ? $context["U_WARN"] : null)) {
                    if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                        echo "&nbsp;&#124;&nbsp;";
                    }
                    echo "<a href=\"";
                    echo (isset($context["U_WARN"]) ? $context["U_WARN"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</a>";
                }
                echo "&#93;";
            }
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 253
        echo "
\t\t\t<div class=\"tl-item\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-caption\">
                            <a class=\"btn btn-danger btn-block\" href=\"javascript:;\">";
        // line 258
        echo $this->env->getExtension('phpbb')->lang("END_TIMELINE");
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>

\t\t<!-- Last divs
\t\t    <div class=\"tl-item\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\">10 hours ago</div>
                        <div class=\"tl-icon square-icon sm bg-primary\"><i class=\"fa fa-clock-o\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-info\">Accusantium sint</h4>
                            <p>Ipsam, minus, quam, sit officiis accusantium sint voluptates voluptatibus minima cum non quos corrupti dolorem eligendi modi eius magnam unde!</p>
                        </div>
                    </div>
                </div>
            </div>
\t\t
            <div class=\"tl-item alt\">
                <div class=\"tl-body\">
                    <div class=\"tl-entry\">
                        <div class=\"tl-time\">9:10 AM</div>
                        <div class=\"tl-icon square-icon sm bg-info\"><i class=\"fa fa-gift\"></i></div>
                        <div class=\"tl-content\">
                            <h4 class=\"tl-tile text-primary\">Sed cumque temporibus</h4>
                            <p>Deserunt sed cumque temporibus. Doloribus, iste, sit recusandae fugiat assumenda ea magni at doloremque ipsum amet molestias error mollitia maxime ad alias eos id cumque corporis placeat nisi a quaerat nemo magnam ab numquam ratione facere dolorum. Cumque, dolores, sint molestiae eaque quibusdam illo error!</p>
                        </div>
                    </div>
                </div>
            </div>\t
        Last divs -->
\t\t";
        // line 291
        // line 292
        echo "    </div>

";
        // line 294
        echo "\t
</div>


";
        // line 298
        // line 299
        echo "
";
        // line 300
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 301
            echo "   <div class=\"clearfix\">
    <div class=\"side-segment\"><h3>";
            // line 302
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3></div>
     <div class=\"panel\">
\t <div class=\"panel-body\">
      <div class=\"signature\" style=\"border-top:none; margin-top: 0;\">";
            // line 305
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
    </div>
\t</div>
   </div>
";
        }
        // line 310
        echo "

 ";
        // line 312
        // line 313
        echo "<div class=\"row\">
<div class=\"col-md-4 col-md-offset-4\">
";
        // line 315
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "memberlist_view.html", 315)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 316
        echo "</div>
<div class=\"space10\"></div>
 <div class=\"space10\"></div>
</div>

";
        // line 321
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "memberlist_view.html", 321)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 322
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 322)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  818 => 322,  806 => 321,  799 => 316,  787 => 315,  783 => 313,  782 => 312,  778 => 310,  770 => 305,  764 => 302,  761 => 301,  759 => 300,  756 => 299,  755 => 298,  749 => 294,  745 => 292,  744 => 291,  708 => 258,  701 => 253,  670 => 247,  666 => 246,  658 => 240,  656 => 239,  653 => 238,  632 => 232,  628 => 231,  600 => 218,  596 => 217,  588 => 211,  586 => 210,  578 => 204,  565 => 203,  556 => 202,  548 => 201,  544 => 200,  539 => 198,  523 => 185,  519 => 184,  513 => 181,  501 => 172,  495 => 171,  489 => 168,  477 => 159,  471 => 155,  470 => 154,  463 => 151,  462 => 150,  450 => 140,  448 => 139,  442 => 138,  439 => 137,  429 => 135,  426 => 134,  423 => 133,  418 => 132,  416 => 131,  407 => 130,  398 => 129,  390 => 128,  382 => 122,  376 => 121,  375 => 120,  367 => 119,  361 => 116,  357 => 115,  353 => 113,  350 => 112,  345 => 111,  343 => 110,  337 => 107,  333 => 106,  329 => 104,  327 => 103,  324 => 102,  318 => 101,  314 => 100,  309 => 97,  299 => 96,  295 => 95,  291 => 93,  290 => 92,  276 => 89,  268 => 83,  267 => 82,  264 => 81,  260 => 80,  256 => 78,  248 => 76,  245 => 75,  242 => 74,  234 => 71,  231 => 70,  228 => 69,  220 => 66,  217 => 65,  215 => 64,  208 => 62,  205 => 61,  203 => 60,  200 => 59,  197 => 58,  196 => 57,  193 => 56,  186 => 52,  182 => 51,  178 => 49,  176 => 48,  169 => 44,  163 => 43,  160 => 42,  157 => 41,  155 => 40,  148 => 39,  147 => 38,  134 => 36,  130 => 34,  124 => 32,  121 => 31,  117 => 30,  112 => 27,  106 => 23,  97 => 22,  88 => 21,  79 => 20,  71 => 19,  66 => 17,  62 => 15,  60 => 14,  56 => 12,  48 => 11,  38 => 4,  33 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/*  <!-- EVENT memberlist_view_content_prepend -->*/
/* <form method="post" action="{S_PROFILE_ACTION}" id="viewprofile">*/
/*  <div class="side-segment"><h3>{PAGE_TITLE}</h3></div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-profile text-muted">*/
/*                 <div class="panel-heading text-center bg-profile">*/
/* 				 <div class="pull-left pos-abs l-25">*/
/* 					<!-- IF U_EDIT_SELF --><a href="{U_EDIT_SELF}" title="{L_EDIT_PROFILE}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a><!-- ENDIF -->*/
/* 				 </div>*/
/* 				 <div class="pull-right pos-abs r-25">*/
/* 					<!-- IF U_ACP or U_USER_BAN -->*/
/* 					<div class="btn-group">*/
/* 						<div class="dropdown">*/
/* 						  <a href="#" data-toggle="dropdown" class="btn btn-xs btn-primary" title="{L_USER_ADMIN}"><i class="fa fa-cog"></i></a>*/
/* 							<ul class="dropdown-menu dropdown-menu-right">*/
/* 								<!-- IF U_USER_ADMIN --><li><a href="{U_USER_ADMIN}">{L_USER_ADMIN}</a></li><!-- ENDIF -->*/
/* 								<!-- IF U_USER_BAN --><li><a href="{U_USER_BAN}">{L_USER_BAN}</a></li><!-- ENDIF -->*/
/* 								<!-- IF U_SWITCH_PERMISSIONS --><li><a href="{U_SWITCH_PERMISSIONS}">{L_USE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* 								<!-- IF U_RESTORE_PERMISSIONS --><li><a href="{U_RESTORE_PERMISSIONS}">{L_RESTORE_PERMISSIONS}</a></li><!-- ENDIF -->*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 				 </div>*/
/* 				 */
/* 				 <div class="profile-avatar">*/
/* 				  <!-- IF AVATAR_IMG -->{AVATAR_IMG}<!-- ENDIF -->*/
/* 				  <!-- IF not AVATAR_IMG -->*/
/* 				   <img src="{T_THEME_PATH}/images/no_avatar.gif" alt="" />*/
/* 			      <!-- ENDIF -->*/
/* 				 </div>*/
/* */
/*                     <h4><!-- IF USER_COLOR --><span style="color:{USER_COLOR};font-weight:bold;">{USERNAME}</span><!-- ELSE -->{USERNAME}<!-- ENDIF --></h4>*/
/*                    */
/* 				   <!-- EVENT memberlist_view_rank_no_avatar_before -->*/
/* 					<!-- IF RANK_TITLE --><p>{RANK_TITLE}</p><!-- ENDIF -->*/
/* 				   <!-- EVENT memberlist_view_rank_no_avatar_after -->*/
/* 				   */
/* 				   <!-- EVENT memberlist_view_rank_avatar_before --> 	*/
/*                     <!-- IF RANK_IMG --><p>{RANK_IMG}</p><!-- ENDIF -->*/
/* 				   <!-- EVENT memberlist_view_rank_avatar_after -->	*/
/* 					  */
/* 					  <!-- <small>@SiteSplat</small> -->*/
/*                 </div>*/
/* 				<!-- IF INTERESTS -->*/
/* 				<div class="panel-body"> */
/*                 <div class="text-center"> */
/* 				    <h5>{L_INTERESTS}</h5>*/
/*                     <p>{INTERESTS}</p>*/
/*                 </div>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="panel-footer">*/
/* 				<!-- EVENT memberlist_view_zebra_before -->*/
/* 				<!-- IF S_USER_LOGGED_IN and S_ZEBRA -->*/
/*                 <div class="btn-group btn-group-justified" role="group">*/
/* 				<!-- IF U_REMOVE_FRIEND -->*/
/* 				<div class="btn-group" role="group">*/
/* 					<a class="btn btn-default zebra" title="" href="{U_REMOVE_FRIEND}" data-ajax="zebra"><i class="icon-moon-heart-broken"></i>&nbsp;{L_REMOVE_FRIEND}</a>*/
/* 				</div>*/
/* 				<!-- ELSEIF U_REMOVE_FOE -->*/
/* 				<div class="btn-group" role="group">*/
/* 					<a class="btn btn-default zebra" title="" href="{U_REMOVE_FOE}" data-ajax="zebra"><i class="fa fa-times"></i>&nbsp;<i class="fa fa-bug"></i>&nbsp;{L_REMOVE_FOE}</a>*/
/* 				</div>*/
/* 				<!-- ELSE -->*/
/* 				<!-- IF U_ADD_FRIEND -->*/
/* 				    <div class="btn-group" role="group">*/
/* 				    <a class="btn btn-default zebra" title="" href="{U_ADD_FRIEND}" data-ajax="zebra"><i class="fa fa-heart"></i>&nbsp;{L_ADD_FRIEND}</a>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF U_ADD_FOE -->*/
/* 					<div class="btn-group" role="group">*/
/* 					<a class="btn btn-default zebra" title="" href="{U_ADD_FOE}" data-ajax="zebra"><i class="fa fa-bug"></i>&nbsp;{L_ADD_FOE}</a>*/
/* 				    </div>*/
/* 				<!-- ENDIF -->	*/
/* 			    <!-- ENDIF -->*/
/* 				</div>					*/
/* 		        <!-- ENDIF --> */
/* 				<!-- EVENT memberlist_view_zebra_after -->*/
/* 				</div>*/
/*             </div>*/
/*     	</div>*/
/* 	*/
/* 	    <div class="col-md-6">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading"><strong><span class="fa fa-address-card-o"></span>&nbsp;{L_BIO}<!-- IF S_USER_INACTIVE --><span class="label label-default">{L_USER_IS_INACTIVE}{L_COLON}&nbsp;{USER_INACTIVE_REASON}</span><!-- ENDIF --></strong></div>*/
/*                 <div class="panel-body">*/
/*                     <ul class="list-unstyled list-info text-muted">*/
/* 					<!-- EVENT memberlist_view_user_statistics_before -->*/
/*                         <li>*/
/*                             <span class="fa fa-user"></span>*/
/*                             <label>{L_USERNAME}</label>*/
/*                             <!-- IF USER_COLOR --><span style="color:{USER_COLOR};font-weight:bold;">{USERNAME}</span><!-- ELSE -->{USERNAME}<!-- ENDIF -->*/
/*                         </li>*/
/* 					    <li>*/
/*                             <span class="fa fa-globe"></span>*/
/*                             <label>{L_USER_STATUS}</label>*/
/*                             <!-- IF S_ONLINE -->{L_ONLINE}<!-- ELSE -->{L_OFF_LINE}<!-- ENDIF -->*/
/*                         </li>*/
/*                         <!-- IF AGE !== '' -->*/
/* 						<li>*/
/*                         <span class="fa fa-birthday-cake"></span>*/
/*                            <label>{L_AGE}</label>*/
/*                            {AGE}*/
/*                         </li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- EVENT memberlist_view_non_contact_custom_fields_before -->*/
/*                         <!-- BEGIN custom_fields -->*/
/* 						<!-- IF not custom_fields.S_PROFILE_CONTACT -->*/
/* 				        <li>*/
/*                            <span class="fa fa-cog"></span>*/
/*                            <label>{custom_fields.PROFILE_FIELD_NAME}</label>*/
/*                             {custom_fields.PROFILE_FIELD_VALUE}*/
/*                         </li>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- END custom_fields -->	*/
/* 						<!-- EVENT memberlist_view_non_contact_custom_fields_after -->*/
/* 					<!-- EVENT memberlist_view_user_statistics_after -->*/
/*                     </ul>*/
/* 				  <div class="space10"></div>*/
/*                 </div>*/
/* 				<div class="panel-footer">*/
/* 				    <div class="clearfix mini-profile-contact-wrapper">*/
/* 						<ul class="mini-profile-contact pull-right">*/
/* 						    <!-- IF U_PM --><li><a class="default-contact" href="{U_PM}" title="{L_SEND_PRIVATE_MESSAGE}"><i class="icon-moon-pm"></i></a></li><!-- ENDIF -->*/
/* 							<!-- IF U_EMAIL --><li><a class="default-contact" href="{U_EMAIL}" title="{L_SEND_EMAIL_USER}"><i class="icon-moon-email"></i></a></li><!-- ENDIF -->*/
/* 							<!-- IF U_JABBER and S_JABBER_ENABLED --><li><a class="default-contact" href="{U_JABBER}" onclick="popup(this.href, 550, 320); return false;" title="{L_SEND_JABBER_MESSAGE}"><i class="fa fa-comment"></i></a></li><!-- ENDIF -->*/
/* 			                <!-- EVENT memberlist_view_non_contact_custom_fields_after -->*/
/* 							<!-- BEGIN custom_fields -->*/
/* 							<!-- IF custom_fields.S_PROFILE_CONTACT -->*/
/* 								<!-- IF custom_fields.PROFILE_FIELD_CONTACT -->*/
/* 									<li><a class="default-contact" href="{custom_fields.PROFILE_FIELD_CONTACT}" title="{custom_fields.PROFILE_FIELD_DESC}"><i class="icon-moon-{custom_fields.PROFILE_FIELD_NAME}"></i></a></li>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- ENDIF -->*/
/* 						    <!-- END custom_fields -->*/
/* 							<!-- EVENT memberlist_view_contact_custom_fields_after -->*/
/* 						</ul>*/
/* 					</div>*/
/* 			    </div>*/
/*             </div>*/
/*         </div>*/
/* 	*/
/*     </div>*/
/* </form>*/
/*  */
/* <div class="clearfix">*/
/* <!-- EVENT ss_memberlist_view_timeline_before -->*/
/* <div class="side-segment"><h3>{L_USER_FORUM}</h3></div>*/
/* */
/*     <div class="ui-timeline text-muted">*/
/* 	    <!-- EVENT ss_memberlist_view_timeline_item_before -->*/
/*             <div class="tl-item">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-caption">*/
/*                             <a class="btn btn-primary btn-block" href="#">{L_JOINED}</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tl-item">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time">{JOINED}</div>*/
/*                         <div class="tl-icon square-icon sm bg-info"><i class="fa fa-automobile"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-primary">{USERNAME}&nbsp;{L_MEMBERLIST_P_JOINED}</h4>*/
/*                             <p>{L_MEMBERLIST_P_EXPL}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="tl-item alt">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time">{LAST_ACTIVE}</div>*/
/*                         <div class="tl-icon square-icon sm bg-warning"><i class="fa fa-eye"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-danger">{L_LAST_ACTIVE}</h4>*/
/*                             <p>{L_MEMBERLIST_P_DATE_EXPL}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* 			*/
/* 			<div class="tl-item">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time"></div>*/
/*                         <div class="tl-icon square-icon sm bg-success"><i class="fa fa-comments"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-warning">{L_TOTAL_POSTS}</h4>*/
/*                             <p>*/
/* 							{POSTS}&nbsp;*/
/* 							<!-- IF S_DISPLAY_SEARCH -->&#45;<strong><a href="{U_SEARCH_USER}">&nbsp;{L_SEARCH_USER_POSTS}</a></strong><!-- ENDIF -->*/
/* 							<!-- IF POSTS_PCT -->&#40;{POSTS_PCT}&nbsp;&#47;&nbsp;{POSTS_DAY}&#41;<!-- ENDIF -->*/
/* 							<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE -->&#40;<a href="{U_MCP_QUEUE}">{L_POSTS_IN_QUEUE}</a>&#41;<!-- ELSEIF POSTS_IN_QUEUE -->&#40;{L_POSTS_IN_QUEUE}&#41;<!-- ENDIF -->*/
/* 							</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* 			*/
/* 			<!-- IF S_SHOW_ACTIVITY and POSTS -->*/
/* 			<div class="tl-item alt">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time"></div>*/
/*                         <div class="tl-icon square-icon sm bg-primary"><i class="fa fa-check"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-success">{L_ACTIVE_IN_FORUM}</h4>*/
/*                             <p><!-- IF ACTIVE_FORUM != '' --><a href="{U_ACTIVE_FORUM}">{ACTIVE_FORUM}</a>&nbsp;&#40;{ACTIVE_FORUM_POSTS}&nbsp;&#47;&nbsp;{ACTIVE_FORUM_PCT}&#41;<!-- ELSE -->&nbsp;&#45;&nbsp;<!-- ENDIF --></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* 			*/
/* 			*/
/* 			<div class="tl-item">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time"></div>*/
/*                         <div class="tl-icon square-icon sm bg-info"><i class="fa fa-fire"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-warning">{L_ACTIVE_IN_TOPIC}</h4>*/
/*                             <p><!-- IF ACTIVE_TOPIC != '' --><a href="{U_ACTIVE_TOPIC}">{ACTIVE_TOPIC}</a>&nbsp;&#40;{ACTIVE_TOPIC_POSTS}&nbsp;&#47;&nbsp;{ACTIVE_TOPIC_PCT}&#41;<!-- ELSE -->&nbsp;&#45;&nbsp;<!-- ENDIF --></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* 			<!-- ENDIF -->*/
/* 			*/
/* 		   <!-- IF S_WARNINGS -->*/
/*             <div class="tl-item alt">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time"></div>*/
/*                         <div class="tl-icon square-icon sm bg-success"><i class="fa fa-exclamation-triangle"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-warning">{L_WARNINGS}</h4>*/
/*                             <p>{WARNINGS}&nbsp;<!-- IF U_NOTES or U_WARN -->&#91;<!-- IF U_NOTES --><a href="{U_NOTES}">{L_VIEW_NOTES}</a><!-- ENDIF --><!-- IF U_WARN --><!-- IF U_NOTES -->&nbsp;&#124;&nbsp;<!-- ENDIF --><a href="{U_WARN}">{L_WARN_USER}</a><!-- ENDIF -->&#93;<!-- ENDIF --></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- ENDIF -->*/
/* */
/* 			<div class="tl-item">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-caption">*/
/*                             <a class="btn btn-danger btn-block" href="javascript:;">{L_END_TIMELINE}</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* 		<!-- Last divs*/
/* 		    <div class="tl-item">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time">10 hours ago</div>*/
/*                         <div class="tl-icon square-icon sm bg-primary"><i class="fa fa-clock-o"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-info">Accusantium sint</h4>*/
/*                             <p>Ipsam, minus, quam, sit officiis accusantium sint voluptates voluptatibus minima cum non quos corrupti dolorem eligendi modi eius magnam unde!</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* 		*/
/*             <div class="tl-item alt">*/
/*                 <div class="tl-body">*/
/*                     <div class="tl-entry">*/
/*                         <div class="tl-time">9:10 AM</div>*/
/*                         <div class="tl-icon square-icon sm bg-info"><i class="fa fa-gift"></i></div>*/
/*                         <div class="tl-content">*/
/*                             <h4 class="tl-tile text-primary">Sed cumque temporibus</h4>*/
/*                             <p>Deserunt sed cumque temporibus. Doloribus, iste, sit recusandae fugiat assumenda ea magni at doloremque ipsum amet molestias error mollitia maxime ad alias eos id cumque corporis placeat nisi a quaerat nemo magnam ab numquam ratione facere dolorum. Cumque, dolores, sint molestiae eaque quibusdam illo error!</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>	*/
/*         Last divs -->*/
/* 		<!-- EVENT ss_memberlist_view_timeline_item_after -->*/
/*     </div>*/
/* */
/* <!-- EVENT ss_memberlist_view_timeline_after -->	*/
/* </div>*/
/* */
/* */
/* <!-- EVENT memberlist_view_signature_before -->*/
/* */
/* <!-- IF SIGNATURE -->*/
/*    <div class="clearfix">*/
/*     <div class="side-segment"><h3>{L_SIGNATURE}</h3></div>*/
/*      <div class="panel">*/
/* 	 <div class="panel-body">*/
/*       <div class="signature" style="border-top:none; margin-top: 0;">{SIGNATURE}</div>*/
/*     </div>*/
/* 	</div>*/
/*    </div>*/
/* <!-- ENDIF -->*/
/* */
/* */
/*  <!-- EVENT memberlist_view_content_append -->*/
/* <div class="row">*/
/* <div class="col-md-4 col-md-offset-4">*/
/* <!-- INCLUDE jumpbox_options.html -->*/
/* </div>*/
/* <div class="space10"></div>*/
/*  <div class="space10"></div>*/
/* </div>*/
/* */
/* <!-- INCLUDE jump_links.html -->*/
/* <!-- INCLUDE overall_footer.html -->*/
