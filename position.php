<?php

function findNthNumber($array, $n) {
    if ($n >= 1 && $n <= count($array)) {
        // Subtract 1 from n to adjust for 0-based indexing
        return $array[$n - 1];
    } else {
        return null; // Return null for out-of-bounds n values
    }
}

// Example usage:
$array = [1, 2, 3, 4, 5];

$n = 3;
$result = findNthNumber($array, $n);

if ($result !== null) {
    echo "The $n" . ($n == 1 ? "st" : ($n == 2 ? "nd" : "th")) . " number in the array is: $result";
} else {
    echo "Invalid value of n. The array does not have an nth number.";
}
