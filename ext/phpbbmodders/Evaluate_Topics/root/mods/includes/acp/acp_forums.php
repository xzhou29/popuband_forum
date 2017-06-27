<?php
/**
*
* @package evaluation topics
* @version $Id: acp_forums.php , v 1.0.8 2010-02-13 Novan $
* @copyright (c) 2010 René Espenhahn (svrider.de)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

function evaluation_request_data(&$forum_data, $request = false)
{
	$forum_data += array('forum_evaluation' => (($request) ? request_var('evaluation', EVALUATION_DEFAULT) : EVALUATION_DEFAULT));
}

function evaluation_update_data($forum_data, $errors)
{
	global $db;

	if((!sizeof($errors)) && (isset($forum_data['forum_id'])))
	{
		$evaluation = request_var('evaluation', EVALUATION_DEFAULT);
		$backup     = request_var('evaluation_backup', EVALUATION_DEFAULT);

		if(($evaluation != $backup) and ($backup > 0))
		{
			$relation = $evaluation / $backup;
			$topics   = array();

			$sql = 'SELECT e.topic_id
					FROM ' . TOPICS_EVALUATION_TABLE . ' e
					INNER JOIN ' . TOPICS_TABLE . ' t
					USING (topic_id)
					WHERE t.forum_id = ' . $forum_data['forum_id'];

			$result = $db->sql_query($sql);

			while($temp = $db->sql_fetchrow($result))
			{
				$topics[] = $temp['topic_id'];
			}
			if(sizeof($topics))
			{
				$sql = 'UPDATE ' . TOPICS_EVALUATION_TABLE . ' SET
							evaluation = ROUND(evaluation * ' . $relation . ')
						WHERE ' . $db->sql_in_set('topic_id', $topics);

				$db->sql_query($sql);
			}
		}
	}
}

function evaluation_extend_template($forum_data)
{
	global $template, $user;

	$user->add_lang('mods/evaluation');
	$template->assign_var('EVALUATION_STARS', $forum_data['forum_evaluation']);
}
?>