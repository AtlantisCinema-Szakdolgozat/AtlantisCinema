$(function(){
    const myAjax=new MyAjax;
    let dolgozok =[];
    const szuloelem = $("#szulo");
    let apivegpont="http://127.0.0.1:8000/api/dolgozo";
    let akt="";

    myAjax.getAdat(apivegpont,dolgozok,dolgozokMegjelenitese);

    function dolgozokMegjelenitese(){
        let egyezes=apivegpont;
        if(egyezes=="http://127.0.0.1:8000/api/dolgozo?q="){
            dolgozok=[]
            apivegpont="http://127.0.0.1:8000/api/dolgozo";
            myAjax.getAdat(apivegpont,dolgozok,dolgozokMegjelenitese);
        }
        else if(akt!==apivegpont || akt=="http://127.0.0.1:8000/api/dolgozo"){
            szuloelem.children().remove();
            let ujDolgoz;
            dolgozok.forEach(function(adat) {
                let tablaSor = $("<tr></tr>").appendTo(szuloelem);
                ujDolgoz = new Dolgozok(tablaSor,adat);
            });
        }
        akt=apivegpont;
    }

    $("#keresesmezo").on("keyup",()=>{
        apivegpont="http://127.0.0.1:8000/api/dolgozo";
        apivegpont+="?q="+$("#keresesmezo").val();
        myAjax.getAdat(apivegpont,dolgozok,dolgozokMegjelenitese);
    })

    $("#rendezeskivalasztasa").on("change",function(){
        apivegpont="http://127.0.0.1:8000/api/dolgozo";
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
          myAjax.getAdat(apivegpont,dolgozok,dolgozokMegjelenitese);
    })

    $(window).on("torles",(event)=>{
        apivegpont="http://127.0.0.1:8000/api/dolgozo";
        console.log(event);
        myAjax.deletAdat(apivegpont,event.detail.adat.dologozoId,sikeresTorles,event.detail.szuloelem);
    });

    $(".felvitel").on("click", ()=>{
        let ujDolgozo={};
        ujDolgozo.nev=$("#dnev").val();
        ujDolgozo.jelszo=$("#djelszo").val();
        ujDolgozo.munkakor=$("#dmunkakor").val();
        myAjax.postAdat(apivegpont,ujDolgozo);
        myAjax.getAdat(apivegpont,dolgozok,dolgozokMegjelenitese);
        $("#dnev").val('');
        $("#djelszo").val('');
        $("#dmunkakor").val('');
    });

    $(window).on("mosdositas",(event)=>{
        $("#dolgozoid").val(event.detail.adat.dologozoId);
        $("#dnev").val(event.detail.adat.nev);
        $("#djelszo").val(event.detail.adat.jelszo);
        $("#djelszo").css("display", "block");
        $("#dmunkakor").val(event.detail.adat.munkakor);
        $(".felvitel").css("display", "none");
        $(".modosit").css("display", "inline");

    });

    $(".modosit").on("click", ()=>{
        let modositottDolgozo={};
        modositottDolgozo.dolgozoId=$("#dolgozoid").val();
        modositottDolgozo.nev=$("#dnev").val();
        modositottDolgozo.jelszo=$("#djelszo").val();
        $("#djelszo").css("display", "inline");
        modositottDolgozo.munkakor=$("#dmunkakor").val();
        myAjax.putAdat(apivegpont,modositottDolgozo,modositottDolgozo.dolgozoId);
        myAjax.getAdat(apivegpont,dolgozok,dolgozokMegjelenitese);
        $("#dnev").val('');
        $("#djelszo").val('');
        $("#sor").val('');
        $("#dmunkakor").val('');
        $(".felvitel").css("display", "inline");
        $(".modosit").css("display", "none");

    });

    function sikeresTorles(sor){
        $(sor).remove();
    }

});