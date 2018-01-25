<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use app\models\Admin;
class AdminController extends \yii\web\Controller
{
	public $layout = false;
	public $enableCsrfValidation=false;

    public function actionIndex()
    {
        return $this->render('login');
    }

    public function actionReg()
    {
    	return $this->render('register');
    }

    public function actionLogin()
    {
    	$admin = new Admin;
    	$data = Yii::$app->request->post();
      $admin_name= $data['admin_name'];

      $password= $data['password'];
      $sql = "select * from admin where admin_name ='$admin_name' and password=$password ";
      $apple = Yii::$app->db->createCommand($sql)->queryOne();
      if($apple){
        echo "<script>alert('登录成功');location.href='http://www.lagouyii.com/backend/web/index.php?r=index/index'</script>";
        // echo '<script>alert("登录成功");location.href="Url::toRoute(['index/index'])";</script>';
      }
    }
    public function actionRegister()
    {
       $data = Yii::$app->request->post();
       $admin = new Admin;
       foreach ($data as $key => $value) {
       		$admin->$key=$value;
       }
      $apple = $admin->save();
       // $apple = Yii::$app->db->createCommand()->insert('admin',$data)->execute();
       // var_dump($apple);
       if($apple){
          echo "<script>alert('注册成功');location.href='http://www.lagouyii.com/backend/web/index.php?r=admin/index'</script>";
       }
    }

}
