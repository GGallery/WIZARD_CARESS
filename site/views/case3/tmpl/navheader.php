<ul class="nav nav-tabs">
    <?php
    foreach ($this->paths as $key => $value) {

        $href='index.php?view=case3&c3p='.$key;

        echo ($key == $this->c3p)
            ? "<li class='active'><a href='$href'>$value</a></li>"
            : "<li ><a href='$href'>$value</a></li>";
    }
    ?>
</ul>
