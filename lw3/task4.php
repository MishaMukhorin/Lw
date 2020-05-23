<?php

header('Content-Type: text/plain');
$dir="./data";
if (!is_dir($dir)) 
{
    mkdir($dir);
}
$email = $_GET['email'];
if ($email != "")
{
    $fileName = $dir . "/" . $email . ".txt";
    $file = fopen($fileName, 'w+');
    $data = "First Name: " . $_GET['first_name'] . "\nLast Name: " . $_GET['last_name'] . "\nEmail: " . $email . "\nAge: " . $_GET['age'];
    $test = fwrite($file, $data);
    if ($test) 
    {
        echo 'Data saved successfully.';
    }
    else
    {
        echo 'Error when saving data.';
    }
    fclose($file);
}
else
{
    echo "No Email";
}