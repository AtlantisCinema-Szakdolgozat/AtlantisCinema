<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolgozók</title>
    <link rel="stylesheet" href="css/dolgozo.css">
</head>
<body>
    <main>
        <section>
            <form action="" method="post">
                <div>
                    <label for="fnev">Felhasználó név:</label>
                    <input type="text" id="fnev" name="fnev" required >
                </div>
                <div>
                    <label for="jelszo">Jelszó:</label>
                    <input type="password" id="jelszo" name="jelszo"  required>
                </div>
                <div id="belepes">
                    <input type="submit" value="Belépés">
                </div>
              </form>
        </section>
    </main>
</body>
</html>