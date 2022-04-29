<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Vetítés</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/vetites.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/adminvetitesek.js" type="text/javascript"></script>
    <script src="js/vetitesek.js" type="text/javascript"></script>
    <script src="js/vetitesekTerem.js" type="text/javascript"></script>
    <script src="js/vetitesekFilm.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    @extends('layouts.adminApp')
    @section('content')
        <section>
            <div id="urlap">
                <form action=""  method="POST">
                  @csrf
                    <div class="row" id="index">
                      <label for="vetitesid" class="col-sm-3 col-form-label">Index</label>
                      <div class="col-sm-9">
                        <input type="text"  class="form-control" id="vetitesid" name="vetitesid" value="" required>
                      </div>
                    </div>
                    <div class="row">
                      <label for="terem" class="col-sm-4 col-form-label">Terem Név</label>
                      <div class="col-sm-8">
                        <select class="terem form-select" id="terem">
                          <option selected>Terem Név</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label for="fcim" class="col-sm-4 col-form-label">Film címe</label>
                      <div class="col-sm-8">
                        <select class="js-example-placeholder-single js-states form-control fcim" id="fcim">
                          <option></option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label for="ffelirat" class="col-sm-4 col-form-label">Feliratos</label>
                      <div class="col-sm-8">
                        <select class="ffelirat form-select" id="ffelirat">
                          <option selected>Feliratos</option>
                          <option value="1">Igen</option>
                          <option value="0">Nem</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label for="fszinkron" class="col-sm-4 col-form-label">Szinkronizált</label>
                      <div class="col-sm-8">
                        <select class="fszinkron form-select" id="fszinkron">
                          <option selected>Szinkronos</option>
                          <option value="1">Igen</option>
                          <option value="0">Nem</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label for="fvetitesnap" class="col-sm-4 col-form-label">Vetítés napja</label>
                      <div class="col-sm-8">
                        <input type="date" id="fvetitesnap" name="fvetitesnap" required>
                        <input type="button" id="premier" name="premier" value="Premier">
                        <input type="button" id="nemPremier" name="nemPremier" value="Nem premier">
                      </div>
                    </div>
                    <div class="row">
                      <label for="fkezdesIdopot" class="col-sm-4 col-form-label">Kezdés időponja</label>
                      <div class="col-sm-8">
                        <input type="time" id="fkezdesIdopot" name="fkezdesIdopot" required>
                      </div>
                    </div>
                    <div class="row">
                      <label for="fteljesJegyar" class="col-sm-4 col-form-label">Teljes jegyár</label>
                      <div class="col-sm-8">
                        <input type="number" min="1" class="form-control" id="fteljesJegyar" name="fteljesJegyar" value="1900" required>
                      </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                      <input type="submit" class="btn felvitel" value="Felvitel">
                      <input type="submit" class="btn modosit" value="Módosit">
                    </div>
                </form>
            </div>
            <div id="keresesRendezes" class="row">
                <div id="kereses" class="col-sm-6"> 
                  <input type="text" id="keresesmezo" class="form-control" placeholder="Keresés">
                </div>
                <div id="rendezes" class="col-sm-6">
                  <select class="form-select" id="rendezeskivalasztasa">
                    <option selected>Rendezés</option>
                    <option value="rend1">Terem cím szerint növekvő</option>
                    <option value="rend2">Terem cím szerint csökkenő</option>
                    <option value="rend3">Film cím szerint növekvő</option>
                    <option value="rend4">Film cím szerint csökkenő</option>
                  </select>
                </div>
            </div>
            <div id="tablazat" class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>Sorszám</th>
                        <th>Terem</th>
                        <th>Film cím</th>
                        <th>Feliratos</th>
                        <th>Szinkronizált</th>
                        <th>Vetítés napja</th>
                        <th>Kezdés</th>
                        <th>Teljes jegyár</th>
                        <th>Premier</th>
                        <th>Publikus</th>
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