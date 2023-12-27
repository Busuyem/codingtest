<?php
//Question
/*
John Watson knows of an operation called a right circular rotation on an array of integers. 
One rotation operation moves the last array element to the first position and shifts all remaining elements right one. 
To test Sherlock's abilities, Watson provides Sherlock with an array of integers. 
Sherlock is to perform the rotation operation a number of times then determine the value of the element at a given position.

For each array, perform a number of right circular rotations and return the values of the elements at the given indices.
*/

function circularRotation($arr, $rotations, $indices) {
    $n = count($arr);

    // Perform right circular rotations
    for ($i = 0; $i < $rotations; $i++) {
        $temp = $arr[$n - 1];
        for ($j = $n - 1; $j > 0; $j--) {
            $arr[$j] = $arr[$j - 1];
        }
        $arr[0] = $temp;
    }

    // Get values at specified indices
    $result = [];
    foreach ($indices as $index) {
        $result[] = $arr[$index];
    }

    return $result;
}

// Example usage
$array = [1, 2, 3, 4, 5];
$rotations = 2;
$indices = [0, 2];

$result = circularRotation($array, $rotations, $indices);
print_r($result);
