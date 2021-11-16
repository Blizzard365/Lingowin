 <?php 
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<?php include("blocks/header_login.php");?>
 <main class="container main">
 	<?php 
$result = mail("$_POST[email]","Поздравляем вы записаны на курс","Добрый день: \n $_POST[name], благодарим Вас запись на наш курс.  \n\n С уважением ваш web-сервис");
if ($result==1) {
	echo "<p>Сообщение отправлено!</p>";
}
else {
	echo "<p>Сообщение НЕ отправлено!</p>";
}
 ?>
 </main>
 	<?php include("blocks/footer.php");?>
 	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>
 
 