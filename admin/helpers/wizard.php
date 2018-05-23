<?php

/**
 * @package		Joomla.Tutorials
 * @subpackage	Components
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		License GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die;

class wizardHelper {

    public static function addSubmenu($submenu) {


//      LINK ICONE JOOMLA
//      https://docs.joomla.org/J3.x:Joomla_Standard_Icomoon_Fonts/it



        JHtmlSidebar::addEntry(
            '<i class="icon-users  "></i>' . JText::_('Utenti'),
            'index.php?option=com_wizard&view=users',
            $submenu == 'generacoupon'
        );


        $document = JFactory::getDocument();

        if ($submenu == 'users') {
            $document->setTitle("Utenti");
        }




    }


    public static function setAlias($text){


        $text = preg_replace('~[^\\pL\d]+~u', '_', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '_');

        return $text;

    }


    public static function getUserGroupName($user_id, $return_text = false){


        $db     = JFactory::getDBO();
        $groups = JAccess::getGroupsByUser($user_id);
        $groupid_list      = '(' . implode(',', $groups) . ')';
        $query  = $db->getQuery(true);
        $query->select('title');
        $query->from('#__usergroups');
        $query->where('id IN ' .$groupid_list);
        $db->setQuery($query);
        $rows   = $db->loadColumn();

        if($return_text){
            return implode(', <br>',$rows);
        }
        else
            return $rows;

    }



}