
$(function() {


    const myAjax = new MyAjax();


    /*****************************************************/
    /* API végpontok: */

    const vfmApi = "/api/vetitesFilmMufaj";
    const plakatApi = "/api/film";
    const vetitesApi = "/api/vetites";

    /*
    const filmApi = "/api/filmMufaj";
    */

    
    /*****************************************************/
    /* Adat tömbök: */

    const vfmTomb = [];
    const plakatTomb = [];
    const vetitesTomb = [];

    /*
    const filmTomb = [];
    */
    
    const filmEventTomb = [];


    /*****************************************************/
    /* Adatok lekérése, tárolása és megjelenítések: */

    myAjax.getAdat(vfmApi, vfmTomb, filmekMegjelenites);   // FILMEK példányosítása
    myAjax.getAdat(plakatApi, plakatTomb, galeriaMegjelenites);   // GALÉRIA
    
    myAjax.getAdatOnly(vetitesApi, vetitesTomb); 



    /*****************************************************/
    /* Oldal váltás, local storage */

    /*
    $(window).on("filmTovabbTolt", (event) => {

        alert("ghf");
        filmEventTomb.push(event.detail);
        console.log(filmEventTomb);
        localStorage.setItem("kulcs", JSON.stringify(filmEventTomb));


    });
    */



    /*****************************************************/
    /* Megjelenítés: */

    function filmekMegjelenites() {

        const szuloElem = $("#musorListaCsempeSzulo");
        let sablonElem = $(".csempeSablon");

        vfmTomb.forEach(function(elem, index) {

            //console.log(elem, index); 

            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujFilm = new Film(ujElem, vfmTomb[index]); 

            // vetitesMegjelenites(index);
        });

        sablonElem.remove(); 
    }

    // function vetitesMegjelenites(index) {

    //     const szuloElem = $(".idopontSzulo");
    //     let sablonElem = $(".idopontSablon");

    //     // const idopontok = vetitesTomb[index];
    //     // console.log(idopontok);

    //     idopontok.forEach(function (elem, index) {

    //         console.log(elem, index); 

    //         //const ujElem = sablonElem.clone().appendTo(szuloElem); 
    //         //const ujVetites = new Vetites(ujElem, vfmTomb[index].kezdesIdo);
    //     });

    //     sablonElem.remove();
    // }



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