class Idopontok{

    constructor(elem, adat,nyelv){
        this.adat=adat;
        this.elem=elem;
        this.nyelv=nyelv;
        this.foglalj=this.elem.children(".ugras");
        this.terem=this.elem.children(".terem");
        this.idopont=this.elem.children(".idopont");
        this.szinkron=this.elem.children(".szinkron");
        this.vasarlas1=this.elem.children(".vasarlas1");
        this.setAdatok(this.adat,this.nyelv);
        this.foglalj.on("click",()=>{
        this.idopontbetoltTrigger();
        this.nyelvKiir();
       
    });
        

       this.vasarlas1.on("click",()=>{
        this.idopontbetoltTrigger();
    });


    }

    setAdatok(ertekek,nyelv){
        this.terem.html(ertekek.teremNev);
        this.idopont.html(ertekek.kapcsolat.kezdesiIdo);
        this.szinkron.html(nyelv);
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