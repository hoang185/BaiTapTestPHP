<?php
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
?>