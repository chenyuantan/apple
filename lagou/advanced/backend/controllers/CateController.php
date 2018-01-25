<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use app\models\Category;

/**
 * Site controller
 */
class CateController extends Controller
{
	public $layout =  false;
	// public $layout = 'public.php';
	public $enableCsrfValidation=false;
	public function actionIndex()
	{
		$cate = new Category();
		$data = $cate ->find()->all();
		return $this->render("category",['cate'=>$data]);

	}

	public function actionAddcate()
	{
		return $this->render("addcate");
	}

	public function actionAdd_do()
	{
		$data = Yii::$app->request->post();
		$parm = Yii::$app->db->createCommand()->insert('category',$data)->execute();
		if($parm){
			 echo "<script>alert('添加成功');location.href='http://www.lagouyii.com/backend/web/index.php?r=cate/index'</script>";
		}
	}

	// public function action

}