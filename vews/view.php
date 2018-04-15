<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  <style>
   p {
    text-indent: 20px;
   }
  </style>
    <title>Create</title>
  </head>
  <body>

     <!-- Navbar items -->
    <nav class="navbar navbar-expand-sm navbar-static-top navbar-light bg-light">
      <div class="container-fluid">
            <a href="/serf">Create!</a>
            <button class="navbar-toggler" type = "button" data-toggle="collapse" data-target = "#navbarSupportedContent" aria-controls="navbarSupportedContent"><span class="navbar-toggler-icon" aria-expanded="false" aria-label="Toggle navigation"></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent"">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="#about">Описание</a></li>
          <li class="nav-item"><a class="nav-link" href="/serf">Вернуться к серфу</a></li>
        </ul>
     
      </div>
    </div>
  </nav>
       <div class="container m-3">
          <div class="jumbotron row">
          <?php
            if(!empty($data['prepayment']) || $data['prepayment'] != 0)
            {
          ?>
          <div class="col-4">
            <span style="font-size:20px">Цена по предоплате: <?php echo $data['prepayment']; ?></span>
          </div>
          <?php } ?>
          <div class="col-3">
          <span style="">Цена: <?php echo $data['price']; ?></span>
          </div>
            <div class="col-3">
              <span>
              <?php
                  echo $data['min_count'] . '/' . $data['count'];
              ?>
              </span>
            </div>

          <div class="col-12">
            <h1><?php echo $data['title']; ?></h1>
          </div>
          <div class="col-6">
            <p>
              <form action="/fastreg" method="POST">
      <input type="hidden" value="<?=$data['id']?>" name="idFast" />
      <button type = "submit" class = "btn btn-primary w-100">Я пойду!</button></form>
            </p>
            <p class="lead"><?php echo $data['short_description']; ?>
          </div>
          <div class="col-6">
            <img style="right: 0; width: auto; max-height: 300px" src="<?php echo $data['photo']; ?>">
          </div>
          <p>Собираемся:
            <?php
                echo $data['start_date'];
            ?>
          </p>
          <p>Время сбора:
            <?php
              echo substr($data['start_time'], 0, 5);
            ?>
          </p>
          <p>Окончание:
            <?php
              echo $data['end_date'] . " в " . substr($data['end_time'], 0, 5);
            ?>
          </p>
          
          <p>Место сбора:
            <?php
              echo $data['place'];
            ?>
          </p>
        </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <div id="about">
            <h4><?php echo $data['title']; ?></h4>
            <p><?php echo $data['description']; ?></p>
          </div>
        </div>
      </div>

      <div class="footer">
        <p>&copy; Тиньгаева и Ко)</p>
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