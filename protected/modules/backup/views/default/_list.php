<table>
  <tr>
    <th>文件名称</th>
    <th>文件大小</th>
    <th>创建时间</th>
    <th>操作</th>
  </tr>
  <?php 
  	foreach ($dataProvider->rawData as $row) {
  		echo '<tr>';
  		echo '<td>'.$row['name'].'</td>';
  		echo '<td>'.$row['size'].'</td>';
  		echo '<td>'.$row['create_time'].'</td>';
  		echo '<td> ';
  		echo'<a  name="linkr" href="'.Yii::app()->createUrl("backup/default/download", array("file"=>$row["name"])).'">下载</a>';
  		echo'<a name="linkr" href="'.Yii::app()->createUrl("backup/default/restore", array("file"=>$row["name"])).'">恢复</a>';
  		echo'<a name="linkr" href="'.Yii::app()->createUrl("backup/default/delete", array("file"=>$row["name"])).'">删除</a>';
  		echo '</td>';
  		echo '</tr>';
  	}
	


	?>
</table>

<script>
$(function($) {
	  $("[name='linkr']").on("click", function(){
		  if(!confirm('真的要'+$(this).html()+"吗？"))
			   return false;
	  });
	});

	
</script>