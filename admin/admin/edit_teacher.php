<?php 
	include '../vendor/bd.php';

	if(isset($_GET['id'])){
	$id = $_GET['id'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Редактирование преподавателей</title>
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
				<h3 class="h3-admin col-12">Редактирование преподавателей</h3>
				<?php include("blocks/nav_admin_block.php");?>
				<div class="admin_block col-8">
					<?php 
			if(!isset($_GET['id'])){
			
			$result = mysqli_query($db,"SELECT id, name FROM `teachers`");
			$myrow = mysqli_fetch_assoc($result);

			do{
				printf("<p><a href='edit_teacher.php?id=%s'>%s</a></p>",$myrow['id'],$myrow['name']);
			}

			while($myrow = mysqli_fetch_assoc($result));
			}
			else{

			$result = mysqli_query($db,"SELECT * FROM `teachers` WHERE id='$id'");
			$myrow = mysqli_fetch_assoc($result);

print <<<HERE
<form method="POST" action="update_teacher.php">
<label class="col-12">Введите ФИО преподавателя:</label>
<input class="col-7" type="text" name="name" value="$myrow[name]">
<label class="col-12">Введите язык, которому обучает преподаватель:</label>
<input class="col-7" type="text" name="language" value="$myrow[language]">
<label class="col-12">Введите краткое описание преподавателя:</label>
<textarea class="col-7" cols="40" rows="12"  name="description" value="">$myrow[description]</textarea>
<label class="col-12">Введите достижения преподавателя:</label>
<textarea class="col-7" cols="40" rows="12"  name="achievements" value="">$myrow[achievements]</textarea>
<label class="col-12">Отредактируйте фото преподавателя фото преподавателя:</label>
<input class="col-7" type="text" name="image" value="$myrow[image]">

<input type="hidden" name="id" value="$myrow[id]">


<input class="col-3 admin_btn" type="submit" name="submit" value="Сохранить изменения">

</form>
HERE;
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