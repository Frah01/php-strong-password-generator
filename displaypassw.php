<?php

include __DIR__ . '/functions.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <div>
                        <h3>La tua password</h3>
                        <?php

                        echo randomGen($passwGen, $randomText);

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>