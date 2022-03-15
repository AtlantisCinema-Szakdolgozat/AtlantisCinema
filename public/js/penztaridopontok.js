class Idopontok{

    constructor(elem, adat){
        this.elem=elem;
        //console.log(elem,adat);
        this.filmidopontSablon=this.elem.children(".filmidopontSablon");
        this.foglalj=this.elem.children(".foglalj");
        this.terem=this.elem.children(".terem");
        this.idopont=this.elem.children(".idopont");
        this.szinkron=this.elem.children(".szinkron");
        this.ferohely=this.elem.children(".ferohely");
        this.vasarlas1=this.elem.children(".vasarlas1");
        this.adat=adat;
        this.setAdatok(this.adat);
        
        
        this.foglalj.on("click",()=>{
        this.idopontbetoltTrigger();
        //console.log("Hii");
    });
        

       this.vasarlas1.on("click",()=>{
        this.idopontbetoltTrigger();
        //console.log("Hii");
    });


    }

    setAdatok(ertekek){
        this.terem.html(ertekek.teremId);
        this.idopont.html(ertekek.kezdesiIdo);
        this.szinkron.html(ertekek.szinkron);
        this.ferohely.html(ertekek.ferohely);
    }


    idopontbetoltTrigger(){
        let esemeny=new CustomEvent("idopontBetolt",{
            detail:this.adat,

        });
        window.dispatchEvent(esemeny);

    }



}