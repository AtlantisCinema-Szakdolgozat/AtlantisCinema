class Filmek{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;

        this.fimId=this.elem.children(".termeknev");
        this.leiras=this.elem.children(".leiras");
        this.ar=this.elem.children(".ar");

        this.adat=adat;
        this.filmekSorGeneralas();
    }

    // torles(){
    //     let event = new CustomEvent("torles", {detail:this});
    //     window.dispatchEvent(event);
    // }

    // mosdositas(){  
    //     let event = new CustomEvent("mosdositas", {detail:this});
    //     window.dispatchEvent(event);
    // }
       
    filmekSorGeneralas(){
        for (const key in this.adat) {
            
            if(key!="created_at" && key!="updated_at"){
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