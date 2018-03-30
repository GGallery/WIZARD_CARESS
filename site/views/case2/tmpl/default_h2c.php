<h1>HHCP in a country – learning outcomes</h1>

<form method="get" action="<?php echo JURI::base(); ?>index.php">
    <div class="row-fluid">
        <div class="span9 center intro2">
            <div class="wizardbkg">
                <h1>To INTEGRATE THE PROVIDED DESCRIPTIONS </h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="course_learning_outcome_by_country" value="<?php echo $this->country; ?>">
                    <input type="hidden"  name="course_learning_outcome_by_hc" value="<?php echo $this->hhcp_in_a_country; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="list">
                    <input type="hidden"  name="task" value="search">
                    <input type="hidden"  name="cck" value="course_learning_outcome">
                    <input type="hidden"  name="search" value="co">
                    <button type="submit" class="btn">click here</button>
                </form>
            </div>


            <div class="wizardbkg">
                <h1>To ADD A Learning Outcome</h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <!--                    RIMASTO IN SOSPESO-->
                    <input type="hidden"  name="course_learning_outcome_by_set_learning_outcome" value="<?php echo $this->country; ?>">

                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="form">
                    <input type="hidden"  name="layout" value="edit">
                    <input type="hidden"  name="type" value="course_learning_outcome">
                    <button type="submit" class="btn" >click here</button>
                </form>

                <h4>Please take into account that you need to provide the following information</h4>

                <div class="text-left">
                    <ul>
                        <li>learning outcome name</li>
                        <li>the related Learning Unit; if you do not find it in this

                            <button type="button"
                                    class="btn btn-warning btn-lg"
                                    data-toggle="modal"
                                    data-target="#myModalLEARNINGUNIT">list</button>
                            please
                            <a href="<?php echo H2B; ?>"><button  type="button" class="btn btn-primary"> add </button></a>
                            the correct one preliminarily</li>
                        <li> description of at least one of the 3 components (knowledge, skills and competence)</li>
                        <li> information about the assessment of the learning outcome</li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="span3 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="200" />
        </div>
    </div>

</form>

<div id="myModalLEARNINGUNIT" class="modal  modal-sm fade" role="dialog">
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
                    foreach ($this->learning_unit_list as $elem){
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