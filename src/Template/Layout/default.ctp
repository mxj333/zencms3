<!DOCTYPE html>
<html lang="<?= \Locale::getPrimaryLanguage(\Cake\I18n\I18n::locale()) ?>">
<head>
    <?= $this->Html->charset(); ?>
    <title><?= $this->get('title');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= $this->Html->meta('icon'); ?>
    <?= $this->fetch('meta'); ?>
    <?= $this->fetch('css'); ?>
    <?= $this->fetch('headjs'); ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">ZenCMS后台管理系统<?php  $brand ?></a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php foreach ($ZEN_MEUN as $key => $meun) {?>
                        <li <?php if($meun['id'] == $bannerActive) echo ' class="active"';?> ><a href="/zen/<?php echo !empty($meun['name']) ? $meun['name'] : 'javascript:void(0);';?>"><i class="<?php echo $meun['icon'];?>"></i>&nbsp; <?php echo $meun['label'];?></a></li>
                    <?php } ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; Admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                            <li><a href="/"><i class="glyphicon glyphicon-plus"></i> Account</a></li>
                            <li><a href="/"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                            <li><a href="/"><i class="glyphicon glyphicon-comment"></i> Notifications</a></li>

                            <li><a href="#"><i class="fa fa-pencil-square-o"></i>&nbsp; 用户资料</a></li>
                            <li><a href="#"><i class="fa fa-paw"></i>&nbsp; 修改密码</a></li>
                            <li class="divider"></li>
                            <li><a href="/zen/users/logout"><i class="fa fa-stop-circle-o"></i>&nbsp; 退出系统</a></li>
                        </ul>
                    </li>
                </ul>      
            </div>

        </div>
    </nav>
    <?= $this->element('sidebar'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-lg-10">
                <?php //$this->element('breadcrumb'); ?>
                <?= $this->Flash->render(); ?>
                <?= $this->fetch('content'); ?>
                <?= $this->fetch('action_link_forms'); ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">ZenCMS.CN</p>
        </div>
    </footer>
    
    <?= $this->fetch('script'); ?>
</body>
</html>
