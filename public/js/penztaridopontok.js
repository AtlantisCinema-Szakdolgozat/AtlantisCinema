class Idopontok{

    constructor(elem, adat,nyelv){
        this.elem=elem;
        this.nyelv=nyelv;
        //console.log(adat);
        this.filmidopontSablon=this.elem.children(".filmidopontSablon");
        this.foglalj=this.elem.children(".foglalj");
        this.terem=this.elem.children(".terem");
        this.idopont=this.elem.children(".idopont");
        this.szinkron=this.elem.children(".szinkron");
        this.ferohely=this.elem.children(".ferohely");
        this.vasarlas1=this.elem.children(".vasarlas1");
        this.adat=adat;
        this.setAdatok(this.adat,this.nyelv);
        
        
        this.foglalj.on("click",()=>{
        this.idopontbetoltTrigger();
        this.nyelvKiir();
        //console.log("Hii");
    });
        

       this.vasarlas1.on("click",()=>{
        this.idopontbetoltTrigger();
        //console.log("Hii");
    });


    }

    setAdatok(ertekek,nyelv){
        //console.log(ertekek);
        this.terem.html(ertekek.teremNev);
        this.idopont.html(ertekek.kapcsolat.kezdesiIdo);
        this.szinkron.html(nyelv);
        //this.ferohely.html(ertekek.ferohely);
    }


    idopontbetoltTrigger(){
        let esemeny=new CustomEvent("idopontBetolt",{
            detail:this.adat,

        });
        window.dispatchEvent(esemeny);

    }

    nyelvKiir(){
        let esemeny=new CustomEvent("nyelvKiir",{
            detail:this.nyelv,

        });
        window.dispatchEvent(esemeny);
    }



}