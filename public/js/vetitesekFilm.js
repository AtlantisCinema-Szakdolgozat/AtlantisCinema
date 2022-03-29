class VetitesekFilm{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.filmekGeneralasa();
    }
       
    filmekGeneralasa(){
        for (const key in this.adat) {
            if(key=="cim"){
                this.szuloelem.append("<option id="+this.adat.filmId+">"+this.adat[key]+"</option>");
            }
        }
    }

  
}