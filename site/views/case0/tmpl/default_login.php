<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=login">Login</a></li>-->
<!--</ul>-->

<h1>Login</h1>

<div class="row">

    <div class="span6">





        <?php
        jimport('joomla.application.module.helper');



        $mod = JModuleHelper::getModule('mod_login',  'Login-wizard' );
        $document = JFactory::getDocument();
        $renderer = $document->loadRenderer('module');

        $attribs = array();
        $attribs['style'] = 'xhtml';

        $module =JModuleHelper::renderModule($mod, $attribs);

        ?>

        <div>
            <?php echo $module; ?>
        </div>



    </div>

    <div class="span6 center" >
        <img src="components/com_wizard/images/gufo.png" width="200" />
    </div>

</div>