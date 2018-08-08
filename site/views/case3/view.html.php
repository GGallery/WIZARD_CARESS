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
        $this->path = 'language/' . $this->language . '/'.$this->c3p.'.php';

        $this->paths = [
            's0' => 'Intro',
            's1a' => 'A1-1',
            's1b' => 'A1-2',
            's1c' => 'A1-3',
            's2a' => 'A2-1',
            's2b' => 'A2-2',
            's2c' => 'A2-3',
            's2d' => 'A2-4',
            's3a' => 'A3-1',
            's3b' => 'A3-2',
            's3c' => 'A3-3'
        ];


        $this->pathsnav = [
            's0',
            's1a' ,
            's1b' ,
            's1c' ,
            's2a' ,
            's2b' ,
            's2c' ,
            's2d' ,
            's3a' ,
            's3b' ,
            's3c'
        ];


        $this->languages = ['en' => 'English', 'es' => 'Espagnol', 'it' => 'Italian'];




        parent::display($tpl);
    }
}
