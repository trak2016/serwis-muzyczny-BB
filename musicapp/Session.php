<?php
	class Session{

	
		public static function start(){
		//Utworzenie sesji
			session_start();
			
		
		//Po³¹czenie z baz¹ danych
	 		$connection = mysql_connect('localhost', 'root', '');
      			if (!$connection){ 
				die('Could not connect: ' . mysql_error());
			}
			$db = mysql_select_db('serwismuzyczny_bd', $connection);
      
			if (!$db){ 
				die ('Can\'t use db : ' . mysql_error());
			}
      			mysql_set_charset('utf8'); 
			
		}

		
		
			public static function isLoggedd(){
					if(isset($_SESSION['loggedd'])){
						$_SESSION['loggedd'] = true;
						return $_SESSION['loggedd'];
					}
					return false;
			}
		
		

		public static function login($login, $haslo){
		//Pytamy czy dany u¿ytkownik istnieje w bazie za pomoc¹ loginu i has³a
		$query ="SELECT COUNT( * ) FROM  `user` WHERE `login` = \"" .(string)
		$login ."\" and `password` = \""   .(string)$haslo ."\"";
		
		if($result = mysql_query($query)){
			if(mysql_fetch_array($result)[0]!=1){
				$_SESSION['loggedd'] = false;
				return false;
			}
			else 
			if($login=="admin"){
			$_SESSION['loggedd'] = true;
			return true;
			}else{
			$_SESSION['loggedd'] = false;
			return false;
			}
		}

					
		}
		
		

		public static function logout(){
			$_SESSION['loggedd'] = false;
					

		}

	};

	Session::start();
?>
