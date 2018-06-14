<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li ><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0c">User interest on HHCP</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0d">User Country</a></li>-->
<!--</ul>-->

<style>

    #mappa
    {
        width:80%;
        height:80%;
    }
</style>

<h1>Country view</h1>

<div class="row-fluid">

    <div class="span3 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>

    <div class="span9">
        <form method="get" action="<?php echo JURI::base(); ?>index.php/generate-country-report">
            <div class="form-group">
                <h4>In which Country do you work?</h4>

<!--                MAPPA-->
                <div id="mappa" class="italia"></div>
                <div id="log" class="hide"/></div>


            <select class="form-control " id="country_needs_country_group" name="country_needs_country_group" >
                <option value="">Select a Country</option>
                <?php
                foreach ($this->country as  $elem){
                    echo "<option value='".$elem['id']."'>".$elem['name']."</option>";
                }
                ?>
            </select>

            <h4>HHCP in a Country</h4>

            <select class="form-control" id="hhcp_in_a_country_by_hhcp" name="hhcp_in_a_country_by_hhcp" >


            </select>

            <input type="hidden"  name="country_overview_country_group" value="">
            <input type="hidden"  name="country_challenges_country_group" value="">
            <input type="hidden"  name="search" value="country_needs_country_list">
            <input type="hidden"  name="task" value="search">

            <br>
            <button type="submit" class="btn btn-primary" onclick="send(event)">Next</button>
    </div>
    </form>
</div>



</div>
<!--js per la mappa cliccabile-->
<script src="components/com_wizard/js/raphael-min.js"></script>
<script src="components/com_wizard/js/mappa.js"></script>
<!--fine js per la mappa cliccabile-->


<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">




    $( "#country_needs_country_group" ).change(function() {
        get_hhcp_in_a_country();
    });

    function get_hhcp_in_a_country() {


        field=$('#country_needs_country_group').val();

        $.post( "", { option:'com_wizard', task:'get_hhcp_in_a_country', id: field}, function(data) {
            console.log("1");
            var options = $("#hhcp_in_a_country_by_hhcp");
            console.log("2");
            options.empty();
            console.log("3");
            $.each(data, function() {
                console.log("4");
                options.append($("<option />").val(this.id).text(this.name));
            });
            options.effect('shake');

            $('#country_overview_country_group').val(field);
            $('#country_challenges_country_group').val(field);

        },'json');
    }

    function send(e){
//        e.preventDefault();

    }

</script>
