
<!DOCTYPE html>
<html>
<head>
	<title>Create!</title>
		<!-- Кодировка веб-страницы -->
	    <meta charset="utf-8">
	    <!-- Настройка viewport -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Подключаем Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>      
</head>
<body>
	<div class="w-100" style="height: 20vh"></div>
	<div class="container-fluid col-md-6 col-sm-10">
		<div class = "jumbotron">
			<div class="row">
				<div class="col-1"></div>
				<ul class="nav nav-tabs col-10" id="regTab" role = "tablist">
					<li class="nav-item">
						<a class="nav-link active" id="enter-tab" data-toggle="tab" href="#enter">Вход</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="regist-tab" data-toggle="tab" href="#regist">Регистрация</a>
					</li>
				</ul>
				<div class="col-1"></div>
			</div>
			<div class="tab-content" id="regTabCont">
				<div class="tab-pane show active" id="enter">
					<form id="en">
						<div class="row">
						<div class="col-1"></div>
							<div class="form-group col-10">
								<span class="input-group">
									<div class="col-12">
										<input type="text" name="login" class="input-group-item form-control" placeholder="Enter name">
									</div>
									<div class="col-12">
										<input type="password" name="password" class="input-group-item form-control" placeholder="Enter password">
									</div>
									<div class="col-12">
										<button type = "button" class="btn btn-primary input-group-item w-100">Вход</button>
									</div>
								</span>
							</div>
							<div class="col-1"></div>
						</div>
					</form>
				</div>
				<div class="tab-pane fade" id="regist">
					<form id="reg">
						<div class="row">
						<div class="col-1"></div>
							<div class="form-group col-10">
								<span class="input-group">
									<div class="col-12">
										<input type="text" name="login" class="input-group-item form-control" placeholder="Enter name">
									</div>
									<div class="col-12">
										<input type="email" class="input-group-item form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									</div>
									<div class="col-12">
										<input type="password" name="password" class="input-group-item form-control" placeholder="Enter password">
									</div>
									<div class="col-12">
										<input type="password" name="checkpassword" class="input-group-item form-control" placeholder="Enter password">
									</div>
									<div class="col-12">
										<button type = "button" class="btn  btn-primary  input-group-item w-100">Регистрация</button>
									</div>
								</span>
							</div>
							<div class="col-1"></div>
						</div>
					</form>
					<div class="col-1"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Подключаем jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Подключаем плагин Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- Подключаем Bootstrap JS -->    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>