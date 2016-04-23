<?php
$cakeDescription = 'ZenCMS';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php
        echo $this->Html->css('bootstrap.css');
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="container">
        <!-- 导航 -->
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">About</a></li>
                    <li role="presentation"><a href="#">Contact</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">Project name</h3>
        </div>

        <!-- 主内容 -->
    
        <?= $this->fetch('content') ?>
    
        <!-- 底部 -->
        <footer class="footer">
            <p>&copy; 2015 Company, Inc.</p>
        </footer>
    </div>
</body>
</html>
