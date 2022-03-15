class Foglalas{

    constructor(elem, adat){
        this.elem=elem;
       
       
        this.sorszam=this.elem.children(".sorszam");
        this.nev=this.elem.children(".nev");
        this.email=this.elem.children(".email");
        this.adat=adat;
        this.setAdatok(this.adat);
        
        
        
    }

    setAdatok(ertekek){
        this.sorszam.html(ertekek.nezoId);
        this.nev.html(ertekek.nev);
        this.email.html(ertekek.email);
        
    }





}