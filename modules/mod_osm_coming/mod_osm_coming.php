<?php
/**
 * @package     Matt Meyrick
 * @subpackage  mod_osm_coming
 * @copyright   Copyright (C) 2015 Matt Meyrick, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; 
 */
 
// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$display = $params->get('display');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JmoduleHelper::getLayoutPath('mod_osm_coming', $params->get('layout', 'default'));
