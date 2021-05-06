<?php
function min_range($arr){
    sort($arr);
    $total=count($arr);
    $minrange=abs($arr[0]-$arr[1]);
    for($i=0;$i<($total-3);$i++){
        if(abs($arr[$i]-$arr[$i+1]) <= $minrange){
           $minrange=abs($arr[$i]-$arr[$i+1]);
        }
    }
    for($i=0;$i<$total-1;$i++){
        if(abs($arr[$i]-$arr[$i+1])==$minrange){
            echo $arr[$i].'-'.$arr[$i+1].'<br/>';
        }
    }
}
$a=array(1,4,10,19,220,241,232,253,256);
min_range($a);
?>