<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
    <script src="https://unpkg.com/htmx.org@1.9.12" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <div>
        <button hx-post="response.php" hx-target="#content">apretame</button>
    </div>
    <div id="content">nonono</div>
    <hr>
    <button hx-post="response.php?numero=5" hx-params="numero" hx-target="#edad">++</button>
    <div id="edad">~~</div> -->
    <hr>
    <!-- <button hx-post="response.php" hx-target="#content">++</button> -->
    <?php   $valor=666; ?>
    <div id="number" hx-get="response.php?valor=<?php echo $valor; ?>" hx-target="#content" hx-swap="innerHTML"><?php echo $valor ?></div>
    <div id="content">...</div>

    <?php 
        // echo getcwd();
        // chdir("D:\apz\maps");
        // $d = dir(getcwd());
        // while(($file = $d->read()) != false){
        //     echo "名前 $file <br>";
        // }
        // $d->close();


        // $本 = fopen("listaMMPs.txt", "w") or die("algo ha faallado");
        
        // set_time_limit(6*60);
        // $directory = new RecursiveDirectoryIterator("D:\apz\maps");
        // $iterator = new RecursiveIteratorIterator($directory);
        // $regex = new RegexIterator($iterator, '/^.+\.mm$/i', RecursiveRegexIterator::GET_MATCH);
        // foreach($regex as $file) {
        //     echo "$file[0] <br>";
        //     fwrite($本, "$file[0]\n");
        // }

        // fclose($本);
    ?>
    <!-- <button hx-get="/click">click!</button>     -->
</body>
</html>