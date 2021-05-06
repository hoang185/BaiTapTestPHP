<?php
function tim_max($arr){
    sort($arr);
    $total=count($arr);
    $max1=$arr[$total-1];
    $max2=$arr[$total-2];
    $sum=$max1+$max2;
    return $sum;
}
$a=array(0,100,-4,8,143,5,99,100);
echo tim_max($a);
?>