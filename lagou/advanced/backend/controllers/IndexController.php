<?php

namespace backend\controllers;

class IndexController extends \yii\web\Controller
{
	public $layout = false;
	public $enableCsrfValidation=false;
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRelease()
    {
        return $this->render('release');
    }
}
