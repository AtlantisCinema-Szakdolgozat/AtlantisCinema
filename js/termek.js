class Termek{
    constructor(elem, adat, index){
        this.elem=elem;
        this.adat=adat;
        this.index=index;
        this.setAdatok(this.adat);
    }   
    setAdatok(ertekek){
        let aktSor="<tr dataid="+this.index+">";
        for (const key in ertekek) {
            aktSor+="<td>"+ertekek[key]+"</td>";
        }
        aktSor+="<td><button type='button' dataid="+this.index+" class='torles'>Törlés</button></td>";
        aktSor+="<td><button type='button' dataid="+this.index+"  class='modositas'>Módosítás</button></td>";
        aktSor+="</tr>";
        this.elem.append(aktSor);
    }
}