<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AtlantisCinema - Árak</title>
        <!-- stíluslapok -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Css/altalanos-formazas.css">
        <link rel="stylesheet" href="Css/akciok.css">
        <!-- scriptek -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>      
    </head>
    <body> 

        @extends('layouts.felhasznaloiApp')
        @section('content')

            <article>
                <div>
                    <h2>Akciók</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="Css/akciok_hirek/akcJegy.jpg" class="img-thumbnail" alt="Öt plusz egy kedvezmeny">
                    </div>
                    <div class="col-md-8">
                        <h4>5 + 1 akció <span>&#127915;</span></h4>
                        <p>Mozizz nálunk 5 alkalommal és megajándékozunk egy ajándék jegyel, amit egy általad választott filmre tudsz felhasználni, hétköznap.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="Css/akciok_hirek/uszas.jpg" class="img-thumbnail" alt="Ússz be hozzánk">
                    </div>
                    <div class="col-md-8">
                        <h4>Gyere  úszva <span>&#x1F3CA</span></h4>
                        <p>Gyere úszva bármelyik környező szigetről és ha ezt tudod bizonyítani, vendégünk vagy egy ajándék popcorn menüre.</p>
                    </div>
                </div>
                    
            </article>

        @endsection
        
    </body>
</html>