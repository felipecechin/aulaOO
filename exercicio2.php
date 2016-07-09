<?php

class calculo {

    function soma($num1, $num2) {
        return $num1 + $num2;
    }

    function subtracao($num1, $num2) {
        return $num1 - $num2;
    }

    function divisao($num1, $num2) {
        return $num1 / $num2;
    }

    function multiplicacao($num1, $num2) {
        return $num1 * $num2;
    }

}

$calculo = new calculo();
echo $calculo->soma(4, 2);
?>
