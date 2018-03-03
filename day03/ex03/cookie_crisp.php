<?php

if ("set" == $_GET["action"]) {
	setcookie($_GET["name"], $_GET["value"], time() + 3600);
}
else if ("get" == $_GET["action"]) {
	if ($_COOKIE[$_GET["name"]]) {
		echo $_COOKIE[$_GET["name"]]."\n";
	}
}
else if ("del" == $_GET["action"]) {
	setcookie($_GET["name"], "", time() - 3600);
}
else {
	echo "error\n";
}

?>
