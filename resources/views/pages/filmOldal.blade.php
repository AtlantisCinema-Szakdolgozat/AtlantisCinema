
<!DOCTYPE html>

<html lang="hu">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title> Atlantis Cinema </title>

        <!-- Stíluslapok -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="Css/altalanos-formazas.css">
        <link rel="stylesheet" href="Css/film-formazas.css">

        <!-- Scriptek -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script src="js/ajax.js" type="text/javascript"></script>

        <script src="js/Film.js" type="text/javascript"></script>

        <script src="js/filmOldalScript.js" type="text/javascript"></script>

    </head>

    <body>
        
        @extends('layouts.felhasznaloiApp')
        @section('content')


            <section>

                <div>
                    <iframe src="" id="youtube" title="Film Trailer"> </iframe>
                </div>

            </section>


            <article>

                <div id="filmAdatlap" class="row">

                    <div id="plakat" class="col-md-4">

                        <img  src="" alt="plakát">

                    </div>
                        
                    <div id="leiras" class="col-md-8">

                        <h3 id="cim">  </h3>
                        <p id="mufaj">  </p>
                        <p id="hossz">  </p>
                        <p id="rendezo">  </p>
                        <p id="szineszek">  </p>
                        <p id="leiras">  </p>
                    
                    </div>
                </div>


                <!-- Napok menü -->

                <nav id="musorMenu"  class="navbar navbar-expand-md bg-dark navbar-dark">

                    <div class="container-fluid">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mynavbar">

                            <ul class="navbar-nav nav-justified">

                                <li class="nav-item">
                                    <a class="nav-link" href="/foglalasOldal"> Hétfő </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/foglalasOldal"> Kedd </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/foglalasOldal"> Szerda </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/foglalasOldal"> Csütörtök </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/foglalasOldal"> Péntek </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/foglalasOldal"> Szombat </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/foglalasOldal"> Vasárnap </a>
                                </li>

                            </ul>
                                      
                        </div>
                    </div> 
                </nav> 
                

                <div id="idopontSzulo">

                    <p> Időpontok: </p>

                </div>
                

            </article>

        @endsection

    </body>
</html>