<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		// 2015年8月23日21:23:44
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'qaz',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'houtai',
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'loginUrl'=>'./index.php?r=/user/login',

		),
		'cache'=>array(
           'class'=>'system.caching.CFileCache',

			),
		//2015年9月27日21:10:53
		//开启缓存组件
		// uncomment the following to enable URLs in path-format
	   
	   // 2015年10月2日20:14:15
	 // 'urlManager'=>array(
  //      'urlFormat'=>'path',
  //      'rules'=>array(
  //          //1.user/login.html ===> user/login
  //          'user/login'=>array('user/login','urlSuffix'=>'.html'),
           
  //          //user/register.html  ===>  user/register
  //          'user/register'=>array('user/register','urlSuffix'=>'.html'),
           
  //          //2.goods/20   ====>  goods/detail&id=20
  //          'goods/<id:\d+>' => 'goods/detail',
           
  //          //goods/20/zhangsan  ===> goods/category&id=20&name=zhangsan
  //          'goods/<id:\d+>/<name:[a-z]+>'=>'goods/category',
           
  //          //3.goods/4-2-3-5.html  ===> goods/category&brand=4&price2&color=3&screen=5
  //          'goods/<brand:\d+>-<price:\d+>-<color:\d+>-<screen:\d+>'=>array('goods/category','urlSuffix'=>'.html'),
  //                  ),
  //                  ),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=myshop',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			// 2015年8月30日20:27:22
			'tablePrefix'=>'sw_',
			'enableParamLogging'=>'true',
			// 2015年8月31日21:58:45
			 'enableProfiling'=>'true',
			//2015年9月20日08:57:13
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				// 显示相关SQL语句 等相关日志信息
				// 2015年9月20日08:59:23
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);