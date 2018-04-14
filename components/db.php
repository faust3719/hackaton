<?php
/**
*
*/
class db
{
	
	static function connect()
	{
		$host = '100.124.160.197';
		$dbname ='hackaton';
		$password = '';
		$user = 'root';
		
		try {
			$db=new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$password);
			return $db;
		} catch (PDOException $e)
		{
			print "Error!: " . $e -> getMessage() . "<br/>";
			die();
		}
	}
	
	static function dbSelect($sql){
		$db=db::connect();
		$data=$db->prepare($sql);
		$data->execute();
		$value=array();
		while ($item=$data->fetch(PDO::FETCH_ASSOC)):
			$value[]=$item;
		endwhile;
		return $value;
	}
	
	static function dbInsert($sql){
		$db=db::connect();
		$data=$db->prepare($sql);
		$data->execute();
	}
	
}