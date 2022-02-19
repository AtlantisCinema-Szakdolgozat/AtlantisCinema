<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolgozók</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/dolgozok.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/admindolgozok.js" type="text/javascript"></script>
    <script src="js/dolgozok.js" type="text/javascript"></script>
  </head>
<body>
    @extends('layouts.adminApp')
    @section('content')
        <section>
            <div id="urlap">
                <form action=""  method="post">
                        <div class="row">
                            <label for="dnev" class="col-sm-3 col-form-label">Dolgozó neve</label>
                          <div class="col-sm-9">
                            <input type="text"  class="form-control" id="dnev" name="dnev" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="djelszó" class="col-sm-3 col-form-label">Jelszó</label>
                          <div class="col-sm-7">
                            <input type="password" class="form-control" id="djelszó" name="djelszó" required>
                          </div>
                          <div class="col-sm-2">
                            <input type="button" class="btn jelszo" value="Új jelszó">
                          </div>
                        </div>
                        <div class="row">
                            <label for="dmunkakor" class="col-sm-3 col-form-label">Munkaköre</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="dmunkakor" name="dmunkakor" required>
                          </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
                            <input type="button" class="btn " value="Felvitel">
                        </div>
                </form>
            </div>
            <div id="keresesRendezes" class="row">
                <div id="kereses" class="col-sm-6"> 
                  <input type="text" class="form-control" placeholder="Keresés">
                </div>
                <div id="rendezes" class="col-sm-6">
                        <select class="form-select">
                          <option selected>Rendezés</option>
                          <option value="1">Név szeriznt növekvő</option>
                          <option value="2">Név szeriznt csökkenő</option>
                          <option value="1">Munkakör szeriznt növekvő</option>
                          <option value="2">Munkakör szeriznt csökkenő</option>
                        </select>
                </div>
            </div>
            
            <div id="tablazat" class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>Sorszám</th>
                        <th>Dolgozó neve</th>
                        <th>Jelszó</th>
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