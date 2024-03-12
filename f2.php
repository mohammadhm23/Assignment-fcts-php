<?php

//A function the converts from a decimal to binary number.

function decimalToBinary($decimal) {
    $binary = '';

    if ($decimal === 0) {
        return '0';
    }

    while ($decimal > 0) {

        $remainder = $decimal % 2;

        $binary = $remainder . $binary;

        $decimal = (int)($decimal / 2);
    }

    return $binary;
}


$decimalNumber = 25;
echo "Binary representation of $decimalNumber is: " . decimalToBinary($decimalNumber);

?>