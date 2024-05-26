<?php
//indexed array
//1.array()
//2 []

//array create
$data= [10,20,30,40];

//array read
echo "<pre>";


//array update
$data[]="120";
// print_r($data);

//array delete
unset($data[3]);
// print_r($data);

//associative array
//create
$user=[
    'name'=>'Mg Mg',
    'job'=>'web developer'
];
print_r($user);

//update
$user['name']='Su Su';
$user['job']='Software Engineer';
print_r($user);

//multidimensional array
$data=[
    'name'=>'kyaw kyaw',
    'job'=>'Developer',
    'planguage'=>['php','javascript','pyton','no'=>[10,20,30]],
];
print_r($data);
