
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
        <link rel="stylesheet" href="Css/foglalas-formazas.css">

        <!-- Scriptek -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

        <script src="js/ajax.js" type="text/javascript"></script>

        <script src="js/Film.js" type="text/javascript"></script>

        <script src="js/foglalasOldalScript.js" type="text/javascript"></script>

    </head>

    <body>
        
        @extends('layouts.felhasznaloiApp')
        @section('content')



            <section>

                    <div id="valasztottFilm" class="row">

                        <div class="col-sm-4">

                            <img class="plakat" src="" alt="plakát">

                        </div>

                        <div id="filmLeiras" class="col-sm-4">

                            <h4 id="cim"> </h4>

                            <p id="nap"> </p>
    
                            <p id="kezdesIdo"> </p>
    
                            <p id="terem"> </p>
    
                            <p id="nyelv"> </p>

                        </div>
                        
                        <div class="col-sm-4">

                            <img class="plakat" src="" alt="plakát">

                        </div>

                    </div>


                    <div id="nezoAdatok" class="col-12">
                        
                        <form>

                            <h4>Néző adatai</h4>

                            <div class="row mb-3">

                                <label for="nev" class="col-sm-2 col-form-label"> Név: </label>

                                <div class="col-sm">
                                  <input type="text" class="form-control" id="nev" placeholder="Kiss Zoli">
                                </div>

                            </div>
    
                            <div class="row mb-2">

                                <label for="email" class="col-sm-2 form-label"> Email: </label>

                                <div class="col-sm">
                                  <input type="email" class="form-control"id="email" placeholder="zoli@email.hu">
                                </div>

                            </div>                         
        
                        </form>
             
                    </div>

                    <div id="jegyValasztas" class="col-12">
                        
                        <form class="row">

                            <div class="col-sm row mb-3">

                                <div class="col-sm-4" >
                                    <label for="normaljegy" class="col-form-label"> Normál jegy: </label>
                                </div>

                                <div class="col-sm">

                                    <select class="form-select" aria-label="Default select example">
                                            
                                            <option value="0"> 0 </option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                            <option value="8"> 8 </option>
                                            <option value="9"> 9 </option>
                                            <option value="10"> 10 </option>
        
                                    </select>

                                </div> 

                            </div>
        
                            <div class="col-sm row mb-3">

                                <div class="col-sm-4" >

                                    <label for="diakjegy" class="col-form-label"> Diák jegy: </label>
                                    
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title=" Diák kedvezmény érvényes diák igazolvány felmutatása után vehető igénybe. Ez 20%-os árcsökkenést jelent a normál jegy árához képest. ">
                                        i
                                    </button>

                                </div>
                                
                                <div class="col-sm">
                                    <select class="form-select" aria-label="Default select example">

                                        <option value="0"> 0 </option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>
                                        <option value="5"> 5 </option>
                                        <option value="6"> 6 </option>
                                        <option value="7"> 7 </option>
                                        <option value="8"> 8 </option>
                                        <option value="9"> 9 </option>
                                        <option value="10"> 10 </option>
        
                                    </select>  
                                </div>           
                            </div>
        
                        </form>
                    </div>
                   
                </div>

            </section>
            

            <article>

                    <div class="szek table-responsive">

                        <div id="vaszon"></div>

                        <div class="sor">
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                        </div>

                        <div class="sor">
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                        </div>
          
                        <div class="sor">
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                        </div>

                        <div class="sor">
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                        </div>
          
                        <div class="sor">
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                        </div>
          
                        <div class="sor">
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                        </div>
          
                        <div class="sor">
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                            <div class="oszlop"></div>
                        </div>

                    </div>

                <div id="jelzes" class="jelzes row">
          
                    <div id="szabad" class="col"> Szabad </div>
                    <div id="foglalt" class="col"> Foglalt </div>
                    <div id="eppen" class="col"> Éppen foglal </div>
                    <div id="eladott" class="col"> Eladott </div>
        
                </div>
               

                <div id="gombok">
                    <button type="button" class="btn btn-lg" id="foglalasGomb"> Foglalás </button>
                    <button type="button" class="btn btn-lg" id="vasarlasGomb"> Vásárlás </button>
                </div>


                <!-- Felugró ablak, foglalás -->

                <div id="foglFelugro" class="modal">

                    <div class="modal-content">

                        <a class="close" href="/index"> x </a>

                        <h3> Köszönjük! Foglalását rögzítettük. </h3>
                        <p> A megadott email címre visszaigazoló levelet fog kapni, a foglalás adataival.</p>

                    </div>
                  
                </div>
                  
            </article>

         @endsection

    </body>
</html>