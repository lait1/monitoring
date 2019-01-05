<!DOCTYPE html>
<html lang="ru">
<head>
	<link href="css/style.css" rel="stylesheet" >
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<h1 class="main_title">Мониторинг раздач</h1></div>
	<div class="row">
			<p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_tracker">Добавить трекер</button></p>
			<p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_link">Добавить раздачу</button></p>
			<p><button id="#update" type="button" class="btn btn-info" data-toggle="modal" data-target="#update">Проверить состояние</button></p>
	</div>
	<br>
	      <?php 
		include 'app/views/'.$content_view; 
	      ?>

</div>	
<!-- Modal 1 -->
<div class="modal fade" id="add_tracker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" role="form" method="post" action="tracker/create">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel1">Добавить Трекер</h4>
	      </div>
	      <div class="modal-body">
			  
			  	<div class="form-group">
				    <label for="inputNameTracker" class="col-sm-2 control-label">Название</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputNameTracker" name="Name_track" placeholder="Название">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputUrlTracker" class="col-sm-2 control-label">URL</label>
				    <div class="col-sm-10">
				      <input type="url" class="form-control" id="inputUrlTracker" name="Link_track" placeholder="Ссылка">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputLogin" class="col-sm-2 control-label">Login</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputLogin" name="login_track" placeholder="Login">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="inputPassword" name="pass_track" placeholder="Password">
				    </div>
				  </div>
			  
	      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary" name="subTracker">Сохранить</button>
      </div>

    </form>
  	</div>
	</div>
</div>
<!-- Moda2 -->
<div class="modal fade" id="add_link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
<form class="form-horizontal" role="form" method="post" action="main/create">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Добавить раздачу</h4>
      </div>

      <div class="modal-body">
        
        	<div class="form-group">
				<label for="inputNameLinkTracker" class="col-sm-2 control-label">Трекер</label>
			<div class="col-sm-10">
				<select class="form-control" name="Name_track">
	        	</select>
	        	</div>
			  </div>	
		  	<div class="form-group">
			    <label for="inputNameLink" class="col-sm-2 control-label">Название</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputNameLink" name="Name_link" placeholder="Название">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputUrlLink" class="col-sm-2 control-label">URL</label>
			    <div class="col-sm-10">
			      <input type="url" class="form-control" id="inputUrlLink" name="Distrib_link" placeholder="Ссылка">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputLastLink" class="col-sm-2 control-label">Обновление</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" id="inputLastLink" name="last_update" placeholder="Ссылка">
			    </div>
			  </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary" name="subLink">Сохранить</button>
      </div>

 </form>
  </div>
</div>
</div>
</body>
</html>