<meta charset="utf-8">

<?php 
@require_once "Session_user.php";

$title_track=$_GET['title_track'];
$id_album=$_GET['id_album'];


//Dodawanie utworu
$allowedExts = array("mp3", "mp4", "ogg", "opus", "wav");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);



if ((($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/mp4")
|| ($_FILES["file"]["type"] == "audio/ogg")
|| ($_FILES["file"]["type"] == "audio/opus")
|| ($_FILES["file"]["type"] == "audio/wav"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
		
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		
    } else {
        $filename =$_FILES["file"]["name"];
       	move_uploaded_file($_FILES["file"]["tmp_name"],"track/".$title_track."_".$id_album.".mp3");
	
	  $sql_add_track=mysql_query("INSERT INTO track(name, id_album) VALUES ('$title_track','$id_album')"); 
	   
	  			
        }
		
    
} else {
 
	echo "<script>
	swal({   
	title: \"\",   
	text: \"Brak pliku lub nieprawidłowy format!\",  
	type:'error',
	showConfirmButton:true,
	confirmButtonColor: '#27a387'}
	);
	return false;
	</script>";
	
}
?>

