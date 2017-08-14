<?php

require_once ('config.php');
//require_once ('lib/Mysql.php');
//require_once ('lib/Sql.php');
//require_once ('lib/MY_TEST.php');
require_once __DIR__ . '/autoload.php';

use lib\MY_TEST;

try
{
	$allRes = MY_TEST::findAll();


	$mytest = new MY_TEST();
	$mytest->key = "'user12'";
	$mytest->data = "'test12'";
	$mytest->insert();

/**
	$results = new MY_TEST();
	$results->key = "user12";
	$results->delete();
*/

/**
	$update = new MY_TEST();
	$update->key = "'test'";
	$update->data = "'test12'";
	$update->update();
*/
}
catch(Exception $e)
{
	echo $e->getMessage();
}

require_once ('templates/index.php');







