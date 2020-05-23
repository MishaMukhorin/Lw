<?php

header('Content-Type: text/plain');
$textParam = $_GET['text'];
function isLetterSmall($letterSmall)
{
    return in_array($letterSmall, array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
                                        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 
                                        'w', 'x', 'y', 'z')); 
}
function isLetterBig($letterBig)
{
    return in_array($letterBig, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 
                                      'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 
                                      'W', 'X', 'Y', 'Z'));
}
function isDigit($digit)
{
    return in_array($digit, array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0')); 
}
$charArray = array();
$digitCounter = 0;
$length = strlen($textParam);
$letterBigCounter = 0;
$letterSmallCounter = 0;
$repeatCounter = 0;
$sameLetterRepeatCounter = 0;
$letterFlag = 1;
$digitFlag = 1;
$Safety = 0;
for ($i = 0; $i < $length; $i++) 
{     
    $char = $textParam[$i]; 
    if (isLetterSmall($char)) 
    {
        $letterSmallCounter++;
    }
    if (isLetterBig($char)) 
    {
        $letterBigCounter++;
    }
    if (isDigit($char)) 
    {
        $digitCounter++;
    }
    if (!isDigit($char)) 
    {
        $digitFlag = 0;
    }
    if (!isLetterSmall($char) && !isLetterBig($char)) 
    {
        $letterFlag = 0;
    }
    if (!in_array($char, $charArray)) 
    {
        $charArray[] = $char;
        for ($j = 0; $j < $length; $j++) 
        {
            $charRepeat = $textParam[$j];
            if ($charRepeat == $char) $sameLetterRepeatCounter++;           
        } 
    } 
    if ($sameLetterRepeatCounter > 1) 
    {
        $repeatCounter += $sameLetterRepeatCounter;
    }
    $sameLetterRepeatCounter = 0;
};          
$Safety = $Safety + 4 * $length + 4 * $digitCounter + 2 * ($length - $letterBigCounter) + 2 * ($length - $letterSmallCounter) - $repeatCounter;
if ($digitFlag) 
{
    $Safety = $Safety - $digitCounter;
}
if ($letterFlag) 
{
    $Safety = $Safety - $letterSmallCounter - $letterBigCounter;                  
}
if ($textParam == "")
{
    echo "No text parameter";
}
else
{
    echo $Safety;
}