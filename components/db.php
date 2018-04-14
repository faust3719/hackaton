<?php
/**
* 
*/
class db
{
	
	function connect()
	{
		$host = '100.124.160.197';
		$dbname ='hackaton';
		$password = '';
		$user = 'root';
		
		try {
		    $db = new PDO("mysql:host= $host; dbname = $dbname", $user, $password);
		  	return $db;
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
		
	}
}