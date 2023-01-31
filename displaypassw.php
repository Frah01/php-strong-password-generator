<?php

include __DIR__ . '/functions.php';
session_start();
$_SESSION['password'] = $_GET['password'];



if (empty($_SESSION['password']) || $_SESSION['password'] < 0 || $_GET['password'] > 50) {
    header('Location:./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>La tua password</title>
</head>

<body class="background-body">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="text-center text-white background-topbar p-3">
                    <h3>Strong Password Generator</h3>
                </div>
                <div class="text-center bg-white d-flex justify-content-center p-3">
                    <div>
                        <h3>La tua Password è :</h3>
                    </div>
                    <div class="mx-2">
                        <h3><?php echo randomGen($passwGen, $randomText); ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>