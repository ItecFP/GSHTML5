window.addEventListener("scroll",scroll);
window.addEventListener("resize",resize);

function scroll(){
    if (window.scrollY > 200) {
        document.getElementById("logo").innerHTML = '<div class="  mt-4 mb-4 h">H<span class="tml">TML</span><span class="cinco">5</span> <span class="g">G</span> <span class="suprema s">S</span> </div>';
    }
    if (window.scrollY <= 0 && window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema"><span>S<span>uprema </p><p class="html5">HTML5</p>';
    }
}

function resize(){
    if (window.innerWidth < 576) {
        document.getElementById("logo").innerHTML = '<div class=" mt-4 mb-4 h">H<span class="tml">TML</span><span class="cinco">5</span> <span class="g">G</span> <span class=" suprema s">S</span> </div>';
    }
    if (window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema"><span>S<span>uprema </p> <p class="html5">HTML5 </p>';
    }
}