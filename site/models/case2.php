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
			print_r::log($e);
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
			print_r::log($e);
		}

		if($id)
			return $res[0]['name'];

		return $res;
	}

	public function get_esco($id = null) {

		$query = $this->_db->getQuery(true);
		try {
			$query->select('id, name');
			$query->from('#__cck_store_form_esco_classification');

			if($id)
				$query->where('id = '.  $id );

			$query->order('name');
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			print_r::log($e);
		}

		if($id)
			return $res[0]['name'];

		return $res;
	}

	public function get_hhcp_in_a_country($id = null) {

		$query = $this->_db->getQuery(true);
		try {
			$query->select('c.name as country, h.name');
			$query->from('#__cck_store_form_hhcp_in_a_country AS h');
			$query->join('inner','#__cck_store_form_country AS c ON c.id = h.country_id');
			$query->order('c.name');


			if($id)
				$query->where('id = '.  $id );

			$query->order('name');
			$this->_db->setQuery((string) $query, 0);
			$res = $this->_db->loadAssocList();
		} catch (Exception $e) {
			print_r::log($e);
		}

		if($id)
			return $res[0]['name'];

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
			print_r::log($e);
		}

		if($id)
			return $res[0]['name'];

		return $res;
	}


	public function get_learning_outcome($id = null) {

		$query = $this->_db->getQuery(true);
		try {
			$query->select('v.name as vet, s.name as learningoutcome');
			$query->from('#__cck_store_form_set_of_course_learning_outcomes AS s');
			$query->join('inner','#__cck_store_form_existing_hhcp_vet_specialization_courses AS v ON v.id = s.hhcp_vet_spec_course_id');
			$query->order('v.name');


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

	public function get_role($id = null) {

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

