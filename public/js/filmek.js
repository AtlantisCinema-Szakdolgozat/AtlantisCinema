class Filmek{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;

        this.filmId=this.szuloelem.children(".filmadatok").children(".row").children(".filmID");
        this.cim=this.szuloelem.children(".filmadatok").children(".row").children(".cim");
        this.leiras=this.szuloelem.children(".filmadatok").children(".row").children(".leiras");
        this.hossz=this.szuloelem.children(".filmadatok").children(".row").children(".hossz");
        this.nyelv=this.szuloelem.children(".filmadatok").children(".row").children(".nyelv");
        this.mufaj=this.szuloelem.children(".filmadatok").children(".row").children(".mufaj");
        this.szereplo=this.szuloelem.children(".filmadatok").children(".row").children(".szereplo");
        this.rendezo=this.szuloelem.children(".filmadatok").children(".row").children(".rendezo");
        this.poszter=this.szuloelem.children(".filmadatok").children(".row").children(".poszter");
        this.youtubeLink=this.szuloelem.children(".filmadatok").children(".row").children(".youtubeLink");
        this.torl=this.szuloelem.children(".filmadatok").children(".row").children(".col-6").children(".torles");
        this.mosdosit=this.szuloelem.children(".filmadatok").children(".row").children(".col-6").children(".modositas");
       
        this.adat=adat;
        this.filmekSorGeneralas(this.adat);
        $(this.szuloelem.find('.torles')).on("click", ()=>{
            this.torles();
        });

       $(this.szuloelem.find('.modositas')).on("click", ()=>{
           this.mosdositas();
       });
    }

    torles(){
        let event = new CustomEvent("torles", {detail:this});
        window.dispatchEvent(event);
    }

    mosdositas(){  
        let event = new CustomEvent("mosdositas", {detail:this});
        window.dispatchEvent(event);
    }
       
    filmekSorGeneralas(ertekek){
        this.filmId.html(this.adat.filmId);
        this.cim.html(this.adat.cim);
        this.leiras.html(this.adat.filmLeiras);
        this.hossz.html(this.adat.hossz);
        this.nyelv.html(this.adat.nyelv);
        this.mufaj.html(this.adat.mufaj.mufaj);
        let szemely="";
        let rendezo="";
        ertekek.szemelyek.forEach(element => {
            
            if(element.kapcsolat.poszt=="színész"){
                szemely+=element.nev+", ";
                this.szereplo.html(szemely);
            }
            else{
                rendezo+=element.nev+", ";
                this.rendezo.html(rendezo);
            }
        });
        this.poszter.attr('src',this.adat.poszter);
        this.youtubeLink.html(this.adat.youtubeLink);
        this.torl.attr('value',this.adat.filmId);
        this.mosdosit.attr('value',this.adat.filmId);
        
    }
}

class MufajBetoltes{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.mufajGeneralasa();
    }
       
    mufajGeneralasa(){
        for (const key in this.adat) {
            if(key=="mufaj"){
                this.szuloelem.append("<option value="+this.adat.mufajId+" id=m"+this.adat.mufajId+">"+this.adat[key]+"</option>");
            }
        }
    }
}

class Szemely{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.szemelyGeneralas();
    }
       
    szemelyGeneralas(){
        for (const key in this.adat) {
            if(key=="nev"){
                this.szuloelem.append("<option value="+this.adat.szemelyId+" id=s"+this.adat.szemelyId+">"+this.adat[key]+"</option>");
            }
        }
    }

  
}

class Szemely2{
    constructor(szuloelem, adat){
        this.szuloelem=szuloelem;
        this.adat=adat;
        this.szemelyGeneralas();
    }
       
    szemelyGeneralas(){
        for (const key in this.adat) {
            if(key=="nev"){
                this.szuloelem.append("<option value="+this.adat.szemelyId+" id=r"+this.adat.szemelyId+">"+this.adat[key]+"</option>");
            }
        }
    }

  
}