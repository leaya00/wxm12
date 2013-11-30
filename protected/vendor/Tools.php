
<?php
//Yii::import('application.vendors.*');
//require_once('Zend/Search/Lucene.php');
class Tools {
	

	/*
	 输入：目录
	 返回：目录存在的文件名数组
	 */
	public static function  getDirFileToArray($dir){
		$result=array();
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if(filetype($dir . $file)=='file')
					$result[]= iconv('GB2312','UTF-8',$file);
				} closedir($dh);
			}
		}
		return  $result;
	}
}