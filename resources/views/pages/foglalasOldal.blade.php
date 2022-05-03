
<!DOCTYPE html>

<html lang="hu">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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

                            <p id="nyelv"> </p>
                            <p id="szinkron"> </p>

                            

                        </div>
                        
                        <div class="col-sm-4">

                            <img class="plakat" src="" alt="plakát">

                        </div>

                    </div>


                    <div id="nezoAdatok" class="col-12">
                        
                        <form action="{{route('foglalas-Felvitel')}}" method="post">
                            @if(Session::has('sikeres'))

                            <div class="alert alert-sikeres">{{Session::get('sikeres')}}</div>

                            @endif

                            @if(Session::has('sikertelen'))

                            <div class="alert alert-danger">{{Session::get('sikertelen')}}</div>

                            @endif

                            @csrf
                            <h4>Néző adatai</h4>

                            <div class="row mb-3">

                                <!-- <label for="nev" class="col-sm-2 col-form-label"> Név: </label> -->

                                <label for="nev" class="col-sm-2 col-form-label">Név*:</label>
                                           

                                <div class="col-sm">
                                  <!-- <input type="text" class="form-control" id="nev" placeholder="Kiss Zoli"> -->
                                  <input type="text" id="nev" name="nev" class="form-control" placeholder="Kiss Zoli" value="{{old('nev')}}"  >
                                </div>

                            </div>
    
                            <div class="row mb-2">

                                <!-- <label for="email" class="col-sm-2 form-label"> Email: </label> -->
                                <label for="email" class="col-sm-2 form-label">Email*:</label>
                                


                                <div class="col-sm">
                                  <!-- <input type="email" class="form-control" id="email" placeholder="zoli@email.hu"> -->
                                  <input type="text" class="form-control" id="email" placeholder="zoli@email.hu" name="email"  value="{{old('email')}}">
                                </div>

                            </div>   
                            
                            <div class="row mb-3">

                                <label for="szekekszama" class="col-sm-2 col-form-label">Székek száma*:</label>
                                           

                                <div class="col-sm">
                                
                                  <input type="number" class="form-control" id="szekekszama" required>
                                </div>

                            </div>
        

                           
                                
                        </form>
             
                    </div>

                    <div id="vaszon"></div>
                    <div class="szekTerv">
                        <table id="ulohelyek">
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td></td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                            </tr>

                            <tr>
                            <td>1</td>
                            <td><input type="checkbox" class="szekek" id="1/1"></td>
                            <td><input type="checkbox" class="szekek" id="1/2"></td>
                            <td><input type="checkbox" class="szekek" id="1/3"></td>
                            <td><input type="checkbox" class="szekek" id="1/4"></td>
                            <td><input type="checkbox" class="szekek" id="1/5"></td>
                            <td class="szekGap"></td>
                            <td><input type="checkbox" class="szekek" id="1/6"></td>
                            <td><input type="checkbox" class="szekek" id="1/7"></td>
                            <td><input type="checkbox" class="szekek" id="1/8"></td>
                            <td><input type="checkbox" class="szekek" id="1/9" ></td>
                            <td><input type="checkbox" class="szekek" id="1/10"></td>
                            </tr>

                            <tr>
                            <td>2</td>
                            <td><input type="checkbox" class="szekek" id="2/1"></td>
                            <td><input type="checkbox" class="szekek" id="2/2"></td>
                            <td><input type="checkbox" class="szekek" id="2/3"></td>
                            <td><input type="checkbox" class="szekek" id="2/4"></td>
                            <td><input type="checkbox" class="szekek" id="2/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="2/6"></td>
                            <td><input type="checkbox" class="szekek" id="2/7"></td>
                            <td><input type="checkbox" class="szekek" id="2/8"></td>
                            <td><input type="checkbox" class="szekek" id="2/9"></td>
                            <td><input type="checkbox" class="szekek" id="2/10"></td>

                            </tr>

                            <tr>
                            <td>3</td>
                            <td><input type="checkbox" class="szekek" id="3/1"></td>
                            <td><input type="checkbox" class="szekek" id="3/2"></td>
                            <td><input type="checkbox" class="szekek" id="3/3"></td>
                            <td><input type="checkbox" class="szekek" id="3/4"></td>
                            <td><input type="checkbox" class="szekek" id="3/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="3/6"></td>
                            <td><input type="checkbox" class="szekek" id="3/7"></td>
                            <td><input type="checkbox" class="szekek" id="3/8"></td>
                            <td><input type="checkbox" class="szekek" id="3/9"></td>
                            <td><input type="checkbox" class="szekek" id="3/10"></td>

                            </tr>

                            <tr>
                            <td>4</td>
                            <td><input type="checkbox" class="szekek" id="4/1"></td>
                            <td><input type="checkbox" class="szekek" id="4/2"></td>
                            <td><input type="checkbox" class="szekek" id="4/3"></td>
                            <td><input type="checkbox" class="szekek" id="4/4"></td>
                            <td><input type="checkbox" class="szekek" id="4/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="4/6"></td>
                            <td><input type="checkbox" class="szekek" id="4/7"></td>
                            <td><input type="checkbox" class="szekek" id="4/8"></td>
                            <td><input type="checkbox" class="szekek" id="4/9"></td>
                            <td><input type="checkbox" class="szekek" id="4/10"></td>

                            </tr>

                            <tr>
                            <td>5</td>
                            <td><input type="checkbox" class="szekek" id="5/1"></td>
                            <td><input type="checkbox" class="szekek" id="5/2"></td>
                            <td><input type="checkbox" class="szekek" id="5/3"></td>
                            <td><input type="checkbox" class="szekek" id="5/4"></td>
                            <td><input type="checkbox" class="szekek" id="5/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="5/6"></td>
                            <td><input type="checkbox" class="szekek" id="5/7"></td>
                            <td><input type="checkbox" class="szekek" id="5/8"></td>
                            <td><input type="checkbox" class="szekek" id="5/9"></td>
                            <td><input type="checkbox" class="szekek" id="5/10"></td>

                            </tr>

                            <tr class="szekVGap"></tr>

                            <tr>
                            <td>6</td>
                            <td><input type="checkbox" class="szekek" id="6/1"></td>
                            <td><input type="checkbox" class="szekek" id="6/2"></td>
                            <td><input type="checkbox" class="szekek" id="6/3"></td>
                            <td><input type="checkbox" class="szekek" id="6/4"></td>
                            <td><input type="checkbox" class="szekek" id="6/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="6/6"></td>
                            <td><input type="checkbox" class="szekek" id="6/7"></td>
                            <td><input type="checkbox" class="szekek" id="6/8"></td>
                            <td><input type="checkbox" class="szekek" id="6/9"></td>
                            <td><input type="checkbox" class="szekek" id="6/10"></td>

                            </tr>

                            <tr>
                            <td>7</td>
                            <td><input type="checkbox" class="szekek" id="7/1"></td>
                            <td><input type="checkbox" class="szekek" id="7/2"></td>
                            <td><input type="checkbox" class="szekek" id="7/3"></td>
                            <td><input type="checkbox" class="szekek" id="7/4"></td>
                            <td><input type="checkbox" class="szekek" id="7/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="7/6"></td>
                            <td><input type="checkbox" class="szekek" id="7/7"></td>
                            <td><input type="checkbox" class="szekek" id="7/8"></td>
                            <td><input type="checkbox" class="szekek" id="7/9"></td>
                            <td><input type="checkbox" class="szekek" id="7/10"></td>

                            </tr>

                            <tr>
                            <td>8</td>
                            <td><input type="checkbox" class="szekek" id="8/1"></td>
                            <td><input type="checkbox" class="szekek" id="8/2"></td>
                            <td><input type="checkbox" class="szekek" id="8/3"></td>
                            <td><input type="checkbox" class="szekek" id="8/4"></td>
                            <td><input type="checkbox" class="szekek" id="8/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="8/6"></td>
                            <td><input type="checkbox" class="szekek" id="8/7"></td>
                            <td><input type="checkbox" class="szekek" id="8/8"></td>
                            <td><input type="checkbox" class="szekek" id="8/9"></td>
                            <td><input type="checkbox" class="szekek" id="8/10"></td>

                            </tr>

                            <tr>
                            <td>9</td>
                            <td><input type="checkbox" class="szekek" id="9/1"></td>
                            <td><input type="checkbox" class="szekek" id="9/2"></td>
                            <td><input type="checkbox" class="szekek" id="9/3"></td>
                            <td><input type="checkbox" class="szekek" id="9/4"></td>
                            <td><input type="checkbox" class="szekek" id="9/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="9/6"></td>
                            <td><input type="checkbox" class="szekek" id="9/7"></td>
                            <td><input type="checkbox" class="szekek" id="9/8"></td>
                            <td><input type="checkbox" class="szekek" id="9/9"></td>
                            <td><input type="checkbox" class="szekek" id="9/10"></td>

                            </tr>

                            <tr>
                            <td>10</td>
                            <td><input type="checkbox" class="szekek" id="10/1"></td>
                            <td><input type="checkbox" class="szekek" id="10/2"></td>
                            <td><input type="checkbox" class="szekek" id="10/3"></td>
                            <td><input type="checkbox" class="szekek" id="10/4"></td>
                            <td><input type="checkbox" class="szekek" id="10/5"></td>
                            <td></td>
                            <td><input type="checkbox" class="szekek" id="10/6"></td>
                            <td><input type="checkbox" class="szekek" id="10/7"></td>
                            <td><input type="checkbox" class="szekek" id="10/8"></td>
                            <td><input type="checkbox" class="szekek" id="10/9"></td>
                            <td><input type="checkbox" class="szekek" id="10/10"></td>
                            </tr>


                        </table>
                    </div>
    
                    <div class="jelzes row">
                        <div id="szabad" class="col">Szabad</div>
                        <div id="eppen"class="col">Éppen foglal</div>
                        <div id="eladott"class="col">Eladott</div>

                    </div>
    
            </section>

            <article>
                <div id="gombok">
                    <button type="button" class="btn btn-lg" id="foglalasGomb"> Foglalás </button>
                    <button type="button" class="btn btn-lg" id="vasarlasGomb" disabled> Vásárlás </button>
                </div>


                <!-- Felugró ablak, foglalás -->

                <div id="foglFelugro" class="modal">

                    <div class="modal-content">

                        <a class="close" href="/index"> x </a>

                        <h3> Köszönjük! Foglalását rögzítettük. </h3>
            
                    </div>
                  
                </div>
                  
            </article>

         @endsection

    </body>
</html>