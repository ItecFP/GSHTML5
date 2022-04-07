function mostrar() {
    /*const sidebar = document.getElementById("sidebar");
    if (sidebar.classList.contains("abierto")) {
        sidebar.classList.remove("abierto");
    }else{
        sidebar.classList.add("abierto");
    }*/
    document.getElementById("sidebar").
    document.getElementById("sidebar").style.width = "25vh";
    document.getElementById("sidebar").style.paddingLeft = "15px";
    document.getElementById("sidebar").style.paddingRigth = "15px";
    document.getElementById("contenido").style.marginLeft = "25vh";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("sidebar").style.paddingLeft = "0";
    document.getElementById("sidebar").style.paddingRigth = "0";
    document.getElementById("contenido").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("sidebar").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
}