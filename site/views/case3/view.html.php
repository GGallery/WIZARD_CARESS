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

class WizardViewCase3 extends JViewLegacy {

    function display($tpl = null) {


        $document = JFactory::getDocument();
        $jinput = JFactory::getApplication()->input;
        $document->addStyleSheet('components/com_wizard/css/case3.css');

        $session = JFactory::getSession();

        if($jinput->get('language'))
            $session->set('language', $jinput->get('language'));
        $this->language =  $session->get('language', 'en');

        // posizione
        $this->c3p =  $jinput->get('c3p', 's0');

        // path
        $this->path = '/language/' . $this->language . '/'.$this->c3p.'.php';

        $this->paths = ['s0' => 'Screen0', 's1a' => 'Screen0', 's1b' => 'Screen0', 's1c' => 'Screen0', 's2a' => 'Screen0', 's2b' => 'Screen0', 's2c' => 'Screen0', 's2d' => 'Screen0', 's3a' => 'Screen0', 's3b' => 'Screen0', 's3c' => 'Screen0'];

        $this->languages = ['en' => 'English', 'es' => 'Espagnol', 'it' => 'Italian'];




        parent::display($tpl);
    }
}
