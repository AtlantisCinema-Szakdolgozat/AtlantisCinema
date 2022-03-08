$(function() {


    const myAjax = new MyAjax();

    /* API végpontok: */
    const filmApi = "http://127.0.0.1:8000/api/film";
    const vetitesApi = "http://127.0.0.1:8000/api/vetites";

    /* Adat tömbök: */
    const filmekTomb = [];
    const vetitesTomb = [];

    /* Adatok lekérése és tárolása: */
    myAjax.getAdat(filmApi, filmekTomb, filmekMegjelenitese);

    myAjax.getAdatOnly(vetitesApi, vetitesTomb);
    //console.log(vetitesTomb);


    /* Adatok megjelenítése: */

    function filmekMegjelenitese() {

        const szuloElem = $("#musorListaCsempeSzulo");
        let sablonElem = $(".csempeSablon");

        filmekTomb.forEach(function(element, index) {

            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujFilm = new Film(ujElem, filmekTomb[index]); 

            console.log(vetitesTomb);
        });

        sablonElem.remove(); 

    }

});