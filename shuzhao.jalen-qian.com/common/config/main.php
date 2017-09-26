<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    	'authManager' => [
    			'class' =>'yii\rbac\DbManager',
    	],
    ],
	'modules' => [
		'redactor' => [
			'class' => 'yii\redactor\RedactorModule',
			'uploadDir' => '@upload/image',
			'uploadUrl' => '/upload/image/',
			'imageAllowExtensions'=>['jpg','png','gif']
		],
	],
	/*'modules' => [
		'redactor' => 'yii\redactor\RedactorModule',
	],*/
];
