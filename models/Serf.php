<?php
/**
*
*/
class Serf
{
	public static function getSerf($id = NULL)
	{
		$id = array_shift($id);
		$query = 'SELECT * FROM `hackaton`.`event` WHERE `id` =' . $id;
		$query = db::dbSelect($query);
		return $query;
	}
	public static function getSerfMap()
	{
		$query = 'SELECT * FROM `hackaton`.`event`';
		$query = db::dbSelect($query);
		return $query;
	}
    public static function createSerf()
	{
		$title=htmlspecialchars($_POST['headler']);
		$location=htmlspecialchars($_POST['location']);
		$zena_post=empty($_POST['zena_post']) ? 0 : htmlspecialchars($_POST['zena_post']);
		$zena_pre=empty($_POST['zena_pre']) ? 0 : htmlspecialchars($_POST['zena_pre']);
		$zena_post2=empty($_POST['zena_post2']) ? 0 : htmlspecialchars($_POST['zena_post2']);
		$zena_pre2=empty($_POST['zena_pre2']) ? 0 : htmlspecialchars($_POST['zena_pre2']);
		$zena_post3=empty($_POST['zena_post3']) ? 0 : htmlspecialchars($_POST['zena_pos3']);
		$zena_pre3=empty($_POST['zena_pre3']) ? 0 : htmlspecialchars($_POST['zena_pre3']);
		$date_start=htmlspecialchars($_POST['date_start']);
		$time_start=htmlspecialchars($_POST['time_start']);
		$date_end=htmlspecialchars($_POST['date_end']);
		$time_end=htmlspecialchars($_POST['time_end']);
		$theme=htmlspecialchars($_POST['theme']);
		$comment=htmlspecialchars($_POST['comment']);
		$about=htmlspecialchars($_POST['about']);
		$adress=htmlspecialchars($_POST['adress']);
		$pipl_num=htmlspecialchars($_POST['pipl_num']);
		$auth=$_SESSION['auth'];
		$id=db::dbSelect("SELECT user.id FROM user WHERE user.auth = '$auth'")[0]['id'];
            db::dbInsert("INSERT INTO event (id, user, status, theme, title, price, prepayment, price2, prepayment2, price3, prepayment3, start_date, start_time, end_date, end_time, min_count, short_description, description, photo, rating, durability, place, location) VALUES (DEFAULT, '$id', '1', '$theme', '$title', '$zena_post', '$zena_pre', '$zena_post2', '$zena_pre2', '$zena_post3', '$zena_pre3', '$date_start', '$time_start', '$date_end', '$time_end', '$pipl_num', '$comment', '$about', 'img', '0', DEFAULT , '$adress', '$location')");

	}
}