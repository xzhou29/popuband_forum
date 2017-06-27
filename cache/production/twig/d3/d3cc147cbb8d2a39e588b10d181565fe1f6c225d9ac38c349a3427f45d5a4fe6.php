<?php

/* viewforum_body.html */
class __TwigTemplate_b84bffff5648c65e28dc74376c414455855cfd1e2b70f96f3a75a39497b1361d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<div class=\"side-segment\">
    <h3>";
        // line 4
        echo "<a href=\"";
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a>";
        echo "</h3></div>
";
        // line 5
        // line 6
        if ((((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null) || (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null))) {
            // line 7
            echo "<div>
    <!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
    ";
            // line 9
            if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
                // line 10
                echo "    <div style=\"display: none;\">";
                echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
                echo "
        <br />
    </div>
    ";
            }
            // line 14
            echo "    ";
            if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
                // line 15
                echo "    <p><strong>";
                if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATORS");
                }
                echo ":</strong> ";
                echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
                echo "</p>
    ";
            }
            // line 17
            echo "</div>
";
        }
        // line 19
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 20
            echo "<div class=\"alert alert-info fade in\">
    <button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
    ";
            // line 22
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 23
                echo "    <a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\"><i class=\"fa fa-link fa-rotate-90\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
    ";
            } else {
                // line 25
                echo "    <strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>&nbsp;";
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
    ";
            }
            // line 27
            echo "</div>
";
        }
        // line 29
        if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
            // line 30
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 31
                echo "<ul class=\"pagination pagination-sm pull-right\">
    <li><a href=\"";
                // line 32
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" class=\"mark-read\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                echo "</a></li>
</ul>
<div class=\"space10\"></div>
";
            }
            // line 36
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 36)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 38
        if (((((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
            // line 39
            echo "<div class=\"row\">
    <div class=\"col-md-4 col-xs-7\">
        ";
            // line 41
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 42
                echo "        <div class=\"pull-left\">
            <form method=\"get\" id=\"topic-search\" action=\"";
                // line 43
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\">
                <fieldset>
                    <div class=\"input-group input-group-sm\">
                        <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
                // line 46
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\" />
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\" value=\"";
                // line 48
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\"><span class=\"hidden-xs\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
                        </div>
                    </div>
                    ";
                // line 51
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
                </fieldset>
            </form>
        </div>
        ";
            }
            // line 56
            echo "    </div>
    <div class=\"col-md-8\">
        <div class=\"pull-right\">
            <ul class=\"pagination pagination-sm hidden-xs\">
                ";
            // line 60
            if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 61
                echo "                <li class=\"t-";
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
                    <a class=\"t-icon\" href=\"";
                // line 62
                echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
                echo "\" title=\"";
                echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"t-";
                if ( !(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
                echo "\"></a>
                </li>
                ";
            }
            // line 65
            echo "                ";
            if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                // line 66
                echo "                <li><a href=\"";
                echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                echo "\" class=\"mark\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                echo "</a></li>
                ";
            }
            // line 68
            echo "                <li><a>";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a></li>
                ";
            // line 69
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 70
                echo "                ";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 70)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 71
                echo "                ";
            } else {
                // line 72
                echo "                <li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>
                ";
            }
            // line 74
            echo "            </ul>
            <div class=\"visible-xs\">
                <ul class=\"pagination pagination-sm\">
                    ";
            // line 77
            if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
                // line 78
                echo "                    ";
                if (((isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                    // line 79
                    echo "                    <li class=\"active\"><a>";
                    echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
                    echo "</a></li>
                    ";
                } elseif ((                // line 80
(isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) &&  !(isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null))) {
                    // line 81
                    echo "                    <li class=\"active\"><a>";
                    echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                    echo "</a></li>
                    ";
                }
                // line 83
                echo "                    ";
            }
            // line 84
            echo "                </ul>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 90
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
            // line 91
            echo "<div class=\"clearfix\">
    <div class=\"pull-left\">
        ";
            // line 93
            // line 94
            echo "        ";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 95
                echo "        <a href=\"";
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                echo "</a>
        ";
            } else {
                // line 97
                echo "        <a href=\"";
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;Post New Topic</a>
        ";
            }
            // line 99
            echo "        ";
            // line 100
            echo "    </div>
</div>
";
        }
        // line 103
        echo "<div class=\"space10\"></div>
<div class=\"space10\"></div>
";
        // line 105
        if ((isset($context["S_NO_READ_ACCESS"]) ? $context["S_NO_READ_ACCESS"] : null)) {
            // line 106
            echo "<div class=\"alert alert-danger fade in\">
    <strong>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
</div>
";
            // line 109
            if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 110
                echo "<section class=\"panel-login panel-w-form login-full\">
    <div class=\"row\">
        ";
                // line 112
                if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                    // line 113
                    echo "        <div class=\"col-sm-6\">
            <div class=\"signin-text\">
                <span>";
                    // line 115
                    echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT");
                    echo "</span>
            </div>
            <p>";
                    // line 117
                    echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
                    echo "</p>
            <p><a href=\"";
                    // line 118
                    echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("PRIVACY");
                    echo "</a></p>
            <p><a href=\"";
                    // line 119
                    echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                    echo "\" class=\"btn btn-default\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a></p>
        </div>
        ";
                } else {
                    // line 122
                    echo "        <div class=\"col-sm-6\">
            <div class=\"signin-text\">
                <span>";
                    // line 124
                    echo $this->env->getExtension('phpbb')->lang("CREATE_ACCOUNT_DISABLED");
                    echo "</span>
            </div>
            <p>";
                    // line 126
                    echo $this->env->getExtension('phpbb')->lang("REGISTRATION_DISABLED");
                    echo "</p>
            <p><a href=\"";
                    // line 127
                    echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("PRIVACY");
                    echo "</a></p>
            <p><a href=\"mailto:";
                    // line 128
                    echo (isset($context["BOARD_EMAIL"]) ? $context["BOARD_EMAIL"] : null);
                    echo "?subject=Registrations Closed&body=Dear Admin, %0A%0AI Just wanted to let you know that the board registrations are closed. %0A%0AThis might be an error and I would like to register. %0A%0APlease let me know if this is possible.%0A%0AThanks!\" class=\"btn btn-default\">";
                    echo $this->env->getExtension('phpbb')->lang("CONTACT_WEBMASTER");
                    echo "</a></p>
        </div>
        ";
                }
                // line 131
                echo "        <div class=\"col-sm-6\">
            <div class=\"signin-text\">
                <span>";
                // line 133
                echo $this->env->getExtension('phpbb')->lang("SIGN_IN_ACCOUNT");
                echo "</span>
            </div>
            <form role=\"form\" method=\"post\" action=\"";
                // line 135
                echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
                echo "\">
                <fieldset>
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"username\">";
                // line 138
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
                        <div class=\"form-icon\">
                            <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
                // line 140
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo "\">
                            <span class=\"fa fa-user login-form-icon\"></span>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"sr-only\" for=\"password\">";
                // line 145
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
                        <div class=\"form-icon\">
                            <input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
                // line 147
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo "\">
                            <span class=\"fa fa-lock login-form-icon\"></span>
                        </div>
                    </div>
                    <p>
                        ";
                // line 152
                if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                    // line 153
                    echo "                        <div class=\"checkbox pull-right\">
                            <label for=\"autologin\">
                                <input type=\"checkbox\" name=\"autologin\" id=\"autologin\">";
                    // line 155
                    echo $this->env->getExtension('phpbb')->lang("LOGIN_REMEMBER");
                    echo "</label>
                        </div>
                        ";
                }
                // line 158
                echo "                        <button type=\"submit\" class=\"btn btn-primary\" name=\"login\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" data-loading-text=\"";
                echo $this->env->getExtension('phpbb')->lang("LOADING_LOG_IN");
                echo " <i class='fa-spin fa fa-spinner fa-lg'></i>\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_ME_IN");
                echo "</button>
                        ";
                // line 159
                echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
                echo "
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</section>
";
            }
        }
        // line 168
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 170
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 171
                echo "</table>
