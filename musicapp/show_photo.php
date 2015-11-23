<?php
@require_once "Session_user.php";
$sql_id_img = mysql_query("SELECT MAX(cover) FROM album");

if($sql_id_img === FALSE) { 
    die(mysql_error()); 
}
while($row = mysql_fetch_array($sql_id_img)){
	$id_max=$row[0];
}
$id_max_last=$id_max+1;


//Dodawanie okładki
$allowedExts = array("jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
		
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		
    } else {
        $filename =$_FILES["file"]["name"];
       	move_uploaded_file($_FILES["file"]["tmp_name"],"images/covers/cover_".$id_max_last.".jpg");
	
		echo "<img src=\"images/covers/cover_".$id_max_last.".jpg\" class='image_show'>";
     
			
        }
		
    
} else {
 
	echo "<script>
	swal({   
	title: \"Spróbuj ponownie!\",   
	text: \"Brak pliku lub nieprawidłowy format.\",  
	type:'error',
	showConfirmButton:true,
	confirmButtonColor: '#27a387'}
	);
	
	</script>";
}
?>