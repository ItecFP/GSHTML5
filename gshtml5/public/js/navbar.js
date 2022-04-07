window.addEventListener("scroll",shrink);

function shrink(){
    if (window.scrollY > 200 || window.innerWidth <= 576) {
        document.getElementById("logo").innerHTML = '<p class="suprema mt-4 mb-4">G<span>S</span>HTML5</p>';
    }
    if (window.scrollY <= 0){
        document.getElementById("logo").innerHTML = '<p class="guia">Guía</p><p class="suprema"><span>S<span>uprema </p><p class="html5">HTML5</p>';
    }
}