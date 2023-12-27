<?php

function findPosition($haystack, $needle) {
    $position = strpos($haystack, $needle);

    //print_r($position);

    if ($position !== false) {
        return $position; // Return the position if found
    } else {
        return -1; // Return -1 if not found
    }
}

// Example usage:
$inputString = "Hello, World!";
$letterToFind = "j";

$position = findPosition($inputString, $letterToFind);

if ($position !== -1) {
    echo "The letter '$letterToFind' was found at position $position in the string.";
} else {
    echo "The letter '$letterToFind' was not found in the string.";
}
