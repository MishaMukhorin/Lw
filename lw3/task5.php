<?php

header('Content-Type: text/plain');
$dir="./data";
if (!is_dir($dir)) 
{ 
    mkdir($dir);
}
$email = $_GET['email'];
$i = 0;
if ($email == "")
{
    echo "No email";
}
elseif (!is_file($dir . "/" . $email . ".txt")) 
{
    echo "There is no person with this email";
}
else
{
    $file = fopen($dir . "/" . $email . ".txt", "r"); 
    if ($file) 
    {
        while (!feof($file)) 
        {  
            $char = fgetc($file);
            $info = $info . $char;
        } 
        fclose($file);
        echo $info;
    } 
    else  
    {
        echo "Error open data.";
    }
}