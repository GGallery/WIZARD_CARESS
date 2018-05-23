
<?php

/**
 * @package		Joomla.Tutorials
 * @subpackage	Components
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		License GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

if(!defined('DS')){
    define('DS',DIRECTORY_SEPARATOR);
}

// Require helper file
JLoader::register('wizardHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'wizard.php');

// Get an instance of the controller prefixed by wizard
$controller = JControllerLegacy::getInstance('wizard');
// Perform the Request task

$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();
