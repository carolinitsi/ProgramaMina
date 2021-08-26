var intervalo = 3000;

function slide1(){
    var banner1 = document.getElementById("banner1");
    var banner2 = document.getElementById("banner2");
    var banner3 = document.getElementById("banner3");

    banner1.classList.add("ativo");
    banner2.classList.add("inativo");
    banner3.classList.add("inativo");

    banner1.classList.remove("inativo");
    banner2.classList.remove("ativo");
    banner3.classList.remove("ativo");

    setTimeout("slide2()", 6000);

}
function slide2(){
    var banner1 = document.getElementById("banner1");
    var banner2 = document.getElementById("banner2");
    var banner3 = document.getElementById("banner3");

    banner1.classList.add("inativo");
    banner2.classList.add("ativo");
    banner3.classList.add("inativo");

    banner1.classList.remove("ativo");
    banner2.classList.remove("inativo");
    banner3.classList.remove("ativo");

    setTimeout("slide3()", 6000);
}
function slide3(){
    var banner1 = document.getElementById("banner1");
    var banner2 = document.getElementById("banner2");
    var banner3 = document.getElementById("banner3");

    banner1.classList.add("inativo");
    banner2.classList.add("inativo");
    banner3.classList.add("ativo");

    banner1.classList.remove("ativo");
    banner2.classList.remove("ativo");
    banner3.classList.remove("inativo");


    setTimeout("slide1()", 6000);
}