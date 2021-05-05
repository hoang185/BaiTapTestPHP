<?php
//bai1
function arrange($arr){
    if(count($arr)%3!=0){
        echo 'nhap lai arr';
    }else{
        $n=count($arr)/3;
        $result=array();
        for($i=0;$i<3*$n;$i+=3){
            $result[$i]=$arr[$i/3];
            $result[$i+1]=$arr[$n+$i/3];
            $result[$i+2]=$arr[$n*2+$i/3];
        }
        foreach ($result as $value){
            echo $value.' ';
        }
    }
}
$a=array(3,2,4,7,9,1,5,8,9);
arrange($a);


//bai2
// function tim_max($array){
//     $total=count($array);
//     $max1=0;
//     for($i=0;$i<$total;$i++){
//         if($array[$i]>$max1){
//             $max1=$array[$i];
//         }
//     }$max2=0;
//     for($i=0;$i<$total;$i++){
//         if($array[$i]>$max2&&$array[$i]<$max1){
//             $max2=$array[$i];}
//     }
//     $sum=$max1+$max2;
//     return $sum;
// }
// $a=array(0,100,-4,8,143,5,99,100);
// echo tim_max($a);

//bai3
// function min_range($arr){
//     sort($arr);
//     $total=count($arr);
//     $minrange=abs($arr[0]-$arr[1]);
//     for($i=0;$i<($total-3);$i++){
//         if(abs($arr[$i]-$arr[$i+1]) <= $minrange){
//            $minrange=abs($arr[$i]-$arr[$i+1]);
//         }
//     }
//     for($i=0;$i<$total-1;$i++){
//         if(abs($arr[$i]-$arr[$i+1])==$minrange){
//             echo $arr[$i].'-'.$arr[$i+1].'<br/>';
//         }
//     }
// }
// $a=array(1,4,10,19,220,241,232,253,256);
// min_range($a);
?>
