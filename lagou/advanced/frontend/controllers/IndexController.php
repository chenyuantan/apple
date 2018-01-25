<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Category;

class IndexController extends \yii\web\Controller
{

	public $layout = false;
	public $enableCsrfValidation=false;
	/**
	 * 前台首页
	 * @return [type] [description]
	 */
    public function actionIndex()
    {
    	$cate = new Category;
		// $data = $cate->find()->all();
		// $data = Yii::$app->db->createCommand()->quertone();
		$data = Yii::$app->db->createCommand("SELECT * FROM category")->queryAll();
		$parm = $this -> tree($data,0,0,'category_id');
		// echo "<pre>";
		// var_dump($parm);die;
		return $this->render('index',(['parm'=>$parm]));
        return $this->render('index');
    }
    
    /**
     * 简历
     * @return [type] [description]
     */
    public function actionJian()
	{
		return $this->render('jianli');
	}
	/**
	 * 发布职位
	 * @return [type] [description]
	 */
	public function actionCreate()
	{
		return $this->render('create');
	}

	public function actionCompany()
	{
		return $this->render('companylist');
	}

	
	// 无限极分类
	public function tree($arr,$parent_id=0,$level=0)
	{
		// static $data = array();
		global $data;
		foreach ($arr as $k => $v) 
		{
			if($v['parent_id']==$parent_id)
			{
				$data[]=$v;
				$data['level']=$level;
				$this -> tree($arr,$v['category_id'],$level+1);
			}
		}
		return $data;
	}


	
}

