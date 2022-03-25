class Kedvezmenyek{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.kedvezmenyekSorGeneralas(this.adat);
    }   

    torles(){
        let event = new CustomEvent("torles", {detail:this});
        window.dispatchEvent(event);
    }

    mosdositas(){  
        let event = new CustomEvent("mosdositas", {detail:this});
        window.dispatchEvent(event);
    }
       
    kedvezmenyekSorGeneralas(){
        for (const key in this.adat) {
            if(key!="created_at" && key!="updated_at"){
                this.szuloelem.append("<td>"+this.adat[key]+"</td>");
            }
        }
        this.szuloelem.append("<td><button type='torles' dataid="+this.adat.kedvezmenyId+" class='torles'>Törlés</button></td>");
        this.szuloelem.append("<td><button type='modositas' dataid="+this.adat.kedvezmenyId+" class='modositas'>Módosítás</button></td>");
        $(this.szuloelem.find('.torles')).on("click", ()=>{
             this.torles();
         });

        $(this.szuloelem.find('.modositas')).on("click", ()=>{
            this.mosdositas();
        });
    }
}