<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--</ul>-->

<h1>Stakeholder type</h1>

<div class="row-fluid">

    <div class="span6">

        <h4>Who are you? </h4>
        <p>Please select from the menu the type of user that better represents yout</p>

        <p>
        <form method="post" action="index.php">
            <div class="form-group">
                <select class="form-control" name="stakeholder">
                    <?php
                    DEBUGG::log($this->stakeholder, 'stakeholder');

                    foreach ($this->stakeholder as  $elem){
                        echo "<option value='".$elem['id']."'>".$elem['name']."</option>";
                    }
                    ?>
                </select>


                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case0">
                <input type="hidden"  name="position" value="0c">

                <br>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>

    <div class="span6 center" >
        <img src="components/com_wizard/images/gufo.png" width="200" />
    </div>

</div>