<?php
//obsługa dodawania ocen
@require_once "Session_user.php";
$rate_cd_now=$_POST['rate'];
$id_album = $_POST['id_album'];
$sql_rate_count=mysql_query("SELECT count_rate FROM album WHERE cover='$id_album'"); //wyświetlanie aktualnej ilości ocen
$sql_row_rate = mysql_fetch_array($sql_rate_count);

$count_rate_add=(int)$sql_row_rate[0]+1;
$update_count_rate=mysql_query("UPDATE album SET count_rate = '$count_rate_add' WHERE cover = '$id_album'");  //update ilości ocen

$sql_rate_main=mysql_query("SELECT rate FROM album WHERE cover='$id_album'"); //wyświetlenie aktualnej oceny
$sql_row_rate_main = mysql_fetch_array($sql_rate_main);

$rate_main=(($sql_row_rate_main[0]*(int)$sql_row_rate[0])+$rate_cd_now)/$count_rate_add; //średnia ocen
$update_rate=mysql_query("UPDATE album SET rate = '$rate_main' WHERE cover = '$id_album'");  //update oceny
?>