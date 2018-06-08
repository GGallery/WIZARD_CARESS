<h1>Registration</h1>

<div class="row-fluid">

    <div class="span4 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>

    <div class="span8">

        <h4>Please provide a short description of the organization activities</h4>

        <form id="form" method="post" action="index.php">
            <div class="">


                <textarea name="info" id="info" rows="10">
                    Please provide the following information:
                    Organization Name
                    Address
                    Website
                    Contact person:
                    Title
                    Name
                    Surname

                </textarea>

                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case0">
                <input type="hidden"  name="position" value="0e_reg_5">

                <br>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>