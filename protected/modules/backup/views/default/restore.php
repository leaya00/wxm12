<?php
$this->breadcrumbs=array(
	'Backup'=>array('backup'),
	'Restore',
);?>
<h1><?php echo  $this->action->id; ?></h1>

<p>
	<?php if(isset($error)) echo $error; else echo '恢复成功';?>
</p>
<p> <?php echo CHtml::link('回首页',Yii::app()->HomeUrl)?></p>
