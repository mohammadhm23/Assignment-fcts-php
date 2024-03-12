<?php
// Function to merge two sorted arrays

function merge($left, $right) {
    $result = [];
    $leftIndex = $rightIndex = 0;

    
    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }

    
    while ($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }
    while ($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $result;
}

// Merge sort function
function mergeSort($arr) {
    $length = count($arr);

    
    if ($length <= 1) {
        return $arr;
    }

    
    $mid = (int) ($length / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    
    $left = mergeSort($left);
    $right = mergeSort($right);

    
    return merge($left, $right);
}


$inputArray = [80, 90, 100, 10, 50, 3];
$sortedArray = mergeSort($inputArray);

echo "Sorted array: ";
print_r($sortedArray);
?>
