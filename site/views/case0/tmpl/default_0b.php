<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--</ul>-->

<h1>Stakeholder type</h1>

<div class="row-fluid">

    <div class="span6">

        <h4>Who are you? </h4>
        <p>Please select from the menu the type of user that better represents you</p>

        <p>
        <form method="post" action="index.php">
            <div class="form-group">
                <select class="form-control" name="stakeholder">
                    <?php
//                    if($this->sessione['reg_type'] == 'individual') {
                        ?>
                        <option value="1081">I work for a Professional Association/Union of employees</option>
                        <option value="1082">I work for a Union of employers</option>
                        <option value="1083">I work for a sector research institution</option>
                        <option value="1084">I work for a public VET authority</option>
                        <option value="1085">I work for a VET accreditation, certification qualification body</option>
                        <option value="1086">I work for a public social and health care authority</option>
                        <option value="1087">I work for an higher education institution</option>
                        <option value="1088">I’m a student </option>
                        <option value="1089">I’m a trainer working for a VET institute/educational center </option>
                        <option value="1090">I’m a trainer working for an enterprise </option>
                        <option value="1091">I work for a student association</option>
                        <option value="1092">I work for an older adults and/or families association</option>
                        <option value="1093">I’m a home social or health care free-lance practitioner</option>
<!--                        <option value="1094">I’m a student</option>-->
                        <option value="1095">I work for a social homecare provider</option>
                        <option value="1096">I work for a health-homecare provider</option>
                    <?php
//}
//                    if($this->sessione['reg_type'] == 'organization') {
//                        ?>
<!--                        <option value="1081">Professional Association/Union of employees</option>-->
<!--                        <option value="1082">Union of employers</option>-->
<!--                        <option value="1083">Sector research institution</option>-->
<!--                        <option value="1084">public VET authority</option>-->
<!--                        <option value="1085">VET accreditation, certification qualification body</option>-->
<!--                        <option value="1086">Public social and health care authority</option>-->
<!--                        <option value="1087">Higher education institution</option>-->
<!--                        <option value="1088">school</option>-->
<!--                        <option value="1089">VET institute/educational center</option>-->
<!--                        <option value="1090">Enterprise</option>-->
<!--                        <option value="1091">students associations</option>-->
<!--                        <option value="1092">older adults and families association</option>-->
<!--<!--                        <option value="1093">individual home social and healthcare practitioner</option>-->-->
<!--<!--                        <option value="1094">student</option>-->-->
<!--                        <option value="1095">social homecare provider</option>-->
<!--                        <option value="1096">health homecare provider</option>-->
<!--                    --><?php //} ?>



<!--                    <option value="1081">Professional Association/Union of employees</option>-->
<!--                    <option value="1082">Professional Association/Union of employers</option>-->
<!--                    <option value="1083">Sector research institution</option>-->
<!--                    <option value="1084">public VET authority</option>-->
<!--                    <option value="1085">VET accreditation, certification qualification body</option>-->
<!--                    <option value="1086">public social and health care authority</option>-->
<!--                    <option value="1087">Higher education institution</option>-->
<!--                    <option value="1088">school</option>-->
<!--                    <option value="1089">VET institute/educational center and inter-company training center; network of vocational education institutes/schools</option>-->
<!--                    <option value="1090">enterprise, including healthcare providers, with an own training department</option>-->
<!--                    <option value="1091">students associations</option>-->
<!--                    <option value="1092">older adults and families association</option>-->
<!--                    <option value="1093">individual home social and healthcare practitioner</option>-->
<!--                    <option value="1094">student</option>-->
<!--                    <option value="1095">social homecare provider</option>-->
<!--                    <option value="1096">health homecare provider</option>-->


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