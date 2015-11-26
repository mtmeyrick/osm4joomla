<?php
/**
 * @package     Matt Meyrick
 * @subpackage  mod_osm_points
 * @copyright   Copyright (C) 2015 Matt Meyrick, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; 
 */
// no direct access
defined('_JEXEC') or die;

$width = $params->get('width',300);
$height = $params->get('height',300);
$feed = $params->get('feed');
$color = $params->get('color');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JmoduleHelper::getLayoutPath('mod_osm_points', $params->get('layout', 'default'));
?>