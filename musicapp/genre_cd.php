<script src="js/general_img.js"></script>
<?php
@require_once "Session_user.php";
$id_genre = $_POST['id_genre'];
$genre=(string)$id_genre;

	//wyświetlanie płyt w zależności od gatunku
	$sql = "SELECT al.cover, al.title, ba.name FROM album al, band ba, album_band ab, genre ge 
					WHERE al.id_album=ab.id_album AND ab.id_band=ba.id_band AND al.id_genre=ge.id_genre AND ge.id_genre='$genre'";
			if($result=mysql_query($sql)){
				while($row = mysql_fetch_array($result)){
					echo "<figure  class=\"cap-bot\" >";
					echo "<a href=open_cd.php?id_image=".$row[0]."><img src=\"images/covers/cover_".$row[0].".jpg\" class=\"image\" id=".$row[0]."></a>";
					echo "<figcaption >".$row[1]."</br>".$row[2]."</figcaption>";
					echo "</figure>";		
					}
				}




?>