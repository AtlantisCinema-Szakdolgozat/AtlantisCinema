$(function(){
    let adat=JSON.parse(localStorage.getItem("kulcs"));
    kiir(adat);

function kiir(adat){
        $(".terem").html(adat[0].teremId);
        $(".idopont").html(adat[0].kezdesiIdo);
        $(".szinkron").html(adat[0].szinkron);
        $(".ferohely").html(adat[0].ferohely);
    



}




});

