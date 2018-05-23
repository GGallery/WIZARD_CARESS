<div class="row">
    <table class="table table-striped">
        <?php
        foreach ($this->supporting as $item) {
            echo '<td><img src="'.$item->image.'"></td>';
            echo '<td>'.$item->name.'</td>';
        }
        ?>
    </table>
</div>