</div>
</div>
";
            }
            // line 175
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 176
                echo "<div class=\"panel panel-forum\">
    <div class=\"panel-heading\">
        ";
                // line 178
                if ((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                    echo "
        ";
                } elseif (($this->getAttribute(                // line 179
$context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                    echo "
        ";
                } else {
                    // line 180
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "
        ";
                }
                // line 182
                echo "    </div>
    <div class=\"panel-inner\">
        <table class=\"footable table table-striped table-primary table-hover\">
            <thead>
                <tr>
                    <th data-class=\"expand\">";
                // line 187
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</th>
                    <th class=\"large110\" data-hide=\"phone\">STATISTICS</th>
                    <th class=\"large21\" data-hide=\"phone\">";
                // line 189
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            }
            // line 194
            echo "                ";
            // line 195
            echo "                <tr>
                    <td>
                        ";
            // line 197
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                // line 198
                echo "                        <i class=\"topic-icon\" style=\"background-image: url(";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"></i>
                        ";
            }
            // line 200
            echo "                        <span class=\"icon-wrapper\">
\t\t\t    <i class=\"row-icon-font icon-moon-default2";
            // line 201
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " icon-moon-voice2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " icon-moon-podcast2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " icon-moon-pushpin2";
            }
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                echo " icon-moon-poll";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_MOVED", array())) {
                echo " icon-moon-moved";
            }
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo " forum-unread";
            } else {
                echo " forum-read";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\"></i>
\t\t\t\t</span>
                        <i class=\"row-icon-font-mini";
            // line 203
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_LOCKED", array())) {
                echo " icon-moon-lock forumview-lock";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\"></i>
                        <div class=\"desc-wrapper\">
                            ";
            // line 205
            // line 206
            echo "                            ";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("VIEW_FIRST_UNREAD");
                echo "\"><i class=\"topic-newest fa fa-asterisk\"></i></a>
                            ";
            }
            // line 207
            echo "<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\">&nbsp;";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</a>
                            ";
            // line 208
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_NOT_APPROVED");
                echo "\">&nbsp;<i class=\"fa fa-question-circle\"></i></a>
                            ";
            }
            // line 210
            echo "                            ";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_REPORTED");
                echo "\">&nbsp;<i class=\"fa fa-exclamation-circle text-danger\"></i></a>
                            ";
            }
            // line 212
            echo "                            ";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPICS_ROW_DELETED");
                echo "\">&nbsp;<i class=\"fa fa-exclamation-circle text-danger\"></i></a>
                            ";
            }
            // line 214
            echo "                            <br />
                            ";
            // line 215
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                // line 216
                echo "                            <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
                                ";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 218
                    echo "                                ";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 219
                        echo "                                ";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        // line 220
                        echo "                                <li class=\"active\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</li>
                                ";
                    } elseif ($this->getAttribute(                    // line 221
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        // line 222
                        echo "                                <li class=\"ellipsis\"><a>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</a></li>
                                ";
                    } elseif ($this->getAttribute(                    // line 223
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 224
                        echo "                                ";
                    } else {
                        // line 225
                        echo "                                <li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
                                ";
                    }
                    // line 227
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                echo "                            </ul>
                            ";
            }
            // line 230
            echo "                            ";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ATTACH_FORUM");
                echo "\"></i>
                            ";
            }
            // line 232
            echo "                            ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo "
                            <small>&nbsp;&#45;&nbsp;";
            // line 233
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "</small>
                            ";
            // line 234
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo "<small>&nbsp;&#45;&nbsp;";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "&nbsp;<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a></small>
                            ";
            }
            // line 236
            echo "                            ";
            // line 237
            echo "                        </div>
                    </td>
                    <td class=\"stats-col\">
                        <span class=\"stats-wrapper\">
