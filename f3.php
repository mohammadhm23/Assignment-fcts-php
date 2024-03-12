<?php
// A function that flips the order of digits of a number.
function reverseDigits($number) {
    $reversedNumber = 0;
    
    
    while ($number > 0) {
        
        $reversedNumber = $reversedNumber * 10 + $number % 10;
        
        
        $number = (int) ($number / 10);
    }
    
    
    return $reversedNumber;
}


echo "Reversed number of 1234: " . reverseDigits(1234) . "\n";
echo "Reversed number of 23: " . reverseDigits(23) . "\n";
?>
