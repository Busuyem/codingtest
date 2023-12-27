<?php

function isPalindrome($str) {
    // Remove spaces and convert to lowercase to ignore spaces and capitalization
//    $removeSpace = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str));

//    $reverseStr = strrev($removeSpace);
//     //$length = strlen($cleanedStr);

//    return $removeSpace ===$reverseStr;

$cleanedStr = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str));
$length = strlen($cleanedStr);

    for ($i = 0; $i < $length / 2; $i++) {
        if ($cleanedStr[$i] !== $cleanedStr[$length - $i - 1]) {
            return false;
        }
    }

    return true;
}

// Example usage:
$inputString1 = "racecar";
$inputString2 = "Hello, World!";
$inputString3 = "A man, a plan, a canal, Panama";

if (isPalindrome($inputString1)) {
    echo "$inputString1 is a palindrome.";
} else {
    echo "$inputString1 is not a palindrome.";
}

if (isPalindrome($inputString2)) {
    echo "$inputString2 is a palindrome.";
} else {
    echo "$inputString2 is not a palindrome.";
}

if (isPalindrome($inputString3)) {
    echo "$inputString3 is a palindrome.";
} else {
    echo "$inputString3 is not a palindrome.";
}
