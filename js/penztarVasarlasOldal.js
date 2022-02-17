$(function(){
    let adat=JSON.parse(localStorage.getItem("kulcs"));
    kiir(adat);

function kiir(adat){
    console.log(adat);
      console.log(adat[0].terem);
        $(".terem").html(adat[0].terem);
        $(".idopont").html(adat[0].idopont);
        $(".szinkron").html(adat[0].szinkron);
        $(".ferohely").html(adat[0].ferohely);
    



}


});