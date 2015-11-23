<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_collections_cd.css">
	<link rel="stylesheet" type="text/css" href="style_add_photo.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<title>Music application</title>
	</head>
	
	<body>
	
	<script src="general.js"></script>
	<script src="general_img.js"></script>
	<script src="add_photo.js"></script>


	<div class="container">
			
		<div class="header">
			<center>
		<a href="index.php"><img src="logo5.png" alt=""></a>
		</div>
			</center>
		<div id="navbar">
		
			<?php
			@require_once "Session_user.php";
			if(Session_user::isLogged()){
				
			?>
		
			<li><a href="collections_cd.php" align="center">Kolekcja płyt</a></li>
			<li><a href="add_photo.php" align="center">Dodaj płytę</a></li>
			<li><a href="kolekcja.php" align="center">Twoja biblioteka</a></li>
			<li><a href="logout_user.php" align="right">Wyloguj</a></li>
			
		<?php
				
		}
		else{
		?>	
	        <li><a href="collections_cd.php">Kolekcja płyt</a></li>
		    <li><a href="formLogin.php?mode=1" >Logowanie</a></li>
		    <li><a href="register_user.php?mode=1" >Rejestracja</a></li>
		
		<?php
		}
		?>
				
		</div>
			
			<div class="mainspace">
				<div class="news">