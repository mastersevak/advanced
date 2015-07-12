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
class DashboardAsset extends AssetBundle {

	public $basePath = '@webroot';
	public $baseUrl  = '@web';
	public $css = [
		// theme
		'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
		'//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
		'theme/AdminLTE-2.2.0/bootstrap/css/bootstrap.min.css',
		'theme/AdminLTE-2.2.0/css/AdminLTE.min.css',
		'theme/AdminLTE-2.2.0/css/_all-skins.min.css',
		'theme/AdminLTE-2.2.0/plugins/iCheck/flat/blue.css',

		'css/site.css',
		'stylesheets/helpers.css',
		// 'font-awesome-4.3.0/css/font-awesome.min.css',
	];

	public $js = [
		// theme AdminLTE-2.2.0
		'//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
		'theme/AdminLTE-2.2.0/bootstrap/js/bootstrap.min.js',
		'theme/AdminLTE-2.2.0/plugins/sparkline/jquery.sparkline.min.js',
		'theme/AdminLTE-2.2.0/plugins/slimScroll/jquery.slimscroll.min.js',
		'theme/AdminLTE-2.2.0/plugins/fastclick/fastclick.min.js',
		'theme/AdminLTE-2.2.0/js/app.min.js',
		'theme/AdminLTE-2.2.0/js/dashboard.js',

		'js/main.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
