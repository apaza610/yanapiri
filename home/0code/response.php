<?php 
    $本 = fopen("listaMMPs.txt", "w") or die("algo ha fallado");
        
    set_time_limit(8*60);
    $directory = new RecursiveDirectoryIterator("D:/apz/maps"); //D:\apz\maps\progr\web
    $iterator = new RecursiveIteratorIterator($directory);
    $regex = new RegexIterator($iterator, '/^.+\.mm$/i', RecursiveRegexIterator::GET_MATCH);
    $n = 0;
    foreach($regex as $file) {
        // echo "$n) $file[0] <br>";
        $file = str_replace('\\','/', $file);
        fwrite($本, "$file[0]\n");
        $n++;
    }

    echo "operation updated !!";

    fclose($本);
?>




