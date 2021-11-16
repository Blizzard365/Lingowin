<?php 
	include '../vendor/bd.php';
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
		if($title==''){
		unset($title);
	}
}
	if (isset($_POST['language'])) {
		$language = $_POST['language'];
		if($language==''){
		unset($language);
	}
}
	if (isset($_POST['cost'])) {
		$cost = $_POST['cost'];
		if($cost==''){
		unset($cost);
	}
}
	if (isset($_POST['description_short'])) {
		$description_short = $_POST['description_short'];
		if($description_short==''){
		unset($description_short);
	}
}
	if (isset($_POST['description_long'])) {
		$description_long = $_POST['description_long'];
		if($description_long==''){
		unset($description_long);
	}
}
	if (isset($_POST['link'])) {
		$link = $_POST['link'];
		if($link==''){
		unset($link);
	}
}
	if (isset($_POST['link_log'])) {
		$link_log = $_POST['link_log'];
		if($link_log==''){
		unset($link_log);
	}
}
if (isset($_POST['image'])) {
		$image = $_POST['image'];
		if($image==''){
		unset($image);
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Добавление нового курса</title>
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
				<h3 class="h3-admin col-12">Добавление нового курса</h3>
				<?php include("blocks/nav_admin_block.php");?>
				<div class="admin_block col-8">
					<?php
					//$FILES
					$path = 'img/'. time() .  $_FILES['image']['name'];
					
					if(!move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path)){
						}
						$kek = "$path$image";
						if (isset($title) && isset($language) && isset($cost) && isset($description_short) && isset($description_long) && isset($link) && isset($link_log) && isset($image)){
						$result = mysqli_query($db, "INSERT INTO `courses` (`title`, `language`, `cost`, `description_short`, `description_long`, `link`, `link_log`, `image`) VALUES ('$title', '$language', '$cost', '$description_short', '$description_long', '$link', '$link_log', '$kek')"); 
						if($result == 'true'){
							echo "<p>Ваш курс успешно добавлен!</p>";
						}else{
							echo "<p>Ваш курс не добавлен!</p>";
						}
					}else{
							echo "<p>Вы ввели не всю информацию! Пожалуйста заполните все поля.</p>";
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