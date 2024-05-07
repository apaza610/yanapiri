<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 田中="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Prueba</title>
    <script src="https://unpkg.com/htmx.org@1.9.12" crossorigin="anonymous"></script>
</head>
<body>
    <button hx-post="response.php" hx-target="#listaMMPs" hx-confirm="en serio?">update</button>
    <div id="listaMMPs">Mindmaps</div>
    <div class="columnas">
        <?php 
            $filename = "listaMMPs.txt";
            $campos = ["art2d", "art3d", "audio", "ciencia", "gdev","health","idioma", "office", "otros", "progr"];
            echo array_search("health", $campos);
            $matriz = [];

            if(file_exists($filename)){
                $lineas = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                // $filtrada = [string for string in $lineas if "art3d" in string];

                foreach($lineas as $linea){
                    if (strpos($linea, "art3d") != false){
                        $matriz[0][] = $linea;
                    }
                    elseif (strpos($linea, "progr") != false){
                        $matriz[1][] = $linea;
                    }
                    // $linea = str_replace("D:\\apz\\maps\\", "", $linea);
                    // foreach($campos as $campo){
                    //     if (str_starts_with($linea, $campo)){
                    //         // echo "---$linea<br>";
                    //         array_push($matriz[array_search($campo, $campos)], $linea);
                    //     }
                    // }
                }
                print_r($matriz);
            }else{
                echo "The file does not exist";
            }
        ?>
    </div>
    <table border="1">
        <tr>
            <td>lklk</td>
            <td>sldkfl00000</td>
        </tr>
    </table>
    <!-- 
    <div id="田中">nonono</div>
    <hr>
    <button hx-post="response.php?numero=5" hx-params="numero" hx-target="#edad">++</button>
    <div id="edad">~~</div> -->
    <!-- <hr> -->
    <!-- <button hx-post="response.php" hx-target="#田中">++</button> -->
    <!-- <?php   $valor=666; ?> -->
    <!-- <div hx-get="response.php?valor=<?php echo $valor; ?>"><?php echo $valor ?></div> -->
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
    ?>
    <!-- <button hx-get="/click">click!</button>     -->
</body>
</html>