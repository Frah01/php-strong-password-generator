<?php

include __DIR__ . '/functions.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Strong password generator</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                <h3>Lunghezza password</h3>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <form action="./index.php" method="GET">
                    <div class="form-group">
                        <input class="form-control" type="number" name="password">
                    </div>
                    <div class="form-group">
                        <div>
                            <h3>La tua password</h3>
                            <?php

                            echo randomGen($passwGen, $randomText);

                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>