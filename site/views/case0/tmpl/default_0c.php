<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li ><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0c">User interest on HHCP</a></li>-->
<!--</ul>-->

<h1>User interest on HHCP</h1>

<div class="row-fluid">

    <div class="span6 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>

    <div class="span6">

        <h4>Are you interested in particular to one Home Health Care Practitioner (HHCP)?
        </h4>


        <p>
        <form method="post" action="index.php">
            <div class="form-group">
                <select class="form-control" id="hhcp" name="hhcp" >
                    <?php

                    foreach ($this->hhcp as  $elem){
                        echo "<option value='".$elem['id']."'>".$elem['name']."</option>";
                    }
                    ?>
                </select>


                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case0">
                <input type="hidden"  name="position" value="0d">
<br>
                
                <button type="submit" class="btn btn-primary" onclick="send(event)">Next</button>
            </div>
        </form>
    </div>



</div>
