<?php
$number1 = $_GET ["number1"];
$number2 = $_GET ["number2"];

echo "number1 = ". $number1 . "<br>";
echo "number2 = ". $number2 . "<br>";
if  ($number1 > $number2 ){
    echo "max: " .$number1;
}else{
    echo "max: " .$number2;
}



?>