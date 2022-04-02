
$(function() {


    const myAjax = new MyAjax();


    /*****************************************************/
    /* API végpontok: */

    const vfmApi = "/api/vetitesFilmMufaj";
    const plakatApi = "/api/film";


    /*****************************************************/
    /* Adat tömbök: */

    const vfmTomb = [];
    const plakatTomb = [];

    /*****************************************************/
    /* Adatok lekérése, tárolása és megjelenítések: */

    myAjax.getAdat(vfmApi, vfmTomb, filmekMegjelenites);   // FILMEK 
    myAjax.getAdat(plakatApi, plakatTomb, galeriaMegjelenites);   // GALÉRIA
    


    /*****************************************************/
    /* Oldal váltás, film tovább adása */

    
    $(window).on("filmTovabbTolt", (event) => {

        localStorage.setItem("filmKulcs", JSON.stringify(event.detail));
    });
    
    

    /*****************************************************/
    /* Megjelenítés: */

    function filmekMegjelenites() {

        const szuloElem = $("#musorListaCsempeSzulo");
        let sablonElem = $(".csempeSablon");

        vfmTomb.forEach(function(elem, index) { 

            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujFilm = new Film(ujElem, vfmTomb[index]); 
        });

        sablonElem.remove(); 
    }


    /*****************************************************/
    /* Galéria: */

    let ujGaleriaPlakat=[];

    function galeriaMegjelenites() {

        const galeriaSzulo = $("#carousel");
        let sablonElem = $("#korhintaGaleria");

        const ujElem = sablonElem.clone().appendTo(carousel);
        ujGaleriaPlakat = new GaleriaPlakat(ujElem, plakatTomb[0]);

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