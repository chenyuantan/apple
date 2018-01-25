<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class MailerController extends Controller
{
	public function actionIndex()
	{
		//邮件发送
		$mail = Yii::$app->mailer->compose();
		$mail->setTo('786069180@qq.com');
		$mail->setSubject("test");
		$mail->setHtmlBody("测试测试");
		if ($mail->send())
		    echo "成功";
		else
		    echo "失败";
		die();
	}
	
}