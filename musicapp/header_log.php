<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_collections_cd.css">
	<link rel="stylesheet" type="text/css" href="css/style_add_photo.css">
	<link rel="stylesheet" type="text/css" href="css/style_open_cd.css">
	<link type="text/css" rel="stylesheet" href="css/pop_up_login.css" />
	
    <script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	
	<title>Music application</title>
	</head>

	<body>
	<div class="container">
			
		<?php require_once "Pop_up_login_form.php";?>
		<?php require_once "Pop_up_register_form.php";?>   		
			
		<div class="header">
			<center>
		<a href="index.php"><img src="css/logo5.png" alt=""></a>
		</div>
			</center>
		<div id="navbar">
		
			<?php
			@require_once "Session_user.php";
			if(Session_user::isLogged()){
				
			?>
			
			<ul id="nav">
			<li class="active"><a  href="index.php"  >STRONA GŁÓWNA</a></li>
			<li><a  href="collections_cd.php" >KOLEKCJA PŁYT</a></li>
			<li><a  href="add_photo.php"  >DODAJ PŁYTĘ</a></li>
			<li><a  href="kolekcja.php" >TWOJA BIBLIOTEKA</a></li>
			</ul> 
			
			<div id="navbar_right">
			<li><a href="logout_user.php">WYLOGUJ</a><li>
			</div>
			</ul>
		<?php
				
		}
		else{
			
		?>	
			<li><a href="index.php" >STRONA GŁÓWNA</a></li>
	        <li><a href="collections_cd.php">KOLEKCJA PŁYT</a></li>
			<div id="navbar_right">
		    <li><a href="#modal_login" id="modal_login_pop_up">LOGOWANIE</a></li>
		    <li><a href="#modal_register" id="modal_register_pop_up">REJESTRACJA</a></li>
			</div>
		<?php
		}
		?>
				
		</div>
			
			<div class="mainspace">
				<div class="news">
				
				
		<div class="column1">
			<div class="titleLastAdd">
				<i6>OSTATNIO DODANE PŁYTY</i6>
			</div>
			<?php
		
			$sql = "SELECT al.cover, al.title, ba.name FROM album al, band ba, album_band ab 
					WHERE al.id_album=ab.id_album AND ab.id_band=ba.id_band order by rok desc limit 15";
			if($result=mysql_query($sql)){
				while($row = mysql_fetch_array($result)){
					echo "<figure  class=\"cap-bot\" >";
					echo "<a href=open_cd.php?id_image=".$row[0]."><img src=\"images/covers/cover_".$row[0].".jpg\" class=\"image\" id=".$row[0]."></a>";
					echo "<figcaption >".$row[1]."</br>".$row[2]."</figcaption>";
					echo "</figure>";		
					}
				}
			?>
			</div>
	 
	    <div class="column2">
		   <div class="titleTop">
				<i6>NAJWYŻEJ OCENIANE PŁYTY</i6>
				</div><center>
				<?php 
		
				$sql = "SELECT al.cover, al.title, ba.name FROM album al, band ba, album_band ab 
						WHERE ((SELECT count(al.title) FROM album al1 where al1.rate>al.rate)<5) 
						AND al.id_album=ab.id_album AND ab.id_band=ba.id_band";
				if($result=mysql_query($sql)){
					while($row = mysql_fetch_array($result)){
					echo "<figure class=\"cap-bot2\">";
					echo "<a href=open_cd.php?id_image=".$row[0]."><img  src=\"images/covers/cover_".$row[0].".jpg\" class=\"imageTop\" id=".$row[0]."></a>";
					echo"<figcaption>".$row[1]."</br>".$row[2]."</figcaption>";
					echo "</figure>";				
					}
				}
				?>
				</div></center>
				
					
        
		<div class="clear">
	    </div>