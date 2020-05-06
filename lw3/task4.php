<?php

header('Content-Type: text/plain');
$dir="./data";
if (!is_dir($dir)) mkdir($dir);
$email = $_GET['email'];
if ($email != "")
{
  $dataf = $dir."/".$email.".txt";
  $fp = fopen($dataf, 'w+');

  $data = $_GET['first_name']."|".$_GET['last_name']."|".$_GET['age'];
  $test = fwrite($fp, $data);
  if ($test) echo 'Data saved successfully.';
  else echo 'Error when saving data.';
  fclose($fp);
}