<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 田中="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="0estilo/estilo.css">
    <title>Prueba</title>
    <script src="https://unpkg.com/htmx.org@1.9.12" crossorigin="anonymous"></script>
</head>
<body>
    <button hx-post="0code/response.php" hx-confirm="actualizar lista de MMPs?">update?</button>
    <a href="pruebas/">🧪pruebas</a> , 
    <a href="0assets/icons/">🏠iconos</a> , 
    <a href="maps/idioma/jpn/0softo/kanji/">漢字</a> ,
    <a href="templates/buscador">🔍</a> , 
    <span id="sitiosweb">
        <input type="checkbox" name="game"    id="game"   value="game"    checked><label for="vehiculo1">Game</label>
        <input type="checkbox" name="cursos"  id="cursos" value="cursos"  checked><label for="vehiculo2">Cursos</label>
        <input type="checkbox" name="sftw2D"  id="sftw2D" value="sftw2D"  >       <label for="vehiculo2">Software2D</label>
        <input type="checkbox" name="sftw3D"  id="sftw3D" value="sftw3D"  checked><label for="vehiculo2">Software3D</label>
        <button onclick="abirWebsites()">sitiosFavoritos</button>
    </span>
    <div class="columnas">
        <?php 
            $filename = "0code/listaMMPs.txt";
            $campos = ["art2d", "art3d", "audio", "ciencia", "gdev","health","idioma", "office", "otros", "progr"];
            // echo array_search("health", $campos);
            $matriz = [];

            // $cadena = "D:/apz/maps/art2d";
            // echo explode("/", $cadena)[3];  //el elemento 3 contiene el campo deseado "art2d"

            if(file_exists($filename)){
                $lineas = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                foreach($lineas as $linea){
                    foreach($campos as $campo){
                        //if(strpos($linea, $campo) != false){
                        if(explode("/", $linea)[3] == $campo){
                            $matriz[array_search($campo, $campos)][] = $linea;
                        }
                    }
                }

                $i = 0;
                foreach($matriz as $categoria){                   
                    echo "<div class='campo'>----------------$campos[$i]----------------</div>";
                    foreach($categoria as $elemento){
                        $pathonly = str_replace("D:/apz/maps/$campos[$i]/","",$elemento);   // anim/krita/anim.mm
                        $campo2 = explode("/", $pathonly)[0];                               // anim
                        $arrTemp = explode("/", $pathonly);
                        end($arrTemp);
                        $campoN = current($arrTemp);                                        // krita.mm
                        $raiz = str_replace($campoN,"",$pathonly);                          // anim/krita/
                        // echo $campoN."<br>";
                        $pathfinal = preg_replace("/^$campo2/i","<span class='campo2'>$campo2</span>",$pathonly);
                        $laUrl = "http://localhost/apz/maps/$campos[$i]/$raiz";
                        // $pathonly = preg_replace("/$campoN/i","<a class='campoN' href='.$laUrl.'>$campoN</a>",$pathonly);
                        $pathfinal = str_replace($campoN,"<a class='campoN' href='$laUrl'>$campoN</a>",$pathfinal);
                        echo $pathfinal."<br>";
                    }
                    $i++;
                }
            }else{
                echo "File no existe, debes cearlo previamente";
            }
        ?>
    </div>
    
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
    <script src="0code/codigo.js"></script>
</body>
</html>