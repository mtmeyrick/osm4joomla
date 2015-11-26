<?php
/**
 * @package     Matt Meyrick
 * @subpackage  mod_osm_coming
 * @copyright   Copyright (C) 2015 Matt Meyrick, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; 
 */
 
// no direct access
defined('_JEXEC') or die;
 switch ($display) {
    case "programme":
        echo JText::_('MOD_OSM_COMING_NO_PROGRAMME');
        break;
    case "events":
		echo JText::_('MOD_OSM_COMING_NO_EVENTS');
        break;
    default:
        echo JText::_('MOD_OSM_COMING_NO_BOTH');
}
?>

