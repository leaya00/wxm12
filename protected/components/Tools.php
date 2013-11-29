    <?php  
    class Tools {  
         public static function sendMail() { 
			Yii::app()->mailer->Host = "smtp.qq.com";//1
			// Yii::app()->mailer->SMTPDebug = true;
			Yii::app()->mailer->IsSMTP();
			Yii::app()->mailer->SMTPAuth=true;
			Yii::app()->mailer->From = "31539807@qq.com";//2
			//Yii::app()->mailer->Port = "465";
			Yii::app()->mailer->CharSet = 'UTF-8';
			Yii::app()->mailer->Username = "31539807";//3
			Yii::app()->mailer->Password = "xxxxxxxx";//4
			Yii::app()->mailer->FromName = "testyii";//5
			//Yii::app()->mailer->AddReplyTo($_POST["email"]);
			Yii::app()->mailer->AddAddress("31539807@qq.com");//6
			Yii::app()->mailer->Subject = "yii";//utf8_decode($_POST["subject"]);
			Yii::app()->mailer->Body = "哈哈"; //utf8_decode($_POST["text"]);
			echo Yii::app()->mailer->Send();
		 }
        public static function test() {  
           //self::sendMail();
        }  
    }  