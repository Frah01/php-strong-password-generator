<?php

$passwGen = $_GET['password'];
$randomText = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?^*@%&£';
$pass = [];

function randomGen($passwGen, $randomText)
{
    if (isset($_GET['password'])) {
        if ($_GET['password'] < 0 || $_GET['password'] > 50) {
            return 'Inserire un numero valido';
        } else {
            $alphaLength = strlen($randomText) - 1; //put the length -1 in cache
            for ($i = 0; $i < $passwGen; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $randomText[$n];
            }
            return implode($pass);
        }
    }
}
