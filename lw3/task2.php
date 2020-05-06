<?php

header('Content-Type: text/plain');
$S = $_GET['text'];
function Letter($L){
  return in_array($L, array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
                         'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 
                         'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 
                         'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 
                         'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z')); 
}
function Digit($D){
  return in_array($D, array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0')); 
}
$f = 1;
  for ($i = 0; $i < strlen($S); $i++) {     
    $Ch = $S[$i]; 
    IF (($i == 0) && !(Letter($Ch))) 
      $f = 0;              
    IF (($i > 0) && (!Digit($Ch) && !Letter($Ch)) && $f == 1)
      $f = 0;                                  
};
if ($f == 1) {
   echo "Identifier"; 
}
  else {
   echo "Not identifier";
}
