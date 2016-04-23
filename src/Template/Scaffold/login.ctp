<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ZenCMS后台管理系统</title>
        <?= $this->Html->meta('icon') ?>
        <?php
            echo $this->Html->css(['main.css', 'login']);
        ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <div class="container">
        <div class="row">                        
            <div class="account-container stacked">
                <div class="content clearfix">
                    <form method="post" action="/zen/users/login" role="form" accept-charset="utf-8" >
                        <h1><?=__('Sign in')?></h1>
                        <div class="login-fields">
                            <p><?= $this->Flash->render('auth') ?><?=__('Background Management System')?></p>
                            <div class="field">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control input-lg username-field" placeholder="Username" value="" name="username" id="username">
                            </div>
                            <div class="field">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control input-lg password-field" placeholder="Password" value="" name="password" id="password">
                            </div>
                        </div>
                        <div class="login-actions">
                            <span class="login-checkbox">
                                <input type="checkbox" tabindex="4" value="1" class="field login-checkbox" name="remember_me" id="remember_me">
                                <label for="remember_me" class="choice"> <?= __('Remember me')?></label>
                            </span>
                            <button class="login-action btn btn-default" type="submit"><?= __('Sign in')?></button>
                        </div>
                    </form>
                </div> <!-- /content -->
            </div> <!-- /account-container -->
        </div>
        <div class="login-extra">
            Powered by <a href="">ZenCMS</a>
        </div> 
    </div><!-- /container -->
  </body>
</html>