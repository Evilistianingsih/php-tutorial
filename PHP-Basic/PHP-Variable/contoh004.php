<?php
function static_var() //demonstrasi variable
{
    static $num = 5;
    $sum = 2;

    $sum++;
    $num++;

    echo $num, "\n";
    echo $sum, "\n";

}
static_var(); // pemanggilan pertama
static_var(); // pemanggilan kedua
?>