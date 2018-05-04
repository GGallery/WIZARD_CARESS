<h1>Info sum-up and possible registration</h1>

<div class="row-fluid">

    <div class="span8 ">
        <p class="textbody">
            Please provide me some information about you and your interest in CARESS Framework in order to allows me to better support you.
            Please click on the button that better represent you

        </p>
        <div class="row-fluid">
            <div class="span6 center">
                <p>
                <form method="post" action="index.php">
                    <div class="form-group">
                        <input type="hidden"  name="reg_type" value="individual">
                        <input type="hidden"  name="option" value="com_wizard">
                        <input type="hidden"  name="view" value="case0">
                        <input type="hidden"  name="position" value="0e_reg_1">

                        <br>
                        <button type="submit" class="btn btn-primary">Are you an individual?</button>
                    </div>
                </form>

                <!--                <a href="index.php?option=com_wizard&view=case0&position=0e_reg_1"><button  type="button" class="btn btn-primary btn-lg">YES</button></a>-->
                </p>

            </div>

            <div class="span6 center">
                <p>
                <form method="post" action="index.php">
                    <div class="form-group">
                        <input type="hidden"  name="reg_type" value="organization">
                        <input type="hidden"  name="option" value="com_wizard">
                        <input type="hidden"  name="view" value="case0">
                        <input type="hidden"  name="position" value="0e_reg_1">

                        <br>
                        <button type="submit" class="btn btn-primary">Do you represent an organization?</button>
                    </div>
                </form>


                <!--                <a href="index.php?option=com_wizard&view=case0&position=0f"><button  type="button" class="btn btn-primary btn-lg">NO</button></a>-->
                </p>
            </div>
        </div>
    </div>
    <div class="row-fluid">

        <div class="span4 center topspacing" >
            <img src="components/com_wizard/images/gufo.png" width="150" />
        </div>

    </div>

