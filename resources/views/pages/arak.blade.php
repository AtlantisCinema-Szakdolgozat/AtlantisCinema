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
        <link rel="stylesheet" href="Css/arak.css">
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
                    <h2>Árak</h2>
                </div>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Jegytípus</th>
                                <th>Bruttó ár</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><h5>2D Normál</h5><p>Teljes árú jegy. 2021.12.16.-től érvényes jegyár.</p></td>
                                <td><h5>1900 Ft</h5></td>
                            </tr>
                            <tr>
                                <td><h5>2D Normál</h5><p>Teljes árú jegy. 2021.12.16.-től érvényes jegyár.</p></td>
                                <td><h5>1900 Ft</h5></td>
                            </tr>
                            <tr>
                                <td><h5>2D Normál</h5><p>Teljes árú jegy. 2021.12.16.-től érvényes jegyár.</p></td>
                                <td><h5>1900 Ft</h5></td>
                            </tr>
                            <tr>
                                <td><h5>2D Normál</h5><p>Teljes árú jegy. 2021.12.16.-től érvényes jegyár.</p></td>
                                <td><h5>1900 Ft</h5></td>
                            </tr>
                            <tr>
                                <td><h5>2D Normál</h5><p>Teljes árú jegy. 2021.12.16.-től érvényes jegyár.</p></td>
                                <td><h5>1900 Ft</h5></td>
                            </tr>
                        </tbody>
                    </table>
            </article>

        @endsection

    </body>
</html>