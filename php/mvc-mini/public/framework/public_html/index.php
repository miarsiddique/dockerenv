<?php 

session_start();
error_reporting(E_ALL);

include '../aplication/bootstrap.php';

function __autoload($class_name)
{
	$inc = null;
	require_once '../library/autoload.php';
	$inc = new autoload($class_name);
}
