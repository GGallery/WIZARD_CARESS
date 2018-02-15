<div class="wizardbkg">
<h1>A new  <span class="glossary" title="See description on Glossary on the right menu">HHCP</span> in a Country</h1>

<div class="row-fluid">

    <div class="span3 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="200" />
    </div>

    <div class="span9" >
        <h3>To introduce a new practitioner you should provide the following information</h3>
        <h4>In the next form you will have to provide the following information</h4>

        <ul class="step_ul">
            <li>
                A name for the practitioner
            </li>
            <li>
                Select the EQF Level related to its professional education
            </li>
            <li>
                Select the Esco classification. If you do not find it in this
                <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">list</button>
                please
                <a href="<?php echo MANAGE_ESCO_CLASSIFICATION_ENTRY; ?>"><button  type="button" class="btn btn-primary"> add </button></a>
                the correct one
            </li>
            <li>
                Describe the pratitioner
            </li>

        </ul>

        <div class="pull-right">
            <a href="<?php echo MANAGE_HHCP_IN_COUNTRY_ENTRY; ?>"><button  type="button" class="btn btn-primary"> NEXT </button></a>
        </div>

    </div>
</div>
</div>



<div id="myModal" class="modal  modal-sm fade" role="dialog">
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
                    foreach ($this->esco as  $elem){
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



<div id="myModal" class="modal  modal-sm fade" role="dialog">
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
                    foreach ($this->esco as  $elem){
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

<!--Modal confirmation -->
<!--<script type="application/javascript">-->
<!--    jQuery( function($) {-->
<!--        $('.buttonadd').on('click', function(e) {-->
<!--            e.preventDefault();-->
<!--            var link = $(this).attr('href');-->
<!--            $('#confirm').modal({-->
<!--                backdrop: 'static',-->
<!--                keyboard: false-->
<!--            })-->
<!--                .one('click', '#go', function(e) {-->
<!--                    window.location = link;-->
<!--                });-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!---->
<!--<div id="confirm" class="modal hide fade">-->
<!--    <div class="modal-body">-->
<!--        Are you sure?-->
<!--    </div>-->
<!--    <div class="modal-footer">-->
<!--        <button type="button" data-dismiss="modal" class="btn btn-primary" id="go">NEXT</button>-->
<!--        <button type="button" data-dismiss="modal" class="btn">Cancel</button>-->
<!--    </div>-->
<!--</div>-->