\t\t\t ";
            // line 241
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "&nbsp;<br />";
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb')->lang("VIEWS");
            echo "
\t\t\t </span>
                    </td>
                    <td>
                        <span class=\"last-wrapper text-overflow\">
\t\t\t";
            // line 246
            // line 247
            echo "\t\t\t ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t ";
            // line 248
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("FORUMLIST_LASTPOST");
                echo "\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
            }
            // line 249
            echo "\t\t\t <br /><small>";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</small>
\t\t\t</span>
                    </td>
                </tr>
                ";
            // line 253
            // line 254
            echo "                ";
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 255
                echo "            </tbody>
        </table>
    </div>
</div>
";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 261
            if ((isset($context["S_IS_POSTABLE"]) ? $context["S_IS_POSTABLE"] : null)) {
                // line 262
                echo "<div class=\"well\">
    <strong>";
                // line 263
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
</div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) &&  !(isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null))) {
            // line 268
            echo "<div class=\"clearfix\">
    <div class=\"pull-left\">
        ";
            // line 270
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 271
                echo "        ";
                // line 272
                echo "        ";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 273
                    echo "        <a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "</a>
        ";
                } else {
                    // line 275
                    echo "        <a href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOADING");
                    echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;Post New Topic</a>
        ";
                }
                // line 277
                echo "        ";
                // line 278
                echo "        ";
            }
            // line 279
            echo "    </div>
    <div class=\"pull-right\">
        <ul class=\"pagination pagination-sm hidden-xs\">
            <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            // line 282
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</a></li>
            <li><a>";
            // line 283
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a></li>
            ";
            // line 284
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 285
                echo "            ";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 285)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 286
                echo "            ";
            } else {
                // line 287
                echo "            <li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>
            ";
            }
            // line 289
            echo "        </ul>
        <div class=\"visible-xs\">
            <ul class=\"pagination pagination-sm\">
                <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>
                ";
            // line 293
            if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
                // line 294
                echo "                <li><a class=\"pagination-trigger\" data-placement=\"top\">";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>
                ";
            }
            // line 296
            echo "                <li class=\"active\"><a>";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a></li>
            </ul>
        </div>
    </div>
</div>
<div class=\"clearfix\">
    <div class=\"pull-right\">
        <div class=\"visible-xs\">
            <ul class=\"pagination pagination-sm\">
                ";
            // line 305
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 306
                echo "                ";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "viewforum_body.html", 306)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 307
                echo "                ";
            } else {
                // line 308
                echo "                <li class=\"active\"><a>";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a></li>
                ";
            }
            // line 310
            echo "            </ul>
        </div>
    </div>
