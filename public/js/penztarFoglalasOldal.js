$(function(){
    let fajlnevFoglalas ="http://127.0.0.1:8000/api/nezo";
    const foglalasTomb = [];
    const myAjax = new MyAjax();
    myAjax.getAdat(fajlnevFoglalas, foglalasTomb, foglalasKiir);
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

function foglalasKiir() {
    const szuloelem = $(".tablafoglaSzulo");
    const sablonElem = $(".tablafoglaSablon");
    szuloelem.empty();
    sablonElem.show();
    //console.log(foglalasTomb);
    foglalasTomb.forEach(function (elem) {
        let ujElem = sablonElem.clone().appendTo(szuloelem);
        // console.log(ujElem);
        const ujFoglalas = new Foglalas(ujElem, elem);
    });
    sablonElem.hide();
}
$("#keresesmezofoglalas").on("keyup", () => {
    const szuloelem = $(".tablafoglaSzulo");
    const sablonElem = $(".tablafoglaSablon");
    apivegpont = "http://127.0.0.1:8000/api/nezo";
    apivegpont += "?q=" + $("#keresesmezofoglalas").val();
    szuloelem.children().remove();
    foglalasTomb.splice();
    console.log(foglalasTomb);
    myAjax.getAdat(apivegpont, foglalasTomb, foglalasKiir);
});

$("#rendezes").on("change", function () {
    const szuloelem = $(".tablafoglaSzulo");
    const sablonElem = $(".tablafoglaSablon");
    apivegpont = "http://127.0.0.1:8000/api/nezo";
    szuloelem.children().remove();
    foglalasTomb.splice();
    let szempont = $(this).val();
    switch (szempont) {
        case "rendezesSzempont1":
            apivegpont += "?desc=rendezesSzempont1";
            break;
        case "rendezesSzempont2":
            apivegpont += "?desc=rendezesSzempont2";
            break;
        default:
            break;
    }
    myAjax.getAdat(apivegpont, foglalasTomb, foglalasKiir);
});


});

