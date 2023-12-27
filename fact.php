<?php

// function getFactorial($n)
// {
//     if($n<=1){
//         return 1;
//     }else{
//         return $n* getFactorial($n-1);
//     }
// }


// echo getFactorial(9);

function factorial($n)
{
    $result = 1;

    for($i=1; $i<=$n; $i++){
        $result *=$i ;
    }
    return $result;
}


echo factorial(9);