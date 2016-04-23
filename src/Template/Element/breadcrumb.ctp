<ol class="breadcrumb">
    <li><a href="./"><i class="fa fa-home"></i></a></li>
    <?php 
        foreach ($breadcrumb as $key => $value) {
            echo '<li><a href="./' . $value['url'] . '">' . $value['label'] . '</a></li>';
        }
    ?>
    <button class="btn btn-default btn-xs back" type="submit"><?=__('back')?></button>                    
</ol>