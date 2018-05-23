<?php

/**
 * @package		Joomla.Tutorials
 * @subpackage	Component
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		License GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

class travelControllerapi extends JControllerForm {

    protected $_db;
    private $_japp;

    public function __construct($config = array()) {
        parent::__construct($config);
        $this->_db = &JFactory::getDbo();
        $this->_japp = &JFactory::getApplication();
    }


    public function updateUser(){
        $data = $_REQUEST;
        $user = new travelModeluser();
        $results = $user->storeData($data);
        echo json_encode($results);
        $this->_japp->close();

    }

    public function getImmaginiTravel(){

        $travel = new travelModeltravel();
        $results = $travel->getTravelImages($_REQUEST['id_travel']);
        echo json_encode($results);
        $this->_japp->close();


    }

    public function deleteImage(){

        $query = $this->_db->getQuery(true);
        $conditions = array(
            $this->_db->quoteName('filename') . ' = "'. $_REQUEST['filename'].'"'
        );

        $query->delete($this->_db->quoteName('#__t_travels_image'));
        $query->where($conditions);
        $this->_db->setQuery($query);
        $result = $this->_db->execute();

        // If the user file already exists, delete it
        $type = '_image';
        $filename = $_REQUEST['filename'];
        $path = sprintf('./images/storage/%s/%s', $type, $filename);

        if (file_exists($path)) unlink($path);

        echo json_encode($result);

        $this->_japp->close();


    }

    public function deleteCover(){


        $obj = new stdClass();
        $obj->cover = '';
        $obj->id = $_REQUEST['id_travel'];

        $result = $this->_db->updateObject('#__t_travels', $obj, 'id');


        // If the user file already exists, delete it
        $type = '_travel';
        $filename = $_REQUEST['filename'];
        $path = sprintf('./images/storage/%s/%s', $type, $filename);

        if (file_exists($path)) unlink($path);

        echo json_encode($result);

        $this->_japp->close();


    }

    public function deleteTravel(){
        try {

            $user = JFactory::getUser();
            $id_travel = $_REQUEST['id_travel'];
            $model = new travelModeltravel();
            $travel = $model->getTravel($id_travel, false);

            if ($travel->author != $user->id)
                return false;

            $query = $this->_db->getQuery(true);
            $conditions = array($this->_db->quoteName('id_travel') . " = $id_travel");

            $query->delete($this->_db->quoteName('#__t_travels_image'));
            $query->where($conditions);
            $this->_db->setQuery($query);
            $this->_db->execute();

            $query = $this->_db->getQuery(true);
            $query->delete($this->_db->quoteName('#__t_travels_scopi_map'));
            $query->where($conditions);
            $this->_db->setQuery($query);
            $this->_db->execute();

            $query = $this->_db->getQuery(true);
            $query->delete($this->_db->quoteName('#__t_travels_keywords_map'));
            $query->where($conditions);
            $this->_db->setQuery($query);
            $this->_db->execute();

            $query = $this->_db->getQuery(true);
            $query->delete($this->_db->quoteName('#__t_travels_consigliatoa_map'));
            $query->where($conditions);
            $this->_db->setQuery($query);
            $this->_db->execute();


            $conditions = array($this->_db->quoteName('id') . " = $id_travel");

            $query = $this->_db->getQuery(true);
            $query->delete($this->_db->quoteName('#__t_travels'));
            $query->where($conditions);
            $this->_db->setQuery($query);
            $this->_db->execute();

            $msg = 'Viaggio cancellato correttamente';
            $this->_japp->redirect(JRoute::_('/profilo'), $msg);

        } catch (Exception $e) {
            var_dump($e);
        }

    }

    public function deleteUser(){
        try {

            $loggeduser = JFactory::getUser();
            $id_utente = $_REQUEST['id_utente'];
            $model = new travelModeluser();
            $user = $model->getUser($id_utente);

            if ($user->id != $loggeduser->id)
                return false;

            $query = $this->_db->getQuery(true);
            $conditions = array($this->_db->quoteName('id') . " = $id_utente");

            $query->delete($this->_db->quoteName('#__users'));
            $query->where($conditions);
            $this->_db->setQuery($query);
            $this->_db->execute();


            $conditions = array($this->_db->quoteName('user_id') . " = $id_utente");

            $query = $this->_db->getQuery(true);
            $query->delete($this->_db->quoteName('#__user_usergroup_map'));
            $query->where($conditions);
            $this->_db->setQuery($query);
            $this->_db->execute();



            $this->_japp->logout(null);
            $msg = 'Utente cancellato correttamente';
            $this->_japp->redirect(JRoute::_('/'), $msg);

        } catch (Exception $e) {
            var_dump($e);
        }

    }

}