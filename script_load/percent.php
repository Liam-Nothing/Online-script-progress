<?php

	if ((isset($_GET["id"])) and (strlen($_GET["id"]) == 7) and (file_exists("tasks/".$_GET["id"].".txt")) and (isset($_GET["p"])) and (strlen($_GET["p"]) <= 3)) {
		$id = htmlspecialchars($_GET["id"]);
		$p = htmlspecialchars($_GET["p"]);
		
		$file_content = explode("\n", file_get_contents("tasks/".$id.".txt", true));
		
		echo "ok => $id<br>";
		echo "ok => $p<br>";
		var_dump($file_content);
		echo "<br>";
		echo $file_content[2];
		
		$file_content[2] = $p;
		
		$handle = fopen("tasks/".$id.".txt", "w+");
		for ($i = 0; $i <= 2; $i++) {
			fwrite($handle, $file_content[$i]."\n");
		}
		fclose($handle);
	}