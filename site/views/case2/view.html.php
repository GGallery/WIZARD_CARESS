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

class WizardViewCase2 extends JViewLegacy {

    function display($tpl = null) {

        $session = JFactory::getSession();
        $model = & $this->getModel();

        $tpl = $_REQUEST['tipo'];


        if($tpl == "a1" || $tpl == "a2" || $tpl == "a3"){
            $this->country = $model->get_country();
        }


//        $this->stakeholder = $model->get_stakeholder();
//        $this->hhcp = $model->get_hhcp();

//        $this->sessione = $model->_parametri;

        parent::display($tpl);
    }
}
