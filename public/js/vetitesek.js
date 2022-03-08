class Vetitesek{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.vetitesSorGeneralas();
    }

    // torles(){
    //     let event = new CustomEvent("torles", {detail:this});
    //     window.dispatchEvent(event);
    // }

    // mosdositas(){  
    //     let event = new CustomEvent("mosdositas", {detail:this});
    //     window.dispatchEvent(event);
    // }
       
    vetitesSorGeneralas(){
        for (const key in this.adat) {
            // console.log(this.adat.felirat);
            // if(key!="created_at" && key!="updated_at" && key!="premier"){
            //     this.szuloelem.append("<td>"+this.adat[key]+"</td>");
            // }
            // if(key!="created_at" && key!="updated_at"){
            //     this.szuloelem.append("<td>"+this.adat[key]+"</td>");
            // }

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
                // case "premier":
                //     if(this.adat.premier=="0000-00-00"){
                //         this.szuloelem.append("<td>Nem</td>");
                //     }
                //     else if(this.adat.premier==1){
                //         this.szuloelem.append("<td>Igen</td>");
                //     }
                    
                // break;
                case "publikus":
                    if(this.adat.publikus==0){
                        this.szuloelem.append("<td>Nem</td>");
                    }
                    else if(this.adat.publikus==1){
                        this.szuloelem.append("<td>Igen</td>");
                    }
                    
                break;
                case "created_at":   
                break;
                case "updated_at":   
                break;
                default:
                    this.szuloelem.append("<td>"+this.adat[key]+"</td>");
            }
        }
        this.szuloelem.append("<td><button type='torles' dataid="+this.adat.teremId+" class='torles'>Törlés</button></td>");
        this.szuloelem.append("<td><button type='modositas' dataid="+this.adat.teremId+" class='modositas'>Módosítás</button></td>");
        // $(this.szuloelem.find('.torles')).on("click", ()=>{
        //      this.torles();
        //  });

        // $(this.szuloelem.find('.modositas')).on("click", ()=>{
        //     this.mosdositas();
        // });
    }

  
}