class MyAjax{

constructor(){

}

 vetitesBetolt(fajlnev, tomb, myCallback) {
    $.ajax({
      url: fajlnev,
      success: function (eredmeny) {
        eredmeny.forEach((element) => {
          //console.log(element);
          tomb.push(element);
        });
        myCallback();
      },
    });
  }

}