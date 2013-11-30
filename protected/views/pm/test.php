<script src="<?php echo Yii::app()->baseUrl?>/js/ckeditor/ckeditor.js" type="text/javascript"></script>

<form method="post">
        <p>
            	详情:<br>
            <textarea name="content"></textarea>
            <script>
            $(function($) {
            	 CKEDITOR.replace( 'content', {
                	 language: 'zh-cn',
                	 image_previewText:' ',
                	 filebrowserUploadUrl: '<?php echo $this->createUrl('pm/ckupload');?>'
                });
            });
           
            
            </script>
        </p>
        <p>
            <input type="submit">
        </p>
</form>

