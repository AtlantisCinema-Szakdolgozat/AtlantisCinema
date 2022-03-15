$(function(){
    const myAjax=new MyAjax;
    const kedvezmenyek =[];
    let apivegpont="http://127.0.0.1:8000/api/kedvezmeny";

    myAjax.getAdat(apivegpont,kedvezmenyek,kedvezmenyekMegjelenitese);

    function kedvezmenyekMegjelenitese(){
        const szuloelem = $("#szulo");
        szuloelem.children().remove();
        kedvezmenyek.forEach(function(adat) {
            let tablaSor = $("<tr></tr>").appendTo(szuloelem);
            ujKedvezmeny = new Kedvezmenyek(tablaSor,adat);
        });
    }

    $(window).on("torles",(event)=>{
        apivegpont="http://127.0.0.1:8000/api/kedvezmeny";
        myAjax.deletAdat(apivegpont,event.detail.adat.kedvezmenyId,sikeresTorles,event.detail.szuloelem);
    });

    $(".felvitel").on("click", ()=>{
        let ujKedvezmeny={};
        ujKedvezmeny.tipus=$("#tipus").val();
        ujKedvezmeny.szazalek=Number($("#szazalek").val());
        ujKedvezmeny.leiras=$("#leiras").val();
        myAjax.postAdat(apivegpont,ujKedvezmeny);
        myAjax.getAdat(apivegpont,kedvezmenyek,kedvezmenyekMegjelenitese);
        $("#tipus").val('');
        $("#szazalek").val('');
        $("#leiras").val('');
    });

    $(window).on("mosdositas",(event)=>{
        $("#kedvezmenyid").val(event.detail.adat.kedvezmenyId);
        $("#tipus").val(event.detail.adat.tipus);
        $("#szazalek").val(event.detail.adat.szazalek);
        $("#leiras").val(event.detail.adat.leiras);
        $(".felvitel").css("display", "none");
        $(".modosit").css("display", "inline");
    });

    $(".modosit").on("click", ()=>{
        let modositottKedvezmeny={};
        modositottKedvezmeny.kedvezmenyId=$("#kedvezmenyid").val();
        modositottKedvezmeny.tipus=$("#tipus").val();
        modositottKedvezmeny.szazalek=Number($("#szazalek").val());
        modositottKedvezmeny.leiras=$("#leiras").val();
        myAjax.putAdat(apivegpont,modositottKedvezmeny,modositottKedvezmeny.kedvezmenyId);
        myAjax.getAdat(apivegpont,kedvezmenyek,kedvezmenyekMegjelenitese);
        $("#kedvezmenyid").val('');
        $("#tipus").val('');
        $("#szazalek").val('');
        $("#leiras").val('');
        $(".felvitel").css("display", "inline");
        $(".modosit").css("display", "none");
    });

    function sikeresTorles(sor){
        $(sor).remove();
    }

   
});