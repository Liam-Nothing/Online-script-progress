<?php

//create folder
$directoryName = 'tasks';
if(!is_dir($directoryName)){
    mkdir($directoryName, 0755);
}

//Get valid id
do {
    $id = rand(1000000, 9999999);
} while (file_exists($directoryName."/".$id.".txt"));

if ((isset($_GET["title"])) and (strlen($_GET["title"]) <= 30)) {
	$title = htmlspecialchars($_GET["title"]);
	$date = date("d/m/Y H:i:s");

	$handle = fopen($directoryName."/".$id.".txt", "w+");
	fwrite($handle, $title."\n" );
	fwrite($handle, $date."\n" );
	fwrite($handle, "0" );
	fclose($handle);
	
	echo $id;
}