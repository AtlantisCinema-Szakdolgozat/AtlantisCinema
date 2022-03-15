class Filmek{
    constructor(elem, adat){
        this.elem=elem;
        //console.log(elem,adat);
        this.filmcim=this.elem.children(".filmcimek").children(".filmCim");
        this.filmIdopont=this.elem.children(".filmidopont");
        this.adat=adat;
        this.setAdatok(this.adat);
        
        
    }

    setAdatok(ertekek){
        this.filmcim.html(ertekek.filmID);

    }

}