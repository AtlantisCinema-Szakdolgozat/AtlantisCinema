<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Film</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/film.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/adminfilmek.js" type="text/javascript"></script>
    <script src="js/filmek.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    @extends('layouts.adminApp')
    @section('content')
        <section>
            <div id="urlap">
                <form action=""  method="POST" enctype="" id="filmadat">
                    @csrf
                        <div class="row" id="index">
                            <label for="filmid" class="col-sm-3 col-form-label">Index</label>
                          <div class="col-sm-9">
                            <input type="text"  class="form-control" id="filmid" name="filmid" value="" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fcim" class="col-sm-3 col-form-label">Film címe</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control fcim" id="fcim" name="cim" placeholder="Hunger Games">
                          </div>
                        </div>
                        <div class="row">
                            <label for="fleiras" class="col-sm-3 col-form-label">Leírás</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" id="fleiras" rows="5" maxlength="300"  name="filmLeiras" placeholder="Add meg a film leírását." required></textarea>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fhossz" class="col-sm-3 col-form-label">Film hossza</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="fhossz" name="hossz"  placeholder="120 perc" required>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fnyelv" class="col-sm-3 col-form-label">Film nyelve</label>
                          <div class="col-sm-9">
                            <select class="fnyelv form-select fnyelv" id="fnyelv" name="nyelv">
                                <option selected>Nyelv</option>
                                <option value="HU">HU</option>
                                <option value="EN">EN</option>
                                <option value="IT">IT</option>
                                <option value="DE">DE</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                            <label for="fmufaj" class="col-sm-3 col-form-label">Film műfaj</label>
                          <div class="col-sm-9">
                            <select class="js-example-placeholder-single js-states form-control fmufaj" id="fmufaj" name="mufajId">
                                <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                            <label for="ffoszereplok" class="col-sm-3 col-form-label">Film főszereplők</label>
                          <div class="col-sm-9">
                            <select class="js-example-placeholder-multiple js-states form-control ffoszereplok"   name="szereploIdk[]" multiple="multiple" id="ffoszereplok">
                                <option></option>
                            </select>
                          </div>

                        </div>
                        <div class="row rendezo">
                            <label for="frendezok" class="col-sm-3 col-form-label">Film rendező</label>
                          <div class="col-sm-9">
                            <select class=" js-example-placeholder-multiple js-states form-control frendezok"  name="rendezoIdk[]" multiple="multiple" id="frendezok">
                                <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                                <label for="fpoter" class="col-sm-3 col-form-label">Poszter</label>
                           <div class="col-sm-9">
                            <input class="form-control poszter" type="file" name="poszter" id="file" accept="image/*" required>
                           </div>
                        </div>
                        <div class="row">
                                <label for="fyoutube" class="col-sm-3 col-form-label">Youtube link</label>
                           <div class="col-sm-9">
                            <input type="text"  class="form-control" id="fyoutube" name="youtubeLink" value=""  placeholder="https://youtu.be/pelda"  required>
                           </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
                            <input type="button" class="btn felvitel" value="Felvitel">
                            <input type="button" class="btn modosit" value="Módosit">
                        </div>
                </form>
                
            </div>
            <div id="keresesRendezes" class="row  g-2">
                <div id="kereses" class="col-sm-6"> 
                    <input type="text" id="keresesmezo" class="form-control" placeholder="Keresés">
                </div>
                <div id="rendezes" class="col-sm-6">
                    <select class="form-select" id="rendezeskivalasztasa">
                        <option selected>Rendezés</option>
                        <option value="rend1">Film cím szerint növekvő</option>
                        <option value="rend2">Film cím szerint csökkenő</option>
                    </select>
                </div>                
            </div>
            
            
            <div id="filmtarolo" class="row g-3 szulo">

                <div class="col-lg-4 col-sm-6 gyerek">
                    <div class="filmadatok">


                        <div class="row">
                            <h2 class="col-3">Sorszám</h2>
                            <p class="col-9 filmID">1</p>
                        </div>
                        <div class="row">
                            <h2 class="col-sm-4">Film cím</h2>
                            <p class="col-sm-8 cim">Clifford the Big Red Dog</p>
                        </div>
                        <div class="row">
                            <h2 class="col-12">Leírás</h2>
                            <p class="col-12 leiras">Amikor az általános iskolás Emily Elizabeth azt kívánja, hogy a
                            kis piros kutyája legyen nagy és erős, nem arra számít, hogy
                            amikor felébred, egy négy méter magas kutyát talál a kis New
                            York-i lakásban. Mivel mindenképp meg akarja tartani szeretett
                            kedvencét, Emily elindul, hogy felkeressen egy varázslatos
                            állatgondozót, aki reményei szerint képes visszaállítani
                            Clifford eredeti méreteit. Miközben a várost járja felelőtlen
                            bácsikájával, Caseyel, az iskolatársával Owennel, és
                            Clifforddal, a nagy piros kutyával, Clifford méretének híre
                            eljut egy gonosz tudós fülébe, aki úgy dönt, hogy megkaparintja
                            az állatot...</p>
                        </div>
                        <div class="row">
                            <h2 class="col-3">Hossz</h2>
                            <p class="col-9 hossz">96 perc</p>
                        </div>
                        <div class="row">
                            <h2 class="col-3">Nyelv</h2>
                            <p class="col-9 nyelv">EN</p>
                        </div>
                        <div class="row">
                            <h2 class="col-sm-3">Műfaj</h2>
                            <p class="col-sm-9 mufaj">Vígjáték, Családi</p>
                        </div>
                        <div class="row">
                            <h2  class="col-sm-3">Szereplő</h2>
                            <p class="col-sm-9 szereplo">Darby Camp, Jack Whitehall, Izaac Wang, John Cleese</p>
                        </div>
                        <div class="row">
                            <h2  class="col-sm-3">Rendező</h2>
                            <p class="col-sm-9 rendezo">Walt Becker, Walt Becker</p>
                        </div>
                        <div class="row">
                            <h2  class="col-sm-3">Poszter</h2>
                            <img src="" class="col-sm-9 poszter">
                        </div>
                        <div class="row">
                            <h2  class="col-sm-3">Link</h2>
                            <p class="col-sm-9 youtubeLink">posters/4507D2R-lg.jpg</p>
                        </div>
                        <div class="row button">
                            <div class="col-6">
                                <button type="submit" class="torles">Törlés</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="modositas">Módosítás</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
    @endsection
</body>
</html>