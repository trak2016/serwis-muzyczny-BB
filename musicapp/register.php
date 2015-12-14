<?php 
	include "index.php";
	@require_once "Session_user.php";

/*--------------------------------------------------------------------------
++++++++++++++++++OBSŁUGA FORMULARZA DODAWANIA UZYTKOWNIKA++++++++++++++++++
--------------------------------------------------------------------------*/

		$valid = true;

//-----------------------Sprawdzamy poprawność wpisanych danych------------
	
		if(strlen($_POST['login_register']) == 0){
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
			." VALUES(\"".$_POST['login_register'] ."\",\"".$_POST['password'] ."\",\"".$_POST['email'] ."\",1)";
			
			if(mysql_query($query)){
				echo "<script>
						swal({   
						title: \"\",   
						text: \"Konto zostało założone!\",  
						type:'success',
						showConfirmButton:true,
						confirmButtonColor: '#27a387'},
						function(){
						window.location.replace(\"index.php\");
						});
						</script>";
				
			}else{
				die(mysql_error());
				
				
				echo "Błąd zapytania sql<br/>";
			}

		}else{
			echo "Nie można zarejestrować użytkownika<br/>";
		}


?>
