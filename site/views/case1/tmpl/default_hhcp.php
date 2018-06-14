<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li ><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0c">User interest on HHCP</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0d">User Country</a></li>-->
<!--</ul>-->

<h1>HHCP Type *</h1>

<div class="row-fluid">

    <div class="span3 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>

    <div class="span9">
        <form method="get" action="<?php echo JURI::base(); ?>index.php/hhcp-report">
            <div class="form-group">
                <h4>HHCP Type *</h4>
                <div class="row-fluid hhcpoptionselect">
                    <div class="span2">
                        <a id="hhcp398" href="" alt="NURSE" class="hhcp"><img src="components/com_wizard/images/398.png">
                            NURSE</a>
                    </div>

                    <div class="span2">
                        <a id="hhcp399" href="" alt="SOCIAL AND HEALTH HOME CARE PROFESSIONAL" class="hhcp"><img class="imghhcp" src="components/com_wizard/images/399.png">
                            SOCIAL AND HEALTH HOME CARE PROFESSIONAL</a>
                    </div>

                    <div class="span2">
                        <a id="hhcp400" href="" alt="PHYSIOTHERAPIST" class="hhcp"><img class="imghhcp" src="components/com_wizard/images/400.png">
                            PHYSIOTHERAPIST</a>
                    </div>

                    <div class="span2">
                        <a id="hhcp401" href="" alt="SPEECH THERAPIST" class="hhcp"> <img class="imghhcp" src="components/com_wizard/images/401.png">
                            SPEECH THERAPIST</a>
                    </div>
                    <div class="span2">
                        <a id="hhcp402" href="" alt="OCCUPATIONAL THERAPIST" class="hhcp"><img class="imghhcp" src="components/com_wizard/images/402.png">
                            OCCUPATIONAL THERAPIST</a>
                    </div>
                </div>

                <div class="row-fluid">

                    <div class="span2">
                        <a id="hhcp403" href="" alt="PSYCHOLOGIST" class="hhcp"> <img class="imghhcp" src="components/com_wizard/images/403.png">
                            PSYCHOLOGIST</a>
                    </div>

                    <div class="span2">
                        <a id="hhcp404" href="" alt="PROFESSIONAL EDUCATOR" class="hhcp"> <img class="imghhcp" src="components/com_wizard/images/404.png">
                            PROFESSIONAL EDUCATOR</a>
                    </div>

                    <div class="span2">
                        <a id="hhcp405" href="" alt="HOME CARE ASSISTANT" class="hhcp"> <img class="imghhcp" src="components/com_wizard/images/405.png">
                            HOME CARE ASSISTANT</a>
                    </div>

                    <div class="span2">
                        <a id="hhcp406" href="" alt="SOCIAL CARE WORKER" class="hhcp"> <img class="imghhcp" src="components/com_wizard/images/406.png">
                            SOCIAL CARE WORKER</a>
                    </div>
                </div>


                <input id="hhcp_in_a_country_by_hhcp" name="hhcp_in_a_country_by_hhcp" type="hidden" value="">
                <!--                <select class="form-control" id="hhcp_in_a_country_by_hhcp" name="hhcp_in_a_country_by_hhcp" >-->
                <!--                    <option value="">Select a type</option>-->
                <!---->
                <!---->
                <!--                    --><?php
                //
                //                    foreach ($this->hhcp as  $elem){
                //                        echo "<option value='".$elem['id']."'>".$elem['name']."</option>";
                //                    }
                //                    ?>
                <!---->
                <!---->
                <!---->
                <!--                </select>-->

                <h4>Country</h4>

                <select class="form-control" id="hhcp_by_country" name="hhcp_by_country" >
                    <option value="">Select a country</option>
                    <?php

                    foreach ($this->country as  $elem){
                        echo "<option value='".$elem['id']."'>".$elem['name']."</option>";
                    }
                    ?>

                </select>

                <!--                MAPPA-->
                <!--                <div id="mappa" class="italia"></div>-->
                <!--                <div id="log" class="hide"/></div>-->

                <!--                <input type="hidden"  name="country_overview_country_group" value="">-->
                <!--                <input type="hidden"  name="country_challenges_country_group" value="">-->
                <input type="hidden"  name="search" value="hhcp_report_search">
                <input type="hidden"  name="task" value="search">

<!--                hhcp_in_a_country_by_hhcp=398&hhcp_by_country=407&search=hhcp_report_search&task=search-->

                <br>
                <button type="submit" class="btn btn-primary" onclick="send(event)">Search</button>
            </div>
        </form>
    </div>



</div>

<!--js per la mappa cliccabile-->
<!--<script src="components/com_wizard/js/raphael-min.js"></script>-->
<!--<script src="components/com_wizard/js/mappa.js"></script>-->
<!--fine js per la mappa cliccabile-->

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">




    jQuery(".hhcp").click(function(event) {
        event.preventDefault();

        id= this.id;
        jQuery('#hhcp_in_a_country_by_hhcp').val(id.substr(4));

        console.log('ok', id);
           // field=$('#country_needs_country_group').val();
           //
           // $.post( "index.php", { option:'com_wizard', task:'get_hccp', id: field}, function(data) {
           //     var options = $("#competences_by_hhcp_in_country");
           //     options.empty();
           //     $.each(data, function() {
           //         options.append($("<option />").val(this.id).text(this.name));
           //     });
           //     options.effect('shake');
           //
           //     $('#country_overview_country_group').val(field);
           //     $('#country_challenges_country_group').val(field);
           //
           // },'json');
    });



    //    function send(e){
    //        e.preventDefault();
    //
    //    }

</script>
