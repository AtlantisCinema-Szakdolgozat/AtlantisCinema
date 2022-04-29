<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="Css/penztarFo.css">
    <link rel="stylesheet" href="Css/penztarfoglalas.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/ajax.js"></script>
    <script src="js/penztarFoglalasClass.js" type="text/javascript"></script>
    <script src="js/penztarFoscript.js" type="text/javascript"></script>
    <script src="js/penztarFilmek.js" type="text/javascript"></script>
    <script src="js/penztaridopontok.js" type="text/javascript"></script>
    <script src="js/penztarFoglalasOldal.js" type="text/javascript"></script>

    <title>Pénztár</title>
</head>
<body>
    @extends('layouts.penztarApp')
    @section('content')
   


        <aside id="foglalas" class="row">

        <div id="foglalasadatok" class="col-xl-3 col-lg-2">


            <form class="row">
              <div class="col-xl-6 kereses">
                
                <input type="text"  class="form-control" id="keresesmezofoglalas" name="kereses" placeholder="Keresés"><br>
              </div>
              <div class="col-xl-6">
                <select id="rendezes" class="form-select" aria-label="Default select example">
                  <option selected>Rendezés</option>
                  <option value="rendezesSzempont1">A-Z</option>
                  <option value="rendezesSzempont2">Z-A</option>
                </select>
              </div>

               
      
              </form> 
              <div id="tablazat" class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Név</th>
                    <th scope="col">E-mail</th>
                  </tr>
                   <!-- <tr class="tablafoglaSablon">
                    <td class="nev"></td>
                    <td class="email"></td>
                  </tr> -->
                </thead>
                
                <tbody class="tablafoglaSzulo">
                  
                 
                
                </tbody>
              </table>
              </div>
            </div>
        <div id="ulesterv" class="col-xl-7 col-lg-9">

        <p id="ertesites"></p>
          <div class="aktfilm">
            <p class="terem"></p>
            <p class="idopont"></p>
            <p class="szinkron"></p>
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
          <td>11</td>
          <td>12</td>
      </tr>
        
      <tr>
          <td>A</td>
          <td><input type="checkbox" class="szekek" value="1/1"></td>
          <td><input type="checkbox" class="szekek" value="1/2"></td>
          <td><input type="checkbox" class="szekek" value="1/3"></td>
          <td><input type="checkbox" class="szekek" value="1/4"></td>
          <td><input type="checkbox" class="szekek" value="1/5"></td>
          <td class="szekGap"></td>
          <td><input type="checkbox" class="szekek" value="1/6"></td>
          <td><input type="checkbox" class="szekek" value="1/7"></td>
          <td><input type="checkbox" class="szekek" value="1/8"></td>
          <td><input type="checkbox" class="szekek" value="1/9" ></td>
          <td><input type="checkbox" class="szekek" value="1/10"></td>
          <td><input type="checkbox" class="szekek" value="1/11"></td>
          <td><input type="checkbox" class="szekek" value="1/12"></td>
        </tr>
        
        <tr>
          <td>B</td>
          <td><input type="checkbox" class="szekek" value="B1"></td>
          <td><input type="checkbox" class="szekek" value="B2"></td>
          <td><input type="checkbox" class="szekek" value="B3"></td>
          <td><input type="checkbox" class="szekek" value="B4"></td>
          <td><input type="checkbox" class="szekek" value="B5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="B6"></td>
          <td><input type="checkbox" class="szekek" value="B7"></td>
          <td><input type="checkbox" class="szekek" value="B8"></td>
          <td><input type="checkbox" class="szekek" value="B9"></td>
          <td><input type="checkbox" class="szekek" value="B10"></td>
          <td><input type="checkbox" class="szekek" value="B11"></td>
          <td><input type="checkbox" class="szekek" value="B12"></td>
        </tr>
        
        <tr>
          <td>C</td>
          <td><input type="checkbox" class="szekek" value="C1"></td>
          <td><input type="checkbox" class="szekek" value="C2"></td>
          <td><input type="checkbox" class="szekek" value="C3"></td>
          <td><input type="checkbox" class="szekek" value="C4"></td>
          <td><input type="checkbox" class="szekek" value="C5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="C6"></td>
          <td><input type="checkbox" class="szekek" value="C7"></td>
          <td><input type="checkbox" class="szekek" value="C8"></td>
          <td><input type="checkbox" class="szekek" value="C9"></td>
          <td><input type="checkbox" class="szekek" value="C10"></td>
          <td><input type="checkbox" class="szekek" value="C11"></td>
          <td><input type="checkbox" class="szekek" value="C12"></td>
      </tr>
        
      <tr>
          <td>D</td>
          <td><input type="checkbox" class="szekek" value="D1"></td>
          <td><input type="checkbox" class="szekek" value="D2"></td>
          <td><input type="checkbox" class="szekek" value="D3"></td>
          <td><input type="checkbox" class="szekek" value="D4"></td>
          <td><input type="checkbox" class="szekek" value="D5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="D6"></td>
          <td><input type="checkbox" class="szekek" value="D7"></td>
          <td><input type="checkbox" class="szekek" value="D8"></td>
          <td><input type="checkbox" class="szekek" value="D9"></td>
          <td><input type="checkbox" class="szekek" value="D10"></td>
          <td><input type="checkbox" class="szekek" value="D11"></td>
          <td><input type="checkbox" class="szekek" value="D12"></td>
      </tr>
        
      <tr>
          <td>E</td>
          <td><input type="checkbox" class="szekek" value="E1"></td>
          <td><input type="checkbox" class="szekek" value="E2"></td>
          <td><input type="checkbox" class="szekek" value="E3"></td>
          <td><input type="checkbox" class="szekek" value="E4"></td>
          <td><input type="checkbox" class="szekek" value="E5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="E6"></td>
          <td><input type="checkbox" class="szekek" value="E7"></td>
          <td><input type="checkbox" class="szekek" value="E8"></td>
          <td><input type="checkbox" class="szekek" value="E9"></td>
          <td><input type="checkbox" class="szekek" value="E10"></td>
          <td><input type="checkbox" class="szekek" value="E11"></td>
          <td><input type="checkbox" class="szekek" value="E12"></td>
      </tr>
        
      <tr class="szekVGap"></tr>
        
      <tr>
          <td>F</td>
          <td><input type="checkbox" class="szekek" value="F1"></td>
          <td><input type="checkbox" class="szekek" value="F2"></td>
          <td><input type="checkbox" class="szekek" value="F3"></td>
          <td><input type="checkbox" class="szekek" value="F4"></td>
          <td><input type="checkbox" class="szekek" value="F5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="F6"></td>
          <td><input type="checkbox" class="szekek" value="F7"></td>
          <td><input type="checkbox" class="szekek" value="F8"></td>
          <td><input type="checkbox" class="szekek" value="F9"></td>
          <td><input type="checkbox" class="szekek" value="F10"></td>
          <td><input type="checkbox" class="szekek" value="F11"></td>
          <td><input type="checkbox" class="szekek" value="F12"></td>
      </tr>
        
      <tr>
          <td>G</td>
          <td><input type="checkbox" class="szekek" value="G1"></td>
          <td><input type="checkbox" class="szekek" value="G2"></td>
          <td><input type="checkbox" class="szekek" value="G3"></td>
          <td><input type="checkbox" class="szekek" value="G4"></td>
          <td><input type="checkbox" class="szekek" value="G5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="G6"></td>
          <td><input type="checkbox" class="szekek" value="G7"></td>
          <td><input type="checkbox" class="szekek" value="G8"></td>
          <td><input type="checkbox" class="szekek" value="G9"></td>
          <td><input type="checkbox" class="szekek" value="G10"></td>
          <td><input type="checkbox" class="szekek" value="G11"></td>
          <td><input type="checkbox" class="szekek" value="G12"></td>
      </tr>
        
      <tr>
          <td>H</td>
          <td><input type="checkbox" class="szekek" value="H1"></td>
          <td><input type="checkbox" class="szekek" value="H2"></td>
          <td><input type="checkbox" class="szekek" value="H3"></td>
          <td><input type="checkbox" class="szekek" value="H4"></td>
          <td><input type="checkbox" class="szekek" value="H5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="H6"></td>
          <td><input type="checkbox" class="szekek" value="H7"></td>
          <td><input type="checkbox" class="szekek" value="H8"></td>
          <td><input type="checkbox" class="szekek" value="H9"></td>
          <td><input type="checkbox" class="szekek" value="H10"></td>
          <td><input type="checkbox" class="szekek" value="H11"></td>
          <td><input type="checkbox" class="szekek" value="H12"></td>
      </tr>
        
      <tr>
          <td>I</td>
          <td><input type="checkbox" class="szekek" value="I1"></td>
          <td><input type="checkbox" class="szekek" value="I2"></td>
          <td><input type="checkbox" class="szekek" value="I3"></td>
          <td><input type="checkbox" class="szekek" value="I4"></td>
          <td><input type="checkbox" class="szekek" value="I5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="I6"></td>
          <td><input type="checkbox" class="szekek" value="I7"></td>
          <td><input type="checkbox" class="szekek" value="I8"></td>
          <td><input type="checkbox" class="szekek" value="I9"></td>
          <td><input type="checkbox" class="szekek" value="I10"></td>
          <td><input type="checkbox" class="szekek" value="I11"></td>
          <td><input type="checkbox" class="szekek" value="I12"></td>
      </tr>
        
      <tr>
          <td>J</td>
          <td><input type="checkbox" class="szekek" value="J1"></td>
          <td><input type="checkbox" class="szekek" value="J2"></td>
          <td><input type="checkbox" class="szekek" value="J3"></td>
          <td><input type="checkbox" class="szekek" value="J4"></td>
          <td><input type="checkbox" class="szekek" value="J5"></td>
          <td></td>
          <td><input type="checkbox" class="szekek" value="J6"></td>
          <td><input type="checkbox" class="szekek" value="J7"></td>
          <td><input type="checkbox" class="szekek" value="J8"></td>
          <td><input type="checkbox" class="szekek" value="J9"></td>
          <td><input type="checkbox" class="szekek" value="J10"></td>
          <td><input type="checkbox" class="szekek" value="J11"></td>
          <td><input type="checkbox" class="szekek" value="J12"></td>
      </tr>

        
      </table>
