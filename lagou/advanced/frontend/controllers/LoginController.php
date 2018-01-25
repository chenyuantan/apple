<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Login;

class LoginController extends Controller
{
	/**
	 *  前台首页
	 */
    public $layout = false;
	public $enableCsrfValidation=false;
	/**
	 * 登录页
	 * @return [type] [description]
	 */
	public function actionIndex()
	{
		 return $this->render("login");
	}
	
	public function actionLogin()
	{
		$login = new Login();
		if($data = Yii::$app->request->post()){
			$arr = $login->find()->where(['email'=>$data['email']])->asarray()->one();
			if($arr){
				if(md5($data['password']) == $arr['password']){
					$arr_json = array('success'=>'1','content'=>'http://www.lagouyii.com/frontend/web/index.php?r=index%2Findex');
					echo json_encode($arr_json);die;
				}
			}
		}
		return $this->renderPartial('Login');
	}

	/**
	 * 注册页
	 * @return [type] [description]
	 */
	public function actionRegister()
	{
		return $this->render("register");
	}
	//个人或企业注册
	public function actionRegister_do()
	{

		$email = $_POST['email'];
		$fly = Yii::$app->db->createCommand()->insert('user_particulars', [
		    'email' => $email,
		])->execute();
		$info_id = Yii::$app->db->getLastInsertID();
		$pwd   = md5($_POST['password']);
		$ip    = $_SERVER["REMOTE_ADDR"];
		$apple = Yii::$app->db->createCommand()->insert('user', [
			'username' => $email,
		    'email' => $email,
		    'password' => $pwd,
		    'info_id'=>$info_id,
		    'create_time'=>time(),
		    'ip'=>$ip,
		])->execute();
		$id    = Yii::$app->db->getLastInsertID();
		if($id){
			$session = Yii::$app->session;
			$session->set('user_id',$id);
				$data['success']=1;
		}else{
				$data['success']=0;
				$data['content']="注册失败";
		}
		// var_dump($data);die;
		echo json_encode($data);
	}

}