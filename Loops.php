<?php

/* print out pairs of numbers
 * 1st number should be between 0-12
 * second number should display 1st no. squared
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];


foreach ($numbers as $a) {
    echo ($a.PHP_EOL), " ", ($a * $a.PHP_EOL);
    
}
