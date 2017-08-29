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
	
}

