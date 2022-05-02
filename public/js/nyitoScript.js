$(function() {

    const myAjax = new MyAjax();
    

    /* API végpontok: */
    const komplettFilmApi = "/api/komplettFilm";
    const plakatApi = "/api/film";


    /* Adat tömbök: */
    const komplettFilmTomb = [];
    const plakatTomb = [];

    
    /* Adatok lekérése, tárolása és megjelenítések: */
    myAjax.getAdat(komplettFilmApi, komplettFilmTomb, filmekMegjelenites);   // FILMEK 
    myAjax.getAdat(plakatApi, plakatTomb, galeriaMegjelenites);   // GALÉRIA
    
    
    /* Megjelenítés: */

    function filmekMegjelenites() {

        const szuloElem = $("#musorListaCsempeSzulo");
        let sablonElem = $(".csempeSablon");

        komplettFilmTomb.forEach(function(elem, index) { 

            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujFilm = new Film(ujElem, komplettFilmTomb[index]); 
        });
        
        sablonElem.remove(); 
    }



    /* Oldal váltás, film tovább adása */

    
    $(window).on("filmTovabbTolt", (filmEsemeny) => {

    
        localStorage.setItem("filmKulcs", JSON.stringify(filmEsemeny.detail));
    });
    
    
    $(window).on("idopontTovabbToltTrigger", (idopontEsemeny) => {
    
        localStorage.setItem("vetitesKulcs", JSON.stringify(idopontEsemeny.detail));
    });
    
    



    /* Galéria: */

    let ujGaleriaPlakat=[];

    function galeriaMegjelenites() {

        const galeriaSzulo = $("#carousel");
        let sablonElem = $("#korhintaGaleria");

        const ujElem = sablonElem.clone().appendTo(galeriaSzulo);
        ujGaleriaPlakat = new GaleriaPlakat(ujElem, plakatTomb[1]);

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