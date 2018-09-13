<?php
/**
 * @package		Joomla.Tutorials
 * @subpackage	Component
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		License GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die;



?>
<?php foreach ($this->items as $i => $item): ?>
    <tr class="row<?php echo $i % 2; ?>">

        <td>
            <?php echo $item->id; ?>
        </td>


        <td>
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>

        <td>
            <?php if($item->image){
                echo '<img width="150px" src="../.'. $item->image .'"/>';
            } ?>
        </td>

        <td>
            <?php echo $item->username; ?>
        </td>

        <td>
            <?php echo $item->name; ?>
        </td>

        <td>
            <?php echo $item->email; ?>
        </td>


        <td>
            <?php echo $item->info; ?>
        </td>

        <td>
            <?php
            //                echo wizardHelper::getUserGroupName($item->id, true);

            echo $item->reg_type;



            ?>
        </td>

        <td>
            <?php
            $data = "id=".$item->id."&username=".$item->username."&password=".$item->password."&email=".$item->email;
//            $urllogin = JUri::root().JRoute::_('index.php?option=com_wizard&task=users.login&'.$data);
//            $urlreset = JUri::root().JRoute::_('index.php?option=com_wizard&task=users.reset&'.$data);
//            $urlresetsend = JUri::root().JRoute::_('index.php?option=com_wizard&task=users.resetsend&'.$data);

            $urlapprove = JUri::root().'index.php?option=com_wizard&task=users.approve&'.$data;
            $buttonapprove = (($item->reg_type != '') && ($item->approved != 1)) ? 1 : 0 ;

            if($buttonapprove)
                echo '<a class="btn btn-small btn-success" href="' . $urlapprove .'" target="">APPROVE</a>';
            ?>
        </td>

    </tr>
<?php endforeach; ?>
