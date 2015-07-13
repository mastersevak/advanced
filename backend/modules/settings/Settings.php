<?php

namespace backend\modules\settings;

class Settings extends \yii\base\Module{

	public $controllerNamespace = 'backend\modules\settings\controllers';
	public $pathMigrations = 'backend\modules\settings\migrations';

	public function init() {
		parent::init();
		// custom initialization code goes here
	}
}
