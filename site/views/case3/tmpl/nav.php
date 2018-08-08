<ul class="nav nav-tabs">
    <?php
    foreach ($this->paths as $key => $value) {

        $href='index.php?view=case3&c3p='.$key;

        echo ($key == $this->c3p)
            ? "<li class='active'><a href='$href'>$key</a></li>"
            : "<li ><a href='$href'>$key</a></li>";
    }
    ?>
</ul>

<?php
//
//$tmp =  array_search($this->c3p, array_keys($this->paths));
//
////echo $tmp;
////
////print_r($this->paths[$this->c3p]);
////
////print_r(next($this->paths));
////
////print_r(current($this->paths[$this->c3p]));
////
//
//
//foreach ($this->pathsk as $item) {
//
//    $href='index.php?view=case3&c3p='.$key;
//
//    if($item === $this->c3p) {
////        print_r(prev($this->paths));
//
////        echo "-->".$item."--".$this->c3p."<--";
//
//        print_r(prev($this->pathsk));
//    }
//
//}
//
//?>
<!---->
<!---->
<!--<ul class="pager">-->
<!--    <li><a href="#">Previous</a></li>-->
<!--    <li><a href="#">Next</a></li>-->
<!--</ul>-->