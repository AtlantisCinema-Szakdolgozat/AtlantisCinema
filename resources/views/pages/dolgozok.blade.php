<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Dolgozók</title>
    <link rel="stylesheet" href="Css/admin.css">
    <link rel="stylesheet" href="Css/dolgozok.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/admindolgozok.js" type="text/javascript"></script>
    <script src="js/dolgozok.js" type="text/javascript"></script>
  </head>
<body>
    @extends('layouts.adminApp')
    @section('content')
        <section>
            <div id="urlap">
                <form action=""  method="POST">
                  @csrf
                        <div class="row" id="index">
                            <label for="dolgozoid" class="col-sm-3 col-form-label">Index</label>
                          <div class="col-sm-9">
                            <input type="text"  class="form-control" id="dolgozoid" name="dolgozoid" value="" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="dnev" class="col-sm-3 col-form-label">Dolgozó neve</label>
                          <div class="col-sm-9">
                            <input type="text"  class="form-control" id="dnev" name="dnev" placeholder="Váradi Ákos" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="demail" class="col-sm-3 col-form-label">Email cím</label>
                          <div class="col-sm-9">
                            <input type="email"  class="form-control" id="demail" name="demail" placeholder="v.akos@atlantiscimea.com"required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="dmunkakor" class="col-sm-3 col-form-label">Munkaköre</label>
                          <div class="col-sm-9">
                            <select class="dmunkakor form-select" id="dmunkakor">
                                <option selected>Munkakör</option>
                                <option value="Admin">Admin</option>
                                <option value="Pénztáros">Pénztáros</option>
                              </select>
                          </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
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
                          <option value="rend1">Dolgozó neve szerint növekvő</option>
                          <option value="rend2">Dolgozó neve szerint csökkenő</option>
                        </select>
                </div>
            </div>
            
            <div id="tablazat" class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>Sorszám</th>
                        <th>Dolgozó neve</th>
                        <th>Email cím</th>
                        <th>Munkaköre</th>
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