$(function(){
    let fajlnevFoglalas ="http://127.0.0.1:8000/api/nezo";
    ellenorzo();
    let foglalasTomb = [];
    const myAjax = new MyAjax();
    
    myAjax.getAdat(fajlnevFoglalas, foglalasTomb, foglalasKiir);

    let adat=JSON.parse(localStorage.getItem("kulcs"));
    let nyelv=JSON.parse(localStorage.getItem("nyelv"));
    let tombUtolos;
    let check = [];
    kiir(adat);
    kiir2(nyelv);

    let szuloelem = $(".tablafoglaSzulo");
    let sablonElem = $(".tablafoglaSablon");


    function foglalasKiir() {
      szuloelem = $(".tablafoglaSzulo");
      //sablonElem = $(".tablafoglaSablon");
      //szuloelem.empty();
      //sablonElem.show();
      szuloelem.children().remove();
      foglalasTomb.forEach(function (elem) {
          //let ujElem = sablonElem.clone().appendTo(szuloelem);
          let tablaElem=$("<tr></tr>").appendTo(szuloelem);
          const ujFoglalas = new Foglalas(tablaElem, elem);
          
      });
      //sablonElem.hide();
      
  }

    $(".kezd").on("click", () => {
      $(".vasarlas").prop('disabled', false);
        adatSzerzes();
              
             
    });


    // function maxNyugtaszam(){
    //   let maxErtek = -1;
    //   foglalasTomb.forEach((elem, index) => {
    //     if (elem.nezoId>maxErtek) {
    //       maxErtek = elem.nezoId;
    //     }
    //   });
    //   // console.log(foglalasTomb);
    // }

    function adatokKiiras(){
      console.log($("#nev").val());
              // console.log($("#email").val());
              let nezo= {};
              nezo.nev=$("#nev").val();
              nezo.email=$("#email").val();
              // console.log(nezo);
              // console.log(foglalasTomb);
              myAjax.postAdat2(fajlnevFoglalas,nezo,utolosKeres);
              
    }
    let utolsoElem;
    function utolosKeres(){
      function utolsoID(tomb){
        utolsoElem=tomb[tomb.length-1].nezoId;
        console.log(utolsoElem);
      }
      myAjax.getAdat2(fajlnevFoglalas, foglalasTomb, utolsoID);
    }


    $(".vasarlas").on("click", () => {
        let allSeatsVals = [];
          if ($("input:checked").length == ($("#szekekszama").val()))
            {
              adatokKiiras();
            let szekek={};
            $("input:checkbox[class='szekek']:checked").each(function(){
              check.push($(this).val());
              let sor=$(this).val()[0];
              let szek=$(this).val()[2];
              szekek.sor=sor;
              szekek.szek=szek;
            });
            console.log(szekek);
            console.log(check);
            
              let check2 = $("input:checkbox[class='szekek']:checked").val("");
              $.each(check2, function( key, value ) {
                allSeatsVals.push(check);
                $(value).css('accent-color','red');
              });
            
               $(".szekTerv*").css('pointer-events', 'none');

               $(".vasarlas").prop('disabled', true);
               $("#ertesites").html("<b style='margin-bottom:0px;background:yellow;'>A vasárlás sikeres volt</b>");
            }
          else
            {
              alert("Kérlek válassz " + ($("#szekekszama").val()) + " széket!")
            }
            myAjax.getAdat(fajlnevFoglalas, foglalasTomb, foglalasKiir);
      });
 function adatSzerzes()
    {
      if (( $("#nev").val().length == 0 ) || ( $("#szekekszama").val().length == 0 )||( $("#email").val().length == 0 ))
      {
      alert("Kérlek töltsd ki a az összes mezőt!");
      $(".vasarlas").prop('disabled', true);
      }
      else
      {
        $(".gombok *").prop("disabled", true);
        $("#ulohelyek *").prop("disabled", false);
        $("#ertesites").html("<b style='margin-bottom:0px;background:yellow;'>Válaszd ki a székeket!</b>");
      }
    }
function ellenorzo()
{
  $(".vasarlas").prop('disabled', true);
  $("#ulohelyek *").prop("disabled", true);
}


function kiir(adat){
        $(".terem").html(adat[0].teremNev);
        $(".idopont").html(adat[0].kapcsolat.kezdesiIdo);

}
function kiir2(nyelv){
    $(".szinkron").html(nyelv);
}


$("#keresesmezofoglalas").on("keyup", () => {
     szuloelem = $(".tablafoglaSzulo");
     sablonElem = $(".tablafoglaSablon");
    apivegpont = "http://127.0.0.1:8000/api/nezo";
    apivegpont += "?q=" + $("#keresesmezofoglalas").val();
    szuloelem.children().remove();
    foglalasTomb.splice();
    console.log(foglalasTomb);
    myAjax.getAdat(apivegpont, foglalasTomb, foglalasKiir);
});

$("#rendezes").on("change", function () {
     szuloelem = $(".tablafoglaSzulo");
     sablonElem = $(".tablafoglaSablon");
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

