/****************mostrar cambios del textTrack****************
Usando el contador i muestra los eventos: inicio/fin de cambio
en el textTrack.
Licencia: GPL v3.0
homar.orozco@gmail.com
*************************************************************/

let 電影 = document.querySelector("#電影");
let 字幕 = document.querySelector("#字幕");
let elTrack = 電影.textTracks[0];

//evento de cambio del cue (ambos casos inicio/fin):
let i = -1;
elTrack.oncuechange = function(){
    i++;
    字幕.innerHTML = "cue ha cambiado: " + i;    
}