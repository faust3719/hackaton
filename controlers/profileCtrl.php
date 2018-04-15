<?php
/**
* Профили
* просмотр, регистрация, вход
*/
class profileCtrl
{
	public function __construct()
	{
	
	}
	public function enter()
	{
	
	}
	
	public function authAct()
	{
		include_once(ROOT. '/vews/reglog.php');
		return true;
	}
	
	public function regAct()
	{
		$_GET['reg']='';
		include_once(ROOT. '/vews/reglog.php');
		return true;
	}
	
	public function profileAct()
	{
		include_once(ROOT. '/vews/profile.php');
		return true;
	}
	
	public function validateAct(){
		if (isset($_POST['email'])):
			$login = htmlspecialchars($_POST['login']);
			$email = htmlspecialchars($_POST['email']);
			$password = sha1(htmlspecialchars($_POST['password']));
			$checkpassword = sha1(htmlspecialchars($_POST['checkpassword']));
			$auth = SHA1(htmlspecialchars($_POST['login']).time().date());
			if ($password==$checkpassword):
				db::dbInsert("INSERT INTO user (id, login, pass, email, auth) VALUES (DEFAULT, '$login', '$password', '$email' , '$auth')");
			endif;
			$_SESSION['auth']=$auth;
			header("Location: /serf");
		else :
			$login = htmlspecialchars($_POST['login']);
			$password = sha1(htmlspecialchars($_POST['pass']));
			$data = db::dbSelect("SELECT user.login, user.email, user.auth FROM user WHERE user.login = '$login' AND user.pass = '$password'")[0];
			if (count($data)>0){
				$_SESSION['auth']=$data['auth'];
				header("Location: /serf");
			}
			else {
				header("Location: /log");
			}
		endif;
		return true;
	}
	
	public function fastregAct(){
		$user=$_SESSION['auth'];
		$event=$_POST['idFast'];
		$auth=$_SESSION['auth'];
		$user=db::dbSelect("SELECT user.id FROM user WHERE user.auth = '$user'")[0]['id'];
		db::dbInsert("INSERT INTO going (event, user) VALUES ('$event', '$user')");
		
<<<<<<< HEAD
	   $eventData=db::dbSelect("SELECT * FROM event")[0];
=======
	   $eventData=db::dbSelect("SELECT * FROM event WHERE id=".$event)[0];
>>>>>>> 9b83a8f2074dc6fcb99665d5c1f4b678e23dfe7f
	   if ($eventData['price']>0):
	   echo '<form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
		   <input type="hidden" name="ik_co_id" value="5ad226a93c1eaff7608b4568" />
		   <input type="hidden" name="ik_pm_no" value="'.time().'" />
		   <input type="hidden" name="ik_am" value="'.$eventData['price'].'" />
		   <input type="hidden" name="ik_cur" value="RUB" />
		   <input type="hidden" name="ik_desc" value="'.$eventData['title'].'" />
		   <input type="hidden" name="ik_suc_u" value="http://baralt.ru/paysuc" />
		   <input type="hidden" name="ik_suc_m" value="post" />
		   <input type="hidden" name="ik_exp" value="2018-06-15" />
		   <input type="text" name="ik_x_idUser" value="'.$user.'" />
		   <input type="text" name="ik_x_idEvent" value="'.$event.'" />
		   <input type="submit" value="Pay">
	   </form>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	   <script>
	   $(window).ready(function(){ '."$('#payment').submit()".' })</script>';
<<<<<<< HEAD
		else:
			header('Location: /profile');
		endif;
=======
		
		else :
		   header('Location: /profile');
endif;
>>>>>>> 9b83a8f2074dc6fcb99665d5c1f4b678e23dfe7f
		return true;
	}
	
	public function paysucAct(){
		echo 'Оплата успешна вы зарегистриваны';		return true;
		
	}
}