<?php
	class Session_user{

		
		public static function start(){
		//Utworzenie sesji
			session_start();
			

		//Połączenie z bazą danych
	 		$connection = mysql_connect('localhost', 'root', '');
			mysql_set_charset('utf8',$db);
      			if (!$connection){ 
				die('Could not connect: ' . mysql_error());
			}
			$db = mysql_select_db('serwismuzyczny_bd', $connection);
      
			if (!$db){ 
				die ('Can\'t use db : ' . mysql_error());
			}
      			mysql_set_charset('utf8'); 
			
			
			
		}

		//czy uzytkownik jest zalogowany
			public static function isLogged(){
					if(isset($_SESSION['logged'])){
				
						return $_SESSION['logged'];
					}
					return false;
			}
		
		

		public static function login($login, $haslo){
		//Pytamy czy dany użytkownik istnieje w bazie za pomocą loginu i hasła
		$query ="SELECT COUNT( * ) FROM  `user` WHERE `login` = \"" .(string)
		$login ."\" and `password` = \""   .(string)$haslo ."\"";
		
		if($result = mysql_query($query)){
			if(mysql_fetch_array($result)[0]!=1){
				$_SESSION['logged'] = false;
				
				return false;
			}
			else 
			$_SESSION['logged'] = true;
			$_SESSION['login']=$login;
			return true;
			}						
		}
		
				
		
		//wylogowanie
		public static function logout(){
			$_SESSION['logged'] = false;
					
		}

	};

	Session_user::start();
	
	
	
?>
