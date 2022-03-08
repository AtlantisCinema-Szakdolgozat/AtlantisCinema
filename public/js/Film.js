
class Film {

    constructor(fElem, fAdat) {

        this.fElem = fElem;
        this.fAdat = fAdat;

        this.fCim = this.fElem.children("div:last").children("a").children("h3");
        this.leiras = this.fElem.children("div:last").children("p:last");
        this.plakat = this.fElem.children("div:first").children("img");
        this.mufaj = this.fElem.children("div:last").children("p:first");

        /* Ezek csak a nyitó oldalon használt film adatok. A kiválasztott film ebből öröklődik? */  


        this.setAdatok(this.fAdat);
        this.setMufaj(this.fAdat);
    }

    setAdatok(ertek) {

        this.fCim.html(ertek.cim);
        this.leiras.html(ertek.filmLeiras);
        this.plakat.attr("src", ertek.poszter);
        this.mufaj.html(ertek.mufajID);
    }

    setMufaj(ertek) {

        const myAjax = new MyAjax();

        const mufajApi = "http://127.0.0.1:8000/api/mufaj";
        const mufajTomb = [];
        myAjax.getAdatOnly(mufajApi, mufajTomb);

        //console.log(ertek.mufajID);
        //console.log(mufajTomb);

        this.mufaj.html();
    }

}