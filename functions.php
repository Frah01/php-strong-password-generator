<?php

$passwGen = $_GET['password'];
$randomText = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?^*@%&£';

function randomGen($passwGen, $randomText)
{
    if (isset($_GET['password'])) {
        if ($_GET['password'] < 0) {
            return 'Inserire un numero positivo';
        } else {
            return substr(str_shuffle($randomText), 0, $_GET['password']);
        }
    }
}
