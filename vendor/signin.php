<?php 
	session_start();
	require_once "bd.php";

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
	if(mysqli_num_rows($check_user) > 0){
		$user = mysqli_fetch_assoc($check_user);
		$_SESSION['user'] = [
			"id" => $user['id'],
			"name" => $user['name'],
			"email" => $user['email'],
			"avatar" => $user['avatar']
		]; 
		header('Location: ../profiles.php');
	}else{
		$_SESSION['message'] = 'Неверный e-mail или пароль';
		header('Location: ../vhod.php');
	}
 ?>