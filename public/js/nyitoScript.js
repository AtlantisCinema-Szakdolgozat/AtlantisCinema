
$(function() {


    const myAjax = new MyAjax();


    /* API végpontok: */

    const filmApi = "http://127.0.0.1:8000/api/filmMufaj";   // film tábla, összekötve a műfaj táblával
    const plakatApi = "http://127.0.0.1:8000/api/filmPlakat";   
    const film = "http://127.0.0.1:8000/api/film";   
    const vfmApi = "http://127.0.0.1:8000/api/vetitesFilmMufaj";

    /* Adat tömb: */

    const filmekTomb = [];
    const plakatTomb = [];
    const vfmTomb = [];


    /* Adatok lekérése, tárolása és megjelenítések: */

    myAjax.getAdat(filmApi, filmekTomb, filmekMegjelenites);
    
    myAjax.getAdat(film, plakatTomb, galeriaMegjelenites);
    
    myAjax.getAdatOnly(vfmApi, vfmTomb);
    //console.log("vfmTomb: ", vfmTomb);


    /*
    console.log(filmekTomb);
    galeriaMegjelenites();
    */



    /* Megjelenítés: */

    function filmekMegjelenites() {

        const szuloElem = $("#musorListaCsempeSzulo");
        let sablonElem = $(".csempeSablon");

        filmekTomb.forEach(function(element, index) {

            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujFilm = new Film(ujElem, filmekTomb[index]); 
        });

        sablonElem.remove(); 
    }



    /* Galéria: */

    let ujGaleriaPlakat=[];

    function galeriaMegjelenites() {

        const galeriaSzulo = $("#carousel");
        let sablonElem = $("#korhintaGaleria");

        //let bal = " <button id='bal'> << </button> ".appendTo(carousel);
        
        const ujElem = sablonElem.clone().appendTo(carousel);
        ujGaleriaPlakat = new GaleriaPlakat(ujElem, plakatTomb[0]);

        //let jobb = " <button id='jobb'> << </button> ".appendTo(carousel);

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
    




    /* Auto lapozás 
   
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    */

});