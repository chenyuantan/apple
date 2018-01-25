<?php

namespace frontend\Controllers;
use Yii;
use yii\web\Controller;

class CreateController extends \yii\web\Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

}
