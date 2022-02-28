class Termek{
    constructor(adat){
        this.adat=adat;
        console.log();
    }
       
    tablaSorGeneralas(){
        let aktSor="<tr calass='tr' dataid="+this.adat.teremId+">";
        for (const key in this.adat) {
            if(key!="created_at" && key!="updated_at"){
                aktSor+="<td>"+this.adat[key]+"</td>";
            }
        }
        aktSor+="<td><button type='torles' dataid="+this.adat.teremId+" class='torles'>Törlés</button></td>";
        aktSor+="<td><button type='button' dataid="+this.adat.teremId+" class='modositas'>Módosítás</button></td>";
        aktSor+="</tr>";
        return aktSor;
    }
}