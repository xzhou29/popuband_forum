<?php

/* details.html */
class __TwigTemplate_a07632bded1219943534655730081ba4c548edc7a2132ee74656b7cc16067181 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "details.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("RS_DETAILS");
        echo " - ";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</h2>

<div style=\"float: left; width: 41%;\">

\t<div class=\"panel bg1\">
\t\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>

\t\t<h3>";
        // line 10
        echo (isset($context["USERNAME_FULL"]) ? $context["USERNAME_FULL"] : null);
        echo "</h3>

\t\t";
        // line 12
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 13
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt>";
            // line 14
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "</dt>
\t\t\t";
            // line 15
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 16
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 17
            echo "\t\t</dl>
\t\t";
        }
        // line 19
        echo "
\t\t<dl class=\"left-box details\" style=\"width: 70%;\">
\t\t\t";
        // line 21
        if ( !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 22
            echo "\t\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dt style=\"width: 50%;\">";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd style=\"width: 45%;\">";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 23
            echo "\t\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dt style=\"width: 50%;\">";
                if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("RANK");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                }
                echo "</dt> <dd style=\"width: 45%;\">";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 24
            echo "\t\t\t";
        }
        // line 25
        echo "\t\t\t<dt style=\"width: 50%;\">";
        echo $this->env->getExtension('phpbb')->lang("REPUTATION");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt><dd style=\"width: 45%;\"><div class=\"reputation ";
        echo (isset($context["REPUTATION_CLASS"]) ? $context["REPUTATION_CLASS"] : null);
        echo "\"><span>";
        echo (isset($context["REPUTATION"]) ? $context["REPUTATION"] : null);
        echo "</span>
