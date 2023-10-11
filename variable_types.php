<?php

$intVar = 12345;
$anotherInt = -12345;

$decimalInt = 123;      // decimal (base 10)
$octalInt = 0123;       // octal (base 8)
$hexadecimalInt = 0x1A;  // hexadecimal (base 16)

$maxInteger = (2**31) - 1;   // 2,147,483,647
$minInteger = -(2**31);      // -2,147,483,648

$many = 2.2888800;
$many2 = 2.2111200;
$few = $many + $many2;

echo "$many + $many2 = $few<br>";

$booleanTrue = true;
$booleanFalse = false;

if (TRUE) {
    echo "This will always print<br>";
} else {
    echo "This will never print<br>";
}

$nullVar = null;

$stringVar = "Hello, PHP!";

$arrayVar = array(1, 2, 3, 4, 5);

class SampleClass {
    public $property1 = "I am a class property!";
}

$objectVar = new SampleClass();

$resourceVar = fopen("example.txt", "r");

echo "Boolean True: " . ($booleanTrue ? "true" : "false") . "<br>";
echo "Boolean False: " . ($booleanFalse ? "true" : "false") . "<br>";

echo "NULL Value: " . var_export($nullVar, true) . "<br>";

echo "String Value: $stringVar<br>";

echo "Array Values: ";
print_r($arrayVar);
echo "<br>";

echo "Object Property: " . $objectVar->property1 . "<br>";

echo "Resource Type: " . get_resource_type($resourceVar) . "<br>";

fclose($resourceVar);

?>
