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

	<link rel="stylesheet" href="http://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
	<link href="http://demos.creative-tim.com/fresh-bootstrap-table/assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
	<script type="text/javascript" src="http://demos.creative-tim.com/fresh-bootstrap-table/assets/js/bootstrap-table.js"></script>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="fresh-table ">

						<div>
							<h1>Участвую</h1>
						</div>

						<table id="fresh-table" class="table">
							<thead>
							<th data-field="id">ID</th>
							<th data-field="name" data-sortable="true">Название</th>
							<th data-field="start" data-sortable="true">Начало</th>
							<th data-field="end" data-sortable="true">Конец</th>
							<th data-field="place">Место встречи</th>
							</thead>
							<tbody>
							
							<?php
							$user=$_SESSION['auth'];
							$user=db::dbSelect("SELECT user.id FROM user WHERE user.auth = '$user'")[0]['id'];
							$temp=db::dbSelect("SELECT event.* FROM going INNER JOIN event ON going.event = event.id WHERE going.user = " . $user);
							foreach ($temp as $data) :?>
							<tr>
								<td><?=$data['id']?></td>
								<td><a href="/view/<?=$data['id']?>"> <?=$data['title']?></a></td>
								<td><?=$data['start_date']." ".$data['start_time']?></td>
								<td><?=$data['end_date']." ".$data['end_time']?></td>
								<td><?=$data['place']?></td>
							</tr>
							<?php
							endforeach;
							?>
							</tbody>
						</table>
					</div>

				<div class="fresh-table ">

						<div>
							<h1>Организовываю</h1>
						</div>

						<table id="fresh-table" class="table">
							<thead>
							<th data-field="id">ID</th>
							<th data-field="name" data-sortable="true">Название</th>
							<th data-field="start" data-sortable="true">Начало</th>
							<th data-field="end" data-sortable="true">Конец</th>
							<th data-field="place">Место встречи</th>
							</thead>
							<tbody>
							
							<?php
							$user=$_SESSION['auth'];
							$user=db::dbSelect("SELECT user.id FROM user WHERE user.auth = '$user'")[0]['id'];
							$temp=db::dbSelect("SELECT event.* FROM event WHERE user = " . $user);
							foreach ($temp as $data) :?>
							<tr>
								<td><?=$data['id']?></td>
								<td><a href="/view/<?=$data['id']?>"> <?=$data['title']?></a></td>
								<td><?=$data['start_date']." ".$data['start_time']?></td>
								<td><?=$data['end_date']." ".$data['end_time']?></td>
								<td><?=$data['place']?></td>
							</tr>
							<?php
							endforeach;
							?>
							</tbody>
						</table>
					</div>


				</div>
			</div>
		</div>
	</div>

	<script>
		var $table = $('#fresh-table'),
			$alertBtn = $('#alertBtn'),
			full_screen = false;

		$().ready(function(){
			$table.bootstrapTable({

				showRefresh: true,
				search: true,
				showToggle: true,
				showColumns: true,
				pagination: true,
				striped: true,
				pageSize: 8,
				pageList: [8,10,25,50,100],

				formatShowingRows: function(pageFrom, pageTo, totalRows){
					//do nothing here, we don't want to show the text "showing x of y from..."
				},
				formatRecordsPerPage: function(pageNumber){
					return pageNumber + " rows visible";
				},
				icons: {
					refresh: 'fa fa-refresh',
					toggle: 'fa fa-th-list',
					columns: 'fa fa-columns',
					detailOpen: 'fa fa-plus-circle',
					detailClose: 'fa fa-minus-circle'
				}
			});



			$(window).resize(function () {
				$table.bootstrapTable('resetView');
			});


			window.operateEvents = {
				'click .like': function (e, value, row, index) {
					alert('You click like icon, row: ' + JSON.stringify(row));
					console.log(value, row, index);
				},
				'click .edit': function (e, value, row, index) {
					alert('You click edit icon, row: ' + JSON.stringify(row));
					console.log(value, row, index);
				},
				'click .remove': function (e, value, row, index) {
					$table.bootstrapTable('remove', {
						field: 'id',
						values: [row.id]
					});

				}
			};


		});


		function operateFormatter(value, row, index) {
			return [
				'<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
				'<i class="fa fa-heart"></i>',
				'</a>',
				'<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
				'<i class="fa fa-edit"></i>',
				'</a>',
				'<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
				'<i class="fa fa-remove"></i>',
				'</a>'
			].join('');
		}


	</script></div>
	

</div>

<!-- Подключаем jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Подключаем плагин Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Подключаем Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>