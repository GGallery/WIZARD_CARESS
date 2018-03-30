<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li ><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0c">User interest on HHCP</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0d">User Country</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0e">Info sum-up and possible registration</a></li>-->
<!--</ul>-->

<h1>Info sum-up and possible registration</h1>

<div class="row-fluid">

    <div class="span8 ">
        <p class="textbody">
            So you represent a

            <?php
            foreach ($this->stakeholder as  $elem){
                if($elem['id'] == $this->sessione['stakeholder'])
                    echo "<strong>". $elem['name']." </strong>";
            }
            ?>

            in

            <?php
            foreach ($this->country as  $elem){
                if($elem['id'] == $this->sessione['country'])
                    echo "<strong>". $elem['name']." </strong>";
            }
            ?>

            and you’re interested in
            <?php
            foreach ($this->hhcp as  $elem){
                if($elem['id'] == $this->sessione['hhcp'])
                    echo "<strong>". $elem['name']." </strong>";
            }
            ?>

            <?php
            //            $hhcp = array_column($this->hhcp, 'name', 'id');
            //            echo "<strong>". implode("," , array_intersect_key($hhcp, array_flip($this->sessione['hhcp'] )))."</strong>";
            ?>

        </p>


        <p class="textbody">
            Do you want to <strong>register</strong> to CARESS system? It’s a quick and simple procedure which allows you to save the information provided and use them at the next access.
        </p>
        <div class="row-fluid">
            <div class="span6 center">
                <p>
                <form method="post" action="index.php">
                    <div class="form-group">
                        <input type="hidden"  name="option" value="com_wizard">
                        <input type="hidden"  name="view" value="case0">
                        <input type="hidden"  name="position" value="0e_reg_1">

                        <br>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>

<!--                <a href="index.php?option=com_wizard&view=case0&position=0e_reg_1"><button  type="button" class="btn btn-primary btn-lg">YES</button></a>-->
                </p>

            </div>

            <div class="span6 center">
                <p>
                <form method="post" action="index.php">
                    <div class="form-group">
                        <input type="hidden"  name="option" value="com_wizard">
                        <input type="hidden"  name="view" value="case0">
                        <input type="hidden"  name="position" value="0f">

                        <br>
                        <button type="submit" class="btn btn-primary">NO</button>
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