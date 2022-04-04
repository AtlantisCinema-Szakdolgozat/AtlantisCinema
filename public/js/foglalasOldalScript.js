$(function() {


    //const myAjax = new MyAjax();


    /* Oldal váltás, film betöltése */
 
    let filmAdat = [];

    filmAdat = JSON.parse(localStorage.getItem("filmKulcs"));
    console.log(filmAdat);

    
    /* Megjelenítés: */


    const filmOldal = new FilmFoglalas(filmAdat);



});





/*
var modal = document.getElementById("foglFelugro");
            
var btn = document.getElementById("foglalasGomb");
            
btn.onclick = function() {

    modal.style.display = "block";
}
            
span.onclick = function() {

    modal.style.display = "none";
}
*/