<?php
$sum = 20;
// variable global
function global_var()
{
    global $num;

    echo "Variable num inside function : $num \n";

}

global_var();

echo "Variable num outside function : $num\n";

?>