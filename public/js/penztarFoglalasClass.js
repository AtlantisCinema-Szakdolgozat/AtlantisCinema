class Foglalas{

    constructor(elem, adat){
        this.elem=elem;
        this.adat=adat;
        this.adatGeneralas();
    }

    adatGeneralas(){
        for (const key in this.adat) {
            if(key!="created_at" && key!="updated_at"){
                this.elem.append("<td>"+this.adat[key]+"</td>");
                
            }
        }
    }

}