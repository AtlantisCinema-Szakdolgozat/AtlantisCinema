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
        apivegpont="http://127.0.0.1:8000/api/terem";
        myAjax.deletAdat(apivegpont,event.detail.adat.teremId,sikeresTorles,event.detail.szuloelem);
    });

    $(".felvitel").on("click", ()=>{
        let ujTerem={};
        ujTerem.teremNev=$("#tnev").val();
        ujTerem.sor=Number($("#sor").val());
        ujTerem.oszlop=Number($("#oszlop").val());
        myAjax.postAdat(apivegpont,ujTerem);
        myAjax.getAdat(apivegpont,termek,termekMegjelenitese);
        $("#tnev").val('');
        $("#sor").val('');
        $("#oszlop").val('');
    });

    $(window).on("mosdositas",(event)=>{
        $("#teremid").val(event.detail.adat.teremId);
        $("#tnev").val(event.detail.adat.teremNev);
        $("#sor").val(event.detail.adat.sor);
        $("#oszlop").val(event.detail.adat.oszlop);
        $(".felvitel").css("display", "none");
        $(".modosit").css("display", "inline");

    });

    $(".modosit").on("click", ()=>{
        let mosoitottTerem={};
        mosoitottTerem.teremId=$("#teremid").val();
        mosoitottTerem.teremNev=$("#tnev").val();
        mosoitottTerem.sor=Number($("#sor").val());
        mosoitottTerem.oszlop=Number($("#oszlop").val());
        myAjax.putAdat(apivegpont,mosoitottTerem,mosoitottTerem.teremId);
        myAjax.getAdat(apivegpont,termek,termekMegjelenitese);
        $("#teremid").val('');
        $("#tnev").val('');
        $("#sor").val('');
        $("#oszlop").val('');
        $(".felvitel").css("display", "inline");
        $(".modosit").css("display", "none");

    });

    function sikeresTorles(sor){
        $(sor).remove();
    }
});