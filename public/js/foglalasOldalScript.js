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

    

    /* Megjelenítés: */

    const filmOldal = new FilmFoglalas(filmAdat);

});