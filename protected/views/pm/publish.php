<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery/validate_message.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/ckeditor/ckeditor.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/js/My97DatePicker/WdatePicker.js"></script>
 <script>
            $(function($) {
            	 CKEDITOR.replace( 'content', {
                	 language: 'zh-cn',
                	 image_previewText:' ',
                	 filebrowserUploadUrl: '<?php echo $this->createUrl('pm/ckupload');?>'
                });
            	 $("#publishForm").validate({
            			rules: {
            				email: {email: true},
            				title: "required"
            			}  
            	});
            	 
            });
            
           
            
</script>
<form method="post" id="publishForm" name="publishForm">
 <div class="main_all_right">
    <div class="main_all_right_img"></div>
      <div class="table_fabu">
      <h2>发布活动-填写信息</h2>
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:14px;">
  
      <tr>
       <td width="18%">活动中心：</td>
       <td width="82%"><input name="title" type="text" class="hdzx"></td>
      </tr>
      <tr>
       <td height="58">起止时间：</td>
       <td><input name="" type="text" onClick="WdatePicker()" class="qzsj">&nbsp;-&nbsp;
        <input name="" type="text" onClick="WdatePicker()" class="qzsj"></td>
     </tr>
     <tr>
      <td height="50" valign="top">参与要求：</td>
      <td><textarea name="demand" cols="" rows="" class="hdms">&nbsp;</textarea></td>
     
    </tr>
     <tr>
      <td height="61" valign="top">活动描述：</td>
      <td><textarea name="content" cols="" rows="" class="hdms">&nbsp;</textarea></td>
     
    </tr>
    <tr>
     <td height="60">人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数：</td>
     <td><input name="" id="" type="text" class="renshu"></td>
    </tr>
    <tr>
     <td>
                 邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</td>
     <td><input  id="email" name="email" type="text" class="youxiang"></td>
    </tr>
    <tr>
     <td height="54" valign="middle">状&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;态：</td>
     <td>
    	<p>
        <label>
          <input type="radio" name="RadioGroup1" value="单选" id="RadioGroup1_0" />有效</label>
        <label>
          <input type="radio" name="RadioGroup1" value="单选" id="RadioGroup1_1" />无效</label>
        <label>
          <input type="radio" name="RadioGroup1" value="单选" id="RadioGroup1_2" />工作室</label>
        <br />
      </p>
	</td>
   </tr>
    <tr>
    <td>发起人类型：</td>
    <td>
      <p>
        <label>
          <input type="radio" name="RadioGroup1" value="单选" id="RadioGroup1_0" />个人</label>
        <label>
          <input type="radio" name="RadioGroup1" value="单选" id="RadioGroup1_1" />团队</label>
        <label>
          <input type="radio" name="RadioGroup1" value="单选" id="RadioGroup1_2" />工作室</label>
        <br />
      </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr >
    <td colspan="2" align="center"><input type="submit" name="button" id="button" value="发布" class="hdfabu">
        <label style="display: none;">
          <input  type="radio" name="RadioGroup2" value="同意《服务协议》" id="RadioGroup2_0" /><a href="#">同意《服务协议》</a>
        </label>
    </td>
    </tr>
</table>

</div>
    </div>
  </form>