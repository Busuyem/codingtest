<?php

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

?>
