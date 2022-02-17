$(function () {
  //const idopontokTomb = [];
  let fajlnev = "js/penztaridopontok.json";
  const vetitesekTomb = [];
  let eventTomb = [];
  const myAjax = new MyAjax();
  myAjax.vetitesBetolt(fajlnev, vetitesekTomb, filmetkiir);
  //const foOldal=new FoOldal;


  $(window).on("idopontBetolt", (event) => {
    console.log(event.detail);
    eventTomb.push(event.detail);
    localStorage.setItem("kulcs", JSON.stringify(eventTomb));
  });

  /* PénztárFoOldal*/
  $(window).on("idopontBetolt", (event) => {
    console.log(event.detail);
    eventTomb.push(event.detail);
    localStorage.setItem("kulcs", JSON.stringify(eventTomb));
  });
  function idopontKiir(szuloelem, index) {
    //idpontok egy adott filmhez

    const sablonElem = $(".secSablon .filmidopontSablon");

    szuloelem.empty();
    sablonElem.show();

    const idopontTomb = vetitesekTomb[index].idopont;
    idopontTomb.forEach(function (elem, index) {
      let ujElem = sablonElem.clone().appendTo(szuloelem);
      // console.log(ujElem);
      const ujIdopontok = new Idopontok(ujElem, elem);
      // console.log(ujIdopontok);
    });
    sablonElem.hide();
  }

  function filmetkiir() {
    const szuloelem = $(".vetitesek");
    const sablonElem = $(".secSablon .filmmezok");
    //console.log(vetitesekTomb);

    szuloelem.empty();
    sablonElem.show();
    vetitesekTomb.forEach(function (elem, index) {
      let ujElem = sablonElem.clone().appendTo(szuloelem);
      // console.log(ujElem);
      const ujFilm = new Filmek(ujElem, elem);
      //console.log(ujFilm.filmIdopont);
      //A KONKRÉT FILMHEZ A FILMIDŐPONTOK

      idopontKiir(ujFilm.filmIdopont, index);

      // console.log(ujIdopontok);
    });
    sablonElem.hide();
  }


  /* PÉNZTÁR VÉGEEEEEEE*/




});
