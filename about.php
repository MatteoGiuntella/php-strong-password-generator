<?php
$userLength = $_GET['generatore'];
function generatore ($userLength){
    $myItem = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz,.<>:;-_]{()=/&%$£"!';
    return substr(str_shuffle($myItem), 0, $userLength);
}