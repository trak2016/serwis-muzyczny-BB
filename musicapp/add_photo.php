<?php include "header.php";?>  

<script src="//code.jquery.com/jquery-1.9.1.js"></script>

<div class="column_right_add_cd">
	<h4>Dane</h4>
	<div class="input_size">

	<form enctype="multipart/form-data" action="" id="form_add_cd" method="POST" onsubmit="return submitCd();">
    <p>Tytuł: <input type="text" id="title_cd" class="input_add"></p>
	<p>Wykonawca:<input type="text" id="band_cd" class="input_add"></p>
     Gatunek:
	
	<?php
	$sql = mysql_query ("SELECT id_genre, genre_name FROM genre;");
	echo "<select name=\"dane\" class=\"input_add\" id=\"select_genre\">";
	while($row = mysql_fetch_assoc($sql)) {
		echo "<option value=".$row['id_genre'].">".$row['genre_name']."</option>";
	}
	echo '</select>';
	?>
	</div>
	<div class="submit_add_cd_class">
	<input type="submit" id="submit_add_cd" class="input_add" value="Dodaj płytę" >
	</form>


	</div>
</div>

<div class="column_left_add_cd">

<h4>Wybierz okładkę</h4>
	<form method="post" id="fileinfo" name="fileinfo" onsubmit="return submitForm();">
        <label> </label><br>
        <input type="file" name="file"/>
        <input type="submit" value="Wybierz okładkę" />
	</form>
	<div class="image_size">
	</div>
</div>
<div class="clear">
</div>

<?php include "footer.php";?>