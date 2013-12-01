<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>重庆大学创新创业工作坊（首页）</title>
<link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" rel="stylesheet" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/file.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/artDialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/artDialog/iframeTools.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/home.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/login.js"></script>
</head>
<body>
 <!----head开始------>
  <div class="head">
   <div class="head_info">
    <div class="logo"><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/logo.jpg" width="384" height="53" /></a></div>
    <ul class="head_list">
      <li><a href="<?php echo Yii::app()->homeUrl; ?>">网站首页</a></li>
      <li><a href="<?php echo $this->createUrl('/project'); ?>">项目活动</a></li>
      <li><a href="#">工作室展示</a></li>
      <li><a href="#">新闻动态</a></li>
      <li><a href="#">联系我们</a></li>
    </ul>
 	<ul class="head_login">
 		<?php if(!Yii::app()->user->isGuest){?>
         <li>
         	<a class="menber_name" href="#"><?php echo Yii::app()->user->getName()?></a> |
          	<div class="subnav">
	            <div class="subnav-inner">
	              <ul>
	                <li class=""><a href="#">会员中心</a></li>
	                <li class=""><a href="#">帐号设置</a></li>
	                <li class=""><a href="#" onclick="logout('<?php echo Yii::app()->homeUrl?>');">退出</a></li>
	              </ul>
	            </div>
            </div>
        </li>
        <li><a href="#">消息<span>(2)</span></a> |</li>
        <?php }else{?>
          <li><a href="javascript:void(0);" onclick="login('<?php echo Yii::app()->homeUrl?>');">登录</a> |</li>
    	  <li><a href="#">注册</a> </li>
    	<?php }?>
        <li><a href="#">网站首页</a></li>
     </ul>
   </div>
  </div>
 <!-----head结束----->
 <?php echo $content; ?>
 <!-- foot -->
 <div class="pub_clear"></div>
 <div class="link">
 <div class="link_all">
  <ul>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
   <li><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/link_01.jpg" /></a></li>
  </ul>
 </div>
</div>
 <div class="bottom">
 <div class="bottom_all">
  <ul class="nave">
   <li><a href="#">网站首页</a></li>
   <li>|</li>
   <li><a href="#">项目活动</a></li>
   <li>|</li>
   <li><a href="#">工作室展示</a></li>
   <li>|</li>
   <li><a href="#">新闻资讯</a></li>
   <li>|</li>
   <li><a href="#">联系我们</a></li>
  </ul>
  <div class="banquan">
   <p>重庆大学创新创业工作坊 版权所有2013  地址：重庆市沙坪坝区沙正街174号  邮编400044</p>
   <p>（C）Copyright Chongqing Univeersity All Rights Reserved.</p>
  </div>  
 </div>
 
</div>
</body>
</html>