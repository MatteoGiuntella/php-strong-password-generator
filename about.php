<?php
function generatore ($length){
    $myItem = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz,.<>:;-_]{()=/&%$£"!';
    return substr(str_shuffle($myItem), 0, $length);
}