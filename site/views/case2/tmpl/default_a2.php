<div class="wizardbkg">
<h1>Country Needs</h1>

<div class="row-fluid">

    <div class="span3 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="200" />
    </div>

    <div class="span9">
        <form method="get" action="<?php echo JURI::base(); ?>index.php">

            <h4>Chose country</h4>




            <select class="form-control " id="country_needs_country_group" name="country_needs_country_group" >
                <option value="">Select a Country</option>
                <?php
                foreach ($this->country as  $elem){
                    echo "<option value='".$elem['id']."'>".$elem['name']."</option>";
                }
                ?>
            </select>

            <br>
            <button type="submit" class="btn btn-primary" onclick="send(event)">Go</button>




            <input type="hidden"  name="option" value="com_cck">
            <input type="hidden"  name="view" value="list">
            <input type="hidden"  name="task" value="search">
            <input type="hidden"  name="cck" value="country_overview">

            <input type="hidden"  name="country_overview_country_group" value="">

            
            <input type="hidden"  name="search" value="country_needs">
 
        </form>

    </div>
</div>
</div>