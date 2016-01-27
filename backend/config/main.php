<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return  [
	'id' => 'app-backend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'language'		=> 'en',
	'sourceLanguage'=> 'en',
	'bootstrap'	=> ['log'],
	'modules'	=> [
		'settings' => [
			'class' => 'backend\modules\settings\Settings',
		],
		'gridview' =>  [
			'class' => '\kartik\grid\Module',
			// enter optional module parameters below - only if you need to
			// use your own export download action or custom translation
			// message source
			// 'downloadAction' => 'gridview/export/download',
			// 'i18n' => []
		]
	],
	'components' => [
		'urlManager' => [
			'class'					=> 'yii\web\UrlManager',
			// Disable index.php
			'showScriptName'		=> false,
			// Disable r= routes
			'enablePrettyUrl'		=> true,
			// 'enableStrictParsing'	=> false,
			'rules'	=> [
				'login'	=> 'site/login',
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'mailer'	=>	[
			'class' => 'yii\swiftmailer\Mailer',
			'useFileTransport' => false,
		],
		'authManager'	=>	[
			'class'			=>	'yii\rbac\DbManager',
			'defaultRoles'	=>	['guest'],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'i18n' => [
			'translations' => [
				'backend'=>[
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => [
						'app'=>'backend.php'
					]
				],
				'settings'=>[
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => ['app'=>'settings.php']
				],
				'email'=>[
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => ['app'=>'email.php']
				],
				'customers'=>[
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => [
						'app'=>'customers.php'
					]
				],
				'locations'=>[
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => [
						'app'=>'locations.php'
					]
				],
				'yii' => [
					'class'	=> 'yii\i18n\PhpMessageSource',
					'basePath'	=> "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => ['yii'=>'yii.php']
				],
				'product'=>[
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => [
						'app'=>'product.php'
					]
				],
			]
		],
		'MyComponent' => [
			'class' => 'backend\components\MyComponent',
		]
	],
	'params' => $params,
];
