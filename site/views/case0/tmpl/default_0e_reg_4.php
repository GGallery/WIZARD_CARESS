<h1>Registration</h1>

<div class="row-fluid">

    <div class="span4 center topspacing" >
        <img src="components/com_wizard/images/gufo.png" width="150" />
    </div>

    <div class="span8">



        <form id="form" method="post" action="index.php">
            <div class="">

                <?php if($this->sessione['reg_type'] == 'individual') { ?>

                    <h4>Please provide a short CV that describe your activities in the sector. It sill be published on the website</h4>

                    <input type="text"  name="name" id="name" value="" placeholder="Name and Surname">


                    <textarea name="info" id="info" rows="10">
Address
Website
Title
                </textarea>

                    <?php
                } else { ?>
                    <h4>Please provide a short description of the organization activities</h4>
                    <input type="text"  name="name" id="name" value="" placeholder="Organization name">

                    <textarea name="info" id="info" rows="10">
Address
Website
Contact person:
Title
Name
Surname
                </textarea>
                <?php } ?>

                <input type="hidden"  name="option" value="com_wizard">
                <input type="hidden"  name="view" value="case0">
                <input type="hidden"  name="position" value="0e_reg_5">

                <br>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</div>