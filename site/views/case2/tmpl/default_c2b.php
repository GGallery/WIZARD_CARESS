<h1>(2C_B)</h1>
<form method="get" action="<?php echo JURI::base(); ?>index.php">
    <div class="row-fluid">
        <div class="span9 center intro2">
            <div class="wizardbkg">
                <h1>To INTEGRATE THE PROVIDED DESCRIPTIONS </h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="country_needs_country_group" value="<?php echo $this->hhcp; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="list">
                    <input type="hidden"  name="task" value="search">
                    <input type="hidden"  name="cck" value="country_needs">
                    <input type="hidden"  name="search" value="country_needs_search">
                    <button type="submit" class="btn">click here</button>
                </form>
            </div>

            <div class="wizardbkg">
                <h1>To ADD AN COUNTRY NEEDS</h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="country_id" value="<?php echo $this->country; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="form">
                    <input type="hidden"  name="layout" value="edit">
                    <input type="hidden"  name="type" value="country_needs">
                    <button type="submit" class="btn" >click here</button>
                </form>
            </div>
        </div>

        <div class="span3 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="200" />
        </div>
    </div>

</form>