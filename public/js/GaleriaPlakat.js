
class GaleriaPlakat {

    constructor(gElem, gAdat) {

        this.gElem = gElem;
        this.gAdat = gAdat;

        this.plakat = this.gElem.children("img");

        this.setAdatok(this.gAdat);
    }


    setAdatok(ertek) {
// console.log(ertek.poszter)
        this.plakat.attr("src", ertek.poszter);
        console.log(this.plakat)
    }

}