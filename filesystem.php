<?php
/*$dir = scandir(__DIR__);
var_dump($dir); // This will display the contents of the directory

$dirname = 'foo';

if (!is_dir($dirname)) {
    if (mkdir($dirname)) {
        echo "Directory '$dirname' created successfully.";
    } else {
        echo "Failed to create directory '$dirname'.";
    }
} else {
    echo "Directory '$dirname' already exists.";
}*/
/*
rmdir('foo');

$dirname = 'foo';
if(!is_dir($dirname)){
	echo "the dir not exist";
}
else{
	echo"thd dir is here";
}*/
/*
mkdir('foo/bar', recursive: true);
$dir=scandir(__DIR__);
var_dump($dir);
#kda 3mal two files foo and inside it file called bar;;;
 */


/*
$dirname = 'lol';
$filename = 'lol/file.txt';

// Check if the directory already exists
if (!is_dir($dirname)) {
    if (mkdir($dirname)) {
        echo "Directory '$dirname' created successfully.<br>";
    } else {
        echo "Failed to create directory '$dirname'.<br>";
    }
} else {
    echo "Directory '$dirname' already exists.<br>";
}

// Check if the file exists inside the directory
if (file_exists($dirname)) {
    echo "File size before writing: " . filesize($dirname) . " bytes<br>";
} else {
    echo "File '$dirname' does not exist.<br>";
}

// Write to the file inside the directory
if (file_put_contents($filename, 'hello world')) {
    clearstatcache(); // Clear the cache to get the correct file size
    echo "File size after writing: " . filesize($filename) . " bytes<br>";
} else {
    echo "Failed to write to file '$filename'.<br>";
}

*/

$filename = 'nav.php';
$handle = fopen($filename, "r");

if ($handle !== false) {
    while (($input = fgetcsv($handle)) !== false) {
        print_r($input);
    }
    fclose($handle);
} else {
    echo "Failed to open the file '$filename'.";
}
echo '<br>';


$content = file_get_contents('nav.php'  );
echo $content;

#rename('foo.txt','bar.txt');

?>
