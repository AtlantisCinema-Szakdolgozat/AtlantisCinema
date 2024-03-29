<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/penztarFo.css" />
    <link rel="stylesheet" href="Css/penztaros.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script src="js/ajax.js"></script>
    <script src="js/penztarFoscript.js" type="text/javascript"></script>
    <script src="js/penztarFilmek.js" type="text/javascript"></script>
    <script src="js/penztaridopontok.js" type="text/javascript"></script>
    <title>Pénztár</title>
  </head>

  <body>
    @extends('layouts.penztarApp')
    @section('content')

      <nav class="row datumnapSzulo">

      </nav>

      <article>
        <p class="aktnap"></p>
        <p id="tajekoztat"></p>
      </article>

      

      <section class="secSablon">
          <!-- filmidőpontok sablonja -->
        <div class="filmidopontSablon col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-5">
          <p class="terem"></p>
          <p class="idopont"></p>
          <p class="szinkron"></p>
          <div class="ugras">
          <button class="gombugras"><a href="/penztarFoglalas" class="foglalj">Foglalj!</a></button>
            </div>
        </div>
        <!-- filmek sablonja -->
        <div class="filmmezok row">
            <div class="filmcimek col-2">
              <p class="filmCim"></p>
            </div>
            <div class="filmidopont col row"></div>
          </div>
      </section>

      <section class="vetitesek">
       
      </section>
   
      
      
    @endsection
  </body>
</html>
