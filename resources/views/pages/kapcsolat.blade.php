<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AtlantisCinema - Kapcsolat</title>
        <!-- stíluslapok -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="Css/altalanos-formazas.css">
        <link rel="stylesheet" href="Css/kapcsolat.css">
        <!-- scriptek -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>      
    </head>
    <body> 
    @extends('layouts.felhasznaloiApp')
        @section('content')

            <article class="row">
                <div class="col-md-6">
                    <h2>Atlantis Cinema</h2>
                    <div class="row">
                        <h5 class="col-md-2">Cím:</h5>
                        <div class="col-md-10" id="cim">
                            <p>North Atlantic Ocean</p>
                            <p>38°46'43.7"N 27°47'32.6"W</p>
                        </div>
                    </div>

                    <div class="row email">
                        <h5 class="col-md-2">Email:</h5>
                        <p class="col-md-10">atlantis@email.hu</p> 
                    </div>

                    <div class="row">
                        <h5 class="col-md-2">Tel.:</h5>
                        <p class="col-md-10">+36 80 398 1296</p>
                    </div>

                    <div class="kozossegiMedia">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                    </div>

                    <div>
                        <h5>Nyitvatartás:</h5>
                        <p>A pénztárak 10:00 és 22:00 óra közt vannak nyitva</p>
                    </div>

                    <div class="terkep">
                        <div class="row">
                            <iframe class=" col-lg-9 col-md-10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3110.3414715930558!2d-27.794577584653155!3d38.7788055795892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5710d5935c13238e!2zMzjCsDQ2JzQzLjciTiAyN8KwNDcnMzIuNiJX!5e0!3m2!1shu!2shu!4v1643067126883!5m2!1shu!2shu" loading="lazy"></iframe>
                        </div>
                    </div>
                    

                </div>
                
                 
                <div class="col-md-6 kapcsolatFelvetel">
                    
                        <div>
                            <h3>Kapcsolat</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="nev" class="form-label">Név</label>
                                    <input type="email" class="form-control" id="nev">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@gamail.com">
                                </div>
                                <div class="mb-3">
                                    <label for="uzenet" class="form-label">Üzenet</label>
                                    <textarea class="form-control" id="uzenet" rows="3"></textarea>
                                </div>
                                <div class="gomb">
                                    <button type="submit" class="btn btn-primary justify-content-end">Submit</button>
                                </div>
                            </form>
                        </div>
                    
                    
                </div> 
            </article>

        @endsection

    </body>
</html>