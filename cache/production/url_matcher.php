<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/feed')) {
            // phpbb_feed_forums
            if ($pathinfo === '/feed/forums') {
                return array (  '_controller' => 'phpbb.feed.controller:forums',  '_route' => 'phpbb_feed_forums',);
            }

            // phpbb_feed_news
            if ($pathinfo === '/feed/news') {
                return array (  '_controller' => 'phpbb.feed.controller:news',  '_route' => 'phpbb_feed_news',);
            }

            if (0 === strpos($pathinfo, '/feed/topics')) {
                // phpbb_feed_topics
                if ($pathinfo === '/feed/topics') {
                    return array (  '_controller' => 'phpbb.feed.controller:topics',  '_route' => 'phpbb_feed_topics',);
                }

                if (0 === strpos($pathinfo, '/feed/topics_')) {
                    // phpbb_feed_topics_active
                    if ($pathinfo === '/feed/topics_active') {
                        return array (  '_controller' => 'phpbb.feed.controller:topics_active',  '_route' => 'phpbb_feed_topics_active',);
                    }

                    // phpbb_feed_topics_new
                    if ($pathinfo === '/feed/topics_new') {
                        return array (  '_controller' => 'phpbb.feed.controller:topics_new',  '_route' => 'phpbb_feed_topics_new',);
                    }

                }

            }

            // phpbb_feed_forum
            if (0 === strpos($pathinfo, '/feed/forum') && preg_match('#^/feed/forum/(?P<forum_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_forum')), array (  '_controller' => 'phpbb.feed.controller:forum',));
            }

            // phpbb_feed_topic
            if (0 === strpos($pathinfo, '/feed/topic') && preg_match('#^/feed/topic/(?P<topic_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_topic')), array (  '_controller' => 'phpbb.feed.controller:topic',));
            }

            // phpbb_feed_overall
            if (preg_match('#^/feed/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_overall')), array (  '_controller' => 'phpbb.feed.controller:overall',));
            }

            // phpbb_feed_index
            if ($pathinfo === '/feed') {
                return array (  '_controller' => 'phpbb.feed.controller:overall',  '_route' => 'phpbb_feed_index',);
            }

        }

        if (0 === strpos($pathinfo, '/help')) {
            // phpbb_help_bbcode_controller
            if ($pathinfo === '/help/bbcode') {
                return array (  '_controller' => 'phpbb.help.controller.bbcode:handle',  '_route' => 'phpbb_help_bbcode_controller',);
            }

            // phpbb_help_faq_controller
            if ($pathinfo === '/help/faq') {
                return array (  '_controller' => 'phpbb.help.controller.faq:handle',  '_route' => 'phpbb_help_faq_controller',);
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            // phpbb_report_pm_controller
            if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>\\d+)/report$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_phpbb_report_pm_controller;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_report_pm_controller')), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'pm',));
            }
            not_phpbb_report_pm_controller:

            // phpbb_report_post_controller
            if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)/report$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_phpbb_report_post_controller;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_report_post_controller')), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'post',));
            }
            not_phpbb_report_post_controller:

        }

        if (0 === strpos($pathinfo, '/reputation')) {
            if (0 === strpos($pathinfo, '/reputation/clear')) {
                // reputation_clear_post_controller
                if (0 === strpos($pathinfo, '/reputation/clear/post') && preg_match('#^/reputation/clear/post/(?P<post_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_clear_post_controller')), array (  '_controller' => 'pico.reputation.action.controller:clear_post',));
                }

                // reputation_clear_user_controller
                if (0 === strpos($pathinfo, '/reputation/clear/user') && preg_match('#^/reputation/clear/user/(?P<uid>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_clear_user_controller')), array (  '_controller' => 'pico.reputation.action.controller:clear_user',));
                }

            }

            // reputation_delete_controller
            if (0 === strpos($pathinfo, '/reputation/delete') && preg_match('#^/reputation/delete/(?P<rid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_delete_controller')), array (  '_controller' => 'pico.reputation.action.controller:delete',));
            }

            // reputation_details_controller
            if (preg_match('#^/reputation/(?P<uid>\\d+)(?:/(?P<sort_key>id|username|time|point|action)(?:/(?P<sort_dir>asc|dsc)(?:/(?P<page>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_details_controller')), array (  '_controller' => 'pico.reputation.details.controller:details',  'sort_key' => 'id',  'sort_dir' => 'dsc',  'page' => 1,));
            }

            // reputation_post_details_controller
            if (0 === strpos($pathinfo, '/reputation/details/post') && preg_match('#^/reputation/details/post/(?P<post_id>\\d+)(?:/(?P<sort_key>id|username|time|point)(?:/(?P<sort_dir>asc|dsc))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_post_details_controller')), array (  '_controller' => 'pico.reputation.details.controller:postdetails',  'sort_key' => 'id',  'sort_dir' => 'dsc',));
            }

            // reputation_post_rating_controller
            if (0 === strpos($pathinfo, '/reputation/rate/post') && preg_match('#^/reputation/rate/post/(?P<mode>positive|negative)/(?P<post_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_post_rating_controller')), array (  '_controller' => 'pico.reputation.rating.controller:post',));
            }

            // reputation_user_details_controller
            if (0 === strpos($pathinfo, '/reputation/details/user') && preg_match('#^/reputation/details/user/(?P<uid>\\d+)(?:/(?P<sort_key>id|username|time|point|action)(?:/(?P<sort_dir>asc|dsc))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_user_details_controller')), array (  '_controller' => 'pico.reputation.details.controller:userdetails',  'sort_key' => 'id',  'sort_dir' => 'dsc',));
            }

            // reputation_user_rating_controller
            if (0 === strpos($pathinfo, '/reputation/rate/user') && preg_match('#^/reputation/rate/user/(?P<uid>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reputation_user_rating_controller')), array (  '_controller' => 'pico.reputation.rating.controller:user',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
