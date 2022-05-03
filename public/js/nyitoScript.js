$(function() {

    const myAjax = new MyAjax();
    let eventTomb = [];

    /* API végpontok: */
    const komplettFilmApi = "/api/komplettFilm";
    const plakatApi = "/api/film";


    /* Adat tömbök: */
    const komplettFilmTomb = [];
    const plakatTomb = [];

    
    /* Adatok lekérése, tárolása és megjelenítések: */
    //myAjax.getAdat(komplettFilmApi, komplettFilmTomb, filmekMegjelenites);   // FILMEK 
    myAjax.getAdat(komplettFilmApi, komplettFilmTomb, filmetkiir);
    myAjax.getAdat(plakatApi, plakatTomb, galeriaMegjelenites);   // GALÉRIA
    
    
    /* Megjelenítés: */

    // function filmekMegjelenites() {

    //     const szuloElem = $("#musorListaCsempeSzulo");
    //     let sablonElem = $(".csempeSablon");

    //     komplettFilmTomb.forEach(function(elem, index) { 

    //         const ujElem = sablonElem.clone().appendTo(szuloElem);
    //         const ujFilm = new Film(ujElem, komplettFilmTomb[index]); 
    //     });
        
    //     sablonElem.remove(); 
    // }

    
    



    /* Oldal váltás, film tovább adása */

    
    $(window).on("filmTovabbTolt", (filmEsemeny) => {

    
        localStorage.setItem("filmKulcs", JSON.stringify(filmEsemeny.detail));
    });
    
    
    $(window).on("idopontTovabbToltTrigger", (event) => {
        eventTomb.push(event.detail);
        console.log("eventTomb");
        localStorage.setItem("vetitesKulcs", JSON.stringify(eventTomb));
    });

    const napok = [
        "Vasárnap",
        "Hétfő",
        "Kedd",
        "Szerda",
        "Csütörtök",
        "Péntek",
        "Szombat",
    ];
    
    megjelenit();
    function napKiir(napvaltoztat) {
        let d = new Date();
        d.setDate(d.getDate() + napvaltoztat);
        let day = napok[d.getDay()];
        return day;
    }

    function datumkiir(napvaltoztat) {
        let jelenlegiDatum = new Date();

        jelenlegiDatum.setDate(jelenlegiDatum.getDate() + napvaltoztat);
        let jelenlegiDatumSzerkesztes = "";
        jelenlegiDatumSzerkesztes = jelenlegiDatum.getFullYear().toString();
        jelenlegiDatumSzerkesztes += "-";

        if (jelenlegiDatum.getMonth().toString().length === 1) {
            jelenlegiDatumSzerkesztes += "0";
            jelenlegiDatumSzerkesztes += (
                jelenlegiDatum.getMonth() + 1
            ).toString();
        } else {
            jelenlegiDatumSzerkesztes += (
                jelenlegiDatum.getMonth() + 1
            ).toString();
        }
        jelenlegiDatumSzerkesztes += "-";
        if (jelenlegiDatum.getDate().toString().length === 1) {
            jelenlegiDatumSzerkesztes += "0";
            jelenlegiDatumSzerkesztes += jelenlegiDatum.getDate().toString();
        } else {
            jelenlegiDatumSzerkesztes += jelenlegiDatum.getDate().toString();
        }
        return jelenlegiDatumSzerkesztes;
    }

    function megjelenit() {
        const szuloelem = $(".collapse");
        szuloelem.empty();
        $(szuloelem).append("<ul class='navbar-nav nav-justified'></ul>");
        for (let index = 0; index < 7; index++) {
           
            $(szuloelem).children(".navbar-nav").append(
                "<li class='nap nav-item ' ><p class='nav-link adat' id="+datumkiir(index)+">"+napKiir(index)+"</p></li>"
            )

            
        }
    }
    const szuloelem = $("#musorListaCsempeSzulo");
    const sablonElem = $(".csempeSablon");

    $(".adat").on("click", (event) => {
        itemDatum = $(event.target).closest(".adat").attr("id");
        itemDatum = itemDatum.trim();
        localStorage.setItem("itemdatumertek", itemDatum);
        szuloelem.empty();           
        sablonElem.show();
        myAjax.getAdat(komplettFilmApi, komplettFilmTomb, filmetkiir);

    });


    function filmetkiir() {
        let itemDatume = localStorage.getItem("itemdatumertek");
        szuloelem.show();
        sablonElem.show();
        komplettFilmTomb.forEach(function (elem, index) {
            elem.vetites.forEach(function (ka, i) {
                if (itemDatume == ka.vetitesNap && ka.publikus == 1 ) {
                    const ujElem = sablonElem.clone().appendTo(szuloelem);
                    const ujFilm = new Film(ujElem, komplettFilmTomb[index],itemDatume);
                }
            });
        });
        sablonElem.hide();
    }


    /* Galéria: */

    let ujGaleriaPlakat=[];

    function galeriaMegjelenites() {

        const galeriaSzulo = $("#carousel");
        let sablonElem = $("#korhintaGaleria");

        const ujElem = sablonElem.clone().appendTo(galeriaSzulo);
        ujGaleriaPlakat = new GaleriaPlakat(ujElem, plakatTomb[0]);

        sablonElem.remove();
    }

    let index = 0;

    function jobbra() {
            
        index++;

        if(index > plakatTomb.length-1) {

            index = 0;
        }

        ujGaleriaPlakat.setAdatok(plakatTomb[index]);    
    }

    function balra() {

        index--;

        if(index < 0) {

            index = plakatTomb.length-1;
           
        }

        ujGaleriaPlakat.setAdatok(plakatTomb[index]);
    }
 
    $("#bal").on("click", ()=> {balra()} );     
    $("#jobb").on("click", ()=> {jobbra()} );
    

});