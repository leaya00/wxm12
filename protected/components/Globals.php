
<?php
class Globals {
	//		Globals::sendMail();
	public static function sendMail($title,$content,$destmail,$path,$filename) {
		Yii::app()->mailer->Host = "smtp.qq.com";//1
		Yii::app()->mailer->IsSMTP();
		Yii::app()->mailer->SMTPAuth=true;
		Yii::app()->mailer->From = "31539807@qq.com";//2
		//Yii::app()->mailer->Port = "465";
		Yii::app()->mailer->CharSet = 'UTF-8';
		Yii::app()->mailer->Username = "31539807";//3
		Yii::app()->mailer->Password = "********";//4
		Yii::app()->mailer->FromName = "testyii";//5
		//Yii::app()->mailer->AddReplyTo($_POST["email"]);
		Yii::app()->mailer->AddAddress("31539807@qq.com");//6
		Yii::app()->mailer->Subject = "邮件标题";//utf8_decode($_POST["subject"]);
		Yii::app()->mailer->Body = "邮件正文$destmail"; //utf8_decode($_POST["text"]);
		if($path && $filename){
			Yii::app()->mailer->AddAttachment($path,$filename); // 添加附件,并指定名称
		}
		return Yii::app()->mailer->Send();
	}
}