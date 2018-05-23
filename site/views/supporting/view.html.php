<?php

/**
 * @version		1
 * @package		webtv
 * @author 		antonio
 * @author mail	tony@bslt.it
 * @link
 * @copyright	Copyright (C) 2011 antonio - All rights reserved.
 * @license		GNU/GPL
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class WizardViewSupporting extends JViewLegacy {

    function display($tpl = null) {


        $model = & $this->getModel();
        $this->supporting = $model->getSupporting();

        parent::display($tpl);
    }
}
