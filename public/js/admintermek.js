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
            termek.forEach(function(adat) {
                const ujTerem = new Termek(adat);
                szuloelem.append(ujTerem.tablaSorGeneralas());
                //ujTerem.kikk();
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
        //console.log("rendez");
        apivegpont="http://127.0.0.1:8000/api/terem";
        let szempont=$(this).val();
        ///console.log(szempont);
        switch(szempont) {
            case "rend1":
                apivegpont+="?desc=rend1";
                ///console.log(apivegpont);
              break;
            case "rend2":
                apivegpont+="?desc=rend2";
                //console.log(apivegpont);
              break;
            default:
              // code block
          }
          myAjax.getAdat(apivegpont,termek,termekMegjelenitese);
    })
});