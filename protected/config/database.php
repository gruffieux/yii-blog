<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/blog.db',
	'tablePrefix' => 'tbl_',
	'class' => 'system.db.CDbConnection',
	'schemaCachingDuration' => 3600,
	// uncomment the following lines to use a MySQL database
	/*
	'connectionString' => 'mysql:host=localhost;dbname=testdrive',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	*/
);