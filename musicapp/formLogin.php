<?php include "header.php";?>  
<?php
	@require_once "Session.php";
	@require_once "Session_user.php";

	if($_GET['mode'] == 1){
	//Formularz logowania
	?>

	
	<center>
		<form name="login" action="formLogin.php?mode=2" method="POST"><br/><br/>
			Login:<input name="login"><br/><br/>
			Haslo:<input type="password" name="haslo"><br/><br/>
			<input type="submit" value="Zaloguj">
		</form>		
	</center> 
	

	
	<?php
	}else if($_GET['mode'] == 2){
	//Obsługa formularza
	$valid = true;	


		if(strlen($_POST['login']) == 0){
			echo "<center>";	
			echo 	"<textarea rows=\"1\" cols=\"20\" readonly  style=\"color: red; background-color: lightyellow\">Uzupełnij pole login</textarea>";
			echo "</center>";
			$valid = false;
		
		}

		if(strlen($_POST['haslo']) == 0){
			echo "<center>";	
			echo 	"<textarea rows=\"1\" cols=\"20\" readonly  style=\"color: red; background-color: lightyellow\">Uzupełnij pole haslo</textarea>";
			echo "</center>";
			$valid = false;
			
		}

		if($valid){
							
			if(Session::login($_POST['login'],$_POST['haslo'])){
				
				$valid = true;
				
				
				}
				else{
					if(Session_user::login($_POST['login'],$_POST['haslo']))
					{
					
						$valid = true;
						
						
					}
						else{
						echo "<center>";
						echo "Użytkownik nie istnieje w bazie!<br/>";
						$valid = false;
				}
			
			}
		}

		if($valid){
			echo "<center>";
			echo "Zostałeś pomyślnie zalogowany";
						
		}
		else{

		}
		echo "<center>";
		echo "<form action=\"index.php\" method=\"POST\" >";
		echo "<input type = \"submit\" value=\"OK\">";
		echo "</form>";
		echo "</center>";
		
		
		
		

		
		}
?>


</html>
<?php include "footer.php";?>