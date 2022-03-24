$(function(){
    let adat=JSON.parse(localStorage.getItem("kulcs"));
    let nyelv=JSON.parse(localStorage.getItem("nyelv"));
    
    kiir(adat);
    kiir2(nyelv);
function kiir(adat){
        $(".terem").html(adat[0].teremNev);
        $(".idopont").html(adat[0].kapcsolat.kezdesiIdo);
        // $(".szinkron").html(nyelv);
        //$(".ferohely").html(adat[0].ferohely);
    



}
function kiir2(nyelv){
    $(".szinkron").html(nyelv);
    //$(".ferohely").html(adat[0].ferohely);




}




});

