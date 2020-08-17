<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 name, age, hair colour
 */

$family = [
    'Dad' => ['Age' => '56', 'Hair_Colour' => 'Black'], //key => value
    'Mum' => ['Age' => '55', 'Hair_Colour' => 'Black'],
    'Sister' => ['Age' => '22', 'Hair_Colour' => 'Brown']
];

foreach ($family as $key => $value) {
echo $key, 'is aged', $value['Age'],'and has hair coloured in', $value['Hair_Colour'].PHP_EOL;
}