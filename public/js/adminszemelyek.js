$(function(){
    const myAjax=new MyAjax;
    let szemely =[];
    const szuloelem = $("#szulo");
    let apivegpont="/api/szemely";
    let akt="";

    myAjax.getAdat(apivegpont,szemely,szemelyekMegjelenitese);

    function szemelyekMegjelenitese(){
        let egyezes=apivegpont;
        if(egyezes=="/api/szemely?q="){
            szemely=[]
            apivegpont="/api/szemely";
            myAjax.getAdat(apivegpont,szemely,szemelyekMegjelenitese);
        }
        else if(akt!==apivegpont || akt=="/api/szemely"){
            szuloelem.children().remove();
            let ujSzemely;
            szemely.forEach(function(adat) {
                let tablaSor = $("<tr></tr>").appendTo(szuloelem);
                ujSzemely = new Szemely(tablaSor,adat);
            });
        }
        akt=apivegpont;
    }

    $("#keresesmezo").on("keyup",()=>{
        apivegpont="/api/szemely";
        apivegpont+="?q="+$("#keresesmezo").val();
        myAjax.getAdat(apivegpont,szemely,szemelyekMegjelenitese);
    })

    $("#rendezeskivalasztasa").on("change",function(){
        apivegpont="/api/szemely";
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
          myAjax.getAdat(apivegpont,szemely,szemelyekMegjelenitese);
    })

    $(window).on("torles",(event)=>{
        apivegpont="/api/szemely";
        myAjax.deletAdat(apivegpont,event.detail.adat.szemelyId,sikeresTorles,event.detail.szuloelem);
    });

    $(".felvitel").on("click", ()=>{
        let ujSzemely={};
        ujSzemely.nev=$("#nev").val();
        myAjax.postAdat(apivegpont,ujSzemely);
        myAjax.getAdat(apivegpont,szemely,szemelyekMegjelenitese);
        $("#nev").val('');
    });

    $(window).on("mosdositas",(event)=>{
        $("#szemelyid").val(event.detail.adat.szemelyId);
        $("#nev").val(event.detail.adat.nev);
        $(".felvitel").css("display", "none");
        $(".modosit").css("display", "inline");

    });

    $(".modosit").on("click", ()=>{
        let mosoitottSzemely={};
        mosoitottSzemely.szemelyId=$("#szemelyid").val();
        mosoitottSzemely.nev=$("#nev").val();
        myAjax.putAdat(apivegpont,mosoitottSzemely,mosoitottSzemely.szemelyId);
        myAjax.getAdat(apivegpont,szemely,szemelyekMegjelenitese);
        $("#szemelyid").val('');
        $("#nev").val('');
        $(".felvitel").css("display", "inline");
        $(".modosit").css("display", "none");

    });

    function sikeresTorles(sor){
        $(sor).remove();
    }
});