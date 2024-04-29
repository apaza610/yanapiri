<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 田中="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
    <script src="https://unpkg.com/htmx.org@1.9.12" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <div>
        <button hx-post="response.php" hx-target="#田中">apretame</button>
    </div>
    <div id="田中">nonono</div>
    <hr>
    <button hx-post="response.php?numero=5" hx-params="numero" hx-target="#edad">++</button>
    <div id="edad">~~</div> -->
    <!-- <hr> -->
    <!-- <button hx-post="response.php" hx-target="#田中">++</button> -->
    <?php   $valor=666; ?>
    <div hx-get="response.php?valor=<?php echo $valor; ?>"><?php echo $valor ?></div>
    <!-- <div id="木村" hx-get="response.php" hx-vals='js:{valor: document.getElementById("木村").innerText}'>12</div> -->
    <!-- <div hx-post="response.php" hx-trigger="submit" hx-vals="{'valor' : 30}">~~</div> -->
    
    <!-- <div id="xx" hx-post="response.php" hx-vals="{'valor': document.getElementById('xx').value}">99</div> -->
    <!-- <div id="comment-section" hx-trigger="submit">
        <textarea name="comment" placeholder="Write your comment"></textarea>
        <button type="button" hx-post="response.php" hx-target="#comments" hx-vals="{'postId': 8}">Submit</button>
    </div>
    <div id="comments"></div> -->
    <!-- <div id="田中">...</div> -->
    <!-- <form action="response.php" method="POST">
        <input type="text" name="名前" value="pepe">
        <input type="submit" value="enviar">
    </form> -->
    <!-- <div id="南" hx-post="response.php" hx-vals='js:{"valor": document.getElementById("南").innerText}'>12</div> -->
    <!-- <div id="南" hx-get="response.php" hx-vals='js:{"valor": document.getElementById("南").innerText}'>12</div> -->

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