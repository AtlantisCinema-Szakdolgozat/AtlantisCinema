$(function(){
    const myAjax=new MyAjax;
    let filmekSzemelyMufaj =[];
    let mufaj =[];
    let foszereplo =[];
    let rendezo =[];
    const szuloelem = $(".szulo");
    const sablonElem = $(".gyerek");
    let apivegpont="/api/filmSzemelyMufaj";
    let apivegpontFilm="/api/film";
    let apivegpontMufaj="/api/mufaj";
    let apivegpontSzemely="/api/szemely";
    let akt="";

    myAjax.getAdat(apivegpont,filmekSzemelyMufaj,filmekMegjelenitese);

    function filmekMegjelenitese(){
        let egyezes=apivegpont;
        if(egyezes=="/api/filmSzemelyMufaj?q="){
            filmekSzemelyMufaj=[]
            apivegpont="/api/filmSzemelyMufaj";
            myAjax.getAdat(apivegpont,filmekSzemelyMufaj,filmekMegjelenitese);
        }
        else if(akt!==apivegpont || akt=="/api/filmSzemelyMufaj"){
            szuloelem.empty();
            sablonElem.show();
            filmekSzemelyMufaj.forEach(function(adat) {
              let ujElem = sablonElem.clone().appendTo(szuloelem);
              let ujFilm = new Filmek(ujElem,adat);
            });
            sablonElem.hide();
        }
        akt=apivegpont;
    }

    myAjax.getAdat(apivegpontMufaj,mufaj,mufajBetoltese);

    function mufajBetoltese(){
      const szuloelem = $(".fmufaj");
      let ujMufaj;
      mufaj.forEach(function(adat) {
        ujMufaj = new MufajBetoltes(szuloelem,adat);
      });
    }

    myAjax.getAdat(apivegpontSzemely,foszereplo,foszereploBetoltese);

    function foszereploBetoltese(){
      const szuloelem = $(".ffoszereplok");
      let ujFoszereplo;
      foszereplo.forEach(function(adat) {
        ujFoszereplo = new Szemely(szuloelem,adat);
      });
    }

    myAjax.getAdat(apivegpontSzemely,rendezo,rendezoBetoltese);

    function rendezoBetoltese(){
      const szuloelem = $(".frendezok");
      let ujRendezo;
      rendezo.forEach(function(adat) {
        ujRendezo = new Szemely2(szuloelem,adat);
      });
    }

    $(".fmufaj").select2({
      placeholder: "Műfaj",
      allowClear: true
    });

    $(".ffoszereplok").select2 ({ 
      tags : true , 
      tokenSeparators : [ ',' , ' ' ]
    });
  
    $(".frendezok").select2 ({ 
      tags : true , 
      tokenSeparators : [ ',' , ' ' ]
    });
    

    $("#keresesmezo").on("keyup",()=>{
        apivegpont="/api/filmSzemelyMufaj";
        apivegpont+="?q="+$("#keresesmezo").val();
        myAjax.getAdat(apivegpont,filmekSzemelyMufaj,filmekMegjelenitese);
    })

    $("#rendezeskivalasztasa").on("change",function(){
        apivegpont="/api/filmSzemelyMufaj";
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
          myAjax.getAdat(apivegpont,filmekSzemelyMufaj,filmekMegjelenitese);
    });

    
 
    $(".felvitel").on("click", ()=>{
      let apivegpontFilm="/api/film";
      let form = document.getElementById("filmadat");
      let input = document.querySelector('input[type="file"]');
      let data = new FormData(form);
      data.append('file', input.files[0]);
      fetch(apivegpontFilm, {
        method: 'POST',
        headers: {
          'Accept': 'application/json'
        },
        body: data
      }).then(response => response.json())
      .then(data2 => {
        data.append("filmId",data2.filmId)
      });
      myAjax.getAdat(apivegpont,filmekSzemelyMufaj,filmekMegjelenitese);
      $("#filmid").val('');
      $(".fcim").val('');
      $("#fleiras").val('');
      $("#fhossz").val('');
      $("#fhossz").val('');
      $(".fmufaj").select2().val(null).trigger("change");
      $(".fmufaj").select2({
        placeholder: "Műfaj",
        allowClear: true
      });
      $("#ffoszereplok").val([]).trigger('change');
      $("#frendezok").val([]).trigger('change');
      $(".poszter").val('');
      $("#fyoutube").val('');
    });

    $(window).on("mosdositas",(event)=>{
      $("#filmid").val(event.detail.adat.filmId);
      $("#fcim").val(event.detail.adat.cim);
      $("#fleiras").val(event.detail.adat.filmLeiras);
      $("#fhossz").val(event.detail.adat.hossz);
      $(".fnyelv").select2().val(event.detail.adat.nyelv).trigger("change");
      $("#fmufaj").select2().val(event.detail.adat.mufajId).trigger("change");
      let szemelyek=event.detail.adat.szemelyek;
      let szinesz=[];
      let rendezo=[];
      for (let i = 0; i < szemelyek.length; i++) {
          if(szemelyek[i].kapcsolat.poszt=="színész"){
            szinesz.push(szemelyek[i].szemelyId);
          }
          else{
            rendezo.push(szemelyek[i].szemelyId);
          }
      }
      $("#ffoszereplok").select2().val(szinesz).trigger("change");
      $("#frendezok").select2().val(rendezo).trigger("change");
      $("#fyoutube").val(event.detail.adat.youtubeLink);
      $(".felvitel").css("display", "none");
      $(".modosit").css("display", "inline");
  });

  $(".modosit").on("click", ()=>{
      let apivegpontFilmek="/api/film";
      let form = document.getElementById("filmadat");
      let input = document.querySelector('input[type="file"]');
      let id=$("#filmid").val();
      let data = new FormData(form);
      data.append('file', input.files[0]);
      data.append('_method', 'PUT');
      fetch(apivegpontFilmek+"/"+id, {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: data,
      })
      myAjax.getAdat(apivegpont,filmekSzemelyMufaj,filmekMegjelenitese);
      $("#filmid").val('');
      $(".fcim").val('');
      $("#fleiras").val('');
      $("#fhossz").val('');
      $(".fnyelv").select2().val(null).trigger("change");
      $(".fmufaj").select2().val(null).trigger("change");
      $("#ffoszereplok").val([]).trigger('change');
      $("#frendezok").val([]).trigger('change');
      $(".poszter").val('');
      $("#fyoutube").val('');
  });

    $(window).on("torles",(event)=>{
      apivegpontFilm="/api/film";
      myAjax.deletAdat(apivegpontFilm,event.detail.adat.filmId,sikeresTorles,event.detail.szuloelem);
    });

   function sikeresTorles(sor){
      $(sor).remove();
    }
});