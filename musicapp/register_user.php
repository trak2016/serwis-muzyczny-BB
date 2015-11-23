<?php include "header.php";?> 
<?php
	@require_once "Session_user.php";
/*--------------------------------------------------------------------------
++++++++++++++++++++++++FORMULARZ DODAWANIA UZYTKOWNIKA+++++++++++++++++++++++++
--------------------------------------------------------------------------*/
	if($_GET['mode']==1){
?> <center>
	<form action="register_user.php?mode=2" method="POST">
		Login: <p><input name="login" ></p>
		Hasło: <p><input name="password" type="password"></p>
		Email: <p><input name="email"></p>
	<input type="submit" value="Utwórz konto">
	</form>
	</center>
<?php
/*--------------------------------------------------------------------------
++++++++++++++++++OBSŁUGA FORMULARZA DODAWANIA UZYTKOWNIKA++++++++++++++++++
--------------------------------------------------------------------------*/
	}else if($_GET['mode']==2){
		$valid = true;

//-----------------------Sprawdzamy poprawność wpisanych danych------------
	
		if(strlen($_POST['login']) == 0){
			$valid = false;
		}

		if(strlen($_POST['password']) == 0){
			$valid = false;
		}
		
		if(strlen($_POST['email']) == 0){
			$valid = false;
		}
//-----------------------------Dodajemy wpis do bazy danych------------------------------------
		if($valid){
			$query = "INSERT INTO `user`(`login`, `password`,`email`,`id_user_type`)"
			." VALUES(\"".$_POST['login'] ."\",\"".$_POST['password'] ."\",\"".$_POST['email'] ."\",1)";
			
			if(mysql_query($query)){
				echo "<center>";
				echo "Konto zostało założone!";
					echo "<form action=\"index.php\" method=\"POST\" target=\"_top\">";
					echo "<input type = \"submit\" value=\"Powrót do strony głównej\">";
					echo "</form>";
					echo "</center>";
				
			}else{
				die(mysql_error());
				
				
				echo "Błąd zapytania sql<br/>";
			}

		}else{
			echo "Nie można zarejestrować użytkownika<br/>";
		}

	?>



		</center>	


<?php	
		
	

	}else{
		echo "404 - Page not found<br/>";
	}
?>
<?php include "footer.php";?>