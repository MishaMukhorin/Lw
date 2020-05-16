<?php

header('Content-Type: text/plain');
$identParam = $_GET['identifier'];
function isLetter($L){
  return in_array($L, array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
                         'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 
                         'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 
                         'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 
                         'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z')); 
}
function isDigit($D){
  return in_array($D, array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0')); 
}
$f = 1;
if ($identParam == "") 
 {  
   $f = 0;
 }
for ($i = 0; $i < strlen($identParam); $i++) {     
  $Ch = $identParam[$i]; 
  if (($i == 0) && !(isLetter($Ch))) 
   { 
    $f = 0;     
   }         
  if (($i > 0) && (!isDigit($Ch) && !isLetter($Ch)) && $f == 1)
   { 
    $f = 0; 
   }                                 
};
if ($f == 1) {
   echo "Identifier"; 
}
  else {
   echo "Not identifier";
}
