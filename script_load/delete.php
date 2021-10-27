<?php
// echo "start";

	if ((isset($_GET["id"])) and (strlen($_GET["id"]) == 7)) {
		$id = htmlspecialchars($_GET["id"]);
		rename("tasks/".$id.".txt", "tasks/".$id.".old");
		// echo "ok";
	}
header('Location: index.php');