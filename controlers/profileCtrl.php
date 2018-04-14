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
			$password = sha1(htmlspecialchars($_POST['password']));
			$data = db::dbSelect("SELECT user.login, user.email, user.auth FROM user WHERE user.login = '$login' AND user.pass = '$password'");
			if (count($data)>0){
				$_SESSION['auth']=$data['auth'];
				header("/serf");
			}
			else {
				header("/log");
			}
		endif;
	}
}