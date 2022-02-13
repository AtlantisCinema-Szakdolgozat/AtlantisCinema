$(function(){
    const kedvezmenyek =[];
    let fajlnev="js/kedvezmenyek.json";

    adatbeolvasas(fajlnev,kedvezmenyek,kedvezmenyekMegjelenitese);

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

    function kedvezmenyekMegjelenitese(){
        const szuloelem = $("#szulo");
        kedvezmenyek.forEach(function(adat, index) {
            const ujKedvezmeny = new Kedvezmenyek(szuloelem, adat, index);
        });
    }

   
});