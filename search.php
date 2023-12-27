<?php

function searchValue($arr, $n)
{
    if($n>=1 && $n <= count($arr)){
        return $arr[$n-1];
    }


}

$arr = [3, 4, 8, 9, 10];
$n =10;

echo searchValue($arr, $n);