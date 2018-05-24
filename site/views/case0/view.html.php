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

class WizardViewCase0 extends JViewLegacy {

    function display($tpl = null) {

        $session = JFactory::getSession();
        $model = & $this->getModel();

        $user = JFactory::getUser();

//        $tpl = $session->get( 'position', '0a' );

        $tpl = $_REQUEST['position'];

        $this->stakeholder = $model->get_stakeholder();
        $this->hhcp = $model->get_hhcp();
        $this->country = $model->get_country();


        if($tpl == 'login' && $user->id )
            $tpl= '0f';

        if($tpl=='0f'){
            $sentences= $model->get_sentences();
            $this->sentences =  $sentences;
        }

        $this->sessione = $model->_parametri;

        parent::display($tpl);
    }
}
