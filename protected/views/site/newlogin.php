<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-3.0.2/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-3.0.2/bootstrap-responsive.min.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap-3.0.2/bootstrap.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
     

    </style>
  
  </head>

  <body>
    <div class="container">

      <form  method="post" class="form-signin">
        <h3 class="form-signin-heading">会员登录</h3>
        <div class="input-group">
          <span class="input-group-addon">用户名</span>
          <input type="text" name="username" class="form-control" placeholder="用户名">
        </div>
        <div class="input-group">
          <span class="input-group-addon">密　码</span>
          <input type="password" name="password" class="form-control" placeholder="密码">
        </div>
        
        <div style="height:10px;"></div>
        <button class="btn btn-large btn-primary" type="submit">登录</button>
      </form>

    </div> 
  </body>
</html>
