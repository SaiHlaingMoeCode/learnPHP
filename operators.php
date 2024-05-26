<?php 
//assigment operator
$x=100;
$y=20;
echo $x-=$y;
echo "<br>";

$a=50;
$b=25;
echo $a/=$b;
echo "<br>";

$c=100;
$d=80;
echo $c%=$d;
echo "<br>";

//decrement operator
$i=19;
echo --$i;
echo "<br>";

$i=19;
echo $i--;
echo "<br>";

// $nums=[22,12,-9,34,-8];
// $result=0;

// foreach($nums as $item){
//     if($item<0){
//         $i++;
//         continue;
//     }
//     $result+=$item;
// }
// echo $result;

$user=["Alice"=>20,"Bob"=>22];
// $result=[];
// foreach($user as $name=>$age){
//     $result[]=$name;
// }
// print_r($result);
print_r(array_values($user));
echo "<br>";
