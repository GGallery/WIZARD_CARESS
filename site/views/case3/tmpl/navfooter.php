<?php
$curr =  array_search($this->c3p, array_keys($this->paths));
$pre = $this->pathsnav[$curr-1];
$next = $this->pathsnav[$curr+1];

echo "<ul class='pager'>";

    if($this->c3p != 's0')
    echo "<li><a href='index.php?view=case3&c3p=$pre'>Previous</a></li>";

    if($this->c3p != 's3c')
    echo "<li><a href='index.php?view=case3&c3p=$next'>Next</a></li>";

    echo "</ul>";


