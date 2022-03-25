
$(function() {


    const myAjax = new MyAjax();


    /* API végpontok: */

    const filmApi = "http://127.0.0.1:8000/api/filmMufaj";   // film tábla, összekötve a műfaj táblával


    /* Adat tömb: */

    const filmekTomb = [];


    /* Adatok lekérése, tárolása és megjelenítése: */

    myAjax.getAdat(filmApi, filmekTomb, filmekMegjelenitese);



    /* Megjelenítés: */

    function filmekMegjelenitese() {

        const szuloElem = $("#musorListaCsempeSzulo");
        let sablonElem = $(".csempeSablon");

        filmekTomb.forEach(function(element, index) {

            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujFilm = new Film(ujElem, filmekTomb[index]); 
        });

        sablonElem.remove(); 
    }

});