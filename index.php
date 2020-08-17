<?php

echo 'What is your favourite colour?';
$fav1 = stream_get_line(STDIN, 100, PHP_EOL);

//Add code here to create an array called $favourites
//Add code to read the response and store your favourite colour in the

  echo 'What is your favourite food? ';
  $fav2 = stream_get_line(STDIN, 100, PHP_EOL);


// Add code to read the response and store your favourite food in the
//second position of the favourites array

echo 'What is your favourite place? ';
$fav3 = stream_get_line(STDIN, 100, PHP_EOL);    

    
// Add code to read the response and store your favourite place in the
//third position of the favourites array
//Add code to echo each element of the array individually
    
 $favourites =[$fav1, $fav2, $fav3];

print_r ($favourites); 
 
for($fav = 0; $fav < count($favourites); $fav++) {
     echo $favourites[$fav]."\n";
 }

foreach ($favourites as $a) {
     echo $a;
 }