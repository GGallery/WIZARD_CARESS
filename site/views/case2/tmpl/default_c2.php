<h1>(2C) Homecare in a EU country</h1>
<form method="get" action="<?php echo JURI::base(); ?>index.php">
    <div class="row-fluid">


        <div class="span9 ">

            <div class="wizardbkg"><h3>Select one of the EU Countries</h3></div>

            <div id="mappa" class="italia"></div>

            <input type="hidden" class="form-control " id="country" name="country" value=""/>

            <input type="hidden"  name="option" value="com_wizard">
            <input type="hidden"  name="view" value="case2">
            <input type="hidden"  id="tipo" name="tipo" value=""/>

            <div class="wizardbkg">What kind of information would you like to insert/update? Please select one of the topic area</div>

            <div class="row-fluid center">

                <div class="span4">
                    <button type="submit" class="btn btn-primary btn-wizard-giallo" onclick="send(event, 'c2a')"> OVERVIEW </button>
                </div>
                <div class="span4">
                    <button type="submit" class="btn btn-primary btn-wizard-giallo" onclick="send(event, 'c2b')"> NEEDS </button>
                </div>
                <div class="span4">
                    <button type="submit" class="btn btn-primary btn-wizard-giallo" onclick="send(event, 'c2c')"> CHALLENGES/HINTS FOR THE FUTURE </button>
                </div>

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
        $('#tipo').val(value);
        if(!$('#country').val()){
            e.preventDefault();
            alert("Please select Country");
        }
    }
</script>