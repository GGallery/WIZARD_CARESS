<h1>HHCP in a country</h1>
<form method="get" action="<?php echo JURI::base(); ?>">
    <div class="row-fluid">


        <div class="span9 ">
            <div class="wizardbkg"><h3>Select one of the EU Countries</h3></div>

            <div id="mappa" class="italia"></div>

            <div class="wizardbkg">What kind of information would you like to insert/update? Please select one of the topic area</div>


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


                <input type="hidden"  name="hhcp" id="hhcp" value="">
                <input type="hidden"  name="country"  id="country" value=""/>
                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case2">
                <input type="hidden"  id="tipo" name="tipo" value="f2"/>

                <button type="submit" class="btn btn-primary" onclick="send(event)">Confirm</button>

            </div>

        </div>

        <div class="span3 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="200" />
        </div>

    </div>
</form>

<div class="hidden" id="log"></div>

<!--js per la mappa cliccabile-->
<script src="components/com_wizard/js/raphael-min.js"></script>
<script src="components/com_wizard/js/mappa.js"></script>
<!--fine js per la mappa cliccabile-->

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
    function send(e, value){
        if(!$('#country').val()){
            e.preventDefault();
            alert("Please select Country");
        }

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