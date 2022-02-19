$(function(){
    const dolgozok =[];
    let fajlnev="http://127.0.0.1:8000/api/dolgozo";

    adatbeolvasas(fajlnev,dolgozok,dolgozokMegjelenitese);

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

    function dolgozokMegjelenitese(){
        const szuloelem = $("#szulo");
        dolgozok.forEach(function(adat, index) {
            const ujDolgozo = new Dolgozok(szuloelem, adat, index);
        });
    }

   
});