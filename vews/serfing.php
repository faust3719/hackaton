<!DOCTYPE html>
	<html>
	  <head>
	    <title>Create!</title>
			<!-- Кодировка веб-страницы -->
	    <meta charset="utf-8">
	    <!-- Настройка viewport -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Подключаем Bootstrap CSS -->
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

           <link rel="stylesheet" href = "./tamplate/css/style.css">
      <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
		  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
      <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
      <script type="text/javascript">
             ymaps.ready(init);
    var map, placemark;

    function init(){
        map = new ymaps.Map("map", {
             center: [53.35005, 83.75985],
             zoom: 17
        });

        placemark = new ymaps.Placemark([53.35005, 83.75985], {
            hintContent: 'Первый проект',
            balloonContent: '<div class="title"><img src = "./tamplate/img/174150_603x354.jpg" hspsce = "10px" width = "100%" height = "auto"><p>Очень важный общественный проект</p></div><div class="progress" style = "opacity: 0.7;"><div style = "width:100%; font-size: 15px; text-align:center; position : absolute; color: black">10 000/60 000</div><div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div><div class="owerview">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a</div><button type = "button" class = "btn btn-primary w-100">Поддержать проект!</button>'
        });

        map.geoObjects.add(placemark);
    


  map.events.add('click', function(ev) {
                // Убираем css класс selected-html-element у абсолютно всех элементов на странице с помощью селектора "*":
                $('*').removeClass('selected-html-element');
                // Удаляем предыдущие вызванное контекстное меню:
                $('.context-menu').remove();
         });

  map.events.add('contextmenu', function(ev) {
    var coords = ev.get('coords');
   // alert(coords.join(', '));
     // ev объект с данными о событии (MouseEvent, в данном случае)
                  
                      // Убираем css класс selected-html-element у абсолютно всех элементов на странице с помощью селектора "*":
                $('*').removeClass('selected-html-element');
                // Удаляем предыдущие вызванное контекстное меню:
                $('.context-menu').remove();
                    // Получаем элемент на котором был совершен клик:
                    var target = $(event.target);
                    // Добавляем класс selected-html-element что бы наглядно показать на чем именно мы кликнули (исключительно для тестирования):
                    target.addClass('selected-html-element');
                    // Создаем меню:
                    $('<div/>', {
                        class: 'context-menu' // Присваиваем блоку наш css класс контекстного меню:
                    })
                    .css({
                        left: event.pageX+'px', // Задаем позицию меню на X
                        top: event.pageY+'px' // Задаем позицию меню по Y
                    })
                    .appendTo('body') // Присоединяем наше меню к body документа:
                    .append( // Добавляем пункты меню:
                        $('<ul>', {class: "list-group-item"}).append('<li class="list-group-item"><a href="serf/create">Создать объект</a></li>')
                                  .append('<li class="list-group-item"><a href="#">Показать случайный проект</a></li>')
                                  .append('<li class="list-group-item"><a href="#">Фильтр</a></li>')
                           )
                     .show('fast'); // Показываем меню с небольшим стандартным эффектом jQuery. Как раз очень хорошо подходит для меню
              });

    }
        </script>

	  	</head>

		<body>
<style>

.dg-zoom__hide
{
  border-radius: 15%;
  top: 46px;
  left: 10px;
  box-shadow: 0 2px 3px 0 rgba(0,0,0,.3);
  position: absolute!important;
  margin: auto;
  width: 28px;
  height: 28px;
  z-index: 10;
}
.dg-zoom__button_type_hide
{
  position: relative;
  display: block;
  width: 28px;
  height: 28px;
  border-radius: 15%;
  background-color: #fff;
  color: #2b2a29;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  line-height: 23px;
  cursor: pointer;
}
</style>
 	<div class = "row">
		<nav id ="sidebar" class = "col-md-3 col-sm-4" style = "text-align: center; box-shadow: 0 0 20px rgba(0,0,0,0.8); z-index: 10; padding:0">
			<div class="face_icon" style="text-align: center; font-size: 50px;">
				<i class="fas fa-user-circle"></i>
			</div>
			<ul class="list-group" >
				<a href="#"><li class="list-group-item">Профиль</li></a>
				<a href="#"><li class="list-group-item">Настройки</li></a>
				<a href="#"><li class="list-group-item">Мои проекты</li></a>
				<a href="#"><li class="list-group-item">Мои донаты</li></a>
			</ul>
		</nav>
  
		<div class = "col-md-9 col-sm-8" style="padding:0">
				  <div id="map" style="width:100%; height:97.5vh; min-height: 99%">
					  <span class="dg-zoom__hide" title="Скрыть меню">
						  <div id ="sidebarCollapse"  onclick="collapse()"  class="dg-zoom__button_type_hide">
							  <i class="fas fa-bars"></i>
						  </div>
					  </span>
				  </div>
		</div>
  </div>
	<!-- Подключаем jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Подключаем плагин Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- Подключаем Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
 document.oncontextmenu = function() {return false;};

jQuery.fn.exists = function() {
 return $(this).length;
}


	  var show = true;
	    function collapse () {
	      if(show == false)
	      {
	       	$('#sidebar').show(300);
	        show = true;
	      }
				else
	      {
	        $('#sidebar').hide(300);
	        show = false;
	      }
	    }
			</script>
	  </body>
	</html>