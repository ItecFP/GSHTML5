window.addEventListener("scroll",scroll);
window.addEventListener("resize",resize);
window.addEventListener("load", resize); 

function scroll(){
    if (window.scrollY > 200) {
        document.getElementById("logo").innerHTML = '<img src="video/LogoPequeño.gif" alt="loguito">';
    }
    if (window.scrollY <= 0 && window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="fall2 guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="fall3 html5">HTML5</p>';
    }
}

function resize(){
    if (window.innerWidth < 576) {
        document.getElementById("logo").innerHTML = '<img src="video/LogoPequeño.gif" alt="loguito">';
    }
    if (window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="html5">HTML5</p>';
    }
}