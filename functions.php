<?php 

$passwGen = $_GET['password'];
$randomText = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

function randomGen($passwGen, $randomText)
{
    if (isset($_GET['password'])) {
        return substr(str_shuffle($randomText), 0, $_GET['password']);
    }
}
