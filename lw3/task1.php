<?php

header('Content-Type: text/plain');
$textParam = $_GET['text'];
$flag = "0";
if ($textParam == "") 
{
    echo "no text parameter";
}
else
{
    for ($i = 0; $i <= strlen($textParam); $i++) 
    {    
        if ($flag <> "0") 
        {
            $char1 = $char;
        }
        else
        {
            $char1 = 'a';
        }
        $char = $textParam[$i];
        if ($flag == '0')
        {
            $flag = '1';
        }
        if ($flag == '1')
        { 
            while ($textParam[$i] == ' ') 
            {
                ++$i;
            }
            $char = $textParam[$i];  
        }
        $flag = '2';
        if (($char1 == ' ') && ($char <> ' ')) 
        {
            echo " " . $char;
        } 
        if (($char1 <> ' ') && ($char <> ' '))
        {
            echo($char);
        }
    }
}