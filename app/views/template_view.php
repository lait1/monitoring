<!DOCTYPE html>
<html lang="ru">
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
	      <?php 
		include 'app/views/'.$content_view; 
	      ?>

</div>	
<!-- Modal 1 -->
<div class="modal fade" id="add_tracker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form class="form-horizontal" role="form" method="post" action="function.php">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel1">Добавить Трекер</h4>
	      </div>
	      <div class="modal-body">
			  
			  	<div class="form-group">
				    <label for="inputNameTracker" class="col-sm-2 control-label">Название</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputNameTracker" name="inputNameTracker" placeholder="Название">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputUrlTracker" class="col-sm-2 control-label">URL</label>
				    <div class="col-sm-10">
				      <input type="url" class="form-control" id="inputUrlTracker" name="inputUrlTracker" placeholder="Ссылка">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputLogin" class="col-sm-2 control-label">Login</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputLogin" name="inputLogin" placeholder="Login">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
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
<form class="form-horizontal" role="form" method="post" action="function.php">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Добавить раздачу</h4>
      </div>

      <div class="modal-body">
        
        	<div class="form-group">
				<label for="inputNameLinkTracker" class="col-sm-2 control-label">Трекер</label>
			<div class="col-sm-10">
				<select class="form-control" name="inputNameLinkTracker"
			<?php
			// $query = $connection->query("SELECT Id_track, Name_track FROM trackers");
			// while($tracker = $query->fetch(PDO::FETCH_ASSOC)){ 
			// 	echo'<option value="'.$tracker['Id_track'].'">'.$tracker['Name_track'].'</option>';

			// }
			 ?>
	        	</select>
	        	</div>
			  </div>	
		  	<div class="form-group">
			    <label for="inputNameLink" class="col-sm-2 control-label">Название</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputNameLink" name="inputNameLink" placeholder="Название">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputUrlLink" class="col-sm-2 control-label">URL</label>
			    <div class="col-sm-10">
			      <input type="url" class="form-control" id="inputUrlLink" name="inputUrlLink" placeholder="Ссылка">
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