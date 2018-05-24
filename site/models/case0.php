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
class wizardModelCase0 extends JModelLegacy {

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

		$user = JFactory::getUser();
		$this->_userid = $user->get('id');


//		if($_REQUEST['position'])
//			$this->_session->set( 'position',  $_REQUEST['position'] );

		if($_REQUEST['stakeholder'])
			$this->_session->set( 'stakeholder',  $_REQUEST['stakeholder'] );

		if($_REQUEST['hhcp'])
			$this->_session->set('hhcp', $_REQUEST['hhcp']);

		if($_REQUEST['country'])
			$this->_session->set('country', $_REQUEST['country']);

        if($_REQUEST['reg_type'])
            $this->_session->set('reg_type', $_REQUEST['reg_type']);

		if($_REQUEST['username'])
			$this->_session->set('username', $_REQUEST['username']);

		if($_REQUEST['password'])
			$this->_session->set('password', $_REQUEST['password']);

		if($_REQUEST['email'])
			$this->_session->set('email', $_REQUEST['email']);

        if($_REQUEST['info'])
            $this->_session->set('info', $_REQUEST['info']);

        if($_REQUEST['image'])
            $this->_session->set('image', $_REQUEST['image']);



		$this->_parametri['position'] = $this->_session->get('position');
		$this->_parametri['stakeholder'] = $this->_session->get('stakeholder');
		$this->_parametri['hhcp'] = $this->_session->get('hhcp');
		$this->_parametri['country'] = $this->_session->get('country');
		$this->_parametri['username'] = $this->_session->get('username');
		$this->_parametri['password'] = $this->_session->get('password');
		$this->_parametri['email'] = $this->_session->get('email');
        $this->_parametri['image'] = $this->_session->get('image');
        $this->_parametri['reg_type'] = $this->_session->get('reg_type');
        $this->_parametri['info'] = $this->_session->get('info');

//        print_r($this->_parametri);

		if($_REQUEST['position'] == '0e_reg_6'){

			$this->storeAccount();
		}

//		DEBUGG::log($this->_parametri, 'parametri');

