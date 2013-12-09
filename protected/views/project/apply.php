<link href="<?php echo Yii::app()->baseUrl; ?>/css/file.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery/validate_message.js"></script>
<script>
            $(function($) {
               $("#applyForm").validate({
                  rules: {
                    email: "required email",
                    name: "required",                    
                    telphone: "required number",
                    describe: "required"
                  }  
              });
               
            });
            
           
            
</script>
  <div class="main_all_right">
    <div class="main_all_right_img"></div>
      <div class="table_fabu">
      <h2>参加活动-填写信息</h2>
     <table width="540" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:14px;">
      <form action="" method="post" id="applyForm" enctype="multipart/form-data">
        <input type="hidden" name="projectid" value="<?php echo $project_id?>"/>
    <tr>
     <td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
     <td><input name="name" type="text" class="xueyuan"></td>
    </tr>
    <tr>
     <td>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</td>
     <td><input name="telphone" type="text" class="xueyuan"></td>
    </tr>
    <tr>
     <td>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</td>
     <td><input name="email" type="text" class="xueyuan"></td>
    </tr>
    <tr>
      <td height="61" valign="top">自我描述：</td>
      <td><textarea name="describe" cols="" rows="" class="zwms">&nbsp;</textarea></td>
    </tr>
    <tr>
     <td>附&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;件：</td>
     <td><input nane="userfile" class="fujian"  type="file">
     
     </td>
    </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="发布" class="hdfabu">
    </td>
  </tr>

  </form>
</table>

</div>
    </div>