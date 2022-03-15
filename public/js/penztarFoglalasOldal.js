$(function(){
    let adat=JSON.parse(localStorage.getItem("kulcs"));
    kiir(adat);

function kiir(adat){
        $(".terem").html(adat[0].teremNev);
        $(".idopont").html(adat[0].kapcsolat.kezdesiIdo);
        $(".szinkron").html(adat[0].kapcsolat.szinkron);
        //$(".ferohely").html(adat[0].ferohely);
    



}




});

