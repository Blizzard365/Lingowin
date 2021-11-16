<?php 
	session_start();
	require_once "bd.php";

	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$password =  $_POST['password']; 
	$password_rep =  $_POST['password_rep']; 

	if($password === $password_rep){

		//$FILES
		$path = 'uploads/' . time() . $_FILES['avatar']['name'];
		
		if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
			$_SESSION['message'] = 'Ошибка при загрузке картинки';
		header('Location: ../register.php');
		}

		$password = md5($password);
		$result = mysqli_query($db, "INSERT INTO `users` (`name`, `email`, `password`, `avatar`) VALUES ('$name', '$email', '$password', '$path')");
		$_SESSION['message'] = 'Регистрация прошла успешно!';
		header('Location: ../vhod.php');

	}else{
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location: ../register.php');
	}

 ?>





