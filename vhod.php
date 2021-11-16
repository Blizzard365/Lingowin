<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		header('Location: profiles.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Войти/Зарегистрироваться</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<section class="container container-fluid">
			<div class="row">
				<div class="">
					<img class="img_logo" src="img/logo.jpg" alt="Логотип компании">
				</div>
				<div class="logo_block">
					<p class="logo"><span>Lingo</span>Win</p>
				</div>
		</section>
	</header>
	<main class="">
		<section class="container container-fluid reg_block avt_block">
			<div class="row">
				<form class="avt_form" method="POST" action="vendor/signin.php">
					<label class="label" for="email">E-mail:</label>
						<input class="avt_input" type="email" name="email" id="email" placeholder="Введите вашу почту" required="">
					<label class="label" for="password">Пароль:</label>
						<input class="avt_input" type="password" name="password" id="password" placeholder="Введите ваш пароль" required="">
					<input class="avt_button" type="submit" name="submit" id="submit1">
					<p class="p">Нет аккаунта? - <a href="register.php">зарегистрируйтесь</a></p>
					<?php 
						if(isset($_SESSION['message'])){
							echo '<p class="msg"> '. $_SESSION['message'] .' </p>';
						}
							unset($_SESSION['message']);

						 ?>
				</form>
			</div>
		</section>
	</main>
	<footer>
		<section class="container-fluid container">
			<div class="row">
				<div class="col-3 footer_block">
					<p>© 2021 :LingoWin" Copyrated.</p>
				</div>
				<div class="col-3 footer_block">
					<p>info.lingowin.school@mysite.ru</p>
				</div>
				<div class="col-3 footer_block">
					<p>Ул. Игнатьевское шоссе, 21, Благовещенск</p>
				</div>
				<div class="col-3 footer_block">
					<a href="https://www.facebook.com"><img src="img/facebook.png"></a>
					<a href="https://www.twitter.com"><img src="img/twitter.png"></a>
					<a href="https://www.instagram.com"><img src="img/instagram.png"></a>
				</div>
			</div>
		</section>
	</footer>
</body>
</html>