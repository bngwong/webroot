<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="麻将" />
	<meta name="author" content="" />
	<meta name="renderer" content="webkit">	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> 登录 - 正式运营分析后台 </title>

	<link rel="stylesheet" href="<?php echo (CSS_PATH); ?>bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo (CSS_PATH); ?>metisMenu.min.css" />
    <link href="<?php echo (CSS_PATH); ?>dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo (CSS_PATH); ?>dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo (CSS_PATH); ?>sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo (CSS_PATH); ?>css/font-awesome.min.css" rel="stylesheet">


    <script src="<?php echo (JS_PATH); ?>jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo (JS_PATH); ?>bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo (JS_PATH); ?>metisMenu.min.js" type="text/javascript"></script>
    <script src="<?php echo (JS_PATH); ?>jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo (JS_PATH); ?>dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo (JS_PATH); ?>sb-admin-2.js" type="text/javascript"></script>

		
	</head>
<body>
		
	            <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">正式运营分析后台</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="">
                                <fieldset>
                                                                        <div class="form-group">
                                        <input class="form-control" placeholder="账号" name="username" type="text" id="username">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="密码" name="userpwd" type="password" id="userpwd" >
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" class="btn btn-lg btn-success btn-block">登录</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
		
</body>
</html>