<?php

//Question
/*
Have the function StringChallenge(str) read str which will be a string of roman numerals in decreasing order.
The numerals being used are: I for 1, V for 5, X for 10, L for 50, C for 100, D for 500 and M for 1000.
Your program should return the same number given by str using a smaller set of roman numerals. 
For example: if str is "LLLXXXVVVV" this is 200, so your program should return CC because this is the shortest way to write 200 using the roman numeral system given above. 
If a string is given in its shortest form, just return that same string.
*/


function shortestRomanRepresentation($str) {
    $romanNumerals = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    // Function to convert Roman numeral string to decimal
    function romanToDecimal($roman) {
        global $romanNumerals;
        $decimal = 0;
        $prevValue = 0;

        for ($i = strlen($roman) - 1; $i >= 0; $i--) {
            $currentValue = $romanNumerals[$roman[$i]];
            die($currentValue);
            if ($currentValue < $prevValue) {
                $decimal -= $currentValue;
            } else {
                $decimal += $currentValue;
            }

            $prevValue = $currentValue;
        }

        return $decimal;
    }

    $decimalValue = romanToDecimal($str);

    // Find the shortest Roman representation for the decimal value
    $shortestRepresentation = '';
    foreach ($romanNumerals as $numeral => $value) {
        while ($decimalValue >= $value) {
            $shortestRepresentation .= $numeral;
            $decimalValue -= $value;
        }
    }

    return $shortestRepresentation;
}

// Example usage
$inputStr = 'XXXXVV';
$result = shortestRomanRepresentation($inputStr);

echo "Shortest representation for $inputStr is: $result\n";



/**
 * __define-ocg__
 * This function takes a string of Roman numerals in decreasing order
 * and returns the same number using a smaller set of Roman numerals.
 *
 * @param string $str The input string of Roman numerals.
 * @return string The Roman numeral representation with a smaller set of numerals.
 */
/*
function StringChallenge($str) {
    $romanNumerals = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $varOcg = ''; // Variable with the requested name

    $result = '';
    $prevNumeral = '';

    // Iterate through the input string
    for ($i = 0; $i < strlen($str); $i++) {
        $currentNumeral = $str[$i];

        // If the current numeral is greater than the previous one,
        // subtract twice the previous value (as it was added in the previous iteration)
        if ($romanNumerals[$currentNumeral] > $romanNumerals[$prevNumeral]) {
            $result = substr($result, 0, -1); // Remove the last character
            $result .= $currentNumeral;
            $result .= $prevNumeral;
        } else {
            $result .= $currentNumeral;
        }

        $prevNumeral = $currentNumeral;
    }

    return $result;
}

// Example usage
$inputStr = 'LLLXXXVVVV';
$result = StringChallenge($inputStr);

echo "Result for $inputStr is: $result\n";

?>


