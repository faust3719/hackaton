<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script> 
 
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
      <?php
        print_r($_POST);
      ?>
  <form method = "post" action="serf/create" style="margin-top: 10px">
     <!-- Page items -->
    <div class="container">
       <!-- About items -->
       <?php
          if(!empty($error))
            {
              if($error == 'nowr')
              echo "<p class = 'w-100 bg-danger' style = 'color: white; text-align: center'> Заполнены не все обязательные поля</p>";
            }
       ?>
      <div id="about">
        <div id="heading">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Название *</span>
            </div>
            <input type="text" class="form-control" name = "headler" value="<?php if (!empty($_POST['headler'])) echo $_POST['headler']?>">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Цена</span>
            </div>
            <input type="number" class="form-control" name = "zena_post" value="<?php if (!empty($_POST['zena_post'])) echo $_POST['zena_post']?>">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Цена предоплаты</span>
            </div>
            <input type="number" class="form-control" name = "zena_pre" placeholder="Если есть" value="<?php if (!empty($_POST['zena_pre'])) echo $_POST['zena_pre']?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Дата и время начала *</span>
            </div>
            <input type="date" class="form-control" name = "data_start" value="<?php if (!empty($_POST['data_start'])) echo $_POST['data_start']?>">
            <input type="time" class="form-control" name = "time_start" value="<?php if (!empty($_POST['time_start'])) echo $_POST['time_start']?>">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Дата и время окончания *</span>
            </div>
            <input type="date" class="form-control" name = "data_end" value="<?php if (!empty($_POST['data_end'])) echo $_POST['data_end']?>">
            <input type="time" class="form-control" name = "time_end" value="<?php if (!empty($_POST['time_end'])) echo $_POST['time_end']?>">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Минимальное количество человек</span>
            </div>
            <input type="number" class="form-control" name = "pipl_num" value="<?php if (!empty($_POST['pipl_num'])) echo $_POST['pipl_num']?>">
          </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Тематика *</span>
              </div>
              <select class="custom-select" id="inputGroupSelect01" name ="theme">
                <option selected>Выберите тематику</option>
                <option value="1">Мастер-класс</option>
                <option value="2">Концерт</option>
                <option value="3">Игра</option>
                <option value="4">Мероприятие</option>
                <option value="5">Презентация</option>
                <option value="6">Выставка</option>
                <option value="7">Конференция</option>
                <option value="8">Туризм</option>
              </select>
            </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Краткое описание</span>
            </div>
            <textarea name="comment" class="form-control" style = "width: 100%; height: 20vh" ><?php if (!empty($_POST['comment'])) echo $_POST['comment']?></textarea>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">О мероприятии *</span>
              <button type ='button' class="btn btn-default" title="Добавить фото"><i class="fas fa-camera"></i></button>
            </div>
            <textarea name="about" class="form-control" style = "width: 100%; height: 40vh" ><?php if (!empty($_POST['about'])) echo $_POST['about']?></textarea>
          </div>

        </div>
      <div class="divider"></div>
         <div class="input-group mb-3">
            <div class="input-group">
            <input type="submit" class="btn btn-success" value="Отправить">
            <a href="/serf" class="btn btn-danger">Отмена</a>
        </div>
      </div>
    </div>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>