window.addEventListener("scroll",scroll);
window.addEventListener("resize",resize);

function scroll(){
    if (window.scrollY > 200) {
        document.getElementById("logo").innerHTML = '<div class="h">H<span class="fall4 tml">TML</span><span class="cinco">5</span> <span class="g">G</span> <span class="suprema parpadear2 s">S</span> </div>';
    }
    if (window.scrollY <= 0 && window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="fall2 guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="fall3 html5">HTML5</p>';
    }
}

function resize(){
    if (window.innerWidth < 576) {
        document.getElementById("logo").innerHTML = '<div class=" h">H<span class="/*fall4 tml">TML</span><span class="cinco">5</span> <span class="g">G</span> <span class=" suprema parpadear2 s">S</span> </div>';
    }
    if (window.innerWidth >= 576){
<<<<<<< HEAD
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="html5">HTML5</p>';
=======
        document.getElementById("logo").innerHTML = '<p class="fall2 guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="fall3 html5">HTML5</p>';
>>>>>>> 9c5fc442f5ab248c7e8243f9e5ba4916bf02e907
    }
}