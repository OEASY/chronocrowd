<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => '',
    // path aliases
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    ),
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'bootstrap.helpers.TbHtml',
    ),
    'modules' => array(
//        'gii' => array(
//            'generatorPaths' => array('bootstrap.gii'),
//        ),
    // uncomment the following to enable the Gii tool
    
'gii' => array(
            'class' => 'system.gii.GiiModule',
            'generatorPaths' => array('bootstrap.gii'),
            'password' => 'yogesh',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array($_SERVER['REMOTE_ADDR']),
        ),
     
    ),
    // application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format
    /*    
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          //'Site/Contact'=>'Site/Contact',
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),*/
         
        //'db' => array(
        //    'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
       // ),
        // uncomment the following to use a MySQL database
        
          'db'=>array(
          'connectionString' => 'mysql:host=chronocrowd.net;dbname=chronocr_chronocrowd',
          'emulatePrepare' => true,
          'username' => 'chronocr_ramsai',
          'password' => 'ramsai007!',
          'charset' => 'utf8',
          ),
         
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'yogeshbansal83@gmail.com',
    ),
);