window.addEventListener("scroll",scroll);
window.addEventListener("resize",resize);

function scroll(){
    if (window.scrollY > 200) {
        document.getElementById("logo").innerHTML = '<p class="suprema h">H<span class="tml">TML</span><span class="cinco">5</span></p>';
    }
    if (window.scrollY <= 0 && window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema"><span>S<span>uprema </p><p class="html5">HTML5</p>';
    }
}

function resize(){
    if (window.innerWidth < 576) {
        document.getElementById("logo").innerHTML = '<p class="suprema h">H<span class="tml">TML</span><span class="cinco">5</span></p>';
    }
    if (window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema"><span>S<span>uprema </p><p class="html5">HTML5</p>';
    }
}