<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'urlManager' => [
			'class'					=> 'yii\web\UrlManager',
			// Disable index.php
			'showScriptName'		=> false,
			// Disable r= routes
			'enablePrettyUrl'		=> true,
			'enableStrictParsing'	=> false,
			'rules'	=> [
				// rules User
				'user'				=> 'user/user/index',
				'user/<action:\w+>'	=> 'user/user/<action>',
				'user/<id:\d+>'		=> 'user/user/<id:\d+>',
				'user/<controller:\w+>/<action:\w+>'	=> 'user/<controller>/<action>',
				'user/user/<action:\w+>/<id:\d+>'		=> 'user/<controller>/<action>',

				// '/<action:(login|logout|registration|ajaxlogin|lock|unlock)>' => 'core/user/back/<action>',
				//login, logout - frontend
				// '<action:(login|logout|registration|forgotpassword|resetpassword|changepassword|profile)>' => 'auth/<action>',

				// rules Menu
				'menu'				=> 'menu/menu/index',
				'menu/<action:\w+>'	=> 'menu/menu/<action>',
				'menu/<controller:\w+>/<action:\w+>'	=> 'menu/<controller>/<action>',
			],
		],
		'urlManagerFrontend' => [
			'class'					=> 'yii\web\UrlManager',
			// here is your frontend URL manager config
		],
	],
	'modules' => [
		'menu' => [
			'class' => 'common\modules\menu\Menu',
		],
		 'user' => [
			'class' => 'common\modules\user\User',
		],
	],
];
