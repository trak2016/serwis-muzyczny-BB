
<?php
	include "header_log.php";
	@require_once "Session_user.php";

	//Obsługa formularza
	$valid = true;	
		
		if($valid){
							
			
					if(Session_user::login($_POST['login'],$_POST['haslo']))
					{
					
						$valid = true;
						echo 	"<script>
						
								swal({   
								title: \"\",   
								text: \"Zostałeś zalogowany!\",  
								type:'success',
								showConfirmButton:true,
								confirmButtonColor: '#27a387'},
								function(){
									window.location.replace(\"index.php\");
									}
								);
						
								</script>";
					}
					else{
						echo 				
						"<script>
						
								swal({   
								title: \"\",   
								text: \"Użytkownik nie istnieje!\",  
								type:'error',
								showConfirmButton:true,
								confirmButtonColor: '#27a387'},
								function(){
									window.location.replace(\"index.php\");
									}
								);
						
								</script>";
						
						$valid = false;
						}
				}
				
include "footer.php"			
?>

