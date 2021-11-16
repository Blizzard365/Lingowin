<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Онлайн школа иностранных языков "LingoWin"</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php include("blocks/header_login.php");?>
	
	<main>
		<div class="banner ">
			<div class="block_text_banner1 ">
				<p class="text_banner1">Запишись к нам на курсы прямо сейчас</p>
			</div>
			<div class="block_text_banner2 ">
				<p class="text_banner2">Учи языки вместе с нами!</p>
			</div>
			<div class="poz1 ">
				<a class="banner_btn" href="servises_login.php">ЗАПИСАТЬСЯ НА КУРС</a>
			</div>
			<div class="poz2">
				<a class="banner_btn" href="servises_login.php">ОПЛАТИТЬ КУРС</a>
			</div>
		</div>
		<section class="main_bar">
			<div class="container container-fluid">
				<div class="row">
					<div class="bar_block col-3">
						<div class="img_circle">
							<img src="img/grammar1.jpg">
						</div>
						<div class="p_block">
							<p>ГРАМАТИКА</p>
						</div>
					</div>
					<div class="bar_block col-3">
						<div class="img_circle">
							<img src="img/reading.jpg">
						</div>
						<div class="p_block">
							<p>ЧТЕНИЕ    </p>
						</div>
					</div>
					<div class="bar_block col-3">
						<div class="img_circle">
							<img src="img/ideas.jpg">
						</div>
						<div class="p_block">
							<p>ИДЕИ     </p>
						</div>
					</div>
					<div class="bar_block col-3">
						<div class="img_circle">
							<img src="img/knowleage.jpg">
						</div>
						<div class="p_block">
							<p>ЗНАНИЯ    </p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="container-fluid container">
			<div class="row">
				<div class="evolve_block">
					<div class="title_evolve">
						<p>Развивай свои возможности</p>
					</div>
					<div class="mini_title_evolve">
						<p>ТЫ МОЖЕШЬ ВСЁ!</p>
					</div>
					<div class="">
						<div class="skills_block col-3">
							<div class="img_evolve">
								<img src="img/song.jpg">
							</div>
							<div class="p_evolve">
								<p>SINGING!</p>
							</div>
						</div>
						<div class="skills_block col-3">
							<div class="img_evolve">
								<img src="img/listen.jpg">
							</div>
							<div class="p_evolve">
								<p>LISTENING!</p>
							</div>
						</div>
						<div class="skills_block col-3">
							<div class="img_evolve">
								<img src="img/play.jpg">
							</div>
							<div class="p_evolve">
								<p>PLAYING!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="forms_block">
			<div class="container-fluid container">
				<div class="row">
					<div class="title_forms_block col-12">
						<p>СВЯЖИТЕСЬ С НАМИ</p>
					</div>
					<div class="left_forms_block col-6">
						<div class="p_forms_block">
							<p>По телефону или онлайн</p>
						</div>
						<div class="p_forms_block">
							<img src="img/letter.jpg">
							<p>lingowin.school@mysite.ru</p>
						</div>
						<div class="p_forms_block">
							<img src="img/phone.jpg">
							<p>+7 (800) 555-35-35</p>
						</div>
						<div class="p_forms_block">
							<p class="p_forms_block_last"><span>Адрес</span>: ул. Игнатьевское шоссе 21 Благовещенск, 675028 Россия</p>
						</div>
					</div>
					<div class="right_forms_block col-6">
						<div class="p_right_forms_block">
							<p>У Вас есть навык преподавания? Хотели бы сотрудничать? Свяжитесь с нами здесь:</p>
						</div>
						<div class="right_forms_block form_right_forms_block">
							<form method="" action="" class="form">
								<input class="form-control form_item col-5" type="text" name="fio" placeholder="ФИО">
								<input class="form-control form_item col-5" type="email" name="email" placeholder="E-mail">
								<input class="form-control form_item col-5" type="tel" name="tel" placeholder="Телефон">
								<textarea class="form-control form_item col-5" placeholder="Добавте сообщение..."></textarea>
								<input class="form-control form_button col-4" type="submit" id="submit" name="submit" value="Отправить">
							</form>
						</div>
					</div>
					<div class="map_forms_block col-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2548.672223086743!2d127.51161742329724!3d50.29804612373351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5e89411955555555%3A0xfa7c1857e58f1e6a!2z0JDQvNCT0KM!5e0!3m2!1sru!2sru!4v1619346634070!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
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