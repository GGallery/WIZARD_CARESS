<h1>(2DA)</h1>
<form method="get" action="<?php echo JURI::base(); ?>index.php">
    <div class="row-fluid">
        <div class="span9 center intro2">
            <div class="wizardbkg">
                <h1>To INTEGRATE THE PROVIDED DESCRIPTIONS </h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="hhcp_needs_by_hhcp" value="<?php echo $this->hhcp; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="list">
                    <input type="hidden"  name="task" value="search">
                    <input type="hidden"  name="cck" value="hhcp_needs">
                    <input type="hidden"  name="search" value="hhcp_needs_search">
                    <button type="submit" class="btn">click here</button>
                </form>
            </div>


            <div class="wizardbkg">
                <h1>To ADD A NEEDS</h1>
                <form method="get" action="<?php echo JURI::base(); ?>index.php">
                    <input type="hidden"  name="hhcp_needs_by_hhcp" value="<?php echo $this->hhcp; ?>">
                    <input type="hidden"  name="option" value="com_cck">
                    <input type="hidden"  name="view" value="form">
                    <input type="hidden"  name="layout" value="edit">
                    <input type="hidden"  name="type" value="hhcp_needs">
                    <button type="submit" class="btn" >click here</button>
                </form>

            </div>

        </div>

        <div class="span3 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="200" />
        </div>
    </div>

</form>


<!--<input id="hhcp_in_a_country_by_hhcp" type="hidden2" value="">-->
<!--<input type="hidden"  name="search" value="hhcp_report_search">-->
<!--<input type="hidden"  name="task" value="search">-->