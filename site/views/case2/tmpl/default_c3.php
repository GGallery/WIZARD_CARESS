<h1>Set of Knowledge - Skills - Competence</h1>

<div class="row-fluid">

<!--    <div class="span3 center topspacing" >-->
<!--        <img src="components/com_wizard/images/gufo.png" width="200" />-->
<!--    </div>-->

    <div class="span12" >
        <h3>Since you want to integrate the CARESS Framework by introducing information on KSC you shoud provide the following data:</h3>
        <ul class="step_ul">
            <li>
                A name for the KSC Element
            </li>
            <li>
                The reference Country
            </li>
            <li>
                The reference HHCP in a Country. If you do not find it in the
                <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal_hhcpinacountry">list</button>
                please
                <a href="manage-hhcp-in-country-entry.html"><button  type="button" class="btn btn-primary"> add </button></a>
                update the KSC list
            </li>
            <li>
                The Role, i.e set of activities, to which the KSC refers. If you do not find it in the
                <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal_role">list</button>
                please
                <a href="manage-role-elements-entry.html"><button  type="button" class="btn btn-primary"> add </button></a>
                the new first
            </li>

        </ul>

        <div class="pull-right">
            <a href="manage-skill-gap.html"><button  type="button" class="btn btn-primary"> NEXT </button></a>
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

<div id="myModal_role" class="modal  modal-sm fade" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="glossary">HHCP</span> in a Country</h4>
            </div>
            <div class="modal-body">
                <ul>
                    <?php
                    foreach ($this->role as  $elem){
                        echo "<li>".$elem['country']." - ".$elem['hhcp_in_a_country']." - ".$elem['role']."</li >";
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

