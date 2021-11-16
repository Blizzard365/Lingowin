<?php 
	include '../vendor/bd.php';
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
		if($title==''){
		unset($title);
	}
}
	if (isset($_POST['text'])) {
		$text = $_POST['text'];
		if($text==''){
		unset($text);
	}
}
	if (isset($_POST['data'])) {
		$data = $_POST['data'];
		if($data==''){
		unset($data);
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Обработчик</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<section class="container container-fluid">
			<div class="row">
				<div class="">
					<a href="index.php"><img class="img_logo" src="img/logo.jpg" alt="Логотип компании"></a>
				</div>
				<a href="index.php" class="logo"><span>Lingo</span>Win</a>
				<h1 class="h1-admin">Блок администратора</h1>
			</div>
		</section>
	</header>

	<main class="admin">
		<section class="container-fluid container">
			<div class="row">
				<h3 class="h3-admin col-12">Обработчик</h3>
				<?php include("blocks/nav_admin_block.php");?>
				<div class="admin_block col-8">
					<?php
						if (isset($title) && isset($text) && isset($data)){
							$result = mysqli_query($db, "UPDATE news SET `title`='$title', `text`='$text', `data`='$data' WHERE id='$id'"); 
							if($result == 'true'){
								echo "<p>Ваша новость успешно обновлена!</p>";
							}else{
								echo "<p>Ваша новость не обновлена!</p>";
							}
						}else{
							echo "<p>Вы ввели не всю информацию! Поэтому курс в базе не может быть обновлён.</p>";
						}
					?>
				</div>
			</div>
		</section>
	</main>

	<footer></footer>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>