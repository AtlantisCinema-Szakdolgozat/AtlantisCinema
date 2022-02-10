$(function(){
    const termek =[];
    let fajlnev="js/termek.json";

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