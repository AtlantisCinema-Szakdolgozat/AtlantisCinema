<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/penztarFo.css">
    <link rel="stylesheet" href="Css/penztarfoglalas.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
                
                <input type="text"  class="form-control" id="keresesmezo" name="kereses" placeholder="Keresés"><br>
              </div>
              <div class="col-xl-6">
                <select class="form-select" aria-label="Default select example">
                  <option selected>Rendezés</option>
                  <option value="a-z">A-Z</option>
                  <option value="z-a">Z-A</option>
                </select>
              </div>

               
                
              </form> 
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Sorszám</th>
                    <th scope="col">Név</th>
                    <th scope="col">E-mail</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Gipszjakab@gmail.com</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Jacob</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>

           
                

            
            </div>
        <div id="ulesterv" class="col-xl-7 col-lg-9">
          <div class="aktfilm">
            <p class="terem"></p>
            <p class="idopont"></p>
            <p class="szinkron"></p>
            <p class="ferohely"></p>
            </div>
          <div id="vaszon"></div>
          
          <div class="szek">
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
    
            
        <div class="jelzes row">

          <div id="szabad" class="col">Szabad</div>
         
  
          <div id="foglalt" class="col">Foglalt</div>
          <div id="eppen"class="col">Éppen foglal</div>
          <div id="eladott"class="col">Eladott</div>
  
        </div>

      </div>



        <div id="jegyekdarab"class="col-xl-2 col-lg-1">
          <div id="jegyek">

                <div id="diakjegy">
                    <p>Diákjegy</p>
                    <form>
                        <select class="form-select" aria-label="Default select example">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </form>
                </div>

                <div id="felnott">
                    <p>Felnőtt  jegy</p>
                    <form>

                        <select class="form-select" aria-label="Default select example">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </form>
             

                </div>
                <div id="szerda">
                    <p>Szerdai jegy</p>
                    <form>
                      <select class="form-select" aria-label="Default select example">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                      </form>
                     
                    </div>
              

 
              </div>
              <div class="gombok row">
                <button type="button" class="foglalasgomb col">Foglalás</button>
                <a href="/penztarVasarlas" class="col"><button type="button" class="vasarlas1">Vásárlás</button></a>
            </div>
            </aside>
          

        <footer>
   
            <button type="button" class="vissza">Vissza</button>
        </footer>
    
   
      @endsection


    
</body>
</html>