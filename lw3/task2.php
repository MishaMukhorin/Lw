<?php

header('Content-Type: text/plain');
$identParam = $_GET['identifier'];
function isLetter($letter)
{
    return in_array($letter, array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
                              'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 
                              'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 
                              'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 
                              'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z')); 
}
function isDigit($digit)
{
    return in_array($digit, array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0')); 
}
$flag = 1;
if ($identParam == "") 
{  
    $flag = 2;
}
for ($i = 0; $i < strlen($identParam); $i++) 
{     
    $char = $identParam[$i]; 
    if (($i == 0) && !(isLetter($char))) 
    { 
        $flag = 0;     
    }         
    if (($i > 0) && (!isDigit($char) && !isLetter($char)) && $flag == 1)
    { 
        $flag = 0; 
    }                                 
}
if ($flag == 1) 
{
    echo "Identifier"; 
}
elseif ($flag == 0) 
{
    echo "Not identifier";
}
elseif ($flag == 2)
{
    echo "no indentifier";
}