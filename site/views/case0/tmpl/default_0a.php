<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li ><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0c">User interest on HHCP</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0d">User Country</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0e">Info sum-up and possible registration</a></li>-->
<!--</ul>-->

<h1>CARESS FRAMEWORK REGISTRATION</h1>

<div class="row-fluid">

    <div class="span8 center ">

        <p class="textbody">
            The registration to the CARESS system is a quick and simple procedure which allows you to save the information provided  for the next access.
            We will ask you few data in order to simplify the access, please have a read to our privacy policy first.
        </p>

        <p>
        <form method="post" action="index.php">


            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I have read and accept the  <a href="index.php/privacy-policy">data privacy policy</a></label>
            </div>


            <div class="form-group">
                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case0">
                <input type="hidden"  name="position" value="0b">

                <br>
                <button type="submit" class="btn btn-primary">Proceed with registration</button>
            </div>
        </form>

        <!--                <a href="index.php?option=com_wizard&view=case0&position=0e_reg_1"><button  type="button" class="btn btn-primary btn-lg">YES</button></a>-->
        </p>

    </div>

    <!--            <div class="span6 center">-->
    <!--                <p>-->
    <!--                <form method="post" action="index.php">-->
    <!--                    <div class="form-group">-->
    <!--                        <input type="hidden"  name="option" value="com_wizard">-->
    <!--                        <input type="hidden"  name="view" value="case0">-->
    <!--                        <input type="hidden"  name="position" value="0f">-->
    <!---->
    <!--                        <br>-->
    <!--                        <button type="submit" class="btn btn-primary">NO</button>-->
    <!--                    </div>-->
    <!--                </form>-->
    <!---->
    <!---->
    <!--                <!--                <a href="index.php?option=com_wizard&view=case0&position=0f"><button  type="button" class="btn btn-primary btn-lg">NO</button></a>-->
    <!--                </p>-->
    <!--            </div>-->



    <div class="span4 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>
</div>
