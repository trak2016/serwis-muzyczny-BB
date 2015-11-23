<?php
@require_once "Session_user.php";

//pobieranie ostatniego id płyty
$sql_id_img = mysql_query("SELECT MAX(cover) FROM album");
if($sql_id_img === FALSE) { 
    die(mysql_error()); 
}
while($row = mysql_fetch_array($sql_id_img)){
	$id_max=$row[0];
}
$id_max_last=$id_max+1; 

//dane płyty z formularza
$title_cd=$_POST['title_cd'];
$band_cd=$_POST['band_cd'];
$select_genre_id=$_POST['select_genre_id'];

//dodawanie zespołu
$sql_band="SELECT name FROM band WHERE name='$band_cd'";
$row=mysql_query($sql_band);
if(mysql_num_rows($row)==0){
	$sql_band_add=mysql_query("INSERT INTO band(name) VALUES ('$band_cd')");
}
//dodawanie danych o albumie
$sql_album_add=mysql_query("INSERT INTO album(title,rok,rate,cover,status,id_genre) VALUES('$title_cd','NOW()','0','$id_max_last','1','$select_genre_id')");

//dodawanie album_band

$sql_id_band = mysql_query("SELECT id_band FROM band WHERE name='$band_cd'");
$row_id_band = mysql_fetch_array($sql_id_band);
$sql_id_album= mysql_query("SELECT id_album FROM album WHERE title='$title_cd'");
$row_id_album = mysql_fetch_array($sql_id_album);

$sql_album_band_add=mysql_query("INSERT INTO album_band(id_album,id_band) VALUES('$row_id_album[0]','$row_id_band[0]')");
if($sql_album_add === FALSE) { 
    die(mysql_error()); 

?>