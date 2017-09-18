<h1>Learning Outcome of a VET Course</h1>

<div class="row-fluid">

<!--    <div class="span3 center topspacing" >-->
<!--        <img src="components/com_wizard/images/gufo.png" width="200" />-->
<!--    </div>-->

    <div class="span12" >
        <h3>So you want to integrate the CARESS Framework by introducing a new Learning Outcome for an existing VET specialization Course.</h3>
        <h4>In the next form you will have to provide the following information</h4>

        <ul class="step_ul">
            <li>
                A name for the Learning Outcome
            </li>
            <li>
                The reference Country
            </li>
            <li>
                The reference HHCP in a Country. If you do not find it in the
                <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal_hhcpinacountry">list</button>
                please
                <a href="manage-hhcp-in-a-country.html"><button  type="button" class="btn btn-primary"> add </button></a>
                it before to proceed
            </li>
            <li>
                The HHCP VET Specialization Course of witch you are referring. If you do not find it in the
                <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal_hhcpvet">list</button>
                please
                <a href="manage-existing-hhcp-vet-sc.html"><button  type="button" class="btn btn-primary"> add </button></a>
                the correct one before to proceed in the insertion.
            </li>

            <li>
                The Set of course Learning Outcome. If you do not find it in the
                <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal_learning_outcome">list</button>
                please
                <a href="manage-set-course-learning-outcomes-entry.html"><button  type="button" class="btn btn-primary"> add </button></a>
                the necessary information before to proceed.
            </li>

        </ul>

        <div class="pull-right">
            <a href="manage-course-learning-outcomes-entry.html"><button  type="button" class="btn btn-primary"> NEXT </button></a>
        </div>

    </div>
</div>



<div id="myModal_hhcpinacountry" class="modal  modal-sm fade" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">HHCP in a Country</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <?php
                    foreach ($this->hhcp_in_a_country as  $elem){
                        echo "<li>".$elem['country']." - ".$elem['name']."</li >";
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

<div id="myModal_hhcpvet" class="modal  modal-sm fade" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">HHCP VET Specialization Course</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <?php
                    foreach ($this->hhcp_vet as  $elem){
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

<div id="myModal_learning_outcome" class="modal  modal-sm fade" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Set of Course Learning outcome</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <?php
                    foreach ($this->learning_outcome as  $elem){
                        echo "<li>".$elem['vet']." - ".$elem['learningoutcome']."</li >";
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