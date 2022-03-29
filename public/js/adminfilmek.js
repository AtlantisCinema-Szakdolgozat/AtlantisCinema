$(function(){
    const myAjax=new MyAjax;
    let filmek =[];
    const szuloelem = $(".szulo");
    const sablonElem = $(".gyerek");
    let apivegpont="http://127.0.0.1:8000/api/filmSzemelyMufaj";

    myAjax.getAdat(apivegpont,filmek,filmekMegjelenitese);

    function filmekMegjelenitese(){
        szuloelem.empty();
        sablonElem.show();
        filmek.forEach(function(adat) {
            let ujElem = sablonElem.clone().appendTo(szuloelem);
            let ujFilm = new Filmek(ujElem,adat);
        });
        sablonElem.hide();
    }

    $("#keresesmezo").on("keyup",()=>{
        apivegpont="http://127.0.0.1:8000/api/filmSzemelyMufaj";
        apivegpont+="?q="+$("#keresesmezo").val();
        myAjax.getAdat(apivegpont,filmek,filmekMegjelenitese);
    })

    $("#rendezeskivalasztasa").on("change",function(){
        apivegpont="http://127.0.0.1:8000/api/filmSzemelyMufaj";
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
          myAjax.getAdat(apivegpont,filmek,filmekMegjelenitese);
    });

   
});