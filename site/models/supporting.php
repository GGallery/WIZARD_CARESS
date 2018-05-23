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
class wizardModelSupporting extends JModelLegacy {

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


        if($_REQUEST['position'] == '0e_reg_6'){

            $this->storeAccount();
        }
    }

    public function __destruct() {

    }


    public function getSupporting() {

        try {

            $query = $this->_db->getQuery(true);

            // Select some fields
            $query->select('*')
                ->from('#__users as u')
                ->join('left', '#__wizard_info as w on u.id = w.id')
                ->order('u.id desc')
            ;

            $this->_db->setQuery($query);
            $res = $this->_db->loadAssocList();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }

        return $res;
    }


}

