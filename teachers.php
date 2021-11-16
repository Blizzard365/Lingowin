<?php 
include 'vendor/bd.php';

$result = mysqli_query($db, "SELECT title, text FROM `settings` WHERE page='teachers'");

$myrow = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $myrow['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php include("blocks/header.php");?>

	<main>
		<?php echo $myrow['text']; ?>
	<section class="container-fluid container">
			<div class="row">
				<div class="teachers">
						<?php 
						$result = mysqli_query($db, "SELECT id, name, language,description, image FROM `teachers`");

						$myrow = mysqli_fetch_assoc($result);

						
						do{
							printf("
						<div class='teachers_block col-3'>
							<div class='photo_teacher col-12'>
								<a href=''><img src='%s'></a>
							</div>
							<div class='name_teacher col-12'>
								<p class='name_teacher_p'>%s</p>
								<p class='lng_teacher'><span>%s</span></p>
							</div>
							<div class='opisanie_teacher col-12'>
								<p>%s</p>
							</div>
						</div>
								", $myrow['image'], $myrow['name'], $myrow['language'], $myrow['description']);
						}
						while ($myrow = mysqli_fetch_assoc($result));
						 ?>
				</div>
			</div>
		</section>
	</main>
	

	<?php include("blocks/footer.php");?>

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>