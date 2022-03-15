class Foglalas{

    constructor(elem, adat){
        this.elem=elem;
       
       
       
        this.nev=this.elem.children(".nev");
        this.email=this.elem.children(".email");
        this.adat=adat;
        this.setAdatok(this.adat);
        
        
        
    }

    setAdatok(ertekek){
        
        this.nev.html(ertekek.nev);
        this.email.html(ertekek.email);
        
    }





}