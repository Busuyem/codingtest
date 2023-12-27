<?php

// function fibonacci_recursive($n) {
//     if ($n <= 0) {
//         return 0;
//     } elseif ($n == 1) {
//         return 1;
//     } else {
//         return fibonacci_recursive($n - 1) + fibonacci_recursive($n - 2);
//     }
// }

// // Example usage:
// $n = 10; // Replace with the desired value of n
// $result = fibonacci_recursive($n);
// echo "The $n-th Fibonacci number is $result";


// function fib($n)
// {
//     if($n<=0){
//         return 0;
//     }else if($n == 1){
//         return 1;
//     }else{
//         return fib($n-1) + fib($n-2);
//     }
// }


//echo fib(10);

function fib($n){
    $fibo = [0, 1];

    for($i=2; $i<= $n; $i++){
        $fibo[$i] = $fibo[$i-1] + $fibo[$i-2];
    }

    return $fibo[$n];
}

echo fib(10);
