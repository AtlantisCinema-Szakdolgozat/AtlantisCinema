$(function () {

    let fajlnev = "http://127.0.0.1:8000/api/penztarFoOldal";
    const vetitesekTomb = [];
    let eventTomb = [];
    let eventTomb2 = [];
    let itemDatum;

    const napok = [
        "Vasárnap",
        "Hétfő",
        "Kedd",
        "Szerda",
        "Csütörtök",
        "Péntek",
        "Szombat",
    ];
    elejenmegjelenit();
    const myAjax = new MyAjax();



    megjelenit();
    megjelenitAktualisNapot();


    function elejenmegjelenit() {
        $("#tajekoztat").html("Kattintson egy dátumra");
        $(".foglalj").css("display", "none");
        $(".filmmezok").css("display", "none");
        $(".ugras").hide();
    }

    /** Napok megjelenítése: **/

    /** Kattintás**/
    $(".datum").on("click", (event) => {
        $("#tajekoztat").css("display", "none");
        itemDatum = $(event.target).closest(".datum").text();
        itemDatum = itemDatum.trim();
        localStorage.setItem("itemdatumertek", itemDatum);
        myAjax.getAdat(fajlnev, vetitesekTomb, filmetkiir);
        betoltes(itemDatum);
        $(".ugras").show();
    });

   /* PénztárFoOldal*/

   $(window).on("idopontBetolt", (event) => {
    eventTomb.push(event.detail);
    localStorage.setItem("kulcs", JSON.stringify(eventTomb));
});

$(window).on("nyelvKiir", (event) => {
    eventTomb2.push(event.detail);
    localStorage.setItem("nyelv", JSON.stringify(eventTomb2));
});

    function betoltes(event) {
        $(".aktnap").html(event);
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

    function napKiir(napvaltoztat) {
        let d = new Date();
        d.setDate(d.getDate() + napvaltoztat);
        let day = napok[d.getDay()];
        return day;
    }

    function megjelenitAktualisNapot() {
        const szuloelem = $(".aktnap");
        $(szuloelem).html(datumkiir);
    }

    function megjelenit() {
        const szuloelem = $(".datumnapSzulo");
        szuloelem.empty();
        for (let index = 0; index < 7; index++) {
            $(szuloelem).append(
                "<div class='datumnapSablon col'id=" +
                    index +
                    "><p class='nap'>" +
                    napKiir(index) +
                    "</p><p class='datum'>" +
                    datumkiir(index) +
                    " </p></div>"
            );
        }
    }

 

    function idopontKiir(szuloelem, idopontindex, terem) {
        const sablonElem = $(".secSablon .filmidopontSablon");
        sablonElem.show();
        let ujElem = sablonElem.clone().appendTo(szuloelem);
        const ujIdopontok = new Idopontok(ujElem,terem,
            vetitesekTomb[idopontindex].nyelv);
        sablonElem.hide();
    }
    function filmetkiir() {
        let filmId = 0;
        let ujFilm;
        let itemDatume = localStorage.getItem("itemdatumertek");
        const szuloelem = $(".vetitesek");
        const sablonElem = $(".secSablon .filmmezok");
        szuloelem.empty();
        sablonElem.show();
        vetitesekTomb.forEach(function (elem, index) {
            elem.terem.forEach(function (ka, i) {
                if (itemDatume == ka.kapcsolat.vetitesNap) {
                    if (ka.kapcsolat.publikus == 1) {
                        $(".filmmezok").css("border", "inline");
                        $(".foglalj").css("display", "inline");
                        if (filmId != elem.filmId) {
                            let ujElem = sablonElem.clone().appendTo(szuloelem);
                            ujFilm = new Filmek(ujElem, elem);
                        }
                        idopontKiir(ujFilm.filmIdopont, index, ka);
                        filmId = elem.filmId;
                    }
                }
            });
        });
        sablonElem.hide();
    }
});
