
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


        this.fCim.on("click", () => {

            this.filmTovabbToltTrigger();
        });

        this.idopontSzulo.children(".idopont").on("click", () => {

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



/************************************************/

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
        
        this.fLeiras = $("article").children("#filmAdatlap").children("#leiras").children("#fLeiras");

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
        this.fLeiras.html(ertek.filmLeiras);

        for (const key in ertek.szemelyek) {
            
            for (const keY in ertek.szemelyek[key]) {

                if(ertek.szemelyek[key].kapcsolat.poszt === "Rendező") {

                    this.rendezo.html(ertek.szemelyek[key].nev);

                } else {
                    
                    this.szineszek.html(ertek.szemelyek[key].nev);

                    console.log(key, keY);

                }
            }  
        }


        for (const key in ertek.vetites) {

            this.idopontSzulo.append("<a href='/foglalasOldal' class='idopont'>" + ertek.vetites[key].kezdesIdo +"</a>");
        }
        
    }
}



/************************************************/

class FilmFoglalas {

    constructor(fAdat) {
       
        this.fAdat = fAdat;

        this.plakat1 = $("section").children("#valasztottFilm").children("div:first").children("img");
        this.plakat2 = $("section").children("#valasztottFilm").children("div:last").children("img");
        
        this.cim = $("section").children("#valasztottFilm").children("#filmLeiras").children("#cim");
        this.nap = $("section").children("#valasztottFilm").children("#filmLeiras").children("#nap");
        this.kezdesIdo = $("section").children("#valasztottFilm").children("#filmLeiras").children("#kezdesIdo");
        this.terem = $("section").children("#valasztottFilm").children("#filmLeiras").children("#terem");
        this.nyelv = $("section").children("#valasztottFilm").children("#filmLeiras").children("#nyelv");


        this.setAdatok(this.fAdat);
    }


    setAdatok(ertek) {

        this.plakat1.attr("src", ertek.poszter);
        this.plakat2.attr("src", ertek.poszter);

        this.cim.html(ertek.cim);
        
        for (const key in ertek.vetites) {

            this.nap.html(ertek.vetites[key].vetitesNap);
            this.kezdesIdo.html(ertek.vetites[key].kezdesIdo);
        }

        /* 
            terem
            nyelv
        */
        
    }
}