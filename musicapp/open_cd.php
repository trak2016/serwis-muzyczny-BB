<script src="general_img.js"></script>
<?php
@require_once "Session_user.php";
$table = $_POST['id_image'];


$sql = "SELECT cover FROM album 
		WHERE id_album='$table'";
		
		if($result=mysql_query($sql)){
				while($row = mysql_fetch_array($result)){
					echo  "<img src=\"images/covers/cover_".$row[0].".jpg\" class=\"imageTop\">";
					}
				}
		
?>

