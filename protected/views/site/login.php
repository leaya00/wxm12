<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" />
<title>登录</title>
</head>
<body>
<form method="post">
<div class="mlogin">
          <h2><span>会员登录</span>如果您还没有帐户，请先注册。</h2>
          <ul class="biaodan" id="formbox">
            <li class="m_name">
              <input type="text" id="" value="" name="username" tabindex="1"/>
            </li>
            <li class="m_pass">
              <input type="password" id="" name="password" tabindex="2"/>
            </li>
            <li class="error_tips"> 
				<span class="clear"></span>
              <label id="pwd_error" >用户名或者密码错误！</label>
            </li>
            <li class="m_login">
              <input type="submit" value="" class="login_btn" tabindex="3">
            </li>
            <li class="m_zhuce_foget"> <a class="clike_zhuc" href="#">新会员注册</a><a href="#">忘记密码？</a> </li>
          </ul>
          <dl class="m_shuomin">
            <dt>使用说明：</dt>
            <dd>点击"新会员注册"按钮，填写详细资料，即成功注册成为会员。</dd>
          </dl>
        </div>
</form>
</body>
</html>
