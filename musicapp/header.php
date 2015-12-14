<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_collections_cd.css">
	<link rel="stylesheet" type="text/css" href="css/style_add_photo.css">
	<link rel="stylesheet" type="text/css" href="css/style_open_cd.css">
	<link type="text/css" rel="stylesheet" href="css/pop_up_login.css" />
	<link type="text/css" rel="stylesheet" href="css/style_rating.css" />
	
	<script type="text/javascript" src="soundmanager2/script/soundmanager2.js"></script>
	<script type="text/javascript" src="soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>
	<link href="soundmanager2/360-player/360player.css" rel="stylesheet">
	<link href="soundmanager2/360-player/360player-visualization.css" rel="stylesheet">
	<script type="text/javascript" src="soundmanager2/360-player/script/berniecode-animator.js"></script>
	
	<script type="text/javascript" src="soundmanager2/360-player/script/excanvas.js"></script>
	<script type="text/javascript" src="soundmanager2/360-player/script/360player.js"></script>

    <script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	
	<title>Music application</title>
	</head>

	<body>

	<script src="js/general_img.js"></script>
	<script src="js/add_photo.js"></script>
	<script src="js/add_track.js"></script>
	<script src="js/showhide.js"></script>
	<script src="js/active_tab.js"></script>
	<script src="js/modal_trigger.js"></script>
	<script src="js/open_cd.js"></script>
	<script src="js/search_cd.js"></script>
	<script src="js/rate_star.js"></script>


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
			</ul> 
			
			<div id="navbar_right">
			<li><i7><?php echo "Witaj, ".$_SESSION['login']; ?></i7><li>
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