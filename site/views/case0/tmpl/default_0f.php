<!--<ul class="breadcrumb">-->
<!--    <li><a href="index.php/wizard?view=case0&position=0a">Start wizard</a></li>-->
<!--    <li ><a href="index.php/wizard?view=case0&position=0b">Stakeholder type</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0c">User interest on HHCP</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0d">User Country</a></li>-->
<!--    <li><a href="index.php/wizard?view=case0&position=0e">Info sum-up and possible registration</a></li>-->
<!--    <li class="active"><a href="index.php/wizard?view=case0&position=0f">Personalized list of services</a></li>-->
<!---->
<!---->
<!--</ul>-->

<div class="row-fluid">

    <div class="span12 ">

        <h3>What  you’d like to do?
            Here are some suggestions on the base of your profile
        </h3>

        <br>

        <div id="div_country_report">
            <div class="moduletable module_country_overview">

                <?php

                if(count($this->sentences) == 0 )
                    echo "<h4>Sorry, you have not yet filled in your preferences</h4>";
                else {
                    foreach ($this->sentences as $sentence) {
                        ?>

                        <h4 class=""><?php echo '' .
                                $sentence['sentence2'] . ' ' .
                                $sentence['sentence3'] . ' ' .
                                $sentence['sentence4'] . ' ' .
                                $sentence['sentence5'] . ' ' .
                                $sentence['sentence6'];
                            ?>
                            <a class="pull-right" target="_blank"
                               href="index.php?option=com_content&view=article&id=1284&sentence_number=<?php echo $sentence['id']; ?>&stakeholder_type=<?php echo $this->sessione['stakeholder']; ?>&profile_country=<?php echo $this->sessione['country']; ?>&profile_hhcp=<?php echo $this->sessione['hhcp']; ?>">OPEN</a>
                        </h4>

                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div>
    <p>Otherwise you can<br></p>
    <ul>
        <li><a href="index.php?option=com_wizard&view=case1&position=1a"><strong>Make a free search on CARESS Framework</strong></a></li>
        <?php if($this->user_id > 0) { ?>
            <li><a href="index.php?option=com_wizard&view=case2"><strong>Integrate the CARESS Framework </strong></a></li>
        <?php } ?>

        <li><a href="index.php?option=com_wizard&view=case3"><strong>Create your own compensative module by using the CARESS VET design supporting tools</strong></a></li>
    </ul>

</div>


