$(function(){
    const myAjax=new MyAjax;
    let termek =[];
    const szuloelem = $("#szulo");
    let apivegpont="http://127.0.0.1:8000/api/terem";
    let akt="";

    myAjax.getAdat(apivegpont,termek,termekMegjelenitese);

    function termekMegjelenitese(){
        let egyezes=apivegpont;
        if(egyezes=="http://127.0.0.1:8000/api/terem?q="){
            termek=[]
            apivegpont="http://127.0.0.1:8000/api/terem";
            myAjax.getAdat(apivegpont,termek,termekMegjelenitese);
        }
        else if(akt!==apivegpont || akt=="http://127.0.0.1:8000/api/terem"){
            szuloelem.children().remove();
            let ujTerem;
            termek.forEach(function(adat) {
                let tablaSor = $("<tr></tr>").appendTo(szuloelem);
                ujTerem = new Termek(tablaSor,adat);
            });
        }
        akt=apivegpont;
    }

    $("#keresesmezo").on("keyup",()=>{
        apivegpont="http://127.0.0.1:8000/api/terem";
        apivegpont+="?q="+$("#keresesmezo").val();
        myAjax.getAdat(apivegpont,termek,termekMegjelenitese);
    })

    $("#rendezeskivalasztasa").on("change",function(){
        apivegpont="http://127.0.0.1:8000/api/terem";
        let szempont=$(this).val();
        switch(szempont) {
            case "rend1":
                apivegpont+="?desc=rend1";
              break;
            case "rend2":
                apivegpont+="?desc=rend2";
              break;
            default:
          }
          myAjax.getAdat(apivegpont,termek,termekMegjelenitese);
    })

    $(window).on("torles",(event)=>{
        myAjax.deletAdat(apivegpont,event.detail.adat.teremId,sikeresTorles,event.detail.szuloelem);
    })

    function sikeresTorles(sor){
        $(sor).remove();
    }
});