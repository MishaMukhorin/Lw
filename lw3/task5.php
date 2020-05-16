<?php

header('Content-Type: text/plain');
$dir="./data";
if (!is_dir($dir)) 
 { 
  mkdir($dir);
 }
$email = $_GET['email'];
$i = 0;
if (!is_file($dir."/".$email.".txt")) 
 {
 echo "there is no person with this email";
 }
else
 {
  $fp = fopen($dir."/".$email.".txt", "r"); 
  if ($fp) 
   {
    while(!feof($fp)) 
     {
      $Ch = fgetc($fp);
      $info = $info.$Ch;
     } 
    fclose($fp);
    echo $info;
   }
  else  
   {
    echo "Error open data.";
   }
 }