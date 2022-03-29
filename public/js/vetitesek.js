class Vetitesek{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.vetitesSorGeneralas();
    }

    publikus(){
        let event = new CustomEvent("publikus", {detail:this});
        window.dispatchEvent(event);
    }

    torles(){
        let event = new CustomEvent("torles", {detail:this});
        window.dispatchEvent(event);
    }

    mosdositas(){  
        let event = new CustomEvent("mosdositas", {detail:this});
        window.dispatchEvent(event);
    }
       
    vetitesSorGeneralas(){
        for (const key in this.adat) {
            switch (key){
                case "felirat":
                    if(this.adat.felirat==0){
                        this.szuloelem.append("<td>Nem</td>");
                    }
                    else if(this.adat.felirat==1){
                        this.szuloelem.append("<td>Igen</td>");
                    }
                    
                break;
                case "szinkron":
                    if(this.adat.szinkron==0){
                        this.szuloelem.append("<td>Nem</td>");
                    }
                    else if(this.adat.szinkron==1){
                        this.szuloelem.append("<td>Igen</td>");
                    }
                    
                break;
                case "publikus":   
                if(this.adat.publikus==0){
                    this.szuloelem.append("<td><button type='publikus' dataid="+this.adat.vetitesId+" class='publikus'>Publikus</button></td>");
                }
                else if(this.adat.publikus==1){
                    this.szuloelem.append("<td><button type='publikus' disabled>Publikus</button></td>");
                }                 
                break;
                case "created_at":   
                break;
                case "updated_at":   
                break;
                case "teremId":  
                break;
                case "filmId":  
                break;
                default:
                    this.szuloelem.append("<td>"+this.adat[key]+"</td>");
            }
        }
       
        this.szuloelem.append("<td><button type='torles' dataid="+this.adat.vetitesId+" class='torles'>Törlés</button></td>");
        this.szuloelem.append("<td><button type='modositas' dataid="+this.adat.vetitesId+" class='modositas'>Módosítás</button></td>");
        $(this.szuloelem.find('.publikus')).on("click", ()=>{
             this.publikus();
         });
        $(this.szuloelem.find('.torles')).on("click", ()=>{
             this.torles();
         });

        $(this.szuloelem.find('.modositas')).on("click", ()=>{
            this.mosdositas();
        });
    }

  
}