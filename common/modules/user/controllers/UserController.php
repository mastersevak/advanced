<?php

namespace common\modules\user\controllers;

use yii\web\Controller;

class UserController extends Controller{

	public function actionIndex() {
		
		return $this->render('index');
	}
}
