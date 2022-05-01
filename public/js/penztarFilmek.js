class Filmek{
    constructor(elem, adat){
        this.adat=adat;
        this.elem=elem;
        this.filmcim=this.elem.find(".filmCim");
        this.filmIdopont=this.elem.find(".filmidopont");
        this.setAdatok(this.adat);
    }

    setAdatok(ertekek){
        this.filmcim.append(ertekek.cim);
    }
  
}
