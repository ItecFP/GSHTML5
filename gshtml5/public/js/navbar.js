window.addEventListener("scroll",shrink);
window.addEventListener("resize",resize);

function shrink(){
    if (window.scrollY > 200) {
        document.getElementById("logo").innerHTML = '<p class="suprema mt-4 mb-4">G<span>S</span>HTML5</p>';
    }
    if (window.scrollY <= 0 && window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="html5">HTML5</p>';
    }
}

function resize(){
    if (window.innerWidth < 576) {
        document.getElementById("logo").innerHTML = '<p class="suprema mt-4 mb-4">G<span>S</span>HTML5</p>';
    }
    if (window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="html5">HTML5</p>';
    }
}