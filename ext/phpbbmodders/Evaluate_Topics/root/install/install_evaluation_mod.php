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
$auth->acl($user->data);
$user->setup('mods/evaluation');


// Setup $auth_admin class so we can add tabulated survey permission options
include($phpbb_root_path . 'includes/acp/auth.' . $phpEx);
$auth_admin = new auth_admin();

// Add topic evaluation permissions as local permissions
$auth_admin->acl_add_option(array(
    'local'     => array('f_evaluation_see', 'f_evaluation', 'f_evaluation_own', 'f_evaluation_change'),
    'global'    => array(),
));

// Create the Table for this Mod
$sql = "CREATE TABLE {$table_prefix}topics_evaluation (
  			topic_id mediumint(8) unsigned NOT NULL default '0',
  			evaluation tinyint(1) unsigned NOT NULL default '0',
  			user_id mediumint(8) unsigned NOT NULL default '0',
  		PRIMARY KEY (topic_id, user_id))";

$db->sql_query($sql);

$sql = "ALTER TABLE ".FORUMS_TABLE." ADD forum_evaluation TINYINT(2) UNSIGNED NOT NULL DEFAULT '6'";
$db->sql_query($sql);

// Finish modding
$message  = $user->lang['INSTALLED_EVALUATION_MOD'] . '<br /><br />';
$message .= $user->lang['REMOVE_INSTALL'];
trigger_error($message);
?>