<?php
$this->breadcrumbs=array(
	'Manage'=>array('index'),
);?>
<h1> 管理数据库备份文件</h1>

<?php $this->renderPartial('_list', array(
		'dataProvider'=>$dataProvider,
));
?>
