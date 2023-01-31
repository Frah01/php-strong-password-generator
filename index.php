<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Strong password generator</title>
</head>

<body class="background-body">
    <div class="container  mt-5">
        <div class="row background-topbar">
            <div class="col">
                <div class="text-center text-white p-3">
                    <h1>Strong Password Generator</h1>
                </div>
            </div>
        </div>
        <div class="row bg-white p-5">
            <div class="col-6 d-flex justify-content-center">
                <h3>Scegli la lunghezza della tua password</h3>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <form action="./displaypassw.php" method="GET">
                    <div class="form-group d-flex">
                        <input class="form-control" type="number" name="password">
                        <button type="submit" class="btn btn-dark mx-2">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>