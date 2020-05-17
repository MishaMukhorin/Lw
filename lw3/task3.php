<?php

header('Content-Type: text/plain');
$textParam = $_GET['text'];
function isLetterL($L){
  return in_array($L, array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
                         'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 
                         'w', 'x', 'y', 'z')); 
}
function isLetterB($B){
  return in_array($B, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 
                         'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 
                         'W', 'X', 'Y', 'Z'));
}
function isDigit($D){
  return in_array($D, array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0')); 
}
$chars = array();
$CD = 0;
$Len = strlen($textParam);
$CLB = 0;
$CLL = 0;
$CR = 0;
$Cr1 = 0;
$fL = 1;
$fD = 1;
$Safety = 0;
  for ($i = 0; $i < $Len; $i++) 
   {     
    $Ch = $S[$i]; 
    if (isLetterL($Ch)) 
     {
      $CLL++;
     }
    if (isLetterB($Ch)) 
     {
      $CLB++;
     }
    if (isDigit($Ch)) 
     {
      $CD++;
     }
    if (!isDigit($Ch)) 
     {
      $fD = 0;
     }
    if (!isLetterL($Ch) && !isLetterB($Ch)) 
     {
      $fL = 0;
     }
    if (!in_array($Ch, $chars)) 
      {
      $chars[] = $Ch;
      for ($j = 0; $j < strlen($S); $j++) 
        {
         $Ch1 = $S[$j];
         IF ($Ch1 == $Ch) $Cr1++;           
        } 
      } 
    IF ($Cr1 > 1) $CR += $Cr1;
    $Cr1 = 0;
};          
$Safety = $Safety + 4 * $Len + 4 * $CD + 2 * ($Len - $CLB) + 2 * ($Len - $CLL) - $CR;
if ($fD) 
 {
  $Safety = $Safety - $CD;
 }
if ($fL) 
 {
  $Safety = $Safety - $CLL - $CLB;                  
 }
echo $Safety;