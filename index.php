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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<h1>Lorem ipsum dolor sit amet</h1>
<form class="main_form"  method="post">
	<label for="login">Имя пользователя</label><br>
	<input type="text"  name="login" id="login" required><Br>

	<label for="password">Пароль</label><br>
	<input type="password"  name="password" id="password" required><Br>

	<input type=submit value=Выбрать name="submit">
</form>
<p><a href="register.php">Зарегистрироваться</a></p>
</body>
</html>