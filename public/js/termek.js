class Termek{
    constructor(adat){
        this.adat=adat;
    }
       
    tablaSorGeneralas(){
        let aktSor="<tr dataid="+this.adat.teremId+">";
        for (const key in this.adat) {
            if(key!="created_at" && key!="updated_at"){
                aktSor+="<td>"+this.adat[key]+"</td>";
            }
        }
        aktSor+="<td><button type='button' dataid="+this.adat.teremId+" class='torles'>Törlés</button></td>";
        aktSor+="<td><button type='button' dataid="+this.adat.teremId+"  class='modositas'>Módosítás</button></td>";
        aktSor+="</tr>";
        return aktSor;
    }
}