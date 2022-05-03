$(function() {


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


    let filmAdat = [];

    filmAdat = JSON.parse(localStorage.getItem("filmKulcs"));
    //console.log(filmAdat);
    
    const szuloelem = $("#idopontSzulo");
    const filmOldal = new FilmOldal(filmAdat);

    $(".adat").on("click", (event) => {

        itemDatum = $(event.target).closest(".adat").attr("id");
        itemDatum = itemDatum.trim();
        localStorage.setItem("itemdatumertek", itemDatum);
        szuloelem.empty();
        szuloelem.append("<p> Időpontok: </p>")   
        const filmOldal2 = new FilmOldal(filmAdat, itemDatum);
    });

});