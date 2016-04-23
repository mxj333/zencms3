
<nav class="sidebar-nav">
    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
        <div class="list-group">
            <?php 
            	//echo $controllerName;
            	foreach ($ZEN_MEUN[$bannerActive]['sub'] as $key => $left) {
            	//pr($left);
            ?>
            <a class="list-group-item <?php if(strtolower($controllerName) == strtolower($left['name'])) echo 'disabled'; ?>" href="/zen/<?php echo $left['name'];?>"><i class="<?php echo $left['icon'];?>"></i>&nbsp;<?php echo $left['label'];?></a>
            <?php } ?>
        </div>
    </div>
</nav>