<ul class="nav nav-pills nav-pills-sm pull-right">
    <?php
    foreach ($this->languages as $key => $value) {

        $href='index.php?view=case3&c3p='.$this->c3p.'&language='.$key;

        echo ($key == $this->language)
            ? "<li class='active'><a href='$href'>$key</a></li>"
            : "<li ><a href='$href'>$key</a></li>";
    }
    ?>
</ul>
<div class="clearfix"></div>
