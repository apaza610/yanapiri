<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 田中="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="0estilo/estilo.css">
    <title>Prueba</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <script src="https://unpkg.com/htmx.org@1.9.12" crossorigin="anonymous"></script>
</head>
<body>
    <button hx-post="0code/response.php" hx-confirm="actualizar lista de MMPs?">update?</button>
    <a class='campoN' href="pruebas/">🧪pruebas</a> , 
    <a class='campoN' href="0assets/icons/">🏠iconos</a> , 
    <a class='campoN' href="maps/idioma/jpn/0softo/kanji/">漢字</a> ,
    <a class='campoN' href="templates/buscador">🔍</a> __________________________ 
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
            $matriz = [];

            // $cadena = "D:/apz/maps/art2d";
            // echo explode("/", $cadena)[3];  //el elemento 3 contiene el campo deseado "art2d"

            if(file_exists($filename)){
                $lineas = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                foreach($lineas as $linea){
                    foreach($campos as $campo){
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
                        $pathfinal = preg_replace("/^$campo2/i","<span class='campo2'>$campo2</span>",$pathonly);
                        $laUrl = "http://localhost/apz/maps/$campos[$i]/$raiz";
                        // $pathonly = preg_replace("/$campoN/i","<a class='campoN' href='.$laUrl.'>$campoN</a>",$pathonly);
                        $pathfinal = str_replace($campoN,"<a class='campoN' href='$laUrl'>$campoN</a>",$pathfinal);
                        echo $pathfinal."<br>";
                    }
                    $i++;
                }
                echo "<hr>";
            }else{
                echo "File no existe, debes cearlo previamente";
            }
        ?>
    </div>

    <script src="0code/codigo.js"></script>
</body>
</html>