$(function() {


    /* felugró ablak */

    var ablak = document.getElementById("foglFelugro");
                
    var gomb = document.getElementById("foglalasGomb");

    gomb.onclick = function() {

         ablak.style.display = "block";
    }
                


    /* Oldal váltás, film betöltése */
 
    let filmAdat = [];

    filmAdat = JSON.parse(localStorage.getItem("vetitesKulcs"));
    console.log(filmAdat);
    filmAdat.forEach(element => {

        console.log(element.kivalasztottIdopont);
    });


    /* Megjelenítés: */

    const filmOldal = new FilmFoglalas(filmAdat);


   
    const myAjax = new MyAjax();

    let foglalasTomb = [];
    let fajlnevFoglalas ="http://127.0.0.1:8000/api/nezo";
    let fajlnevSzek ="http://127.0.0.1:8000/api/szek";

    function adatokKiiras() {

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
            
            console.log(filmAdat.kivalasztottIdopont);
            szekekObj.sor=sor;
            szekekObj.oszlop=szek;
            let vetitesId;
            filmAdat.forEach(element => {
                vetitesId=element.kivalasztottIdopont;
            });
            console.log(vetitesId);
            szekekObj.vetitesId=vetitesId;
            console.log(szekekObj.vetitesId);
            szekekObj.nezoId=nezoid;
            szekekObj.allapot=2;

            myAjax.getAdat3(fajlnevSzek,szekekObj);
            
            
        });
    
    }



    $("#foglalasGomb").on("click", () => {
        
        if ($("input:checked").length == ($("#szekekszama").val()))
        {
            adatokKiiras();

            let check2 = $("input:checkbox[class='szekek']:checked").val("");
            $.each(check2, function( key, value ) {
                $(value).css('accent-color','red');
            }); 
        }
        else
        {
            alert("Kérlek válassz " + ($("#szekekszama").val()) + " széket!")
        }
        adatSzerzes();
        
    });


    function adatSzerzes()
    {
        if (( $("#nev").val().length == 0 ) || ( $("#szekekszama").val().length == 0 )||( $("#email").val().length == 0 ))
        {
            alert("Kérlek töltsd ki a az összes mezőt!");

        }
    }

});