<?php
/**
*
* @package evaluation topics
* @version $Id: install_evaluation_permissions.php , v 1.0.8 2010-02-13 Novan $
* @copyright (c) 2010 René Espenhahn (svrider.de)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* install script to set up permission options in the db for topic evaluation mod
*
*/

/**
* @ignore
*/

// initialize the page
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);


// Start session management
$user->session_begin();
$user->setup('mods/evaluation');

// Add topic evaluation permissions as local permissions
// There seems no opposite method to uninstall auth options to be in phpBB.
// Then we do it with sql and hope all auth of the mod is deleted.
$sql = "DELETE FROM ".ACL_OPTIONS_TABLE." WHERE auth_option IN ('f_evaluation_see', 'f_evaluation', 'f_evaluation_own', 'f_evaluation_change')";
$db->sql_query($sql);

$sql = "ALTER TABLE ".FORUMS_TABLE." DROP forum_evaluation";
$db->sql_query($sql);

// Drop the Table for this Mod
$sql = "DROP TABLE {$table_prefix}topics_evaluation";
$db->sql_query($sql);

// Finish modding
$message  = $user->lang['DEINSTALLED_EVALUATION_MOD'] . '<br /><br />';
$message .= $user->lang['REMOVE_INSTALL'];
trigger_error($message);
?>