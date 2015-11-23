

<?php

	@require_once "Session_user.php";
	Session_user::logout();
	echo "<center>";
	echo "Zostałeś wylogowany";
	echo "<form action=\"index.php\" method=\"POST\" target=\"_top\">";
	echo "<input type = \"submit\" value=\"OK\">";
	echo "</form>";
	echo "</center>";
?>


