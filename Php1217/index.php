<?php 
$f = fopen("file.txt", 'a+');
if ($f)
{
    while (!feof($f)) {
        echo fgets($f);
    }

    fclose($f);
}
?>