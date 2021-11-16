<?php 
include 'vendor/bd.php';

$result = mysqli_query($db, "SELECT title, text FROM `settings` WHERE page='faq'");

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
		<section class="line">
			<div class="container-fluid container">
				<div class="row">
					<div class="title_line p_u col-12">
						<p>Вопрос - Ответ</p>
					</div>
				</div>
			</div>
		</section>
		<section class="container-fluid container">
			<div class="faq">
				<div class="row">
					<div class="col-6 ask">
						<div class="faq_title">
							<p>Вопросы</p>
						</div>
						<div class="faq_questions">
							<a class="faq_a " href="faq1.php">Как записаться на курс?</a><br>
							<a class="faq_a" href="faq2.php">Какие существуют услуги?</a><br>
							<a class="faq_a" href="faq3.php">Где я могу посмотреть  преподавательский состав?</a><br>
							<a class="faq_a" href="faq4.php">Мне больше 55 могу ли я заниматься у вас?</a><br>
							<a class="faq_a" href="faq5.php">Как зарегистрироваться?</a><br>
						</div>
					</div>
					<div class="col-6 answer">
						<div class="faq_title">
							<p>Ответы</p>
						</div>
						<div class="faq_answers">
							<p><span>Название вопроса?</span></p>
							<p class="l">Здесь будет выводится ответ на интересующий вопрос </p>
						</div>
					</div>
					<div class="clr"></div>
					<?php include("blocks/faq_form.php");?>						
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