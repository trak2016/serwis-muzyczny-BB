<?php
		
		$sql = "SELECT al.cover, al.title, ba.name FROM album al, band ba, album_band ab 
				WHERE al.id_album=ab.id_album AND ab.id_band=ba.id_band";
		if($result=mysql_query($sql)){
			while($row = mysql_fetch_array($result)){
			echo "<figure class=\"cap-bot2\">";
		
			echo  "<img  src=\"images/covers/cover_".$row[0].".jpg\" class=\"imageTop\"  >";
			echo"<figcaption>".$row[1]."</br>".$row[2]."</figcaption>";
			echo "</figure>";
	
							
			}
		}
		?>