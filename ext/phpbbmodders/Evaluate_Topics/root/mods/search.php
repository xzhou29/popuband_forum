<?php
/**
*
* @package evaluation topics
* @version $Id: search.php , v 1.0.8 2010-02-13 Novan $
* @copyright (c) 2010 René Espenhahn (svrider.de)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

function evaluation_extend_sql(&$sql, $show_results)
{
	global $user;

	if($user->data['user_id'] != ANONYMOUS)
	{
		$sql  = str_replace('SELECT', 'SELECT f.forum_evaluation, e2.evaluation AS own_evaluation, ROUND(AVG(e.evaluation), 2) AS evaluation, COUNT(e.evaluation) AS evaluation_count,', $sql);
		$sql  = str_replace('WHERE',  'LEFT JOIN ' . TOPICS_EVALUATION_TABLE . ' e ON (e.topic_id = t.topic_id) LEFT JOIN ' . TOPICS_EVALUATION_TABLE . ' e2 ON (e2.topic_id = t.topic_id AND e2.user_id = ' . $user->data['user_id'] . ') WHERE', $sql);
	}
	else
	{
		$sql  = str_replace('SELECT', 'SELECT f.forum_evaluation, ROUND(AVG(e.evaluation), 2) AS evaluation, COUNT(e.evaluation) AS evaluation_count,', $sql);
		$sql  = str_replace('WHERE',  'LEFT JOIN ' . TOPICS_EVALUATION_TABLE . ' e ON (e.topic_id = t.topic_id) WHERE', $sql);
	}
	if($show_results == 'posts')
	{
		$sql = str_replace('ORDER BY', 'GROUP BY p.post_id ORDER BY', $sql);
	}
	else
	{
		$sql = str_replace('ORDER BY', 'GROUP BY t.topic_id ORDER BY', $sql);
	}
}

function evaluation_extend_template(&$tpl_ary, $row)
{
	global $auth, $user;
	static $lang = false;

	$out = '';

	if(($auth->acl_get('f_evaluation_see', $row['forum_id'])) && ($row['evaluation_count']))
	{
		if(!$lang)
		{
			$lang = true;
			$user->add_lang('mods/evaluation');
		}
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

		for($i = 1; $i <= $row['forum_evaluation']; $i++)
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
			$out .= $img;
		}
	}
	$tpl_ary += array('EVALUATION_IMG' => $out);
}
?>