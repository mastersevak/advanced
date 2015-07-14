<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
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
