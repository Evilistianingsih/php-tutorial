<?php
$num = 60;
//variable local
function local_var()
{
    $num = 50;
    echo " local num = $num\n";

}

local_var();
echo "Variable num outside local_var() is $num\n";
?>