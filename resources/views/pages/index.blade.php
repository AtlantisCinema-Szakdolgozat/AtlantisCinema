
<!DOCTYPE html>

<html lang="hu">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title> AtlantisCinema </title>

        <!-- stíluslapok -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="Css/altalanos-formazas.css">
        <link rel="stylesheet" href="Css/nyitoLap-formazas.css">
        

        <!-- scriptek -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script src="js/Film.js"></script>

    </head>

    <body>
 
        @extends('layouts.nyitoOldalApp')
        @section('content')

            <section>

                <!-- Galéria és hírek -->

                <div id="galeriaSzulo" class="row">


                    <div id="korhintaGaleria" class="col-md-9">

                        <img src="Css/ideiglenes/akcio.PNG" alt="kép"/>
                        
                    </div>


                    <div id="kisGaleria" class="col-md-3 row">

                        <div class=" col-md-12">
                            <img src="Css/ideiglenes/hir.PNG" alt="kép"/>
                        </div>

                        <div class=" col-md-12">
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
                                    <a class="nav-link" href="/nyitoLap_tablazat"> Műsoron </a>
                                </li>

                            </ul>
                                    
                        </div>
                    </div> 
                </nav> 



                <!-- Csempe elemek -->

                <div id="musorListaCsempeSzulo">

                    <div class="csempeSablon row">

                        <div class="divCsempePlakat col-md-3">
                            <img  class="csempePlakat" src="Css/ideiglenes/matrix.jpg" alt="plakát">
                        </div>
                        
                        <div  class="csempeLeiras col-md-9" >

                            <a href="/filmOldal"> <h3> Mátrix: Feltámadások </h3> </a>
                            <p> sci-fi, akció </p>
                            <p> Neo nem halt meg. A Mátrix működik, de megújult, erősebb és biztonságosabb, mint valaha. Az élet megy tovább. Vannak hősök, akik képesek a feltámadásra. Vannak szörnyű erők, amelyek ellen mindig újra harcba kell szállni. És van néhány nagy titok, amelynek segítségével a hősök vállalhatják a harcot, és szembeszállhatnak azzal, aki/ami az elpusztításukra tör. Legfeljebb maguk sem értik, hogy történik mindez. </p>
                            
                            <div>
                                <table class="idoPontok table table-success bg-black" >

                                    <tr>
                                        <th class="idopont"> Időpontok: </th>
                                        <th> <a href="/foglalasOldal">13:15</a></th>
                                        <th> <a href="/foglalasOldal">16:30</a> </th>
                                        <th>  <a href="/foglalasOldal">20:00</a> </th>
                                    </tr>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </article>

        @endsection

         <!-- <button onclick="topFunction()" id="topGomb"> <i class="arrow up"></i> </button> -->

    </body>

    <script src="js/topp.js"></script>
</html>