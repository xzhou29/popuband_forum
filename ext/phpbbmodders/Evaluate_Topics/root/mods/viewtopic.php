<?php
/**
*
* @package evaluation topics
* @version $Id: viewtopic.php , v 1.0.8 2010-02-13 Novan $
* @copyright (c) 2010 René Espenhahn (svrider.de)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

function evaluation_display()
{
	global $template, $db, $user, $phpbb_root_path, $phpEx, $auth, $topic_data, $start;

	$user_id = $user->data['user_id'];

	if(($user_id != ANONYMOUS) && ($auth->acl_get('f_evaluation', $topic_data['forum_id'])))
	{
		$sql = 'SELECT e2.evaluation, ROUND(AVG(e1.evaluation), 2) AS ergebnis, COUNT(e1.evaluation) AS anzahl
				FROM ' . TOPICS_EVALUATION_TABLE . ' e1
				LEFT JOIN ' . TOPICS_EVALUATION_TABLE . ' e2
				ON ((e2.topic_id = e1.topic_id) AND (e2.user_id = ' . $user_id . '))
				WHERE e1.topic_id = ' . $topic_data['topic_id'] . '
				GROUP BY e1.topic_id';
	}
	else
	{
		$sql = 'SELECT ROUND(AVG(evaluation), 2) AS ergebnis, COUNT(evaluation) AS anzahl FROM ' . TOPICS_EVALUATION_TABLE . ' WHERE topic_id = ' . $topic_data['topic_id'];
	}
	$evaluation = $db->sql_fetchrow($db->sql_query($sql));
	$out        = '';
	$eval       = false;
	$mouse      = '';

	if($user_id != ANONYMOUS)
	{
		$eval_own    = $auth->acl_get('f_evaluation_own',    $topic_data['forum_id']);
		$eval_change = $auth->acl_get('f_evaluation_change', $topic_data['forum_id']);
		$eval        = $auth->acl_get('f_evaluation',        $topic_data['forum_id']);

		if(($eval) && (($topic_data['topic_poster'] != $user_id) || ($eval_own)) && ((!$evaluation['evaluation']) || ($eval_change)))
		{
			if($vote = request_var('evaluation', 0))
			{
				if(($vote > 0) && ($vote <= $topic_data['forum_evaluation'])) // Check if it is an ordanary vote and not cheating
				{
					$sql   = 'SELECT evaluation FROM ' . TOPICS_EVALUATION_TABLE . ' WHERE topic_id = ' . $topic_data['topic_id'] . ' AND user_id = ' . $user->data['user_id'];
					$check = $db->sql_fetchrow($db->sql_query($sql));

					if(is_array($check) && $check['evaluation'] != $vote)
					{
						$sql = 'UPDATE ' . TOPICS_EVALUATION_TABLE . ' SET
									evaluation = "' . $vote . '"
								WHERE topic_id = ' . $topic_data['topic_id'] . '
								AND user_id = ' . $user->data['user_id'];

						$db->sql_query($sql);
					}
					elseif(!$check)
					{
						$sql = 'INSERT INTO ' . TOPICS_EVALUATION_TABLE . ' (topic_id, evaluation, user_id) VALUES ("' . $topic_data['topic_id'] . '", "' . $vote . '", "' . $user->data['user_id'] . '")';
						$db->sql_query($sql);
					}
				}
				redirect(append_sid($phpbb_root_path . 'viewtopic.' . $phpEx, 'f=' . $topic_data['forum_id'] . '&amp;t=' . $topic_data['topic_id'] . '&amp;start=' . request_var('start', 0)));
			}
			//
			// topic_data['forum_evaluation'] = How many stars should be displayed for evaluation
			// evaluation['evaluation'] = The currend evaluation of the topic
			//
			$template->assign_vars(array(
				'EVALUATION_STARS' 			=> $topic_data['forum_evaluation'],
				'EVALUATION_RESULT_FLOOR'	=> floor($evaluation['ergebnis']),
				'EVALUATION_RESULT_CEIL'	=> ceil($evaluation['ergebnis']),
				'EVALUATION_RESULT'			=> ($evaluation['ergebnis'] > 0) ? $evaluation['ergebnis'] : 0.01, // not Null because it can be translated to ''
				'EVALUATION_IMG_LIGHT'		=> $user->img('icon_evaluation_light', '', false, '', 'src'),
				'EVALUATION_IMG_HALF'		=> $user->img('icon_evaluation_half', '', false, '', 'src'),
				'EVALUATION_IMG_DARK'		=> $user->img('icon_evaluation_dark', '', false, '', 'src'),
				'EVALUATION_LINK'			=> append_sid($phpbb_root_path . 'viewtopic.' . $phpEx, 'f=' . $topic_data['forum_id'] . '&t=' . $topic_data['topic_id'] . '&start=' . intval($start)))
			); // Here above no &amp; because javascript with window.location.href does not like &amp; The href only works with &
			$mouse = ' name="evaluate%u" onClick="eval_mouse_click(%u)" onMouseOver="eval_mouse_over(%u, true)" onMouseOut="eval_mouse_over(%u, false)" style="cursor:pointer"';
		}
	}
	$user->add_lang('mods/evaluation');

	if($auth->acl_get('f_evaluation_see', $topic_data['forum_id']))
	{
		if(isset($evaluation['evaluation']) && $evaluation['evaluation'] == 1) // Has he already evaluated and evaluated with one star?
		{
			$own_evaluation = $user->lang['YOUR_EVALUATION1'];
		}
		elseif(isset($evaluation['evaluation']) && $evaluation['evaluation'] > 1) // Has he already evaluated and evaluated with two or more stars?
		{
			$own_evaluation = sprintf($user->lang['YOUR_EVALUATION2'], $evaluation['evaluation']);
		}
		else
		{
			$own_evaluation = '';
		}
		$alt = sprintf($user->lang['TOPIC_EVALUATION_RESULT'], $evaluation['anzahl'], $evaluation['ergebnis'], $own_evaluation);

		for($i = 1; $i <= $topic_data['forum_evaluation']; $i++)
		{
			if($i <= $evaluation['ergebnis'])
			{
				$img = $user->img('icon_evaluation_light', $alt);
			}
			elseif(($i <= ceil($evaluation['ergebnis'])) && ((floor($evaluation['ergebnis']) + 0.4) <= $evaluation['ergebnis']))
			{
				$img = $user->img('icon_evaluation_half', $alt);
			}
			else
			{
				$img = $user->img('icon_evaluation_dark', $alt);
			}
			$out .= (empty($mouse)) ? $img : str_replace('/>', sprintf($mouse, $i, $i, $i, $i) . ' />', $img);
		}
		$template->assign_var('EVALUATION_IMG', $out);
	}
}
?>