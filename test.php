<?php

defined('_JEXEC') or die;

/**
 * Joomla! Page Cache Test Plugin.
 *
 * @since  1.5
 */
class PlgPagecacheTest extends JPlugin
{
	public function onPageCacheGetKey()
	{
		return rand(1, 3);
	}
}
