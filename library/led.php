<?php
$onoroff = $_GET["state"]; 
$textfile = "LEDstate.txt"; 
$fileLocation = "$textfile";
$fh = fopen($fileLocation, 'w   ') ; 
$stringToWrite = "$onoroff"; 
fwrite($fh, $stringToWrite); 
fclose($fh); 
echo "Sucess your order placed";
?>