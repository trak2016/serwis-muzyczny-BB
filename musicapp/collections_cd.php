<?php include "header.php";?>  
<div class="search">
			<form method="POST" name="search_form" onsubmit="return submitSearch();">
		        <input type="text" id="search_input" required>
				<input type="submit" value="Szukaj">
			</form>

</div>
<div class="column_right">

<?php
		
			$sql = "SELECT al.cover, al.title, ba.name FROM album al, band ba, album_band ab 
					WHERE al.id_album=ab.id_album AND ab.id_band=ba.id_band";
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

<div class="column_left">

<?php
$sql = "select genre_name, id_genre from genre";
		
		if($result=mysql_query($sql)){
				while($row = mysql_fetch_array($result)){
					echo "<button type=\"button\" class=\"btn\" id=".$row[1].">".$row[0]."</button></br></br>";
					
					}
				}
		
?>


</div>
<div class="clear">
</div>
<?php include "footer.php";?>

