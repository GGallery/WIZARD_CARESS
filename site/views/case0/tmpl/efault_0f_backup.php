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

<h1>Personalized list of services</h1>

<div class="row">


    <div class="span12 ">

        <h4>What  you’d like to do?
            Here are some suggestions on the base of your profile
        </h4>

        <div class="panel-group">
            <?php
            foreach ($this->sentences as $sentence){
                ?>


                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title"><?php echo '<strong>'.$sentence['sentence1'] .'</strong>  '.
                                $sentence['sentence2'] .' '.
                                $sentence['sentence3'] .' '.
                                $sentence['sentence4'] .' '.
                                $sentence['sentence5'] .' '.
                                $sentence['sentence6'];
                            ?>
                            <a class="pull-right" data-toggle="collapse" href="#<?php echo $sentence['sentence1']; ?>"><button  type="button" class="btn btn-warning btn-lg">Show/Hide</button></a>
                        </h4>
                    </div>
                    <div id="<?php echo $sentence['sentence1']; ?>" class="panel-collapse collapse">

                        <div class="panel-body">
                            <?php
                            foreach ($sentence['objects'] as $key => $object){?>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo $key;  ?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul>
                                            <?php

                                            foreach ($object as $e_key => $elem){
                                                ?>
                                                <li><a target="_blank" href="<?php echo JRoute::_(JURI::base().'index.php?option=com_content&view=article&id=' . $elem['id'])  ?>"><?php echo $elem['name']; ?></a></li> <br>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>


                                <?php
                            }
                            ?>

                        </div>



                        <div class="panel-footer">
                            <small><?php echo $sentence['query1']; ?></small>
                        </div>

                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    </div>

    <!--    <div class="span3 center topspacing" >-->
    <!--        <img src="components/com_wizard/images/gufo.png" width="150" />-->
    <!--    </div>-->
</div>

<div>
    <p>Otherwise you can<br></p>
    <ul>
    <li>Make a free search on CARESS System  CASE1 free search</li>
    <li>Integrate the CARESS system with your own experience and information  CASE2</li>
    <li>Go to the CARESS VET Design System to create your own learning module  CASE3</li>
    </ul>
    If you want to get a view on what you can find in the CARESS System and what you’d be able to do with it take a look at this video (to be produced at the end of the project)


</div>


