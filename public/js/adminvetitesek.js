$(function(){
    const myAjax=new MyAjax();
    let vetitesek =[];
    let vetitesekTerem =[];
    let vetitesekFilm =[];
    const szuloelem = $("#szulo");
    let apivegpont="/api/filmVetites";
    let apivegpontTerem="/api/terem";
    let apivegpontFilm="/api/film";
    let akt="";
    let premier=null;

    myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);

    function vetitesekMegjelenitese(){
        let egyezes=apivegpont;
        if(egyezes=="/api/filmVetites?q="){
            vetitesek=[]
            apivegpont="/api/filmVetites";
            myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);
        }
        else if(akt!==apivegpont || akt=="/api/filmVetites"){
            szuloelem.children().remove();
            let ujVetites;
            vetitesek.forEach(function(adat) {
                let vetitesSor = $("<tr></tr>").appendTo(szuloelem);
                ujVetites = new Vetitesek(vetitesSor,adat);
            });
        }
        akt=apivegpont;
    }

    myAjax.getAdat(apivegpontTerem,vetitesekTerem,TeremNevekBetoltese);

    function TeremNevekBetoltese(){
        const szuloelem = $(".terem");
        let ujtreem;
        vetitesekTerem.forEach(function(adat) {
            ujtreem = new VetitesekTerem(szuloelem,adat);
        });
    }
    myAjax.getAdat(apivegpontFilm,vetitesekFilm,FilmCimekBetoltese);
    function FilmCimekBetoltese(){
        const szuloelem = $(".fcim");
        let ujFimCim;
        vetitesekFilm.forEach(function(adat) {
            ujFimCim = new VetitesekFilm(szuloelem,adat);
        });
        
    }

    $(".js-example-placeholder-single").select2({
        placeholder: "Film cím",
        allowClear: true
    });

    
    $("#keresesmezo").on("keyup",()=>{
        apivegpont="/api/filmVetites";
        apivegpont+="?q="+$("#keresesmezo").val();
        myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);
    })

    $("#rendezeskivalasztasa").on("change",function(){
        apivegpont="/api/filmVetites";
        let szempont=$(this).val();
        switch(szempont) {
            case "rend1":
                apivegpont+="?desc=rend1";
              break;
            case "rend2":
                apivegpont+="?desc=rend2";
              break;
              case "rend3":
                apivegpont+="?desc=rend3";
              break;
            case "rend4":
                apivegpont+="?desc=rend4";
              break;
            default:
          }
          myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);
    });

    $(".felvitel").on("click", ()=>{
        let apivegpontVetites="/api/vetites";
        let ujVetites={};
        ujVetites.teremId=$("#terem").val();
        ujVetites.filmId=$(".fcim :selected").attr("id");
        ujVetites.felirat=$("#ffelirat").val();
        ujVetites.szinkron=$("#fszinkron").val();
        ujVetites.vetitesNap=$("#fvetitesnap").val();
        ujVetites.kezdesiIdo=$("#fkezdesIdopot").val();
        ujVetites.teljesJegyar=Number($("#fteljesJegyar").val());
        ujVetites.premier=premier;
        myAjax.postAdat(apivegpontVetites,ujVetites);
        myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);
        $("#terem").val('');
        $("#fcim").select2().val(null).trigger("change");
        $("#fcim").select2({
            placeholder: "Film cím",
            allowClear: true
        });
        $("#ffelirat").val('');
        $("#fszinkron").val('');
        $("#fvetitesnap").val('');
        $("#fkezdesIdopot").val('');
        $("#fteljesJegyar").val('1900');
    });
    $(window).on("publikus",(event)=>{
        let apivegpontSzek="/api/szek";
        vetitesekTerem.forEach(element => {
            if(event.detail.adat.teremId==element.teremId){
                let adatok={};
                adatok.sor=element.sor
                adatok.oszlop=element.oszlop
                adatok.vetitesId=event.detail.adat.vetitesId
                myAjax.postAdat(apivegpontSzek,adatok);
            }
            
        });
        
        let apivegpontVetites="/api/vetites";
            let mosoitottPublikus={};
            mosoitottPublikus.vetitesId=event.detail.adat.vetitesId;
            mosoitottPublikus.teremId=event.detail.adat.teremId
            mosoitottPublikus.filmId=event.detail.adat.filmId
            mosoitottPublikus.felirat=event.detail.adat.felirat
            mosoitottPublikus.szinkron=event.detail.adat.szinkron
            mosoitottPublikus.vetitesNap=event.detail.adat.vetitesNap
            mosoitottPublikus.kezdesiIdo=event.detail.adat.kezdesiIdo
            mosoitottPublikus.teljesJegyar=event.detail.adat.teljesJegyar
            mosoitottPublikus.premier=event.detail.adat.premier
            mosoitottPublikus.publikus=1
            myAjax.putAdat(apivegpontVetites,mosoitottPublikus,mosoitottPublikus.vetitesId);
            myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);
    });
    
    $(window).on("mosdositas",(event)=>{
        $("#vetitesid").val(event.detail.adat.vetitesId);
        $("#terem").val(event.detail.adat.teremId);
        $(".js-example-placeholder-single").select2().val(event.detail.adat.cim).trigger("change");
        $("#ffelirat").val(event.detail.adat.felirat);
        $("#fszinkron").val(event.detail.adat.szinkron);
        $("#fvetitesnap").val(event.detail.adat.vetitesNap);
        $("#fkezdesIdopot").val(event.detail.adat.kezdesiIdo);
        $("#fteljesJegyar").val(event.detail.adat.teljesJegyar);
        console.log(event.detail.adat.premier)
        if(event.detail.adat.premier!=null){
            $("#premier").css("display", "none");
            $("#nemPremier").css("display", "inline");
        }
        else{
           
            $("#nemPremier").css("display", "none");
            $("#premier").css("display", "inline");
           
        }
        $(".felvitel").css("display", "none");
        $(".modosit").css("display", "inline");
       
    });

    $(".modosit").on("click", ()=>{
        let apivegpontVetites="/api/vetites";
        let mosoitottVetites={};
        mosoitottVetites.vetitesId=$("#vetitesid").val();
        mosoitottVetites.teremId=$("#terem").val();
        mosoitottVetites.filmId=$(".fcim :selected").attr("id");
        mosoitottVetites.felirat=$("#ffelirat").val();
        mosoitottVetites.szinkron=$("#fszinkron").val();
        mosoitottVetites.vetitesNap=$("#fvetitesnap").val();
        mosoitottVetites.kezdesiIdo=$("#fkezdesIdopot").val();
        mosoitottVetites.teljesJegyar=Number($("#fteljesJegyar").val());
        mosoitottVetites.premier=premier;
        myAjax.putAdat(apivegpontVetites,mosoitottVetites,mosoitottVetites.vetitesId);
        myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);
        $("#vetitesid").val('');
        $("#terem").val('');
        $("#fcim").select2().val(null).trigger("change");
        $("#ffelirat").val('');
        $("#fszinkron").val('');
        $("#fvetitesnap").val('');
        $("#fkezdesIdopot").val('');
        $("#fteljesJegyar").val('1900');
        $(".felvitel").css("display", "inline");
        $(".modosit").css("display", "none");
        $("#nemPremier").css("display", "none");
        $("#premier").css("display", "inline");
    });


    $("#premier").on("click", ()=>{
        premier=$("#fvetitesnap").val();
        console.log(premier);
        $("#premier").css("display", "none");
        $("#nemPremier").css("display", "inline")
    });

    $("#nemPremier").on("click", ()=>{
        premier=null;
       
        $("#nemPremier").css("display", "none");
        $("#premier").css("display", "inline");
    });

    $(window).on("torles",(event)=>{
        let apivegpontVetites="/api/vetites";
        myAjax.deletAdat(apivegpontVetites,event.detail.adat.vetitesId,sikeresTorles,event.detail.szuloelem);
    });

    function sikeresTorles(sor){
        $(sor).remove();
    }

});