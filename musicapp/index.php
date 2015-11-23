<?php include "header.php";?>  
 
		<div class="column1">
			<div class="titleLastAdd">
				Ostatnio dodane płyty   
			</div>
			<?php
		
			$sql = "SELECT al.cover, al.title, ba.name FROM album al, band ba, album_band ab 
					WHERE al.id_album=ab.id_album AND ab.id_band=ba.id_band";
			if($result=mysql_query($sql)){
				while($row = mysql_fetch_array($result)){
					echo "<figure  class=\"cap-bot\" >";
					echo "<img src=\"images/covers/cover_".$row[0].".jpg\" class=\"image\" id=".$row[0]."></a>";
					echo "<figcaption >".$row[1]."</br>".$row[2]."</figcaption>";
					echo "</figure>";		
					}
				}
			?>
			</div>
	 
	    <div class="column2">
		   <div class="titleTop">
				Najwyżej oceniane płyty   
				</div><center>
				<?php 
		
				$sql = "SELECT al.cover, al.title, ba.name FROM album al, band ba, album_band ab 
						WHERE ((SELECT count(al.title) FROM album al1 where al1.rate>al.rate)<5) 
						AND al.id_album=ab.id_album AND ab.id_band=ba.id_band";
				if($result=mysql_query($sql)){
					while($row = mysql_fetch_array($result)){
					echo "<figure class=\"cap-bot2\">";
					echo "<img  src=\"images/covers/cover_".$row[0].".jpg\" class=\"imageTop\" id=".$row[0]."></a>";
					echo"<figcaption>".$row[1]."</br>".$row[2]."</figcaption>";
					echo "</figure>";				
					}
				}
				?>
				</div></center>
				
					
        
		<div class="clear">
	    </div>
		
<?php include "footer.php";?>   
	