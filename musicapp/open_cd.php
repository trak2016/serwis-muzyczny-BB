
<?php
header("Content-Type: text/html; charset=utf-8"); 
?>

<?php include "header.php";?> 

<div class="column_right_open">

	<?php
	@require_once "Session_user.php";
	$table = $_GET['id_image'];



	$sql = "SELECT cover FROM album 
			WHERE cover='$table'";
			
			if($result=mysql_query($sql)){
					while($row = mysql_fetch_array($result)){
						echo  "<img src=\"images/covers/cover_".$row[0].".jpg\" class=\"imageOpen\">"; //wyświetlenie okładki płyty
						}
					}
				
	?>

	<div class="comments">

		<form method="POST" id="comment_show" name="comment_show_name" onsubmit="return submitComment();"  >
		<?php if(Session_user::isLogged()){	?>
		<textarea id="comment" name="comment" cols="10" rows="4" required></textarea>
		<input type="hidden" id="id_album" name="id_album" value="<?php echo $table;?>" >
		<input type="submit" value="Dodaj komentarz" id="btn_comment" >
		<?php }?>
		</form>

		</div>	
		<div class="comments_show">
		<?php

		//wyświetlanie komentarzy
		$sql_id_album = mysql_query("SELECT id_album FROM album WHERE cover='$table'");
		$row_id_album = mysql_fetch_array($sql_id_album);
			$sql = "SELECT login us, text com FROM user us, comment com
					WHERE us.id_user=com.id_user AND id_album='$row_id_album[0]'";
					if($result=mysql_query($sql)){
						while($row = mysql_fetch_array($result)){
							echo "<div class=\"name_user\">";
							echo $row[0];
							echo "</div>";
							echo "<div class=\"comment_user\">";
							echo $row[1];
							echo "</div>";
							}
						}
		?>


	</div>
</div>
<div class="column_left_open">

		<?php
		//wyświetlenie kategorii
		$sql_category="SELECT ge.genre_name FROM genre ge, album al WHERE ge.id_genre=al.id_genre AND al.cover='$table'";
		if($result=mysql_query($sql_category)){
						while($row = mysql_fetch_array($result)){	
						echo "<div class=\"category_title\">";
						echo "<i6>".$row[0]."</i6>";
						echo "</div>";

						}
		}


		$sql_rate = mysql_query("SELECT rate FROM album WHERE cover='$table'");
		$row_rate = mysql_fetch_array($sql_rate);
		$round_rate=round($row_rate[0]);

		$round_rate_str=(string)$round_rate;

		?>

		<div class="rate_disp">
			<?php
			echo "<div class=\"rate_show\">ocena:<span id=\"row_rate\">".$row_rate[0]."</span></div>";

			?>

		 </div>
		<div class="ratingg" id="star_rate">
			<fieldset class="rating";>
									<input class="stars" type="radio" id="star5" name="rating" value="5" />
									<label class = "full" for="star5" title="Świetna płyta!"></label>
									<input class="stars" type="radio" id="star4" name="rating" value="4" />
									<label class = "full" for="star4" title="Dobra płyta!"></label>
									<input class="stars" type="radio" id="star3" name="rating" value="3" />
									<label class = "full" for="star3" title="OK!"></label>
									<input class="stars" type="radio" id="star2" name="rating" value="2" />
									<label class = "full" for="star2" title="Średnia"></label>
									<input class="stars" type="radio" id="star1" name="rating" value="1" />
									<label class = "full" for="star1" title="Słaba :("></label>
			</fieldset>
		</div>

		<script>
		document.getElementById("star"+'<?php echo $round_rate_str; ?>').checked = true;
		</script>

		<?php   //wyświetlenie tytułu płyty, nazwy zespołu i opisu
		$sql_title = "SELECT al.title, ba.name, al.describe_cd FROM album al, band ba, album_band ab 
							WHERE al.id_album=ab.id_album AND ab.id_band=ba.id_band AND al.cover='$table'";
				if($result=mysql_query($sql_title)){
						while($row = mysql_fetch_array($result)){	
					echo "<div class=\"title_cd_disp\">";		
					echo "".$row[0]."</div>";
					echo "<div class=\"band_cd_disp\">";
					echo "".$row[1]."</div>";
					echo "<div class=\"describe_cd_disp\">";
					echo "".$row[2]."";	
					echo "</div>";
					
					
						}
				}
		?>


			<div class="list_track">
				<h4>Lista utworów</h4>

				<?php
				//wyświetlanie listy utworów
				$sql_list_track="SELECT name tr FROM track tr, album al WHERE tr.id_album=al.id_album AND cover='$table'";
				if($result=mysql_query($sql_list_track)){
					while($row = mysql_fetch_array($result)){	
						$title=$row[0];
						$msg="<div class=\"ui360\"><a href=\"track/".$title."_".$table.".mp3\">$title</a></div>";
						echo $msg;
						}
				}
					if(Session_user::isLogged()){   
					//formularz dodawania utworu
				?>

				</br><h4><input type="button" id="show" value="+ Dodaj utwór"/> <input type="button" id="hide" value="- Dodaj utwór">		

					
				<div id="add_track">
						
					<form method="post" id="add_track_form" name="add_track_form"  onsubmit="return submitAddTrack();" >
					<input type="hidden" id="id_album" name="id_album" value="<?php echo $table;?>" >
					<p>Tytuł:<input type="text" id="title_track" class="input_add_track" required><p>
					<label> </label><br>

					<input type="file" name="file" accept="audio/*"/>
					<input type="submit" value="Dodaj utwór" />
					</form>
				
					
				</div> 
				<?php
					}
				?>
			</div>		


</div>



<div class="clear">
</div>



<?php include "footer.php";?>