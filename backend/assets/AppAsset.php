<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

	public $basePath = '@webroot';
	public $baseUrl  = '@web';
	public $css = [
		'css/site.css',
		'stylesheets/helpers.css',
		'font-awesome-4.3.0/css/font-awesome.min.css',

		// theme
		'css/theme/bootstrap.main.css',
	];

	public $js = [
		'js/main.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
