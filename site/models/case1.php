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
class wizardModelCase1 extends JModelLegacy {

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

//		if($_REQUEST['position'])
//			$this->_session->set( 'position',  $_REQUEST['position'] );
//		$this->_parametri['position'] = $this->_session->get('position');


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
			FB::log($e);
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

	public function get_hhcp_in_a_country($id = null) {
		//metodo dal controller 
		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_hhcp_in_a_country');
			$query->where('country_id = '.  $id );
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			debug::exception($e);
		}
		
		return $res;
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
			FB::log($e);
		}

		if($id)
			return $res[0]['name'];

		return $res;
	}
	
}

