$(function(){
    const myAjax=new MyAjax;
    let dolgozok =[];
    const szuloelem = $("#szulo");
    let apivegpont="http://127.0.0.1:8000/api/dolgozo";
    let akt="";

    $(".modosit").css("display", "inline");
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
        myAjax.deletAdat(apivegpont,event.detail.adat.id,sikeresTorles,event.detail.szuloelem);
    });


    $(window).on("mosdositas",(event)=>{
        $("#dolgozoid").val(event.detail.adat.id);
        $("#dnev").val(event.detail.adat.name);
        $("#demail").val(event.detail.adat.email);
        $("#djelszo").val(event.detail.adat.password);
        $("#djelszo").css("display", "block");
        $("#dmunkakor").val(event.detail.adat.munkakor);

    });

    $(".modosit").on("click", ()=>{
        let modositottDolgozo={};
        modositottDolgozo.id=$("#dolgozoid").val();
        modositottDolgozo.name=$("#dnev").val();
        modositottDolgozo.email=$("#demail").val();
        modositottDolgozo.password=$("#djelszo").val();
        $("#djelszo").css("display", "inline");
        modositottDolgozo.munkakor=$("#dmunkakor").val();
        myAjax.putAdat(apivegpont,modositottDolgozo,modositottDolgozo.id);
        myAjax.getAdat(apivegpont,dolgozok,dolgozokMegjelenitese);
        $("#dnev").val('');
        $("#demail").val('');
        $("#djelszo").val('');
        $("#sor").val('');
        $("#dmunkakor").val('');
    });

    function sikeresTorles(sor){
        $(sor).remove();
    }

});