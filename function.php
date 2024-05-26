<?php
function greet(){
    echo "Hello World!";
}
greet();
echo "<br>";

function sum($x=22,$y=41){
    $result=$x+$y;
    echo $result;
}
sum();