		//

//		$user = JFactory::getUser();
//		$this->_userid = $user->get('id');
	}

	public function __destruct() {

	}

	public function get_stakeholder() {

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_stakeholder');
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

		return $res;
	}

	public function get_hhcp($id = null) {

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_hhcp');

			if($id)
				$query->where('id = '.  $id );

			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			debug::exception($e);
		}




		if($id)
			return $res[0]['name'];

		return $res;
	}

	public function get_country($id = null) {

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_country');

			if($id)
				$query->where('id = '.  $id );

			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

		if($id)
			return $res[0]['name'];

		return $res;
	}

	public function get_sentences(){
		$query = $this->_db->getQuery(true);
		try {
			$query->select('s.*');
			$query->from('#__navigation_paths as p');
			$query->join('inner' ,' #__navigation_paths_sentence as s on p.sentence_id = s.id ');
			$query->where('stakeholder_type_id = '. $this->_parametri['stakeholder']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssoclist();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}
		return $this->refactor_paths($res);

	}

	public function refactor_paths($sentences){

		foreach ($sentences as &$sentence){


			switch($sentence['sentence4']){
				case 'PROFILE COUNTRY':
					$sentence['sentence4']=$this->get_country($this->_parametri['country']);
					break;

				case 'PROFILE HHCP':
					$sentence['sentence4']=$this->get_hhcp($this->_parametri['hhcp']);
					break;

				case 'OTHER HHCP':
//					$sentence['sentence4']=' NOT  '. $this->get_hhcp($this->_parametri['hhcp']);
					$sentence['sentence4']=' IN OTHER COUNTRIES  ';
					break;
			}


			switch($sentence['sentence6']){
				case 'OTHER COUNTRIES':
//					$sentence['sentence6']='NOT IN ' .$this->get_country($this->_parametri['country']);
					$sentence['sentence6']=' IN OTHER COUNTRIES  ';
					break;

				case 'PROFILE COUNTRY':
					$sentence['sentence6']=$this->get_country($this->_parametri['country']);
					break;
			}


//			$this->get_sentence($sentence);

		}

		return $sentences;
	}

	public function get_sentence(&$sentence){

		$objects = explode(",", $sentence['query1']);
		foreach ($objects as $object) {
			$sentence['objects'][$object] = $this->$object();
		}
		DEBUGG::log($sentence);
	}

	public function storeAccount(){

		jimport('joomla.user.helper');

		//insert user
		$query = $this->_db->getQuery(true);
		$query->insert("#__users");
		$query->set("name='".$this->_parametri['username']."'");
		$query->set("username='".$this->_parametri['username']."'");
		$query->set("email='".$this->_parametri['email']."'");
		$query->set("password='".JUserHelper::hashPassword($this->_parametri['password'])."'");
        $query->set("block= 1");
		$query->set("registerDate= now() ");

		$this->_db->setQuery((string) $query);
		$this->_db->query();

		$user_id= $this->_db->insertid();

		//add usergroup
		$query = $this->_db->getQuery(true);
		$query->insert("#__user_usergroup_map");
		$query->set("user_id='".$user_id."'");
		$query->set("group_id='2'"); //Register

		$this->_db->setQuery((string) $query);
		$this->_db->query();

		//add extra field
		$query = $this->_db->getQuery(true);
		$query->insert("#__cck_store_form_user");
		$query->set("id='".$user_id."'");
		$query->set("hhcp_id='".$this->_parametri['hhcp']."'");
		$query->set("stakeholder_id='".$this->_parametri['stakeholder']."'");
		$query->set("country_of_employment_id='".$this->_parametri['country']."'");

		$this->_db->setQuery((string) $query);
		$this->_db->query();

        //add extra field
        $query = $this->_db->getQuery(true);
        $query->insert("#__wizard_info");
        $query->set("id='".$user_id."'");
        $query->set("image='".$this->_parametri['image']."'");
        $query->set("info='".$this->_parametri['info']."'");
        $query->set("reg_type='".$this->_parametri['reg_type']."'");

        $this->_db->setQuery((string) $query);
        $this->_db->query();

        //login
		$credentials = array();
		$credentials['username'] = $this->_parametri['username'];
		$credentials['password'] = $this->_parametri['password'];

		$options = array();
		$this->_japp->login($credentials, $options);

		$this->_session->set('position', '0f');


//		unserialize($this->_parametri);
//        $this->_japp->getSession()->destroy();

//		$this->_japp->close();

	}

	// INTERROGAZIONI DATABASE //

	public function _country_overview_in_profile() {
		DEBUGG::log('_country_overview_in_profile');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_country_overview');
			$query->where('country_id = '. $this->_parametri['country']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

//		DEBUGG::log($res, '_country_overview_in_profile');
		return $res;
	}

	public function _country_overview_in_all() {
		DEBUGG::log('_country_overview_in_profile');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_country_overview');
//			$query->where('country_id = '. $this->_parametri['country']); //IN ALL
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

//		DEBUGG::log($res, '_country_overview_in_profile');
		return $res;
	}

	public function _country_needs_homecare_sector() {
		DEBUGG::log('_country_needs_homecare_sector');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_country_overview');
			$query->where('country_id = '. $this->_parametri['country']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

//		DEBUGG::log($res, '_country_overview_in_profile');

		return $res;
	}

	public function _hhcp_in_all_country(){
		DEBUGG::log('_hhcp_in_all_country');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_hhcp_in_a_country');
//			$query->where('country_id = '. $this->_parametri['country']); ALL COUNTRY!
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

//		DEBUGG::log($res, '_hhcp_in_all_country');

		return $res;
	}

	public function _hhcp_in_profile_country_all_hhcp(){
		DEBUGG::log('_hhcp_in_all_country');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_hhcp_in_a_country');
			$query->where('country_id = '. $this->_parametri['country']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

//		DEBUGG::log($res, '_hhcp_in_all_country');

		return $res;
	}

	public function _hhcp_in_profile_country_profile_hhcp(){
		DEBUGG::log('_hhcp_in_all_country');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_hhcp_in_a_country');
			$query->where('country_id = '. $this->_parametri['country']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}

//		DEBUGG::log($res, '_hhcp_in_all_country');

		return $res;
	}

	public function _roles_for_hhcp_in_country(){
		DEBUGG::log('_roles_for_hhcp_in_country');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('r.id, r.name');
			$query->from('#__cck_store_form_role as r');
			$query->join('inner' ,'#__cck_store_form_hhcp_in_a_country as h on r.hhcp_in_a_country_id = h.id');
			$query->where('h.country_id = '. $this->_parametri['country']);
			$query->where('h.hhcp_id = '. $this->_parametri['hhcp']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}
//		DEBUGG::log($res, '_hhcp_in_all_country');

		return $res;
	}

	public function _existing_hhcp_curricula_for_the_hhcp(){
		DEBUGG::log('_existing_hhcp_curricula_for_the_hhcp');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('c.id, c.name');
			$query->from('#__cck_store_form_existing_hhcp_curricula as c');
			$query->join('inner' ,'#__cck_store_form_hhcp_in_a_country as h on c.hhcp_in_country_id = h.id');
			$query->where('h.country_id = '. $this->_parametri['country']);
			$query->where('h.hhcp_id = '. $this->_parametri['hhcp']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}
//		DEBUGG::log($res, '_existing_hhcp_curricula_for_the_hhcp');

		return $res;

	}

	public function _existing_hhcp_vet_specialization_course_for_hhcp(){
		DEBUGG::log('_existing_hhcp_vet_specialization_course_for_hhcp');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('c.id, c.name');
			$query->from('#__cck_store_form_existing_hhcp_vet_specialization_courses as c');
			$query->join('inner' ,'#__cck_store_form_hhcp_in_a_country as h on c.hhcp_in_country_id = h.id');
			$query->where('h.country_id = '. $this->_parametri['country']);
			$query->where('h.hhcp_id = '. $this->_parametri['hhcp']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}
//		DEBUGG::log($res, '_existing_hhcp_vet_specialization_course_for_hhcp');

		return $res;

	}

	public function _skill_gaps_for_the_hhcp(){
		DEBUGG::log('_skill_gaps_for_the_hhcp');

		$query = $this->_db->getQuery(true);
		try {
			$query->select('s.id, s.name');
			$query->from('#__cck_store_form_skill_gap as s');
			$query->join('inner' ,'#__cck_store_form_hhcp_in_a_country as h on s.hhcp_in_country_id = h.id');
			$query->where('h.country_id = '. $this->_parametri['country']);
			$query->where('h.hhcp_id = '. $this->_parametri['hhcp']);
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			DEBUGG::log($e);
		}
//		DEBUGG::log($res, '_skill_gaps_for_the_hhcp');

		return $res;

	}

	////////////////////////////////
}

