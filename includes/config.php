<?php 
ob_start();
session_start();

$host ="localhost";
$user="root";
$password ="root";
$port ="3306";
$database ='myblog';

$db = mysqli_connect($host, $user, $password, $database) 
        OR die(mysql-_connect_error());

$user1 = new User($db); 

mysqli_set_charset($db, 'utf8');


function __autoload($class) {
   
   $class = strtolower($class);

	//if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 	
	
	//if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}
	
	//if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 		
	
        
        
}


?>