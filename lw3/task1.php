<?php

header('Content-Type: text/plain');
$S = $_GET['text'];
$A = "0";
for ($i = 1; $i <= strlen($S); $i++) {    
    IF ($A <> "0") 
      $Ch1 = $Ch;
    $Ch = $S[$i];
    IF ($A == '0')
      $A = '1';
    IF ($A == '1') 
    while ($Ch == ' ') {
      $Ch = $S[$i];
      $i++;
    }
    $A = '2';
    IF (($Ch1 == ' ') && ($Ch <> ' ')) {
      echo ' ';
      echo $Ch;
}
    IF (($Ch1 <> ' ') && ($Ch <> ' '))
      echo($Ch);
};