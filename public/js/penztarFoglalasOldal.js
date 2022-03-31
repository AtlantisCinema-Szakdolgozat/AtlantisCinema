$(function(){
    let fajlnevFoglalas ="http://127.0.0.1:8000/api/nezo";
    ellenorzo();
    const foglalasTomb = [];
    const myAjax = new MyAjax();
    myAjax.getAdat(fajlnevFoglalas, foglalasTomb, foglalasKiir);
    let adat=JSON.parse(localStorage.getItem("kulcs"));
    let nyelv=JSON.parse(localStorage.getItem("nyelv"));
    
    kiir(adat);
    kiir2(nyelv);

    $(".kezd").on("click", () => {
      $(".vasarlas").prop('disabled', false);
        console.log('megnyomva');
        adatSzerzes();
    });


    $(".vasarlas").on("click", () => {
        let allSeatsVals = [];
  
          if ($("input:checked").length == ($("#szekekszama").val()))
            {
              let check = [];
              $("input:checkbox[class='szekek']:checked").each(function(){
                check.push($(this).val());
              });
              console.log(check);
  
              let check2 = $("input:checkbox[class='szekek']:checked").val("");
              $.each(check2, function( key, value ) {
                allSeatsVals.push(check);
                $(value).css('accent-color','red');
              });
  
               //console.log("The best cricketers are: " + allSeatsVals.join(", "));
               $(".szekTerv*").css('pointer-events', 'none');

               $(".vasarlas").prop('disabled', true);
               $("#ertesites").html("<b style='margin-bottom:0px;background:yellow;'>A vasárlás sikeres volt</b>");
            }
          else
            {
              alert("Kérlek válassz " + ($("#szekekszama").val()) + " széket!")
            }
  
      });
 function adatSzerzes()
    {
      if (( $("#nev").val().length == 0 ) || ( $("#szekekszama").val().length == 0 ))
      {
      alert("Kérlek töltsd ki a nevet és a a székek számát");
      $(".vasarlas").prop('disabled', true);
      }
      else
      {
        $(".gombok *").prop("disabled", true);
        $("#ulohelyek *").prop("disabled", false);
        $("#ertesites").html("<b style='margin-bottom:0px;background:yellow;'>Kezd el a foglalást</b>");
      }
    }
function ellenorzo()
{
  $(".vasarlas").prop('disabled', true);
  $("#ulohelyek *").prop("disabled", true);
  //$(".displayerBoxes *").prop("disabled", true);
}


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

