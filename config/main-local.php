<?php 

	$config = [
		'components' => [
			'db' => [
	            'class' => \yii\db\Connection::class,
	            'dsn' => 'mysql:host=localhost;dbname=jadwal_lab',
	            'username' => 'root',
	            'password' => '',
	            'charset' => 'utf8',
	        ],
		]
	];

	if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => \yii\debug\Module::class,
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => \yii\gii\Module::class,
    ];

    return $config;
}