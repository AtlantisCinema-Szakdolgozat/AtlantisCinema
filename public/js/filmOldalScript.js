
$(function() {


    //const myAjax = new MyAjax();


    /* Oldal váltás, film betöltése */
 
    let filmAdat = [];

    filmAdat = JSON.parse(localStorage.getItem("filmKulcs"));
    console.log(filmAdat);

    
    /* Megjelenítés: */


    const filmOldal = new FilmOldal(filmAdat);



});