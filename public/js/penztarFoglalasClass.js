class Foglalas{

    constructor(elem, adat){
        this.elem=elem;
        //this.nev=this.elem.children(".nev");
        //this.email=this.elem.children(".email");
        this.adat=adat;
        //this.setAdatok(this.adat);
        this.adatGeneralas();
        
        
    }

    setAdatok(ertekek){
        
        this.nev.html(ertekek.nev);
        this.email.html(ertekek.email);
        
    }

    adatGeneralas(){
        for (const key in this.adat) {
            if(key!="created_at" && key!="updated_at"){
                this.elem.append("<td>"+this.adat[key]+"</td>");
                
            }
        }
        

    }



}