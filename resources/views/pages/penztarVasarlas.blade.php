<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/penztarFo.css">
    <link rel="stylesheet" href="Css/penztarvasarlas.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/penztaridopontok.js" type="text/javascript"></script>
    <script src="js/penztarVasarlasOldal.js" type="text/javascript"></script>

    <title>Pénztár</title>
</head>
<body>
    @extends('layouts.penztarApp')
    @section('content')
        <nav>
            <div class="aktfilm">
                <p class="terem"></p>
                <p class="idopont"></p>
                <p class="szinkron"></p>
                <p class="ferohely"></p>
                </div>
                </nav>
        <section>
           
            <div class="osszesito">
                <div class="adatok">
                    <h2>Adatok:</h2>

                </div>
                
                <div class="jegytipus">

            <div>
                <div class="jegyek">
                    <p>Diák: </p>
                </div>

                <div class="darab">
                    <p>2darab</p>

                </div>
                </div>

                <div>
                    <div class="jegyek">
                        <p>Felnőtt: </p>
                    </div>
    
                    <div class="darab">
                        <p>2darab</p>
    
                    </div>
                    </div>
                </div>




                <div class="fizetendoOsszeg">
                    <p>Fizetendő összeg:</p>
                    <p>3000Ft</p>

                </div>
                
                <div class="vasarlasfix">
            <button type="button" class="vasarlas">Vásárlás</button>
        </div>
        </div>
        </section>

        <footer>
   
            <button type="button" class="vissza">Vissza</button>
        </footer>

    @endsection

</body>
</html>