</div>
            
        <div class="jelzes row">
          <div id="szabad" class="col">Szabad</div>
          <div id="eppen"class="col">Éppen foglal</div>
          <div id="eladott"class="col">Eladott</div>
  
        </div>

      </div>


        
        <div id="jegyekdarab"class="col-xl-2 col-lg-1">
        <form action="{{route('foglalas-Felvitel')}}" method="post">

          @if(Session::has('sikeres'))

        <div class="alert alert-sikeres">{{Session::get('sikeres')}}</div>

          @endif

        @if(Session::has('sikertelen'))

        <div class="alert alert-danger">{{Session::get('sikertelen')}}</div>

        @endif

        @csrf

<div class="container">

<label for="nev">Név*:</label><br>
                    <input type="text" id="nev" class="infok" name="nev" value="{{old('nev')}}" >

<label for="email">Email*:</label>
<input type="text" placeholder="beta@emil.com" class="infok" name="email" id="email"  value="{{old('email')}}">

<label for="szekekszama">Székek száma*:</label>
 <input type="number" id="szekekszama" required>
<!-- <button type="submit" class="foglalasgomb col">Foglalás</button> -->

</div>
</form>

      


         
              <div class="gombok row">
                <button class="kezd">Kezdés</button>
                
            </div>
            <button class="vasarlas">Vásárlás</button>
            </aside>
          

        <footer>
        <input type="button" class='vissza'onclick="location.href='penztar';" value="Vissza" />
            <!-- <button type="button" class="vissza">Vissza</button> -->
        </footer>
    
   
      @endsection


    
</body>
</html>