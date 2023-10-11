<?php

define("PI", 3.14159);
define("GREETING", "Hello, PHP!");

echo "The value of PI is: " . PI . "<br>";
echo "Greeting: " . GREETING . "<br>";

define("greeting", "Hi there!");

echo greeting . "<br>";

define("BASE_NUMBER", 10);
$multiplier = 5;
$result = BASE_NUMBER * $multiplier;

echo "Result of the expression BASE_NUMBER * $multiplier is: $result<br>";

?>
