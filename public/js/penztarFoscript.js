$(function () {
  //const idopontokTomb = [];
  let fajlnev = "http://127.0.0.1:8000/api/penztarFoOldal";
  let fajlnevFoglalas ="http://127.0.0.1:8000/api/nezo";
  const vetitesekTomb = [];
  const foglalasTomb = [];
  let eventTomb = [];
  const myAjax = new MyAjax();
  myAjax.getAdat(fajlnev, vetitesekTomb, filmetkiir);
  myAjax.getAdat(fajlnevFoglalas, foglalasTomb, foglalasKiir);
  console.log(foglalasTomb);




  //console.log(vetitesekTomb);
  //const foOldal=new FoOldal;


 

  /* PénztárFoOldal*/
  $(window).on("idopontBetolt", (event) => {
    eventTomb.push(event.detail);
    localStorage.setItem("kulcs", JSON.stringify(eventTomb));
    console.log(eventTomb);
  });
  function idopontKiir(szuloelem, index) {
    //idpontok egy adott filmhez

    const sablonElem = $(".secSablon .filmidopontSablon");

    szuloelem.empty();
    sablonElem.show();

    const idopontTomb = vetitesekTomb[index].terem;


    idopontTomb.forEach(function (elem) {
      let ujElem = sablonElem.clone().appendTo(szuloelem);
       console.log(ujElem);
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

       
      //idopontKiir(ujFilm.filmIdopont, index);

      // console.log(ujIdopontok);
    });
    sablonElem.hide();
  }


  /* PÉNZTÁR VÉGEEEEEEE*/
/* PénztárFoglalas */



function foglalasKiir(){
  const szuloelem = $(".tablafoglaSzulo");
  const sablonElem = $(".tablafoglaSablon");
  
  szuloelem.empty();
  sablonElem.show();
  console.log(foglalasTomb);
  foglalasTomb.forEach(function (elem) {
    let ujElem = sablonElem.clone().appendTo(szuloelem);
    // console.log(ujElem);
    const ujFoglalas = new Foglalas(ujElem, elem);
 
  });
  sablonElem.hide();

}



$("#keresesmezofoglalas").on("keyup",()=>{
  const szuloelem = $(".tablafoglaSzulo");
  const sablonElem = $(".tablafoglaSablon");
  apivegpont="http://127.0.0.1:8000/api/nezo";
  apivegpont+="?q="+$("#keresesmezofoglalas").val();
  szuloelem.children().remove();
  foglalasTomb.splice();
  console.log(foglalasTomb);
  myAjax.getAdat(apivegpont, foglalasTomb, foglalasKiir);
  
})


$("#rendezes").on("change",function(){
  const szuloelem = $(".tablafoglaSzulo");
  const sablonElem = $(".tablafoglaSablon");
  apivegpont="http://127.0.0.1:8000/api/nezo";
  szuloelem.children().remove();
  foglalasTomb.splice();
  let szempont=$(this).val();
  switch(szempont) {
      case "az":
          apivegpont+="?desc=az";
        break;
      case "za":
          apivegpont+="?desc=za";
        break;
      default:
    }


    myAjax.getAdat(apivegpont,foglalasTomb,foglalasKiir);
})




});
