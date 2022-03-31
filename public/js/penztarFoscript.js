$(function () {
    //const idopontokTomb = [];
    let fajlnev = "http://127.0.0.1:8000/api/penztarFoOldal";
    //let fajlnevFoglalas ="http://127.0.0.1:8000/api/nezo";
    let fajlnevVetites = "http://127.0.0.1:8000/api/vetites/";
    const vetitesekTomb = [];
    //const foglalasTomb = [];
    const fajlnevVetitesTomb = [];
    let eventTomb = [];
    let eventTomb2 = [];
    var itemDatum;
    const napok = [
        "Vasárnap",
        "Hétfő",
        "Kedd",
        "Szerda",
        "Csütörtök",
        "Péntek",
        "Szombat",
    ];
    const myAjax = new MyAjax();
    elejenmegjelenit();
    //myAjax.getAdat(fajlnev, vetitesekTomb, filmetkiir);
    //myAjax.getAdat(fajlnevFoglalas, foglalasTomb, foglalasKiir);
    myAjax.getAdat(fajlnevVetites, fajlnevVetitesTomb, elejenmegjelenit);
    myAjax.getAdat(fajlnevVetites, fajlnevVetitesTomb, fajlnevVetitesNap);

    
    megjelenit();
    megjelenitAktualisNapot();

    function fajlnevVetitesNap() {
        fajlnevVetitesTomb.forEach(function (elem) {
            return elem.vetitesNap;
        });
    }

  

    function elejenmegjelenit() {
      fajlnevVetitesTomb.forEach((element) => {
        console.log(itemDatum);
        console.log(element.vetitesNap);

        if (datumkiir == element.vetitesNap) {
            myAjax.getAdat(fajlnev, vetitesekTomb, filmetkiir);
        } else {
            $(".foglalj").css("display", "none");

        }
    });
      
    }

    /** Napok megjelenítése: **/

    /** Kattintás**/
    $(".datum").on("click", (event) => {
        itemDatum = $(event.target).closest(".datum").text();
        itemDatum = itemDatum.trim();
        localStorage.setItem("itemdatumertek", itemDatum);
        myAjax.getAdat(fajlnev, vetitesekTomb, filmetkiir);
        //console.log(itemDatum);
        //console.log(itemDatum);
        betoltes(itemDatum);
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
        //const sablonElem = $(".datumnapSzulo .datumnapSablon");
        szuloelem.empty();
        //sablonElem.show();

        //$(".nap").html(napKiir(0));
        //$(".datum").html(datumkiir(0));

        for (let index = 0; index < 7; index++) {
            //let ujElem = sablonElem.clone().appendTo(szuloelem);
            $(szuloelem).append(
                "<div class='datumnapSablon col'id=" +
                    index +
                    "><p class='nap'>" +
                    napKiir(index) +
                    "</p><p class='datum'>" +
                    datumkiir(index) +
                    " </p></div>"
            );
            //console.log(napKiir(index));
            //console.log(datumkiir(index));
            // $(".nap").append(napKiir(index));
            // $(".datum").append(datumkiir(index));
        }
        //sablonElem.hide();

        /*
    vetitesekTomb.forEach(function (elem, index) {
     
      let ujElem = sablonElem.clone().appendTo(szuloelem);
      // console.log(ujElem);
      const ujFilm = new Filmek(ujElem, elem);
      //console.log(ujFilm.filmIdopont);
      //A KONKRÉT FILMHEZ A FILMIDŐPONTOK
       idopontKiir(ujFilm.filmIdopont, index);

       
      //idopontKiir(ujFilm.filmIdopont, index);

      // console.log(ujIdopontok);
    });
    sablonElem.hide();
*/
    }

    /* PénztárFoOldal*/
    $(window).on("idopontBetolt", (event) => {
        eventTomb.push(event.detail);
        console.log(eventTomb);
        //console.log(event.detail.adat.nyelv);
        localStorage.setItem("kulcs", JSON.stringify(eventTomb));
    });

    $(window).on("nyelvKiir", (event) => {
        console.log(event.detail);
        eventTomb2.push(event.detail);
        localStorage.setItem("nyelv", JSON.stringify(eventTomb2));
    });

    function idopontKiir(szuloelem, index) {
        //idpontok egy adott filmhez

        const sablonElem = $(".secSablon .filmidopontSablon");

        szuloelem.empty();
        sablonElem.show();

        const idopontTomb = vetitesekTomb[index].terem;

        idopontTomb.forEach(function (elem, index) {
            let ujElem = sablonElem.clone().appendTo(szuloelem);
            //console.log(elem);
            const ujIdopontok = new Idopontok(
                ujElem,
                elem,
                vetitesekTomb[index].nyelv
            );
            // console.log(ujIdopontok);
        });
        sablonElem.hide();
    }

    function filmetkiir() {
        let itemDatume = localStorage.getItem("itemdatumertek");
        const szuloelem = $(".vetitesek");
        const sablonElem = $(".secSablon .filmmezok");
        //console.log(vetitesekTomb);
        szuloelem.empty();
        sablonElem.show();
        vetitesekTomb.forEach(function (elem, index) {
            elem.terem.forEach(function (ka, i) {
                //console.log(ka.kapcsolat.vetitesNap, itemDatume);
                if (itemDatume == ka.kapcsolat.vetitesNap) {
                    //console.log(ka.kapcsolat.vetitesNap);
                    if (ka.kapcsolat.publikus == 1) {
                        //console.log(ka.kapcsolat.publikus);
                        $('.filmmezok').css("border","inline")
                        $(".foglalj").css("display", "inline");
                        let ujElem = sablonElem.clone().appendTo(szuloelem);

                        let ujFilm = new Filmek(ujElem, elem);
                        idopontKiir(ujFilm.filmIdopont, index);
                    }
                  }
            });

            //A KONKRÉT FILMHEZ A FILMIDŐPONTOK
            //idopontKiir(ujFilm.filmIdopont, index);
            
            // console.log(ujIdopontok);
        });
        sablonElem.hide();
    }

    /* PÉNZTÁR VÉGEEEEEEE*/
    /* PénztárFoglalas */

    // function foglalasKiir() {
    //     const szuloelem = $(".tablafoglaSzulo");
    //     const sablonElem = $(".tablafoglaSablon");
    //     szuloelem.empty();
    //     sablonElem.show();
    //     //console.log(foglalasTomb);
    //     foglalasTomb.forEach(function (elem) {
    //         let ujElem = sablonElem.clone().appendTo(szuloelem);
    //         // console.log(ujElem);
    //         const ujFoglalas = new Foglalas(ujElem, elem);
    //     });
    //     sablonElem.hide();
    // }

    /*Keresés */

    // $("#keresesmezofoglalas").on("keyup", () => {
    //     const szuloelem = $(".tablafoglaSzulo");
    //     const sablonElem = $(".tablafoglaSablon");
    //     apivegpont = "http://127.0.0.1:8000/api/nezo";
    //     apivegpont += "?q=" + $("#keresesmezofoglalas").val();
    //     szuloelem.children().remove();
    //     foglalasTomb.splice();
    //     console.log(foglalasTomb);
    //     myAjax.getAdat(apivegpont, foglalasTomb, foglalasKiir);
    // });

    // $("#rendezes").on("change", function () {
    //     const szuloelem = $(".tablafoglaSzulo");
    //     const sablonElem = $(".tablafoglaSablon");
    //     apivegpont = "http://127.0.0.1:8000/api/nezo";
    //     szuloelem.children().remove();
    //     foglalasTomb.splice();
    //     let szempont = $(this).val();
    //     switch (szempont) {
    //         case "rendezesSzempont1":
    //             apivegpont += "?desc=rendezesSzempont1";
    //             break;
    //         case "rendezesSzempont2":
    //             apivegpont += "?desc=rendezesSzempont2";
    //             break;
    //         default:
    //             break;
    //     }
    //     myAjax.getAdat(apivegpont, foglalasTomb, foglalasKiir);
    // });
});
