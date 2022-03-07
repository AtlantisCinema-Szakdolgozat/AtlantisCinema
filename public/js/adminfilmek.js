$(function(){
    const myAjax=new MyAjax;
    let filmek =[];
    const szuloelem = $(".szulo");
    const sablonElem = $(".gyerek");
    let apivegpont="http://127.0.0.1:8000/api/film";

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

   
});