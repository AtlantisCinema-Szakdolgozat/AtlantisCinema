
<!DOCTYPE html>

<html lang="hu">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title> Atlantis Cinema </title>

        <!-- stíluslapok -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="Css/altalanos-formazas.css">
        <link rel="stylesheet" href="Css/nyitoLap-formazas.css">
        

        <!-- scriptek -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script src="js/ajax.js" type="text/javascript"></script>

        <script src="js/GaleriaPlakat.js" type="text/javascript"></script>
        <script src="js/Film.js" type="text/javascript"></script>

        <script src="js/nyitoScript.js" type="text/javascript"></script>


    </head>

    <body>
 
        @extends('layouts.nyitoOldalApp')
        @section('content')

            <section>

                <!-- Galéria és hírek -->

                <div id="galeriaSzulo" class="row">

                    <div id="carousel" class="flex-container">
                        <button id="bal" style="order: 1"> << </button>
                        <div id="korhintaGaleria" class="col-md-9" style="order: 2">
                    
                            <img class="galeriaPlakat" src="" alt="poszter"/>
                            
                        </div>
                        <button id="jobb" style="order: 3"> >> </button>
                    </div>
                    
                    <div id="kisGaleria">

                        <div>
                            <img src="Css/akciok_hirek/popcornAkcio.jpg" alt="kép"/>
                        </div>

                        <div>
                            <img src="Css/akciok_hirek/popcorn.jpg" alt="kép"/>
                        </div>
                        
                    </div> 
                    

                </div>

            </section>


            <article>


                <!-- Napok menü -->

                <nav id="musorMenu"  class="navbar navbar-expand-md bg-dark navbar-dark">

                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mynavbar">

                            <ul class="navbar-nav nav-justified">

                                <li id="hetfo" class="nav-item">
                                    <a class="nav-link" href="/index"> Hétfő </a>
                                </li>

                                <li id="kedd" class="nav-item">
                                    <a class="nav-link" href="/index"> Kedd </a>
                                </li>

                                <li id="szerda" class="nav-item">
                                    <a class="nav-link" href="/index"> Szerda </a>
                                </li>

                                <li id="csutortok" class="nav-item">
                                    <a class="nav-link" href="/index"> Csütörtök </a>
                                </li>

                                <li id="pentek" class="nav-item">
                                    <a class="nav-link" href="/index"> Péntek </a>
                                </li>

                                <li id="szombat" class="nav-item">
                                    <a class="nav-link" href="/index"> Szombat </a>
                                </li>

                                <li id="vasarnap" class="nav-item">
                                    <a class="nav-link" href="/index"> Vasárnap </a>
                                </li>

                            </ul>
                                    
                        </div>
                    </div> 
                </nav> 



                <!-- Csempe elemek -->

                <div id="musorListaCsempeSzulo">

                    <div class="csempeSablon row">


                        <div class="divCsempePlakat col-md-3">  
                            <img  class="csempePlakat" src="" alt="plakát">
                        </div>
                        

                        <div  class="csempeLeiras col-md-9" > 

                            <a href='/filmOldal'" class="filmCim"> </a>
                            
                            <p class="mufaj">  </p>
                            <p class="leiras">  </p>
                            
                            <div id="idopontSzulo">

                                <p> Időpontok: </p>


                            </div>

                        </div>
                        
                    </div>
                    
                </div>


            </article>

        @endsection

    </body>
    
</html>