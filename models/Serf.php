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
		$query = 'SELECT * FROM event';
		$query = db::dbSelect($query);
		return $query;
	}
    public static function createSerf($pardat)
	{
<<<<<<< HEAD
		$title=htmlspecialchars($pardat['headler']);
		$location=htmlspecialchars($pardat['location']);
		$zena_post=empty($pardat['zena_post']) ? 0 : htmlspecialchars($pardat['zena_post']);
		$zena_pre=empty($pardat['zena_pre']) ? 0 : htmlspecialchars($pardat['zena_pre']);
		$date_start=htmlspecialchars($pardat['date_start']);
		$time_start=htmlspecialchars($pardat['time_start']);
		$date_end=htmlspecialchars($pardat['date_end']);
		$time_end=htmlspecialchars($pardat['time_end']);
		$theme=htmlspecialchars($pardat['theme']);
		$comment=htmlspecialchars($pardat['comment']);
		$about=htmlspecialchars($pardat['about']);
		$adress=htmlspecialchars($pardat['adress']);
		$pipl_num=empty($pardat['pipl_num']) ? 0 :htmlspecialchars($pardat['pipl_num']);
=======
		$title=htmlspecialchars($_POST['headler']);
		$location=htmlspecialchars($_POST['location']);
		$zena_post=empty($_POST['zena_post']) ? 0 : htmlspecialchars($_POST['zena_post']);
		$zena_pre=empty($_POST['zena_pre']) ? 0 : htmlspecialchars($_POST['zena_pre']);
		$date_start=htmlspecialchars($_POST['date_start']);
		$time_start=htmlspecialchars($_POST['time_start']);
		$date_end=htmlspecialchars($_POST['date_end']);
		$time_end=htmlspecialchars($_POST['time_end']);
		$theme=htmlspecialchars($_POST['theme']);
		$comment=htmlspecialchars($_POST['comment']);
		$about=htmlspecialchars($_POST['about']);
		$adress=htmlspecialchars($_POST['adress']);
		$pipl_num=empty($_POST['pipl_num']) ? null : htmlspecialchars($_POST['pipl_num']);
>>>>>>> 9b83a8f2074dc6fcb99665d5c1f4b678e23dfe7f
		$uploaddir = '/image/event/';
		$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
		$auth=$_SESSION['auth'];
		$id=db::dbSelect("SELECT user.id FROM user WHERE user.auth = '$auth'")[0]['id'];
<<<<<<< HEAD
            db::dbInsert("INSERT INTO event (id, user, theme, title, price, prepayment, start_date, start_time, end_date, end_time, min_count, short_description, description, photo, rating, durability, place, location) VALUES (DEFAULT, '$id', '1', '$theme', '$title', '$zena_post', '$zena_pre', '$date_start', '$time_start', '$date_end', '$time_end', '$pipl_num', '$comment', '$about', '$uploadfile', '0', DEFAULT , '$adress', '$location')");

=======
            db::dbInsert("INSERT INTO event (id, user, status, theme, title, price, prepayment, start_date, start_time, end_date, end_time, min_count, short_description, description, photo, rating, durability, place, location) VALUES (DEFAULT, '$id', '1', '$theme', '$title', '$zena_post', '$zena_pre', '$date_start', '$time_start', '$date_end', '$time_end', '$pipl_num', '$comment', '$about', '$uploadfile', '0', DEFAULT , '$adress', '$location')");
		
		$uploadfile = "." . $uploadfile;
		move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
>>>>>>> 9b83a8f2074dc6fcb99665d5c1f4b678e23dfe7f
	}
}