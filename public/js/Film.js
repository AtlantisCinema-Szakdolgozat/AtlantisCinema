
class Film {

    constructor(fElem, fAdat) {
       
        this.fElem = fElem;
        this.fAdat = fAdat;

        this.fCim = this.fElem.children("div:last").children(".filmCim");
        this.tovabb = this.fElem.find(".tovabb");

        this.leiras = this.fElem.children("div:last").children("p:last");
        this.plakat = this.fElem.children("div:first").children("img");
        this.mufaj = this.fElem.children("div:last").children("p:first");

        this.idopontSzulo = this.fElem.children("div:last").children("#idopontSzulo");


        
        this.setAdatok(this.fAdat);


        this.tovabb.on("click", () => {

            this.filmTovabbToltTrigger();
        });
        
    }


    setAdatok(ertek) {

        this.fCim.html(ertek.cim);
        this.leiras.html(ertek.filmLeiras);
        this.plakat.attr("src", ertek.poszter);

        for (const key in ertek.mufaj) {

            this.mufaj.html(ertek.mufaj.mufaj);
        }

        for (const key in ertek.vetites) {

            this.idopontSzulo.append("<a class='idopont' href='/foglalasOldal'>" + ertek.vetites[key].kezdesIdo +"</a>");
        }
        
    }


    
    filmTovabbToltTrigger() {

        let esemeny = new CustomEvent("filmTovabbTolt", {detail: this.fAdat,});
        window.dispatchEvent(esemeny);

        console.log("filmTovabbToltTrigger");
    }
    
}



class FilmOldal {

    constructor(fAdat) {
       
        this.fAdat = fAdat;

        this.youtube = $("section").children("div").children("#youtube");

        this.plakat = $("article").children("#filmAdatlap").children("#plakat").children("img");
        this.fCim = $("article").children("#filmAdatlap").children("#leiras").children("#cim");
        this.mufaj = $("article").children("#filmAdatlap").children("#leiras").children("#mufaj");
        this.hossz = $("article").children("#filmAdatlap").children("#leiras").children("#hossz");

        this.rendezo = $("article").children("#filmAdatlap").children("#leiras").children("#rendezo");
        this.szineszek = $("article").children("#filmAdatlap").children("#leiras").children("#szineszek");
        
        this.leiras = $("article").children("#filmAdatlap").children("#leiras").children("#leiras");

        this.idopontSzulo = $("article").children("#idopontSzulo");



        this.setAdatok(this.fAdat);
    }


    setAdatok(ertek) {

        this.youtube.attr("src", ertek.youtubeLink);
        this.plakat.attr("src", ertek.poszter);

        this.fCim.html(ertek.cim);

        for (const key in ertek.mufaj) {

            this.mufaj.html(ertek.mufaj.mufaj);
        }

        this.hossz.html(ertek.hossz);
        this.leiras.html(ertek.filmLeiras);

        /* not yet
        this.szinesz.html();
        this.rendezo.html();
        */

        for (const key in ertek.vetites) {

            this.idopontSzulo.append("<p class='idopont'>" + ertek.vetites[key].kezdesIdo +"</p>");
        }
        
    }
}