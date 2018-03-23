<h1>HHCP in a country – hhcp </h1>
<form method="get" action="<?php echo JURI::base(); ?>index.php">
    <div class="row-fluid">
        <div class="span9 center intro2">
            <div class="wizardbkg">
                <h1>To INTEGRATE THE PROVIDED DESCRIPTIONS </h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="hhcp_by_country" value="<?php echo $this->country; ?>">
                    <input type="hidden"  name="hhcp_in_a_country_by_hhcp" value="<?php echo $this->hhcp; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="list">
                    <input type="hidden"  name="task" value="search">
                    <input type="hidden"  name="cck" value="hhcp_in_a_country">
                    <input type="hidden"  name="search" value="hhcp_in_a_country">
                    <button type="submit" class="btn">click here</button>
                </form>
            </div>


            <div class="wizardbkg">
                <h1>To ADD A HHCP DESCRIPTION</h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="hhcp_by_country" value="<?php echo $this->country; ?>">
                    <input type="hidden"  name="hhcp_in_a_country_by_hhcp" value="<?php echo $this->hhcp; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="form">
                    <input type="hidden"  name="layout" value="edit">
                    <input type="hidden"  name="type" value="hhcp_in_a_country">
                    <button type="submit" class="btn" >click here</button>
                </form>

                <h4>Please take into account that you need to provide the following information</h4>

                <div class="text-left">
                    <ul>
                        <li>competency name</li>
                        <li>the related ROLE of the HHCP; if you do not find it in this
                            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModalESCO">list</button>
                            please
                            <a href="<?php echo MANAGE_ESCO_CLASSIFICATION_ENTRY; ?>"><button  type="button" class="btn btn-primary"> add </button></a>
                            the correct one preliminarily</li>
                        <li>description of at least one of the 3 components (knowledge, skills and competence)</li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="span3 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="200" />
        </div>
    </div>

</form>




<div id="myModalESCO" class="modal  modal-sm fade" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Esco classification list</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <?php
                    foreach ($this->esco_list as  $elem){
                        echo "<li>".$elem['name']."</li >";
                    }
                    ?>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>