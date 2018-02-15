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

        $this->hhcp =   $session->get('hhcp');
        $this->country =   $session->get('country');

        if($this->hhcp && $this->country) {
            $this->hhcp_in_a_country = $model->get_hhcp_in_a_country_id($this->hhcp, $this->country);
            echo "<br> hhcp_in_a_country: ". $this->hhcp_in_a_country;
        }


        if($tpl == "f2"){
            $this->country_name = $model->get_country($this->country);
            $this->hhcp_name = $model->get_hhcp($this->hhcp);
        }

        if($tpl == "g2a" ){
            $this->esco_list= $model->get_esco_list();
        }

        if($tpl == "g2b" || $tpl == "h2a" || $tpl == "h2b" ){
            $this->hhcp_in_a_country_list= $model->get_hhcp_in_a_country_list();
        }

        if($tpl == "g2c" ){
            $this->role_list= $model->get_role_list();
        }


        if($tpl == "h2c" ){
            $this->learning_unit_list= $model->get_learning_unit_list();
        }




//        // VECCHI CONTROLLI
//        if($tpl == "a1" || $tpl == "a2" || $tpl == "a3"){
//            $this->country = $model->get_country();
//        }
//
//        if($tpl == "b" ){
//            $this->hhcp= $model->get_hhcp();
//        }
//

//        if($tpl == "c2" ){
//            $this->hhcp_in_a_country= $model->get_hhcp_in_a_country();
//            $this->hhcp_vet= $model->get_hhcp_vet();
//            $this->learning_outcome= $model->get_learning_outcome();
//        }
//
//        if($tpl == "c3" ){
//            $this->hhcp_in_a_country= $model->get_hhcp_in_a_country();
//            $this->role= $model->get_role();
//        }
//
//        // FINE VECCHI CONTROLLI





//        $this->stakeholder = $model->get_stakeholder();
//        $this->hhcp = $model->get_hhcp();

//        $this->sessione = $model->_parametri;

        parent::display($tpl);
    }
}
