<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetítés</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/vetites.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/adminvetitesek.js" type="text/javascript"></script>
    <script src="js/vetitesek.js" type="text/javascript"></script>
</head>
<body>
    @extends('layouts.adminApp')
    @section('content')
        <section>
            <div id="urlap">
                <form action=""  method="post">
                        <div class="row">
                            <label for="fcim" class="col-sm-4 col-form-label">Film címe</label>
                          <div class="col-sm-8">
                            <select class="fcim form-select">
                                <option selected>Film cím</option>
                                <option value="1">Clifford the Big Red Dog</option>
                                <option value="2">Mátrix: Feltámadások</option>
                              </select>
                          </div>
                        </div>
                        <div class="row">
                            <label for="ffelirat" class="col-sm-4 col-form-label">Felirat</label>
                          <div class="col-sm-8">
                            <select class="ffelirat form-select">
                                <option selected>Feliratos</option>
                                <option value="1">Igen</option>
                                <option value="2">Nem</option>
                              </select>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fszinkron" class="col-sm-4 col-form-label">Szinkronizált</label>
                          <div class="col-sm-8">
                            <select class="fszinkron form-select">
                                <option selected>Szinkronos</option>
                                <option value="1">Igen</option>
                                <option value="2">Nem</option>
                              </select>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fvetitesnap" class="col-sm-4 col-form-label">Vetítés napja</label>
                          <div class="col-sm-8">
                            <input type="date" id="fvetitesnap" name="fvetitesnap" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fvetitesiIdopot" class="col-sm-4 col-form-label">Vetítés időponja</label>
                          <div class="col-sm-8">
                            <input type="time" id="fvetitesiIdopot" name="fvetitesiIdopot" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fteljesJegyar" class="col-sm-4 col-form-label">Teljes jegyár</label>
                          <div class="col-sm-8">
                            <input type="number" class="form-control" id="fteljesJegyar" name="fteljesJegyar" value="1900" required>
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
                                <option value="1">Cím szerint növekvő</option>
                                <option value="2">Cím szerint csökkenő</option>
                                <option value="3">Hossz szerint növekvő</option>
                                <option value="4">Hossz szerint csökkenő</option>
                                <option value="5">Nyelv szerint növekvő</option>
                                <option value="6">Nyelv szerint növekvő</option>
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
                        <th>Vtítés napja</th>
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
                    <!-- <tr>
                      <td>1</td>
                      <td>Clifford the Big Red Dog</td>
                      <td>Nem</td>
                      <td>Igen</td>
                      <td>2022.01.19.</td>
                      <td>14:30</td>
                      <td>1900</td>
                      <td><button type="submit">Premier</button></td>
                      <td><button type="submit">Törlés</button></td>
                      <td><button type="submit">Módosítás</button></td>
                      <td><button type="submit">Publikus</button></td>
                    </tr> -->
                    
                  </table>
            </div>
        </section>
    @endsection
</body>
</html>