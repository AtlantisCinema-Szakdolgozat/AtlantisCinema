
class Vetites {

    constructor(vElem, vAdat) {

        
        this.vElem = vElem;
        this.vAdat = vAdat;
        
        this.vetites = this.vElem.children("p");

        this.setAdatok(this.vAdat);

        console.log(this.vetites);
    }

    setAdatok(ertek) {

        this.vetites.attr(ertek.vetites.kezdesIdo);
    }

}