\t\t\t";
        // line 26
        if ((isset($context["S_RS_POWER_ENABLE"]) ? $context["S_RS_POWER_ENABLE"] : null)) {
            // line 27
            echo "\t\t\t\t<dt style=\"width: 50%;\">";
            echo $this->env->getExtension('phpbb')->lang("RS_POWER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd style=\"width: 45%;\">";
            echo (isset($context["RS_POWER"]) ? $context["RS_POWER"] : null);
            echo "</dd>
\t\t\t\t";
            // line 28
            if ((isset($context["RS_POWER_LEFT"]) ? $context["RS_POWER_LEFT"] : null)) {
                echo "<dt style=\"width: 50%;\">";
                echo $this->env->getExtension('phpbb')->lang("RS_VOTING_POWER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd style=\"width: 45%;\">";
                echo (isset($context["RS_POWER_LEFT"]) ? $context["RS_POWER_LEFT"] : null);
                echo "</dd>";
            }
            // line 29
            echo "\t\t\t";
        }
        // line 30
        echo "\t\t\t";
        if ((isset($context["S_RS_POST_RATING"]) ? $context["S_RS_POST_RATING"] : null)) {
            echo "<dt style=\"width: 50%;\">";
            echo $this->env->getExtension('phpbb')->lang("RS_POST_COUNT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd style=\"width: 45%;\">";
            echo (isset($context["POST_COUNT"]) ? $context["POST_COUNT"] : null);
            echo "</dd>";
        }
        // line 31
        echo "\t\t\t";
        if ((isset($context["S_RS_USER_RATING"]) ? $context["S_RS_USER_RATING"] : null)) {
            echo "<dt style=\"width: 50%;\">";
            echo $this->env->getExtension('phpbb')->lang("RS_USER_COUNT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd style=\"width: 45%;\">";
            echo (isset($context["USER_COUNT"]) ? $context["USER_COUNT"] : null);
            echo "</dd>";
        }
        // line 32
        echo "\t\t\t<dt style=\"width: 50%;\">";
        echo $this->env->getExtension('phpbb')->lang("RS_POSITIVE_COUNT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd style=\"width: 45%;\">";
        echo (isset($context["POSITIVE_COUNT"]) ? $context["POSITIVE_COUNT"] : null);
        echo " (";
        echo $this->env->getExtension('phpbb')->lang("RS_POINTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["POSITIVE_SUM"]) ? $context["POSITIVE_SUM"] : null);
        echo ")</dd>
\t\t\t<dt style=\"width: 50%;\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("RS_NEGATIVE_COUNT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd style=\"width: 45%;\">";
        echo (isset($context["NEGATIVE_COUNT"]) ? $context["NEGATIVE_COUNT"] : null);
        echo " (";
        echo $this->env->getExtension('phpbb')->lang("RS_POINTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["NEGATIVE_SUM"]) ? $context["NEGATIVE_SUM"] : null);
        echo ")</dd>
\t\t\t";
        // line 34
        if ((isset($context["S_CLEAR"]) ? $context["S_CLEAR"] : null)) {
            echo "<dt style=\"width: 50%;\">&nbsp;</dt> <dd style=\"width: 45%;\">[ <a href=\"";
            echo (isset($context["U_CLEAR"]) ? $context["U_CLEAR"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RS_CLEAR_USER");
            echo "</a> ]</dd>";
        }
        // line 35
        echo "\t\t</dl>

\t\t<span class=\"corners-bottom\"><span></span></span></div>
\t</div>

\t<div class=\"panel bg2\">
\t\t<div class=\"inner\"><span class=\"corners-top\"><span></span></span>

\t\t";
        // line 43
        if (((isset($context["S_RS_POWER_ENABLE"]) ? $context["S_RS_POWER_ENABLE"] : null) && (isset($context["S_RS_POWER_EXPLAIN"]) ? $context["S_RS_POWER_EXPLAIN"] : null))) {
            // line 44
            echo "\t\t<div class=\"column1\">

\t\t\t<h3>";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAILS");
            echo "</h3>

\t\t\t<dl class=\"details\">
\t\t\t";
            // line 49
            if ( !(isset($context["S_RS_GROUP_POWER"]) ? $context["S_RS_GROUP_POWER"] : null)) {
                // line 50
                echo "\t\t\t\t";
                if ((isset($context["RS_CFG_MEMBERSHIP_DAYS"]) ? $context["RS_CFG_MEMBERSHIP_DAYS"] : null)) {
                    echo "<dt style=\"width: 50%\">";
                    echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAIL_AGE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</dt> <dd style=\"width: 45%\">";
                    echo (isset($context["FOR_USER_AGE"]) ? $context["FOR_USER_AGE"] : null);
                    echo "</dd>";
                }
                // line 51
                echo "\t\t\t\t";
                if ((isset($context["RS_CFG_TOTAL_POSTS"]) ? $context["RS_CFG_TOTAL_POSTS"] : null)) {
                    echo "<dt style=\"width: 50%\">";
                    echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAIL_POSTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</dt> <dd style=\"width: 45%\">";
                    echo (isset($context["FOR_NUMBER_OF_POSTS"]) ? $context["FOR_NUMBER_OF_POSTS"] : null);
                    echo "</dd>";
                }
                // line 52
                echo "\t\t\t\t";
                if ((isset($context["RS_CFG_REP_POINT"]) ? $context["RS_CFG_REP_POINT"] : null)) {
                    echo "<dt style=\"width: 50%\">";
                    echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAIL_REPUTATION");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</dt> <dd style=\"width: 45%\">";
                    echo (isset($context["FOR_REPUTATION"]) ? $context["FOR_REPUTATION"] : null);
                    echo "</dd>";
                }
                // line 53
                echo "\t\t\t\t";
                if ((isset($context["RS_CFG_LOOSE_WARN"]) ? $context["RS_CFG_LOOSE_WARN"] : null)) {
                    echo "<dt style=\"width: 50%\">";
                    echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAIL_WARNINGS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</dt> <dd style=\"width: 45%\">";
                    echo (isset($context["FOR_WARNINGS"]) ? $context["FOR_WARNINGS"] : null);
                    echo "</dd>";
                }
                // line 54
                echo "\t\t\t\t";
                if ((isset($context["RS_CFG_LOOSE_BAN"]) ? $context["RS_CFG_LOOSE_BAN"] : null)) {
                    echo "<dt style=\"width: 50%\">";
                    echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAIL_BANS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</dt> <dd style=\"width: 45%\">";
                    echo (isset($context["FOR_BANS"]) ? $context["FOR_BANS"] : null);
                    echo "</dd>";
                }
                // line 55
                echo "\t\t\t\t";
                if ((isset($context["MINIMUM_VOTING_POWER"]) ? $context["MINIMUM_VOTING_POWER"] : null)) {
                    echo "<dt style=\"width: 50%\">";
                    echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAIL_MIN");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</dt> <dd style=\"width: 45%\">";
                    echo (isset($context["MINIMUM_VOTING_POWER"]) ? $context["MINIMUM_VOTING_POWER"] : null);
                    echo "</dd>";
                }
                // line 56
                echo "\t\t\t\t";
                if ((isset($context["MAXIMUM_VOTING_POWER"]) ? $context["MAXIMUM_VOTING_POWER"] : null)) {
                    echo "<dt style=\"width: 50%\">";
                    echo $this->env->getExtension('phpbb')->lang("RS_POWER_DETAIL_MAX");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</dt> <dd style=\"width: 45%\">";
                    echo (isset($context["MAXIMUM_VOTING_POWER"]) ? $context["MAXIMUM_VOTING_POWER"] : null);
                    echo "</dd>";
                }
                // line 57
                echo "\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t<dt style=\"width: 50%\">";
                echo $this->env->getExtension('phpbb')->lang("RS_GROUP_POWER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd style=\"width: 45%\">";
                echo (isset($context["GROUP_VOTING_POWER"]) ? $context["GROUP_VOTING_POWER"] : null);
                echo "</dd>
\t\t\t";
            }
            // line 60
            echo "\t\t\t</dl>
\t\t</div>

\t\t<div class=\"column2\">
\t\t";
        }
        // line 65
        echo "
\t\t\t<h3>";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("RS_STATS");
        echo "</h3>

\t\t\t<table cellspacing=\"1\" width=\"100%\">
\t\t\t\t<tr>
\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t<th align=\"center\"><span class=\"stats-positive\">";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("RS_POSITIVE");
        echo "</span></th>
\t\t\t\t\t";
        // line 72
        if ((isset($context["S_RS_NEGATIVE"]) ? $context["S_RS_NEGATIVE"] : null)) {
            echo "<th align=\"center\"><span class=\"stats-negative\">";
            echo $this->env->getExtension('phpbb')->lang("RS_NEGATIVE");
            echo "</span></th>";
        }
        // line 73
        echo "\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 75
        echo $this->env->getExtension('phpbb')->lang("RS_WEEK");
        echo "</td>
\t\t\t\t\t<td align=\"center\">";
        // line 76
        echo (isset($context["POSITIVE_WEEK"]) ? $context["POSITIVE_WEEK"] : null);
        echo "</td>
\t\t\t\t\t";
        // line 77
        if ((isset($context["S_RS_NEGATIVE"]) ? $context["S_RS_NEGATIVE"] : null)) {
            echo "<td align=\"center\">";
            echo (isset($context["NEGATIVE_WEEK"]) ? $context["NEGATIVE_WEEK"] : null);
            echo "</td>";
        }
        // line 78
        echo "\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 80
        echo $this->env->getExtension('phpbb')->lang("RS_MONTH");
        echo "</td>
\t\t\t\t\t<td align=\"center\">";
        // line 81
        echo (isset($context["POSITIVE_MONTH"]) ? $context["POSITIVE_MONTH"] : null);
        echo "</td>
\t\t\t\t\t";
        // line 82
        if ((isset($context["S_RS_NEGATIVE"]) ? $context["S_RS_NEGATIVE"] : null)) {
            echo "<td align=\"center\">";
            echo (isset($context["NEGATIVE_MONTH"]) ? $context["NEGATIVE_MONTH"] : null);
            echo "</td>";
        }
        // line 83
        echo "\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 85
        echo $this->env->getExtension('phpbb')->lang("RS_6MONTHS");
        echo "</td>
\t\t\t\t\t<td align=\"center\">";
        // line 86
        echo (isset($context["POSITIVE_6MONTHS"]) ? $context["POSITIVE_6MONTHS"] : null);
        echo "</td>
\t\t\t\t\t";
        // line 87
        if ((isset($context["S_RS_NEGATIVE"]) ? $context["S_RS_NEGATIVE"] : null)) {
            echo "<td align=\"center\">";
            echo (isset($context["NEGATIVE_6MONTHS"]) ? $context["NEGATIVE_6MONTHS"] : null);
            echo "</td>";
        }
        // line 88
        echo "\t\t\t\t</tr>
\t\t\t</table>
\t\t";
        // line 90
        if (((isset($context["S_RS_POWER_ENABLE"]) ? $context["S_RS_POWER_ENABLE"] : null) && (isset($context["S_RS_POWER_EXPLAIN"]) ? $context["S_RS_POWER_EXPLAIN"] : null))) {
            // line 91
            echo "\t\t</div>
\t\t";
        }
        // line 93
        echo "
\t\t<span class=\"corners-bottom\"><span></span></span></div>
\t</div>

</div>

<div id=\"user-reputation-list\">

";
        // line 101
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reputation", array()))) {
            // line 102
            echo "\t<div class=\"action-bar top\">
\t\t<div class=\"sorting\">
\t\t\t<label>";
            // line 104
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<a href=\"";
            // line 105
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</a> &bull;
\t\t\t<a href=\"";
            // line 106
            echo (isset($context["U_SORT_TIME"]) ? $context["U_SORT_TIME"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</a> &bull;
\t\t\t<a href=\"";
            // line 107
            echo (isset($context["U_SORT_POINT"]) ? $context["U_SORT_POINT"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("RS_POINTS");
            echo "</a> &bull;
\t\t\t<a href=\"";
            // line 108
            echo (isset($context["U_SORT_ACTION"]) ? $context["U_SORT_ACTION"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("RS_ACTION");
            echo "</a>
\t\t</div>
\t\t<div class=\"pagination\">
\t\t\t";
            // line 111
            if ((isset($context["TOTAL_REPS"]) ? $context["TOTAL_REPS"] : null)) {
                echo (isset($context["TOTAL_REPS"]) ? $context["TOTAL_REPS"] : null);
            }
            // line 112
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 113
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "details.html", 113)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 114
                echo "\t\t\t";
            } else {
                // line 115
                echo "\t\t\t\t";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 117
            echo "\t\t</div>
\t\t<div class=\"clear\"></div>
\t</div>
\t";
        }
        // line 121
        echo "
\t<div id=\"post-reputation-list\">
\t\t";
        // line 123
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reputation", array()))) {
            // line 124
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reputation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["reputation"]) {
                // line 125
                echo "\t\t<div class=\"reputation-list ";
                if (($this->getAttribute($context["reputation"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg2";
                } else {
                    echo "bg1";
                }
                echo "\" id=\"r";
                echo $this->getAttribute($context["reputation"], "ID", array());
                echo "\">
\t\t\t";
                // line 126
                if ((isset($context["S_RS_AVATAR"]) ? $context["S_RS_AVATAR"] : null)) {
                    // line 127
                    echo "\t\t\t<div class=\"reputation-avatar\">
\t\t\t\t";
                    // line 128
                    if ($this->getAttribute($context["reputation"], "AVATAR", array())) {
                        // line 129
                        echo "\t\t\t\t\t";
                        echo $this->getAttribute($context["reputation"], "AVATAR", array());
                        echo "
\t\t\t\t";
                    } else {
                        // line 131
                        echo "\t\t\t\t\t<img src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/no_avatar.gif\" alt=\"\" />
\t\t\t\t";
                    }
                    // line 133
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 135
                echo "\t\t\t<div class=\"reputation-detail\">
\t\t\t\t";
                // line 136
                if ($this->getAttribute($context["reputation"], "S_DELETE", array())) {
                    // line 137
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["reputation"], "U_DELETE", array());
                    echo "\" class=\"rightside\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("DELETE");
                    echo "\" data-lang-confirm=\"";
                    echo $this->env->getExtension('phpbb')->lang("RS_REPUTATION_DELETE_CONFIRM");
                    echo "\">
\t\t\t\t\t\t<i class=\"icon fa-trash-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</a>
\t\t\t\t";
                }
                // line 141
                echo "\t\t\t\t<div class=\"reputation-rating ";
                echo $this->getAttribute($context["reputation"], "POINTS_CLASS", array());
                if ((isset($context["S_RS_POINTS_IMG"]) ? $context["S_RS_POINTS_IMG"] : null)) {
                    echo " image";
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["reputation"], "POINTS_TITLE", array());
                echo "\">";
                echo $this->getAttribute($context["reputation"], "POINTS", array());
                echo "</div>
\t\t\t\t<div><strong>";
                // line 142
                echo $this->getAttribute($context["reputation"], "USERNAME", array());
                echo "</strong> &raquo; ";
                echo $this->getAttribute($context["reputation"], "TIME", array());
                echo "</div>
\t\t\t\t<div class=\"reputation-action\">
\t\t\t\t\t<span class=\"type-title\">";
                // line 144
                echo $this->getAttribute($context["reputation"], "ACTION", array());
                echo "</span>
\t\t\t\t\t";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reputation"], "post", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 146
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["post"], "S_POST", array())) {
                        // line 147
                        echo "\t\t\t\t\t\t\t<br />&raquo;
\t\t\t\t\t\t\t";
                        // line 148
                        if ($this->getAttribute($context["post"], "U_POST", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["post"], "U_POST", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("POST");
                            echo "\">";
                        }
                        // line 149
                        echo "\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["post"], "POST_SUBJECT", array());
                        echo "
\t\t\t\t\t\t\t";
                        // line 150
                        if ($this->getAttribute($context["post"], "U_POST", array())) {
                            echo "</a>";
                        }
                        // line 151
                        echo "\t\t\t\t\t\t";
                    }
                    // line 152
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "\t\t\t\t</div>
\t\t\t\t";
                // line 154
                if (((isset($context["S_RS_COMMENT"]) ? $context["S_RS_COMMENT"] : null) && $this->getAttribute($context["reputation"], "S_COMMENT", array()))) {
                    // line 155
                    echo "\t\t\t\t<div class=\"comment_message\">
\t\t\t\t\t<span>";
                    // line 156
                    echo $this->env->getExtension('phpbb')->lang("RS_COMMENT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</span>
\t\t\t\t\t<div>";
                    // line 157
                    echo $this->getAttribute($context["reputation"], "COMMENT", array());
                    echo "</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 160
                echo "\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reputation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "\t\t";
        } else {
            // line 164
            echo "\t\t<div class=\"reputation-list empty bg3\">
\t\t\t<span>";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("RS_EMPTY_DATA");
            echo "</span>
\t\t</div>
\t\t";
        }
        // line 168
        echo "\t</div>

\t";
        // line 170
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "reputation", array()))) {
            // line 171
            echo "\t<div class=\"action-bar bottom\">
\t\t<div class=\"sorting\">
\t\t\t<label>";
            // line 173
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<a href=\"";
            // line 174
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</a> &bull;
\t\t\t<a href=\"";
            // line 175
            echo (isset($context["U_SORT_TIME"]) ? $context["U_SORT_TIME"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</a> &bull;
\t\t\t<a href=\"";
            // line 176
            echo (isset($context["U_SORT_POINT"]) ? $context["U_SORT_POINT"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("RS_POINTS");
            echo "</a> &bull;
\t\t\t<a href=\"";
            // line 177
            echo (isset($context["U_SORT_ACTION"]) ? $context["U_SORT_ACTION"] : null);
            echo "\" >";
            echo $this->env->getExtension('phpbb')->lang("RS_ACTION");
            echo "</a>
\t\t</div>
\t\t<div class=\"pagination\">
\t\t\t";
            // line 180
            if ((isset($context["TOTAL_REPS"]) ? $context["TOTAL_REPS"] : null)) {
                echo (isset($context["TOTAL_REPS"]) ? $context["TOTAL_REPS"] : null);
            }
            // line 181
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 182
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "details.html", 182)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 183
                echo "\t\t\t";
            } else {
                // line 184
                echo "\t\t\t\t";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 186
            echo "\t\t</div>
\t\t<div class=\"clear\"></div>
\t</div>
\t";
        }
        // line 190
        echo "</div>

<br class=\"clear\">

";
        // line 194
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "details.html", 194)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 194,  711 => 190,  705 => 186,  699 => 184,  696 => 183,  683 => 182,  680 => 181,  676 => 180,  668 => 177,  662 => 176,  656 => 175,  650 => 174,  645 => 173,  641 => 171,  639 => 170,  635 => 168,  629 => 165,  626 => 164,  623 => 163,  615 => 160,  609 => 157,  604 => 156,  601 => 155,  599 => 154,  596 => 153,  590 => 152,  587 => 151,  583 => 150,  578 => 149,  570 => 148,  567 => 147,  564 => 146,  560 => 145,  556 => 144,  549 => 142,  537 => 141,  525 => 137,  523 => 136,  520 => 135,  516 => 133,  510 => 131,  504 => 129,  502 => 128,  499 => 127,  497 => 126,  486 => 125,  481 => 124,  479 => 123,  475 => 121,  469 => 117,  463 => 115,  460 => 114,  447 => 113,  444 => 112,  440 => 111,  432 => 108,  426 => 107,  420 => 106,  414 => 105,  409 => 104,  405 => 102,  403 => 101,  393 => 93,  389 => 91,  387 => 90,  383 => 88,  377 => 87,  373 => 86,  369 => 85,  365 => 83,  359 => 82,  355 => 81,  351 => 80,  347 => 78,  341 => 77,  337 => 76,  333 => 75,  329 => 73,  323 => 72,  319 => 71,  311 => 66,  308 => 65,  301 => 60,  292 => 58,  289 => 57,  279 => 56,  269 => 55,  259 => 54,  249 => 53,  239 => 52,  229 => 51,  219 => 50,  217 => 49,  211 => 46,  207 => 44,  205 => 43,  195 => 35,  187 => 34,  175 => 33,  162 => 32,  152 => 31,  142 => 30,  139 => 29,  130 => 28,  122 => 27,  120 => 26,  110 => 25,  107 => 24,  93 => 23,  83 => 22,  81 => 21,  77 => 19,  73 => 17,  66 => 16,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  46 => 10,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2>{L_RS_DETAILS} - {USERNAME}</h2>*/
/* */
/* <div style="float: left; width: 41%;">*/
/* */
/* 	<div class="panel bg1">*/
/* 		<div class="inner"><span class="corners-top"><span></span></span>*/
/* */
/* 		<h3>{USERNAME_FULL}</h3>*/
/* */
/* 		<!-- IF AVATAR_IMG -->*/
/* 		<dl class="left-box">*/
/* 			<dt>{AVATAR_IMG}</dt>*/
/* 			<!-- IF RANK_TITLE --><dd style="text-align: center;">{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG --><dd style="text-align: center;">{RANK_IMG}</dd><!-- ENDIF -->*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<dl class="left-box details" style="width: 70%;">*/
/* 			<!-- IF not AVATAR_IMG -->*/
/* 				<!-- IF RANK_TITLE --><dt style="width: 50%;">{L_RANK}{L_COLON}</dt> <dd style="width: 45%;">{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 				<!-- IF RANK_IMG --><dt style="width: 50%;"><!-- IF RANK_TITLE -->&nbsp;<!-- ELSE -->{L_RANK}{L_COLON}<!-- ENDIF --></dt> <dd style="width: 45%;">{RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<dt style="width: 50%;">{L_REPUTATION}{L_COLON}</dt><dd style="width: 45%;"><div class="reputation {REPUTATION_CLASS}"><span>{REPUTATION}</span>*/
/* 			<!-- IF S_RS_POWER_ENABLE -->*/
/* 				<dt style="width: 50%;">{L_RS_POWER}{L_COLON}</dt> <dd style="width: 45%;">{RS_POWER}</dd>*/
/* 				<!-- IF RS_POWER_LEFT --><dt style="width: 50%;">{L_RS_VOTING_POWER}{L_COLON}</dt> <dd style="width: 45%;">{RS_POWER_LEFT}</dd><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_RS_POST_RATING --><dt style="width: 50%;">{L_RS_POST_COUNT}{L_COLON}</dt> <dd style="width: 45%;">{POST_COUNT}</dd><!-- ENDIF -->*/
/* 			<!-- IF S_RS_USER_RATING --><dt style="width: 50%;">{L_RS_USER_COUNT}{L_COLON}</dt> <dd style="width: 45%;">{USER_COUNT}</dd><!-- ENDIF -->*/
/* 			<dt style="width: 50%;">{L_RS_POSITIVE_COUNT}{L_COLON}</dt> <dd style="width: 45%;">{POSITIVE_COUNT} ({L_RS_POINTS}{L_COLON} {POSITIVE_SUM})</dd>*/
/* 			<dt style="width: 50%;">{L_RS_NEGATIVE_COUNT}{L_COLON}</dt> <dd style="width: 45%;">{NEGATIVE_COUNT} ({L_RS_POINTS}{L_COLON} {NEGATIVE_SUM})</dd>*/
/* 			<!-- IF S_CLEAR --><dt style="width: 50%;">&nbsp;</dt> <dd style="width: 45%;">[ <a href="{U_CLEAR}">{L_RS_CLEAR_USER}</a> ]</dd><!-- ENDIF -->*/
/* 		</dl>*/
/* */
/* 		<span class="corners-bottom"><span></span></span></div>*/
/* 	</div>*/
/* */
/* 	<div class="panel bg2">*/
/* 		<div class="inner"><span class="corners-top"><span></span></span>*/
/* */
/* 		<!-- IF S_RS_POWER_ENABLE and S_RS_POWER_EXPLAIN -->*/
/* 		<div class="column1">*/
/* */
/* 			<h3>{L_RS_POWER_DETAILS}</h3>*/
/* */
/* 			<dl class="details">*/
/* 			<!-- IF not S_RS_GROUP_POWER -->*/
/* 				<!-- IF RS_CFG_MEMBERSHIP_DAYS --><dt style="width: 50%">{L_RS_POWER_DETAIL_AGE}{L_COLON}</dt> <dd style="width: 45%">{FOR_USER_AGE}</dd><!-- ENDIF -->*/
/* 				<!-- IF RS_CFG_TOTAL_POSTS --><dt style="width: 50%">{L_RS_POWER_DETAIL_POSTS}{L_COLON}</dt> <dd style="width: 45%">{FOR_NUMBER_OF_POSTS}</dd><!-- ENDIF -->*/
/* 				<!-- IF RS_CFG_REP_POINT --><dt style="width: 50%">{L_RS_POWER_DETAIL_REPUTATION}{L_COLON}</dt> <dd style="width: 45%">{FOR_REPUTATION}</dd><!-- ENDIF -->*/
/* 				<!-- IF RS_CFG_LOOSE_WARN --><dt style="width: 50%">{L_RS_POWER_DETAIL_WARNINGS}{L_COLON}</dt> <dd style="width: 45%">{FOR_WARNINGS}</dd><!-- ENDIF -->*/
/* 				<!-- IF RS_CFG_LOOSE_BAN --><dt style="width: 50%">{L_RS_POWER_DETAIL_BANS}{L_COLON}</dt> <dd style="width: 45%">{FOR_BANS}</dd><!-- ENDIF -->*/
/* 				<!-- IF MINIMUM_VOTING_POWER --><dt style="width: 50%">{L_RS_POWER_DETAIL_MIN}{L_COLON}</dt> <dd style="width: 45%">{MINIMUM_VOTING_POWER}</dd><!-- ENDIF -->*/
/* 				<!-- IF MAXIMUM_VOTING_POWER --><dt style="width: 50%">{L_RS_POWER_DETAIL_MAX}{L_COLON}</dt> <dd style="width: 45%">{MAXIMUM_VOTING_POWER}</dd><!-- ENDIF -->*/
/* 			<!-- ELSE -->*/
/* 				<dt style="width: 50%">{L_RS_GROUP_POWER}{L_COLON}</dt> <dd style="width: 45%">{GROUP_VOTING_POWER}</dd>*/
/* 			<!-- ENDIF -->*/
/* 			</dl>*/
/* 		</div>*/
/* */
/* 		<div class="column2">*/
/* 		<!-- ENDIF -->*/
/* */
/* 			<h3>{L_RS_STATS}</h3>*/
/* */
/* 			<table cellspacing="1" width="100%">*/
/* 				<tr>*/
/* 					<th>&nbsp;</th>*/
/* 					<th align="center"><span class="stats-positive">{L_RS_POSITIVE}</span></th>*/
/* 					<!-- IF S_RS_NEGATIVE --><th align="center"><span class="stats-negative">{L_RS_NEGATIVE}</span></th><!-- ENDIF -->*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>{L_RS_WEEK}</td>*/
/* 					<td align="center">{POSITIVE_WEEK}</td>*/
/* 					<!-- IF S_RS_NEGATIVE --><td align="center">{NEGATIVE_WEEK}</td><!-- ENDIF -->*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>{L_RS_MONTH}</td>*/
/* 					<td align="center">{POSITIVE_MONTH}</td>*/
/* 					<!-- IF S_RS_NEGATIVE --><td align="center">{NEGATIVE_MONTH}</td><!-- ENDIF -->*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>{L_RS_6MONTHS}</td>*/
/* 					<td align="center">{POSITIVE_6MONTHS}</td>*/
/* 					<!-- IF S_RS_NEGATIVE --><td align="center">{NEGATIVE_6MONTHS}</td><!-- ENDIF -->*/
/* 				</tr>*/
/* 			</table>*/
/* 		<!-- IF S_RS_POWER_ENABLE and S_RS_POWER_EXPLAIN -->*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<span class="corners-bottom"><span></span></span></div>*/
/* 	</div>*/
/* */
/* </div>*/
/* */
/* <div id="user-reputation-list">*/
/* */
/* <!-- IF .reputation -->*/
/* 	<div class="action-bar top">*/
/* 		<div class="sorting">*/
/* 			<label>{L_SORT_BY}{L_COLON}</label>*/
/* 			<a href="{U_SORT_USERNAME}" >{L_USERNAME}</a> &bull;*/
/* 			<a href="{U_SORT_TIME}" >{L_TIME}</a> &bull;*/
/* 			<a href="{U_SORT_POINT}" >{L_RS_POINTS}</a> &bull;*/
/* 			<a href="{U_SORT_ACTION}" >{L_RS_ACTION}</a>*/
/* 		</div>*/
/* 		<div class="pagination">*/
/* 			<!-- IF TOTAL_REPS -->{TOTAL_REPS}<!-- ENDIF -->*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				{PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<div class="clear"></div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<div id="post-reputation-list">*/
/* 		<!-- IF .reputation -->*/
/* 		<!-- BEGIN reputation -->*/
/* 		<div class="reputation-list <!-- IF reputation.S_ROW_COUNT is odd -->bg2<!-- ELSE -->bg1<!-- ENDIF -->" id="r{reputation.ID}">*/
/* 			<!-- IF S_RS_AVATAR -->*/
/* 			<div class="reputation-avatar">*/
/* 				<!-- IF reputation.AVATAR -->*/
/* 					{reputation.AVATAR}*/
/* 				<!-- ELSE -->*/
/* 					<img src="{T_THEME_PATH}/images/no_avatar.gif" alt="" />*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* 			<div class="reputation-detail">*/
/* 				<!-- IF reputation.S_DELETE -->*/
/* 					<a href="{reputation.U_DELETE}" class="rightside" title="{L_DELETE}" data-lang-confirm="{L_RS_REPUTATION_DELETE_CONFIRM}">*/
/* 						<i class="icon fa-trash-o fa-fw" aria-hidden="true"></i>*/
/* 					</a>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="reputation-rating {reputation.POINTS_CLASS}<!-- IF S_RS_POINTS_IMG --> image<!-- ENDIF -->" title="{reputation.POINTS_TITLE}">{reputation.POINTS}</div>*/
/* 				<div><strong>{reputation.USERNAME}</strong> &raquo; {reputation.TIME}</div>*/
/* 				<div class="reputation-action">*/
/* 					<span class="type-title">{reputation.ACTION}</span>*/
/* 					<!-- BEGIN reputation.post -->*/
/* 						<!-- IF reputation.post.S_POST -->*/
/* 							<br />&raquo;*/
/* 							<!-- IF reputation.post.U_POST --><a href="{reputation.post.U_POST}" title="{L_POST}"><!-- ENDIF -->*/
/* 							{reputation.post.POST_SUBJECT}*/
/* 							<!-- IF reputation.post.U_POST --></a><!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* 					<!-- END reputation.post -->*/
/* 				</div>*/
/* 				<!-- IF S_RS_COMMENT and reputation.S_COMMENT -->*/
/* 				<div class="comment_message">*/
/* 					<span>{L_RS_COMMENT}{L_COLON}</span>*/
/* 					<div>{reputation.COMMENT}</div>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- END reputation -->*/
/* 		<!-- ELSE -->*/
/* 		<div class="reputation-list empty bg3">*/
/* 			<span>{L_RS_EMPTY_DATA}</span>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	<!-- IF .reputation -->*/
/* 	<div class="action-bar bottom">*/
/* 		<div class="sorting">*/
/* 			<label>{L_SORT_BY}{L_COLON}</label>*/
/* 			<a href="{U_SORT_USERNAME}" >{L_USERNAME}</a> &bull;*/
/* 			<a href="{U_SORT_TIME}" >{L_TIME}</a> &bull;*/
/* 			<a href="{U_SORT_POINT}" >{L_RS_POINTS}</a> &bull;*/
/* 			<a href="{U_SORT_ACTION}" >{L_RS_ACTION}</a>*/
/* 		</div>*/
/* 		<div class="pagination">*/
/* 			<!-- IF TOTAL_REPS -->{TOTAL_REPS}<!-- ENDIF -->*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				{PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<div class="clear"></div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
/* <br class="clear">*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
