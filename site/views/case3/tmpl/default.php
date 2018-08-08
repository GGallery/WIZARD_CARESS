<?php
dirname(__FILE__); //Current working directory
dirname(dirname(__FILE__)); //Get path to current working directory

include ('languageswitcher.php');

include ('navheader.php');

include ($this->path);

include ('navfooter.php');
