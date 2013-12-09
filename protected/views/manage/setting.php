<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/tab.js"></script>
<div class="main_members">
  <div class="members_all">
   <div class="members_top">
    <div class="members_top_all">
     <div class="zhaopian"><img src="<?php echo Yii::app()->baseUrl?>/images/touxiang_pic.jpg" width="123" height="123" /></div>
     <div class="top_all_ziliao">
     <a href="#"><img src="<?php echo Yii::app()->baseUrl?>/images/bjzi_pic.jpg" width="86" height="26" /></a>
     <h2>工作室名称</h2>
     <ul>
      <li>收到的报名:<samp><a href="#">5</a></samp></li>
      <li>发布的项目:<samp><a href="#">6</a></samp></li>
     </ul>
     </div>
    </div>
   </div>
 <div id="Tab2">
       <div class="Menubox">
        <ul>
         <li id="two1" onmouseover="setTab('two',1,2)"  class="hover">账户信息</li>
         <li id="two2" onmouseover="setTab('two',2,2)" >修改密码</li>
       </ul>
      </div>
   <div class="Contentbox">
    <div id="con_two_1" >
    <div class="members_fabu">
    <div class="members_fabu_top">
    <img src="<?php echo Yii::app()->baseUrl?>/images/yifabu.jpg" width="3" height="24"/>
    <h2>基础信息</h2>
    </div>
     <ul class="members_jcxx">
      <li>姓名：<span>小小小</span></li>
      <li>性别：<span>男</span></li>
      <li>生日：<span>1990年5月14日</span></li>
     </ul>
    <div class="members_jcxx_h2"></div>
    </div>
   <div>
   <div class="members_zjyxx">
    <div class="members_zjyxx01">
     <div class="members_zjyxx01_top">
      <img src="<?php echo Yii::app()->baseUrl?>/images/yifabu.jpg" width="3" height="24"/>
      <h2>基础信息</h2>
     </div>
  <table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
   <form action="" method="get">
    <tr>
     <td>电子邮件：</td>
     <td><input name="" type="text" class="zhanghao"></td>
    </tr>
    <tr>
     <td>电话号码：</td>
     <td><input name="" type="text" class="zhanghao"></td>
    </tr>
    <tr>
     <td>Q&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q：</td>
     <td><input name="" type="text" class="zhanghao"></td>
    </tr>
    <tr>
     <td>地&nbsp;&nbsp;&nbsp;&nbsp;址：</td>
     <td><input name="" type="text" class="zhanghao"></td>
    </tr>
    <tr>
     <td></td>
     <td colspan="2" align="center"><input type="submit" name="button" id="button" value="确定" class="queding"></td>
    </tr>
  </form>
 </table>
  </div>
    <div class="members_zjyxx02">
     <div class="members_zjyxx02_top">
      <img src="<?php echo Yii::app()->baseUrl?>/images/yifabu.jpg" width="3" height="24"/>
      <h2>修改头像</h2>
     </div>
     <ul class="members_zjyxx_sc">
     	<li class="zjyxx_dtp">
        <img src="<?php echo Yii::app()->baseUrl?>/images/tppic_01.jpg" width="125" height="125" />
        <h2>125*125</h2>
        </li>
        <li class="zjyxx_xtp">
        <img src="<?php echo Yii::app()->baseUrl?>/images/tppic_02.jpg" width="60" height="60" />
        <h2>60*60</h2>
        </li>
        <li class="zjyxx_sctp">
         <tr>
          <td><input nane="userfile" class="fujian"  type="file" style="padding-top: 5px;"> 
          <input type="submit" VALUE=" 上传" class="shangchuan" >
          </td>
         </tr>
         <p>支持jpg/gif/png格式，可以观察60*60，125*125px</p>
        </li>
     </ul>
    </div>
    
  </div>
</div>
</div>
  <div id="con_two_2" style="display:none">
   <div class="members_fabu">
    <div class="members_fabu_top">
    <img src="<?php echo Yii::app()->baseUrl?>/images/yifabu.jpg" width="3" height="24"/>
    <h2>修改新密码</h2>
    </div>
    <table width="350" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:14px;">
      <form action="" method="get">
    <tr>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;帐号：</td>
     <td><input name="" type="text" class="zhanghao"></td>
    </tr>
    <tr>
     <td>&nbsp;&nbsp;&nbsp;&nbsp;密码：</td>
     <td><input name="" type="password" class="mima"></td>
    </tr>
    <tr>
     <td>&nbsp;&nbsp;新密码：</td>
     <td><input name="" type="password" class="mima"></td>
    </tr>
    <tr>
     <td>确认密码：</td>
     <td><input name="" type="password" class="mima"></td>
    </tr>
    <tr>
     <td></td>
     <td colspan="2" align="center"><input type="submit" name="button" id="button" value="确定" class="queding"></td>
    </tr>
   </form>
  </table>
   </div>
  </div>
      
</div>
</div>

</div>