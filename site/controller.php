<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

require_once 'models/libs/debugg.php';
require_once 'define_link_framework.php';

jimport('joomla.application.component.controller');
jimport( 'joomla.access.access' );
jimport( 'joomla.application.application' );

class wizardController extends JControllerLegacy {

    protected $_db;
    private $_japp;
    private $_session;

    public function __construct($config = array()) {
        parent::__construct($config);

        ini_set('display_errors', '0');

        $this->_db = &JFactory::getDbo();

        $document = JFactory::getDocument();

        JHtml::_('jquery.framework',false);//RS $document->addScript('components/com_gglms/js/jquery.min.js');
        JHtml::_('bootstrap.framework');//RS $document->addScript('components/com_gglms/js/bootstrap.min.js');

//        $document->addScript('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
//        $document->addStyleSheet('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

        $document->addStyleSheet('components/com_wizard/css/custom.css');
        $document->addStyleSheet('components/com_wizard/css/font-awesome-4.6.1/css/font-awesome.min.css');


//        JAVIER
//        $document->addStyleSheet('components/com_jumi/files/caress/css/general_style.css');
//        $document->addStyleSheet('components/com_jumi/files/caress/css/report_style.css');
//        $document->addStyleSheet('components/com_jumi/files/caress/libs/font-awesome-4.6.1/css/font-awesome.min.css');
//        JAVIER

        $this->registerTask('wizard', 'wizard');
        $this->registerTask('checkusername', 'checkusername');
        $this->registerTask('savereg', 'savereg');

    }

    public function __destruct() {

    }

    public function wizard(){

        JRequest::setVar('view', 'case0');
        parent::display();
    }

    public function checkusername(){
        $this->_japp = &JFactory::getApplication();
        $query = $this->_db->getQuery(true);
        try {
            $query->select('count(id)');
            $query->from('#__users');
            $query->where('username = "'. $_REQUEST['username'].'"');

            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadResult();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }
        echo  $res;
        $this->_japp->close();
    }

    public function checkemail(){
        $this->_japp = &JFactory::getApplication();
        $query = $this->_db->getQuery(true);
        try {
            $query->select('count(id)');
            $query->from('#__users');
            $query->where('email = "'. $_REQUEST['email'].'"');

            $this->_db->setQuery((string) $query, 0);
            $res = $this->_db->loadResult();
        } catch (Exception $e) {
            DEBUGG::log($e);
        }
        echo  $res;
        $this->_japp->close();
    }

    public function get_hhcp_in_a_country(){
        $this->_japp = &JFactory::getApplication();
        $model = & $this->getModel('case1');
        $country_id= $_REQUEST['id'];
        $res = $model->get_hhcp_in_a_country($country_id);
        echo  json_encode($res);
        $this->_japp->close();
    }

    public function login(){

        // Get the application object.
        $app = JFactory::getApplication();

        // Get the log in credentials.
        $credentials = array();
        $credentials['username'] = 'antonio_ggallery';
        $credentials['password'] = 'GGallery00';

        $options = array();
        $result = $app->login($credentials, $options);


        return;
    }

    public function wizardoff(){

        $url = $_REQUEST[url];

        $this->_session = JFactory::getSession();
        $this->_session->clear('step');

        header('Location: '. $url);

    }
}

