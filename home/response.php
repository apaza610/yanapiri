<?php 
    // $precio = $_GET['valor'];
    // $precio++;
    // echo "aumentado es: $precio";

    //echo "hola HTMX!!!";
    
    // $numero = $_GET['numero'];
    // $numeroPlus = $numero + 1;
    // echo "aumentado es ".$numeroPlus;

    // $number = $_POST['number'];
    // $precio = $_POST['valor'];

    
    // print_r($_REQUEST);

    $本 = fopen("listaMMPs.txt", "w") or die("algo ha faallado");
        
    set_time_limit(8*60);
    $directory = new RecursiveDirectoryIterator("D:\apz\maps"); //D:\apz\maps\progr\web
    $iterator = new RecursiveIteratorIterator($directory);
    $regex = new RegexIterator($iterator, '/^.+\.mm$/i', RecursiveRegexIterator::GET_MATCH);
    $n = 0;
    foreach($regex as $file) {
        echo "$n) $file[0] <br>";
        fwrite($本, "$file[0]\n");
        $n++;
    }

    fclose($本);
?>




