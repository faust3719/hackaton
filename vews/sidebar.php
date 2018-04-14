
<nav id ="sidebar" class = "col-md-3 col-sm-4" style = "text-align: center; box-shadow: 0 0 20px rgba(0,0,0,0.8); z-index: 10; padding:0">
	<div class="face_icon" style="text-align: center; font-size: 50px;">
		<i class="fas fa-user-circle"></i>
	</div>
	<?
	if (isset($_SESSION['auth'])) :
	?>
	<ul class="list-group" >
		<a href="#"><li class="list-group-item">Профиль</li></a>
		<a href="#"><li class="list-group-item">Настройки</li></a>
		<a href="#"><li class="list-group-item">Мои проекты</li></a>
		<a href="#"><li class="list-group-item">Мои донаты</li></a>
	</ul>
	<?
	else :
	?>
	<ul class="list-group" >
		<a href="/auth"><li class="list-group-item">Авторизация</li></a>
		<a href="/reg"><li class="list-group-item">Регистрация</li></a>
	</ul>
	<?
	endif;
	?>
</nav>