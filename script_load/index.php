<?php
// get current directory path
$dirpath = getcwd();
// set file pattern
$dirpath .= "/tasks/*.txt";
// copy filenames to array
$files = array();
$files = glob($dirpath);

// sort files by last modified date
usort($files, function($x, $y) {
    return filemtime($x) < filemtime($y);
});

echo "Index Script";

foreach($files as $item){
	$id = explode(".", basename($item))[0];
	$file_content = explode("\n", file_get_contents($item, true));
    echo $id." : <a href='delete.php?id=".$id."'>x</a> : ".$file_content[0]." : ".$file_content[1]." : ".$file_content[2]."%<br/>";
}