
<!DOCTYPE html>

<html lang="hu">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Atlantis Cinema </title>

        <!-- Stíluslapok -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="Css/altalanos-formazas.css">
        <link rel="stylesheet" href="Css/nyitoLap-formazas.css">

        <!-- Scriptek -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        

    </head>

    <body>
        
        @extends('layouts.felhasznaloiApp')
        @section('content')

            <!-- Galéria és hírek -->

            <section>

                <div id="galeriaSzulo" class="row">

                    <div id="korhintaGaleria" class="col-lg-9">

                        <img src="Css/ideiglenes/akcio.PNG" alt="kép"/>
                        
                    </div>

                    <div id="kisGaleria" class="col-lg-3 row">

                        <div class=" col-sm-6 col-lg-12">
                            <img src="Css/ideiglenes/hir.PNG" alt="kép"/>
                        </div>

                        <div class=" col-sm-6 col-lg-12">
                            <img src="Css/ideiglenes/akcio2.PNG" alt="kép"/>
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

                                <li class="nav-item">
                                    <a class="nav-link" href="/index"> Hétfő </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/index"> Kedd </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/index"> Szerda </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/index"> Csütörtök </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/index"> Péntek </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/index"> Szombat </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/index"> Vasárnap </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/nyitoLap-tablazat"> Műsoron </a>
                                </li>

                            </ul>
                                      
                        </div>
                    </div> 
                </nav> 


                <div class="table-responsive">
                    
                    <table class="table table-success table-striped">

                        <thead>
                            <tr >
                                <td scope="col">Cím</td>
                                <td scope="col">10:00</td>
                                <td scope="col">11:00</td>
                                <td scope="col">12:00</td>
                                <td scope="col">13:00</td>
                                <td scope="col">14:00</td>
                                <td scope="col">15:00</td>
                                <td scope="col">16:00</td> 
                                <td scope="col">17:00</td> 
                                <td scope="col">18:00</td> 
                                <td scope="col">19:00</td>
                                <td scope="col">20:00</td>
                                <td scope="col">21:00</td>
                                <td scope="col">22:00</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <th scope="row"> <a href="/filmOldal"> Mátrix feltámadások </a> </th>

                                <th> <a href="/foglalasOldal">  </a> </th>

                            </tr>
                        </tbody>

                    </table>

        @endsection

    </body>
</html>