</div>
";
        }
        // line 315
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewforum_body.html", 315)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 316
        echo "<div class=\"space10\"></div>
";
        // line 317
        if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 318
            $location = "display_options_viewforum.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options_viewforum.html", "viewforum_body.html", 318)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 320
        // line 321
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            // line 322
            echo "<div class=\"row\">
    ";
            // line 323
            if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
                // line 324
                echo "    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
        <div class=\"panel panel-forum panel-whois\">
            <div class=\"panel-heading\">
                ";
                // line 327
                if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "</a>
                ";
                } else {
                    // line 328
                    echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                    echo "
                ";
                }
                // line 330
                echo "            </div>
            <div class=\"panel-body\">
                <p>";
                // line 332
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "</p>
            </div>
        </div>
    </div>
    ";
            }
            // line 337
            echo "    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
        <div class=\"panel panel-forum\">
            <div class=\"panel-heading\">";
            // line 339
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "</div>
            <div class=\"panel-body\">
                <p>
                    ";
            // line 342
            if ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null)) {
                // line 343
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo $this->getAttribute($context["rules"], "RULE", array());
                    echo "
                    <br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "                    ";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NOT_AVAILABLE");
                echo "
                    ";
            }
            // line 348
            echo "                </p>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 354
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 354)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1030 => 354,  1022 => 348,  1015 => 346,  1002 => 343,  1000 => 342,  994 => 339,  990 => 337,  982 => 332,  978 => 330,  973 => 328,  964 => 327,  959 => 324,  957 => 323,  954 => 322,  952 => 321,  951 => 320,  938 => 318,  936 => 317,  933 => 316,  921 => 315,  914 => 310,  908 => 308,  905 => 307,  892 => 306,  890 => 305,  877 => 296,  871 => 294,  869 => 293,  863 => 289,  857 => 287,  854 => 286,  841 => 285,  839 => 284,  835 => 283,  831 => 282,  826 => 279,  823 => 278,  821 => 277,  813 => 275,  805 => 273,  802 => 272,  800 => 271,  798 => 270,  794 => 268,  792 => 267,  782 => 263,  779 => 262,  777 => 261,  767 => 255,  764 => 254,  763 => 253,  755 => 249,  747 => 248,  740 => 247,  739 => 246,  725 => 241,  719 => 237,  717 => 236,  705 => 234,  701 => 233,  694 => 232,  686 => 230,  682 => 228,  676 => 227,  668 => 225,  665 => 224,  663 => 223,  658 => 222,  656 => 221,  651 => 220,  648 => 219,  645 => 218,  641 => 217,  638 => 216,  636 => 215,  633 => 214,  623 => 212,  613 => 210,  604 => 208,  597 => 207,  587 => 206,  586 => 205,  577 => 203,  551 => 201,  548 => 200,  539 => 198,  537 => 197,  533 => 195,  531 => 194,  523 => 189,  518 => 187,  511 => 182,  506 => 180,  500 => 179,  495 => 178,  491 => 176,  489 => 175,  483 => 171,  481 => 170,  476 => 169,  475 => 168,  463 => 159,  454 => 158,  448 => 155,  444 => 153,  442 => 152,  434 => 147,  428 => 145,  420 => 140,  414 => 138,  408 => 135,  403 => 133,  399 => 131,  391 => 128,  381 => 127,  377 => 126,  372 => 124,  368 => 122,  360 => 119,  350 => 118,  346 => 117,  341 => 115,  337 => 113,  335 => 112,  331 => 110,  329 => 109,  324 => 107,  321 => 106,  319 => 105,  315 => 103,  310 => 100,  308 => 99,  300 => 97,  292 => 95,  289 => 94,  288 => 93,  284 => 91,  282 => 90,  274 => 84,  271 => 83,  265 => 81,  263 => 80,  258 => 79,  255 => 78,  253 => 77,  248 => 74,  242 => 72,  239 => 71,  226 => 70,  224 => 69,  219 => 68,  211 => 66,  208 => 65,  192 => 62,  183 => 61,  181 => 60,  175 => 56,  167 => 51,  159 => 48,  154 => 46,  148 => 43,  145 => 42,  143 => 41,  139 => 39,  137 => 38,  124 => 36,  115 => 32,  112 => 31,  110 => 30,  108 => 29,  104 => 27,  95 => 25,  87 => 23,  85 => 22,  81 => 20,  79 => 19,  75 => 17,  63 => 15,  60 => 14,  52 => 10,  50 => 9,  46 => 7,  44 => 6,  43 => 5,  35 => 4,  32 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <!-- EVENT viewforum_forum_title_before -->*/
/* <div class="side-segment">*/
/*     <h3><!-- EVENT viewforum_forum_name_prepend --><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><!-- EVENT viewforum_forum_name_append --></h3></div>*/
/* <!-- EVENT viewforum_forum_title_after -->*/
/* <!-- IF FORUM_DESC or MODERATORS or U_MCP -->*/
/* <div>*/
/*     <!-- NOTE: remove the style="display: none" when you want to have the forum description on the forum body -->*/
/*     <!-- IF FORUM_DESC -->*/
/*     <div style="display: none;">{FORUM_DESC}*/
/*         <br />*/
/*     </div>*/
/*     <!-- ENDIF -->*/
/*     <!-- IF MODERATORS -->*/
/*     <p><strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->:</strong> {MODERATORS}</p>*/
/*     <!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF S_FORUM_RULES -->*/
/* <div class="alert alert-info fade in">*/
/*     <button class="close" data-dismiss="alert"><span class="awe-remove-circle"></span></button>*/
/*     <!-- IF U_FORUM_RULES -->*/
/*     <a href="{U_FORUM_RULES}"><i class="fa fa-link fa-rotate-90"></i>&nbsp;{L_FORUM_RULES}</a>*/
/*     <!-- ELSE -->*/
/*     <strong>{L_FORUM_RULES}{L_COLON}</strong>&nbsp;{FORUM_RULES}*/
/*     <!-- ENDIF -->*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF S_HAS_SUBFORUM -->*/
/* <!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/* <ul class="pagination pagination-sm pull-right">*/
/*     <li><a href="{U_MARK_FORUMS}" class="mark-read" data-ajax="mark_forums_read">{L_MARK_SUBFORUMS_READ}</a></li>*/
/* </ul>*/
/* <div class="space10"></div>*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDE forumlist_body.html -->*/
/* <!-- ENDIF -->*/
/* <!-- IF S_DISPLAY_POST_INFO or .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/* <div class="row">*/
/*     <div class="col-md-4 col-xs-7">*/
/*         <!-- IF S_DISPLAY_SEARCHBOX -->*/
/*         <div class="pull-left">*/
/*             <form method="get" id="topic-search" action="{S_SEARCHBOX_ACTION}">*/
/*                 <fieldset>*/
/*                     <div class="input-group input-group-sm">*/
/*                         <input type="text" class="form-control" name="keywords" id="search_keywords" value="" placeholder="{L_SEARCH_FORUM}" />*/
/*                         <div class="input-group-btn">*/
/*                             <button class="btn btn-default" type="submit" value="{L_SEARCH}"><span class="hidden-xs">{L_SEARCH}</span><i class="visible-xs fa fa-search fa-btn-fx"></i></button>*/
/*                         </div>*/
/*                     </div>*/
/*                     {S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*         <!-- ENDIF -->*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <div class="pull-right">*/
/*             <ul class="pagination pagination-sm hidden-xs">*/
/*                 <!-- IF U_WATCH_FORUM_LINK and not S_IS_BOT -->*/
/*                 <li class="t-<!-- IF S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->">*/
/*                     <a class="t-icon" href="{U_WATCH_FORUM_LINK}" title="{S_WATCH_FORUM_TITLE}" data-ajax="toggle_link" data-toggle-class="t-<!-- IF not S_WATCHING_FORUM -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-url="{U_WATCH_FORUM_TOGGLE}"></a>*/
/*                 </li>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow -->*/
/*                 <li><a href="{U_MARK_TOPICS}" class="mark" data-ajax="mark_topics_read">{L_MARK_TOPICS_READ}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <li><a>{TOTAL_TOPICS}</a></li>*/
/*                 <!-- IF .pagination -->*/
/*                 <!-- INCLUDE pagination.html -->*/
/*                 <!-- ELSE -->*/
/*                 <li class="active"><a>{PAGE_NUMBER}</a></li>*/
/*                 <!-- ENDIF -->*/
/*             </ul>*/
/*             <div class="visible-xs">*/
/*                 <ul class="pagination pagination-sm">*/
/*                     <!-- IF .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/*                     <!-- IF TOTAL_POSTS and not NEWEST_USER -->*/
/*                     <li class="active"><a>{TOTAL_POSTS}</a></li>*/
/*                     <!-- ELSEIF TOTAL_TOPICS and not NEWEST_USER -->*/
/*                     <li class="active"><a>{TOTAL_TOPICS}</a></li>*/
/*                     <!-- ENDIF -->*/
/*                     <!-- ENDIF -->*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/* <div class="clearfix">*/
/*     <div class="pull-left">*/
/*         <!-- EVENT viewforum_buttons_top_before -->*/
/*         <!-- IF S_IS_LOCKED -->*/
/*         <a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-danger"><i class="fa fa-lock"></i>&nbsp;{L_FORUM_LOCKED}</a>*/
/*         <!-- ELSE -->*/
/*         <a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-default btn-load" data-loading-text="{L_LOADING}&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>"><i class="fa fa-plus"></i>&nbsp;Post New Topic</a>*/
/*         <!-- ENDIF -->*/
/*         <!-- EVENT viewforum_buttons_top_after -->*/
/*     </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <div class="space10"></div>*/
/* <div class="space10"></div>*/
/* <!-- IF S_NO_READ_ACCESS -->*/
/* <div class="alert alert-danger fade in">*/
/*     <strong>{L_NO_READ_ACCESS}</strong>*/
/* </div>*/
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* <section class="panel-login panel-w-form login-full">*/
/*     <div class="row">*/
/*         <!-- IF S_REGISTER_ENABLED -->*/
/*         <div class="col-sm-6">*/
/*             <div class="signin-text">*/
/*                 <span>{L_CREATE_ACCOUNT}</span>*/
/*             </div>*/
/*             <p>{L_LOGIN_INFO}</p>*/
/*             <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/*             <p><a href="{U_REGISTER}" class="btn btn-default">{L_REGISTER}</a></p>*/
/*         </div>*/
/*         <!-- ELSE -->*/
/*         <div class="col-sm-6">*/
/*             <div class="signin-text">*/
/*                 <span>{L_CREATE_ACCOUNT_DISABLED}</span>*/
/*             </div>*/
/*             <p>{L_REGISTRATION_DISABLED}</p>*/
/*             <p><a href="{U_TERMS_USE}">{L_TERMS_USE}</a>&nbsp;&#124;&nbsp;<a href="{U_PRIVACY}">{L_PRIVACY}</a></p>*/
/*             <p><a href="mailto:{BOARD_EMAIL}?subject=Registrations Closed&body=Dear Admin, %0A%0AI Just wanted to let you know that the board registrations are closed. %0A%0AThis might be an error and I would like to register. %0A%0APlease let me know if this is possible.%0A%0AThanks!" class="btn btn-default">{L_CONTACT_WEBMASTER}</a></p>*/
/*         </div>*/
/*         <!-- ENDIF -->*/
/*         <div class="col-sm-6">*/
/*             <div class="signin-text">*/
/*                 <span>{L_SIGN_IN_ACCOUNT}</span>*/
/*             </div>*/
/*             <form role="form" method="post" action="{S_LOGIN_ACTION}">*/
/*                 <fieldset>*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="username">{L_USERNAME}{L_COLON}</label>*/
/*                         <div class="form-icon">*/
/*                             <input type="text" class="form-control input-lg" name="username" id="username" placeholder="{L_USERNAME}">*/
/*                             <span class="fa fa-user login-form-icon"></span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="sr-only" for="password">{L_PASSWORD}{L_COLON}</label>*/
/*                         <div class="form-icon">*/
/*                             <input type="password" class="form-control input-lg" name="password" id="password" placeholder="{L_PASSWORD}">*/
/*                             <span class="fa fa-lock login-form-icon"></span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <p>*/
/*                         <!-- IF S_AUTOLOGIN_ENABLED -->*/
/*                         <div class="checkbox pull-right">*/
/*                             <label for="autologin">*/
/*                                 <input type="checkbox" name="autologin" id="autologin">{L_LOGIN_REMEMBER}</label>*/
/*                         </div>*/
/*                         <!-- ENDIF -->*/
/*                         <button type="submit" class="btn btn-primary" name="login" value="{L_LOGIN}" data-loading-text="{L_LOADING_LOG_IN} <i class='fa-spin fa fa-spinner fa-lg'></i>">{L_LOGIN_ME_IN}</button>*/
/*                         {S_LOGIN_REDIRECT}*/
/*                     </p>*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* <!-- EVENT viewforum_body_topic_row_before -->*/
/* <!-- BEGIN topicrow -->*/
/* <!-- IF not topicrow.S_TOPIC_TYPE_SWITCH and not topicrow.S_FIRST_ROW -->*/
/* </table>*/
/* </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- IF topicrow.S_FIRST_ROW or not topicrow.S_TOPIC_TYPE_SWITCH -->*/
/* <div class="panel panel-forum">*/
/*     <div class="panel-heading">*/
/*         <!-- IF S_DISPLAY_ACTIVE -->{L_ACTIVE_TOPICS}*/
/*         <!-- ELSEIF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) -->{L_ANNOUNCEMENTS}*/
/*         <!-- ELSE -->{L_TOPICS}*/
/*         <!-- ENDIF -->*/
/*     </div>*/
/*     <div class="panel-inner">*/
/*         <table class="footable table table-striped table-primary table-hover">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th data-class="expand">{L_TITLE}</th>*/
/*                     <th class="large110" data-hide="phone">STATISTICS</th>*/
/*                     <th class="large21" data-hide="phone">{L_LAST_POST}</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <!-- ENDIF -->*/
/*                 <!-- EVENT viewforum_body_topicrow_row_before -->*/
/*                 <tr>*/
/*                     <td>*/
/*                         <!-- IF topicrow.TOPIC_ICON_IMG and S_TOPIC_ICONS -->*/
/*                         <i class="topic-icon" style="background-image: url({T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}); background-repeat: no-repeat;" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"></i>*/
/*                         <!-- ENDIF -->*/
/*                         <span class="icon-wrapper">*/
/* 			    <i class="row-icon-font icon-moon-default2<!-- IF topicrow.S_POST_ANNOUNCE --> icon-moon-voice2<!-- ENDIF --><!-- IF topicrow.S_POST_GLOBAL --> icon-moon-podcast2<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> icon-moon-pushpin2<!-- ENDIF --><!-- IF topicrow.S_HAS_POLL --> icon-moon-poll<!-- ENDIF --><!-- IF topicrow.S_TOPIC_MOVED --> icon-moon-moved<!-- ENDIF --><!-- IF topicrow.S_UNREAD_TOPIC --> forum-unread<!-- ELSE --> forum-read<!-- ENDIF -->" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"></i>*/
/* 				</span>*/
/*                         <i class="row-icon-font-mini<!-- IF topicrow.S_TOPIC_LOCKED --> icon-moon-lock forumview-lock<!-- ENDIF -->" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"></i>*/
/*                         <div class="desc-wrapper">*/
/*                             <!-- EVENT topiclist_row_prepend -->*/
/*                             <!-- IF topicrow.S_UNREAD_TOPIC --><a href="{topicrow.U_NEWEST_POST}" title="{L_VIEW_FIRST_UNREAD}"><i class="topic-newest fa fa-asterisk"></i></a>*/
/*                             <!-- ENDIF --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">&nbsp;{topicrow.TOPIC_TITLE}</a>*/
/*                             <!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED --><a href="{topicrow.U_MCP_QUEUE}" title="{L_TOPICS_ROW_NOT_APPROVED}">&nbsp;<i class="fa fa-question-circle"></i></a>*/
/*                             <!-- ENDIF -->*/
/*                             <!-- IF topicrow.S_TOPIC_REPORTED --><a href="{topicrow.U_MCP_REPORT}" title="{L_TOPICS_ROW_REPORTED}">&nbsp;<i class="fa fa-exclamation-circle text-danger"></i></a>*/
/*                             <!-- ENDIF -->*/
/*                             <!-- IF topicrow.S_TOPIC_DELETED --><a href="{topicrow.U_MCP_QUEUE}" title="{L_TOPICS_ROW_DELETED}">&nbsp;<i class="fa fa-exclamation-circle text-danger"></i></a>*/
/*                             <!-- ENDIF -->*/
/*                             <br />*/
/*                             <!-- IF .topicrow.pagination -->*/
/*                             <ul class="pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs">*/
/*                                 <!-- BEGIN pagination -->*/
/*                                 <!-- IF topicrow.pagination.S_IS_PREV -->*/
/*                                 <!-- ELSEIF topicrow.pagination.S_IS_CURRENT -->*/
/*                                 <li class="active">{topicrow.pagination.PAGE_NUMBER}</li>*/
/*                                 <!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS -->*/
/*                                 <li class="ellipsis"><a>{L_ELLIPSIS}</a></li>*/
/*                                 <!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/*                                 <!-- ELSE -->*/
/*                                 <li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/*                                 <!-- ENDIF -->*/
/*                                 <!-- END pagination -->*/
/*                             </ul>*/
/*                             <!-- ENDIF -->*/
/*                             <!-- IF topicrow.ATTACH_ICON_IMG --><i class="fa fa-paperclip fa-flip-horizontal" title="{L_ATTACH_FORUM}"></i>*/
/*                             <!-- ENDIF -->*/
/*                             {L_POST_BY_AUTHOR}&nbsp;{topicrow.TOPIC_AUTHOR_FULL}*/
/*                             <small>&nbsp;&#45;&nbsp;{topicrow.FIRST_POST_TIME}</small>*/
/*                             <!-- IF topicrow.S_POST_GLOBAL and FORUM_ID != topicrow.FORUM_ID --><small>&nbsp;&#45;&nbsp;{L_IN}{L_COLON}&nbsp;<a href="{topicrow.U_VIEW_FORUM}">{topicrow.FORUM_NAME}</a></small>*/
/*                             <!-- ENDIF -->*/
/*                             <!-- EVENT topiclist_row_append -->*/
/*                         </div>*/
/*                     </td>*/
/*                     <td class="stats-col">*/
/*                         <span class="stats-wrapper">*/
/* 			 {topicrow.REPLIES}&nbsp;{L_REPLIES}&nbsp;<br />{topicrow.VIEWS}&nbsp;{L_VIEWS}*/
/* 			 </span>*/
/*                     </td>*/
/*                     <td>*/
/*                         <span class="last-wrapper text-overflow">*/
/* 			<!-- EVENT avatars_topicview -->*/
/* 			 {L_POST_BY_AUTHOR}&nbsp;{topicrow.LAST_POST_AUTHOR_FULL}*/
/* 			 <!-- IF not S_IS_BOT --><a title="{L_FORUMLIST_LASTPOST}" href="{topicrow.U_LAST_POST}"><i class="mobile-post fa fa-sign-out"></i></a><!-- ENDIF -->*/
/* 			 <br /><small>{topicrow.LAST_POST_TIME}</small>*/
/* 			</span>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <!-- EVENT viewforum_body_topicrow_row_after -->*/
/*                 <!-- IF topicrow.S_LAST_ROW -->*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- BEGINELSE -->*/
/* <!-- IF S_IS_POSTABLE -->*/
/* <div class="well">*/
/*     <strong>{L_NO_TOPICS}</strong>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- END topicrow -->*/
/* <!-- IF .topicrow and not S_DISPLAY_ACTIVE -->*/
/* <div class="clearfix">*/
/*     <div class="pull-left">*/
/*         <!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/*         <!-- EVENT viewforum_buttons_bottom_before -->*/
/*         <!-- IF S_IS_LOCKED -->*/
/*         <a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-danger"><i class="fa fa-lock"></i>&nbsp;{L_FORUM_LOCKED}</a>*/
/*         <!-- ELSE -->*/
/*         <a href="{U_POST_NEW_TOPIC}" role="button" class="btn btn-default btn-load" data-loading-text="{L_LOADING}&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>"><i class="fa fa-plus"></i>&nbsp;Post New Topic</a>*/
/*         <!-- ENDIF -->*/
/*         <!-- EVENT viewforum_buttons_bottom_after -->*/
/*         <!-- ENDIF -->*/
/*     </div>*/
/*     <div class="pull-right">*/
/*         <ul class="pagination pagination-sm hidden-xs">*/
/*             <li><a href="javascript:void(0);" data-target=".sorting" data-toggle="collapse">{L_OPTIONS}</a></li>*/
/*             <li><a>{TOTAL_TOPICS}</a></li>*/
/*             <!-- IF .pagination -->*/
/*             <!-- INCLUDE pagination.html -->*/
/*             <!-- ELSE -->*/
/*             <li class="active"><a>{PAGE_NUMBER}</a></li>*/
/*             <!-- ENDIF -->*/
/*         </ul>*/
/*         <div class="visible-xs">*/
/*             <ul class="pagination pagination-sm">*/
/*                 <li><a href="javascript:void(0);" data-target=".sorting" data-toggle="collapse"><i class="fa fa-cog"></i></a></li>*/
/*                 <!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/*                 <li><a class="pagination-trigger" data-placement="top">{PAGE_NUMBER}</a></li>*/
/*                 <!-- ENDIF -->*/
/*                 <li class="active"><a>{TOTAL_TOPICS}</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="clearfix">*/
/*     <div class="pull-right">*/
/*         <div class="visible-xs">*/
/*             <ul class="pagination pagination-sm">*/
/*                 <!-- IF .pagination -->*/
/*                 <!-- INCLUDE pagination_mobile.html -->*/
/*                 <!-- ELSE -->*/
/*                 <li class="active"><a>{PAGE_NUMBER}</a></li>*/
/*                 <!-- ENDIF -->*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDE jump_links.html -->*/
/* <div class="space10"></div>*/
/* <!-- IF S_SELECT_SORT_DAYS and not S_IS_BOT -->*/
/* <!-- INCLUDE display_options_viewforum.html -->*/
/* <!-- ENDIF -->*/
/* <!-- EVENT viewforum_sorting_after -->*/
/* <!-- IF S_USER_LOGGED_IN -->*/
/* <div class="row">*/
/*     <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/*     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/*         <div class="panel panel-forum panel-whois">*/
/*             <div class="panel-heading">*/
/*                 <!-- IF U_VIEWONLINE --><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a>*/
/*                 <!-- ELSE -->{L_WHO_IS_ONLINE}*/
/*                 <!-- ENDIF -->*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <p>{LOGGED_IN_USER_LIST}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- ENDIF -->*/
/*     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/*         <div class="panel panel-forum">*/
/*             <div class="panel-heading">{L_FORUM_PERMISSIONS}</div>*/
/*             <div class="panel-body">*/
/*                 <p>*/
/*                     <!-- IF S_DISPLAY_POST_INFO -->*/
/*                     <!-- BEGIN rules -->{rules.RULE}*/
/*                     <br />*/
/*                     <!-- END rules -->*/
/*                     <!-- ELSE -->{L_NOT_AVAILABLE}*/
/*                     <!-- ENDIF -->*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
