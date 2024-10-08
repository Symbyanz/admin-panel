<?php

// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// hide errors
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(E_ALL);


// convenience output function
function debug($str){
	echo '<pre>';
	var_dump($str);
	echo '<pre>';
	exit();
}