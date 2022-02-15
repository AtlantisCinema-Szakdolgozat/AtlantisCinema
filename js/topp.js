
  var mybutton = document.getElementById("topGomb");
            
  window.onscroll = function() {scrollFunction()};   // -> Ha a felhasználó legörget, jelenjen meg a gomb
    
  function scrollFunction() {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

      mybutton.style.display = "block";

    } else {

      mybutton.style.display = "none";
    }

  }
    
  function topFunction() {

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }