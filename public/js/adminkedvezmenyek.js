$(function(){
    const kedvezmenyek =[];
    let fajlnev="http://127.0.0.1:8000/api/kedvezmeny";

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