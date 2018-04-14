<?php
/**
* 
*/
class Serf
{
	public function getSerf($id = NULL) 
	{
		$id = array_shift($id);
		$query = 'SELECT * FROM `hackaton`.`event` WHERE `id` =' . $id;
		$query = db::dbSelect($query);
		return $query;
	}
    public function createSerf() 
	{

            echo "I'm work!";

	}
}