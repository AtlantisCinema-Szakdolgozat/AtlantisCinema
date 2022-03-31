class Filmek{
    constructor(elem, adat){
        this.adat=adat;
        console.log(adat);
        this.elem=elem;
        //console.log(elem,adat);
        this.filmcim=this.elem.find(".filmCim");
        this.filmIdopont=this.elem.find(".filmidopont");
        
        //console.log(adat);
        this.setAdatok(this.adat);
        
        
    }

    setAdatok(ertekek){
        this.filmcim.append(ertekek.cim);
        console.log(ertekek.cim);

    }





    
}
