<?php

/**
 * WebTVContenuto Model
 *
 * @package    Joomla.Components
 * @subpackage WebTV
 */
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');


/**
 * WebTVContenuto Model
 *
 * @package    Joomla.Components
 * @subpackage WebTV
 */
class wizardModelCase2 extends JModelLegacy {

    private $_japp;
    protected $_db;
    public $_session;
    public $_userid;
    public $_parametri;

    public function __construct($config = array())
    {
        parent::__construct($config);

        $this->_japp = &JFactory::getApplication();
        $this->_db = &JFactory::getDbo();

        $this->_session = JFactory::getSession();


        $this->_session->set('step', $this->_japp->input->getString('tipo'));

        if($this->_japp->input->getString('country'))
            $this->_session->set('country', $this->_japp->input->getString('country'));

        if($this->_japp->input->getString('hhcp'))
            $this->_session->set('hhcp', $this->_japp->input->getString('hhcp'));


        echo "<br> hhcp: " . $this->_session->get('hhcp');
        echo "<br> country: " . $this->_session->get('country');

    }

    public function __destruct() {

    }

    public function get_country($id = null) {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('id, name');
            $query->from('#__cck_store_form_country');

            if($id)
                $query->where('id = '.  $id );

            $query->order('name');
            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }

        if($id)
            return $res[0]['name'];

        return $res;
    }

    public function get_hhcp($id = null) {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('id, name');
            $query->from('#__cck_store_form_hhcp');

            if($id)
                $query->where('id = '.  $id );

            $query->order('name');
            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }

        if($id)
            return $res[0]['name'];

        return $res;
    }

    public function get_esco_list($id = null) {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('id, name');
            $query->from('#__cck_store_form_esco_classification');
            $query->order('name');
            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }
        return $res;
    }


    public function get_hhcp_in_a_country_id($hhcp_id = null, $country_id = null) {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('h.id');
            $query->from('#__cck_store_form_hhcp_in_a_country AS h');
            $query->join('inner','#__cck_store_form_country AS c ON c.id = h.country_id');
            $query->order('c.name');

            // erano opzionali, ora le ho messe fisse
            $query->where('hhcp_id = '.  $hhcp_id);
            $query->where('country_id = '.  $country_id );

            $query->order('id');
            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadResult();
        } catch (Exception $e) {
            DEBUGG::query($query);
            DEBUGG::log($e);
        }

        return $res;
    }

    public function get_hhcp_in_a_country_list() {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('h.id, c.name as country, h.name');
            $query->from('#__cck_store_form_hhcp_in_a_country AS h');
            $query->join('inner','#__cck_store_form_country AS c ON c.id = h.country_id');
            $query->order('c.name');

            $query->order('name');
            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }

        return $res;
    }


    public function get_hhcp_vet($id = null) {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('v.name');
            $query->from('#__cck_store_form_existing_hhcp_vet_specialization_courses AS v');
            $query->order('v.name');


            if($id)
                $query->where('id = '.  $id );

            $query->order('name');
            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }

        if($id)
            return $res[0]['name'];

        return $res;
    }

//    public function get_learning_outcome($id = null) {
//
//        $query = $this->_db->getQuery(true);
//        try {
//            $query->select('v.name as vet, s.name as learningoutcome');
//            $query->from('#__cck_store_form_set_of_course_learning_outcomes AS s');
//            $query->join('inner','#__cck_store_form_existing_hhcp_vet_specialization_courses AS v ON v.id = s.hhcp_vet_spec_course_id');
//            $query->order('v.name');
//
//
//            if($id)
//                $query->where('id = '.  $id );
//
//
//            $this->_db->setQuery((string) $query, 0);
//            $res = $this->_db->loadAssocList();
//        } catch (Exception $e) {
//            DEBUGG::error($e, '',1);
//
//        }
//
//        if($id)
//            return $res[0]['name'];
//
//        return $res;
//    }

    public function get_learning_unit_list() {


//        TODO DA SISTEMARE
        $query = $this->_db->getQuery(true);
        try {
            $query->select('s.name as learningoutcome');
            $query->from('#_cck_store_form_set_of_course_learning_outcomes AS s');
            $query->order('s.name');

            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::error($e, '',1);

        }

        return $res;
    }

    public function get_role_list() {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('c.`name` as country, hhcp.`name` AS hhcp_in_a_country, re.`name` AS role');
            $query->from('#__cck_store_form_role_element AS re');
            $query->join('inner','#__cck_store_form_role AS r ON r.id = re.role_id');
            $query->join('inner','#__cck_store_form_hhcp_in_a_country AS hhcp ON hhcp.id = r.hhcp_in_a_country_id');
            $query->join('inner','#__cck_store_form_country AS c ON c.id = hhcp.country_id');
            $query->order('c.`name`, hhcp.`name`, re.role_id');

            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::error($e, '',1);

        }

        return $res;
    }

    public function get_role_id($id = null) {

        $query = $this->_db->getQuery(true);
        try {
            $query->select('c.`name` as country, hhcp.`name` AS hhcp_in_a_country, re.`name` AS role');
            $query->from('#__cck_store_form_role_element AS re');
            $query->join('inner','#__cck_store_form_role AS r ON r.id = re.role_id');
            $query->join('inner','#__cck_store_form_hhcp_in_a_country AS hhcp ON hhcp.id = r.hhcp_in_a_country_id');
            $query->join('inner','#__cck_store_form_country AS c ON c.id = hhcp.country_id');
            $query->order('c.`name`, hhcp.`name`, re.role_id');


            if($id)
                $query->where('id = '.  $id );


            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::error($e, '',1);

        }

        if($id)
            return $res[0]['name'];

        return $res;
    }
}

