<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-backend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'language' => 'en',
	'sourceLanguage' => 'en',
	'bootstrap' => ['log'],
	'modules' => [
		'settings' => [
			'class' => 'backend\modules\settings\Settings',
		],
	],
	'components' => [
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
		'i18n'=>array(
			'translations' => array(
				'backend'=>[
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => [
						'app'=>'backend.php'
					]
				],
				'settings'=>array(
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => array(
						'app'=>'settings.php'
					)
				),
				'email'=>array(
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => array(
						'app'=>'email.php'
					)
				),
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
				'yii'=>array(
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => "@app/messages",
					'sourceLanguage' => 'en',
					'fileMap' => array(
						'yii'=>'yii.php'
					)
				)
			)
		),
	],
	'params' => $params,
];
