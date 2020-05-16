<?php

header('Content-Type: text/plain');
$textParam = $_GET['text'];
$A = "0";
if ($textParam == "") 
{
 echo "no text parameter";
}
else
{
 for ($i = 0; $i <= strlen($textParam); $i++) 
  {    
    if ($A <> "0") 
     {
      $Ch1 = $Ch;
     }
    $Ch = $textParam[$i];
    if ($A == '0')
     {
      $A = '1';
     }
    if ($A == '1')
   { 
    while ($Ch == ' ') 
    {
      $Ch = $textParam[$i];
      ++$i;
      if ($Ch <> ' ') 
       {
        echo $Ch;
       } 
    } 
   }
    $A = '2';
    if (($Ch1 == ' ') && ($Ch <> ' ')) {
      echo ' ';
      echo $Ch;
  } 
    if (($Ch1 <> ' ') && ($Ch <> ' '))
     {
      echo($Ch);
     }
  }
}