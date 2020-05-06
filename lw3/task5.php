<?php

header('Content-Type: text/plain');
$dir="./data";
if (!is_dir($dir)) mkdir($dir);
$email = $_GET['email'];
$i = 0;
$fp = fopen($dir."/".$email.".txt", "r"); 
if ($fp) {
  while(!feof($fp)) {
    $char = fgetc($fp);
    if ($char == '|') $i = $i + 1;
    if ($i == 0 && $char!="|") $first_name = $first_name.$char;
    if ($i == 1 && $char!="|") $last_name = $last_name.$char;
    if ($i == 2 && $char!="|") $age = $age.$char;
   } 
   fclose($fp);
   if ($first_name=="") $first_name = " ";  
   if ($last_name=="") $last_name = " ";  
   if ($age=="") $age = " ";  
  echo "First Name: ".$first_name."\nLast Name: ".$last_name."\nEmail: ".$email."\nAge: ".$age;
  }
else echo "Error open data.";