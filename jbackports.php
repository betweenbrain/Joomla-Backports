<?php defined('_JEXEC') or die;

/**
 * File       jbackports.php
 * Created    1/9/14 10:05 AM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/Joomla-Backports/issues
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

class PlgSystemJbackports extends JPlugin
{
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);

		define('JBACKPORTS', dirname(__FILE__) . '/jbackports');
	}
}