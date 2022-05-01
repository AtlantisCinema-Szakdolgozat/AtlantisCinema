$(function(){
    let fajlnevFoglalas ="http://127.0.0.1:8000/api/nezo";
    let fajlnevSzek ="http://127.0.0.1:8000/api/szek";


    ellenorzo();
    let foglalasTomb = [];
    const myAjax = new MyAjax();
    let adat=JSON.parse(localStorage.getItem("kulcs"));
    let nyelv=JSON.parse(localStorage.getItem("nyelv"));
    myAjax.getAdat(fajlnevFoglalas, foglalasTomb, foglalasKiir);

    let tombUtolos;

    kiir(adat);
    kiir2(nyelv);

    let szuloelem = $(".tablafoglaSzulo");
  



    function foglalasKiir() {
      szuloelem = $(".tablafoglaSzulo");
      szuloelem.children().remove();
      foglalasTomb.forEach(function (elem) {
          let tablaElem=$("<tr></tr>").appendTo(szuloelem);
          const ujFoglalas = new Foglalas(tablaElem, elem);
          
      });

      
  }

    $(".kezd").on("click", () => {
      $(".vasarlas").prop('disabled', false);
        adatSzerzes();
              
             
    });


    function adatokKiiras(){
              let nezo= {};
              nezo.nev=$("#nev").val();
              nezo.email=$("#email").val();
              myAjax.postAdat2(fajlnevFoglalas,nezo,utolosKeres);
              
    }
    let utolsoElem;
    function utolosKeres(){
      function utolsoID(tomb){
        utolsoElem=tomb[tomb.length-1].nezoId;
        szekmodositas(utolsoElem);
      }
      myAjax.getAdat2(fajlnevFoglalas, foglalasTomb, utolsoID);
    }

      function szekmodositas(nezoid){
        let check = [];
        let szekekObj={};
        $("input:checkbox[class='szekek']:checked").each(function(){
          check.push($(this).attr("id"));
        });
        check.forEach(element => {
          let ertek=element.split("/");
          let sor=ertek[0];
          let szek=ertek[1];

          szekekObj.sor=sor;
          szekekObj.oszlop=szek;
          szekekObj.vetitesId=adat[0].kapcsolat.vetitesId;
          szekekObj.nezoId=nezoid;
          szekekObj.allapot=2;

          myAjax.getAdat3(fajlnevSzek,szekekObj);
          
          
        });
        
      }



    $(".vasarlas").on("click", () => {
        
          if ($("input:checked").length == ($("#szekekszama").val()))
            {
              adatokKiiras();

              let check2 = $("input:checkbox[class='szekek']:checked").val("");
              $.each(check2, function( key, value ) {
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

