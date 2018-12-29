<?php 
include 'options.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="css/style.css" rel="stylesheet" >
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
	<div class="row">
	<h1 class="main_title">Мониторинг раздач</h1></div>
	<div class="row">
		<div class="col-md-9">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_tracker">Добавить трекер</button>
			</div>
		<div class="col-md-3">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_link">Добавить раздачу</button>
			</div>
	</div>
	<p>
	      
	      
	</p>
	 <table class="table table-striped table-bordered table-hover">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Наименование</th>
	          <th>Обновление</th>
	          <th>Скачать</th>
	          <th>Удалить</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td>1</td>
	          <td>Барыги: Мексика</td>
	          <td>29 ДЕКАБРЯ 2018</td>
	          <td>Скачать</td>
	          <td>Удалить</td>
	        </tr>
	        <tr>
	          <td>2</td>
	          <td>Страна приливов</td>
	          <td>29 ДЕКАБРЯ 2018</td>
	          <td>Скачать</td>
	          <td>Удалить</td>
	        </tr>
	        <tr>
	          <td>3</td>
	          <td>1Викинги</td>
	          <td>29 ДЕКАБРЯ 2018</td>
	          <td>Скачать</td>
	          <td>Удалить</td>
	        </tr>
	      </tbody>
	    </table>
</div>	
<!-- Modal 1 -->
<div class="modal fade" id="add_tracker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Добавить Трекер</h4>
      </div>
      <div class="modal-body">
		  <form class="form-horizontal" role="form">
		  	<div class="form-group">
			    <label for="inputNameTracker" class="col-sm-2 control-label">Название</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputNameTracker" placeholder="Название">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputLogin" class="col-sm-2 control-label">URL</label>
			    <div class="col-sm-10">
			      <input type="url" class="form-control" id="inputUrlTracker" placeholder="Ссылка">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputLogin" class="col-sm-2 control-label">Login</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputLogin" placeholder="Login">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
			    </div>
			  </div>
		  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить</button>
      </div>
    </div>
  </div>
</div>

<!-- Moda2 -->
<div class="modal fade" id="add_link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Добавить раздачу</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
		  	<div class="form-group">
			    <label for="inputNameTracker" class="col-sm-2 control-label">Название</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputNameTracker" placeholder="Название">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputLogin" class="col-sm-2 control-label">URL</label>
			    <div class="col-sm-10">
			      <input type="url" class="form-control" id="inputUrlTracker" placeholder="Ссылка">
			    </div>
			  </div>
		  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>