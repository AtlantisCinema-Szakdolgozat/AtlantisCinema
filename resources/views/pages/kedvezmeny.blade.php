<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Kedvezmény</title>
    <link rel="stylesheet" href="Css/admin.css">
    <link rel="stylesheet" href="Css/kedvezmeny.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/adminkedvezmenyek.js" type="text/javascript"></script>
    <script src="js/kedvezmenyek.js" type="text/javascript"></script>
</head>
<body>
    @extends('layouts.adminApp')
    @section('content')
        <section>
            <div id="urlap">
                <form action=""  method="POST">
                     @csrf
                        <div class="row" id="index">
                            <label for="kedvezmenyid" class="col-sm-3 col-form-label">Index</label>
                          <div class="col-sm-9">
                            <input type="text"  class="form-control" id="kedvezmenyid" name="kedvezmenyid" value="" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="tipus" class="col-sm-3 col-form-label">Jegy típus</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" id="tipus" name="tipus" placeholder="Diák" required>
                        </div>
                        </div>
                        <div class="row">
                            <label for="szazalek" class="col-sm-3 col-form-label">Százalék</label>
                        <div class="col-sm-9">
                            <input type="number" min="1" class="form-control" id="szazalek" name="szazalek" required>
                        </div>
                        </div>
                        <div class="row">
                            <label for="leiras" class="col-sm-3 col-form-label">Leírás</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="leiras" rows="5" maxlength="300" placeholder="Add meg a kedvezmény leírását..." required></textarea>
                        </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
                            <input type="submit" class="btn felvitel" value="Felvitel">
                            <input type="submit" class="btn modosit" value="Módosit">
                        </div>
                </form>
            </div>
            
            <div id="tablazat" class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead >
                        <tr>
                            <th>Sorszám</th>
                            <th>Jegytípus</th>
                            <th>Százalék</th>
                            <th>Leírás</th>
                            <th>Törlés</th>
                            <th>Módosítás</th>
                        </tr>
                    </thead>
                    <tbody id="szulo">

                    </tbody>
                  </table>
            </div>
        </section>
    @endsection
</body>
</html>