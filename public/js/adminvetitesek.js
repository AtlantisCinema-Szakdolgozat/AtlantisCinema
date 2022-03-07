$(function(){
    const myAjax=new MyAjax;
    let vetitesek =[];
    const szuloelem = $("#szulo");
    let apivegpont="http://127.0.0.1:8000/api/vetites";

    myAjax.getAdat(apivegpont,vetitesek,vetitesekMegjelenitese);

    function vetitesekMegjelenitese(){
        const szuloelem = $("#szulo");
        let ujVetites;
        vetitesek.forEach(function(adat) {
            let vetitesSor = $("<tr></tr>").appendTo(szuloelem);
            ujVetites = new Vetitesek(vetitesSor,adat);
        });
    }

   
});