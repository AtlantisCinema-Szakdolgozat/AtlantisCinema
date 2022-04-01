
class Film {

    constructor(fElem, fAdat) {
       
        this.fElem = fElem;
        this.fAdat = fAdat;

        this.fCim = this.fElem.children("div:last").children(".filmCim");
        this.tovabb = this.fElem.find(".tovabb");

        this.leiras = this.fElem.children("div:last").children("p:last");
        this.plakat = this.fElem.children("div:first").children("img");
        this.mufaj = this.fElem.children("div:last").children("p:first");

        this.idopontSzulo = this.fElem.children("div:last").children("#idopontSzulo")


        this.setAdatok(this.fAdat);


        /*
        this.tovabb.on("click", () => {

            this.filmTovabbToltTrigger();
        });
        */

    }


    setAdatok(ertek) {

        this.fCim.html(ertek.cim);
        this.leiras.html(ertek.filmLeiras);
        this.plakat.attr("src", ertek.poszter);

        for (const key in ertek.mufaj) {

            this.mufaj.html(ertek.mufaj.mufaj);
        }

        for (const key in ertek.vetites) {

            this.idopontSzulo.append("<p class='idopont'>" + ertek.vetites[key].kezdesIdo +"</p>");
        }
        
    }


    
    filmTovabbToltTrigger() {

        let esemeny = new CustomEvent("filmTovabbtolt", {detail: this.fAdat,});
        window.dispatchEvent(esemeny);

        console.log("filmTovabbToltTrigger");
    }
    
}
