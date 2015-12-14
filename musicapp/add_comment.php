
<?php
@require_once "Session_user.php";
$comment = $_POST['comment'];
$id_album = $_POST['id_album'];
$login_session=$_SESSION['login'];


$sql_id_album = mysql_query("SELECT id_album FROM album WHERE cover='$id_album'");
$row_id_album = mysql_fetch_array($sql_id_album);


$sql_id_user = mysql_query("SELECT id_user FROM user WHERE login='$login_session'");
$row_id_user = mysql_fetch_array($sql_id_user);


$sql_add_comment=mysql_query("INSERT INTO comment(id_user,text,id_album) VALUES('$row_id_user[0]','$comment','$row_id_album[0]');");
	
?>