/*********************************************
 * tiempo en segundos del video en reproduccion
 *********************************************/
function calculaTiempo(nodoIMA){                    //mostrar tiempo de video transcurrido en segundos
    //console.log(nodoIMA.nextElementSibling.placeholder);
    //console.log(nodoIMA.parentNode.previousElementSibling.currentTime);
    nodoIMA.nextElementSibling.value = Math.trunc(nodoIMA.parentNode.previousElementSibling.currentTime);
}

function timeMachine(tiempo, NroVideo){     //mover el cabezal de video al tiempo deseado
    console.log("viaje al tiempo");
    var videoElemento = document.querySelector("#areaVideo" + NroVideo + " #miVideo");
    videoElemento.currentTime = tiempo;
    videoElemento.play();
}

function getUrlVars(){          //extraer las variables de la URL
    let variables = {};
    var partes = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        variables[key] = value;
    });
    return variables;
}

timeMachine(getUrlVars()['t'], getUrlVars()['v']);  //capturando variables en URI

var estado = true;
function mostrarMenu(){             //mostrar ocultar menus y calculadora
    if (estado){
        let x = document.querySelectorAll(".menuCapitulos, .calculadora");
        let i = 0;
        for(i; i<x.length; i++){  x[i].style.display = 'none';  }
        estado = !estado;
    }
    else{        
        let x = document.querySelectorAll(".menuCapitulos, .calculadora");
        let i=0;
        for(i; i<x.length; i++){  x[i].style.display = 'block'; }
        estado = !estado;
    }
}