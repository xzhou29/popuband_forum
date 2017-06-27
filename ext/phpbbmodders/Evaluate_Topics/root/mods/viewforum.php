<?php
/**
*
* @package evaluation topics
* @version $Id: viewforum.php , v 1.0.8 2010-02-13 Novan $
* @copyright (c) 2010 René Espenhahn (svrider.de)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

function evaluation_get_image()
{
	global $user, $row, $forum_data;

	$return = '';

	if((isset($row['evaluation_count'])) && ($row['evaluation_count']))
	{
		if(isset($row['own_evaluation']) && $row['own_evaluation'] == 1) // Has he already evaluated and evaluated with one star?
		{
			$own_evaluation = $user->lang['YOUR_EVALUATION1'];
		}
		elseif(isset($row['own_evaluation']) && $row['own_evaluation'] > 1) // Has he already evaluated and evaluated with two or more stars?
		{
			$own_evaluation = sprintf($user->lang['YOUR_EVALUATION2'], $row['own_evaluation']);
		}
		else
		{
			$own_evaluation = '';
		}
		$alt = sprintf($user->lang['TOPIC_EVALUATION_RESULT'], $row['evaluation_count'], $row['evaluation'], $own_evaluation);

		for($i = 1; $i <= $forum_data['forum_evaluation']; $i++)
		{
			if($i <= $row['evaluation'])
			{
				$img = $user->img('icon_evaluation_light', $alt);
			}
			elseif(($i <= ceil($row['evaluation'])) && ((floor($row['evaluation']) + 0.4) <= $row['evaluation']))
			{
				$img = $user->img('icon_evaluation_half', $alt);
			}
			else
			{
				$img = $user->img('icon_evaluation_dark', $alt);
			}
			$return .= $img;
		}
	}
	return $return;
}

function evaluation_extend_sql()
{
	global $auth, $template, $user, $sql_array, $forum_id;

	if($auth->acl_get('f_evaluation_see', $forum_id))
	{
		if($user->data['user_id'] != ANONYMOUS)
		{
			$sql_array['LEFT_JOIN'][] = array('FROM' => array(TOPICS_EVALUATION_TABLE => 'te'),  'ON' => 'te.topic_id = t.topic_id');
			$sql_array['LEFT_JOIN'][] = array('FROM' => array(TOPICS_EVALUATION_TABLE => 'te2'), 'ON' => '((te2.topic_id = t.topic_id) AND (te2.user_id = ' . $user->data['user_id'] . '))');
			$sql_array['SELECT']	 .= ', te2.evaluation AS own_evaluation, ROUND(AVG(te.evaluation), 2) AS evaluation, COUNT(te.evaluation) AS evaluation_count';
		}
		else
		{
			$sql_array['LEFT_JOIN'][] = array('FROM' => array(TOPICS_EVALUATION_TABLE => 'te'),  'ON' => 'te.topic_id = t.topic_id');
			$sql_array['SELECT']	 .= ', ROUND(AVG(te.evaluation), 2) AS evaluation, COUNT(te.evaluation) AS evaluation_count';
		}
		$user->add_lang('mods/evaluation');
	}
}

function evaluation_extend_sql_group()
{
	global $auth, $forum_id;

	if($auth->acl_get('f_evaluation_see', $forum_id))
	{
		return 't.topic_id';
	}
	return '';
}
?>