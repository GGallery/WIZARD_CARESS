<h1>(2ha) HHCP in a country – curriculum </h1>


<form method="get" action="<?php echo JURI::base(); ?>index.php">
    <div class="row-fluid">
        <div class="span9 center intro2">
            <div class="wizardbkg">
                <h1>To INTEGRATE THE PROVIDED DESCRIPTIONS </h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="existing_hhcp_curricula_by_hhcp_country" value="<?php echo $this->hhcp_in_a_country; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="list">
                    <input type="hidden"  name="task" value="search">
                    <input type="hidden"  name="cck" value="existing_hhcp_curricula">
                    <input type="hidden"  name="search" value="hhcp_curricula">
                    <button type="submit" class="btn">click here</button>
                </form>
            </div>


            <div class="wizardbkg">
                <h1>To ADD an EXISTING CURRICULUM </h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="existing_hhcp_curricula_by_hhcp_country" value="<?php echo $this->hhcp_in_a_country; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="form">
                    <input type="hidden"  name="layout" value="edit">
                    <input type="hidden"  name="type" value="existing_hhcp_curricula">
                    <button type="submit" class="btn" >click here</button>
                </form>

                <h4>Please take into account that you need to provide the following information</h4>

                <div class="text-left">
                    <ul>
                        <li>curriculum name</li>
                        <li> the related HHCP in a specific country; if you do not find it in this
                            <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModalHHCPINACOUNTRY">list</button>
                            please
                            <a href="<?php echo G2A; ?>"><button  type="button" class="btn btn-primary"> add </button></a>
                            the correct one preliminarily</li>
                        <li>related EQF level</li>
                        <li>description of the curriculum</li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="span3 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="200" />
        </div>
    </div>

</form>


<div id="myModalHHCPINACOUNTRY" class="modal  modal-sm fade" role="dialog">
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
                    foreach ($this->hhcp_in_a_country_list as  $elem){
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