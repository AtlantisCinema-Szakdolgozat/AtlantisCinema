class VetitesekTerem{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.termekGeneralasa();
    }
       
    termekGeneralasa(){
        for (const key in this.adat) {
            if(key=="teremNev"){
                this.szuloelem.append("<option value="+this.adat.teremId+">"+this.adat[key]+"</option>");
            }
        }
    }

  
}