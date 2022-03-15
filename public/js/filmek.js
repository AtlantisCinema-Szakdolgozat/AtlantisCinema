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
        this.torles=this.szuloelem.children(".filmadatok").children(".row").children(".col-6").children(".torles");
        this.modositas=this.szuloelem.children(".filmadatok").children(".row").children(".col-6").children(".modositas");
       
        this.adat=adat;
        this.filmekSorGeneralas(this.adat);
    }
       
    filmekSorGeneralas(ertekek){
        console.log(ertekek.szemelyek);
        this.filmId.html(this.adat.filmId);
        this.cim.html(this.adat.cim);
        this.leiras.html(this.adat.filmLeiras);
        this.hossz.html(this.adat.hossz);
        this.nyelv.html(this.adat.nyelv);
        this.mufaj.html(this.adat.mufaj.mufaj);
        let szemely="";
        let rendezo="";
        ertekek.szemelyek.forEach(element => {
            if(element.kapcsolat.poszt="Szereplő"){
                szemely+=element.nev+", ";
                this.szereplo.html(szemely);
            }
            else{
                rendezo+=element.nev+", ";
                this.rendezo.html(rendezo);
            }
        });
        this.poszter.html(this.adat.poszter);
        this.youtubeLink.html(this.adat.youtubeLink);
        this.torles.attr('value',this.adat.filmId);
        this.modositas.attr('value',this.adat.filmId);
    }
}