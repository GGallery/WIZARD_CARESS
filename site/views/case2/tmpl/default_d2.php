<h1>(2D) General Info about HHCP</h1>
<form method="get" action="<?php echo JURI::base(); ?>hhcp-report">
    <div class="row-fluid">


        <div class="span9 ">
            <div class="wizardbkg"><h3>Select one of the HHCP categories identified in the project. </h3></div>


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



                <input type="hidden2"  id="hhcp" name="hhcp" value=""/>

                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case2">

                <input type="hidden"  name="tipo" id="tipo" value="">

            </div>

        </div>

        <div class="span3 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="200" />
        </div>

    </div>

    <div class="wizardbkg">What kind of information would you like to insert/update?  Please select a topic area.
        (Information provided should be at EU level, not country-specific)
    </div>

    <div class="row-fluid center">

        <div class="span6">
            <button  type="submit" class="btn btn-primary btn-wizard-azzurro" onclick="send(event, 'd2a')"> NEEDS </button>
            <!--        <button type="submit" class="btn btn-primary btn-wizard-giallo" onclick="send(event, 'c2_1')"> OVERVIEW </button>-->

        </div>
        <div class="span6">
            <button  type="submit" class="btn btn-primary btn-wizard-azzurro" onclick="send(event, 'd2b')">  CHALLENGES/HINTS FOR THE FUTURE </button>
        </div>

    </div>
</form>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">

    function send(e, value){
        $('#tipo').val(value);
        if(!$('#hhcp').val()){
            e.preventDefault();
            alert("Please select HHCP");
        }
    }

    $(".hhcp").click(function(event) {
        event.preventDefault();
        id= this.id;
        $('#hhcp').val(id.substr(4));
    });


</script>


