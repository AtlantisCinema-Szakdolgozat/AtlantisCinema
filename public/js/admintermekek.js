$(function(){
    const termek =[];
    let fajlnev="http://127.0.0.1:8000/api/terem";

    adatbeolvasas(fajlnev,termek,termekMegjelenitese);

    function adatbeolvasas(fajlnev,tomb,myCallback){
        $.ajax({
            url:fajlnev,
            success:function(result){
                result.forEach(element => {
                    tomb.push(element)
                });
                myCallback();
            }
        });
    }

    function termekMegjelenitese(){
        const szuloelem = $("#szulo");
        termek.forEach(function(adat, index) {
            const ujTerem = new Termek(szuloelem, adat, index);
        });
    }

   
});