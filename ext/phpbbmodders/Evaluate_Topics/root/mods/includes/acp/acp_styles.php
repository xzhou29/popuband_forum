<?php
/**
*
* @package evaluation topics
* @version $Id: acp_styles.php , v 1.0.8 2010-02-13 Novan $
* @copyright (c) 2010 René Espenhahn (svrider.de)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

function add_custom_images(&$keys)
{
	$keys['icons'][] = 'icon_evaluation_half';
	$keys['icons'][] = 'icon_evaluation_dark';
	$keys['icons'][] = 'icon_evaluation_light';
}
?>