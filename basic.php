<?php declare(strict_types=1);
/*
    Full form-> Hypertext Preprocessor

    1. PHP can generate dynamic page content
    2. PHP can create, open, read, write, delete, and close files on the server
    3. PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
    4. PHP is compatible with almost all servers used today (Apache, IIS, etc.)
*/
echo "Hello, World!" . "</br>"; // Printing

/*
    Variables
    1. Always begins with the '$'
    2. Case-sensitive
    3. Automatically detects the datatype after giving the value    
*/
$name = "Sourav Jana";
$roll_no = 12000120;
echo "Name: " . $name . "</br>";
echo "Roll No: " . $roll_no;
echo "</br>";

// Global Variables
$dept = "CSE2";
function student()
{
    global $dept;
    echo "Department: " . $dept;
    echo "</br>";
}
student();

// Static Variables
/*
    1. Use static keyword before variable
    2. Static doesn't loose its value after executation of function
*/
function score()
{
    static $val = 0;
    $val++;
    echo $val . "</br>";
}
score(); // 1
score(); // 2
score(); // 3

/*
    Print
    1. Print use for output
    2. print returns the value as 1 but echo doesn't
    3. multiple arguments cannot be passed in print but echo can 
*/
print "Printing Learning PHP" . "</br>";

echo var_dump($name); // Output the type of datatype -> string(11)
echo "</br>";

// Control Statements
// if-else
$x = 1;
if ($x == 1) {
    echo "One";
} elseif ($x < 10) {
    echo "Less than 10";
} else {
    echo "Greater than 10";
}

echo "</br>";
// switch case
switch ($x) {
    case 1:
        echo "Case 1";
        break;
    case 2:
        echo "Case 2";
        break;
    default:
        echo "Default";
}
echo "</br>";
// Loops -> for
for ($i = 0; $i < 5; $i++) {
    echo "$i ";
}
echo "</br>";
// Loops -> while
$i = 0;
while ($i < 5) {
    echo "$i ";
    $i++;
}
echo "</br>";
// Loops -> do while
$j = 0;
do {
    echo ($j . " ");
    $j++;
} while ($j < 5);
echo "</br>";
// Loops -> foreach
$colors = array("Red", "Blue", "Green", "Orange");
foreach ($colors as $color) // 1st array name then variable
{
    echo $color . " ";
}
echo "</br>";

// String
$sen = "multiple arguments cannot be passed in print but echo can";
echo strlen($sen); // Length of sen
echo "</br>";
echo str_word_count($sen); // number of words in a string
echo "</br>";
echo strrev($sen); // reverse a string
echo "</br>";
echo strpos($sen, "cannot");
echo "</br>";
echo str_replace("cannot", "can", $sen);
echo "</br>";

// Math
echo (pi());
echo "</br>";
echo (min(1, 2, -2, 100, 2, 1));
echo "</br>";
echo (max(1, 2, -2, 100, 2, 1));
echo "</br>";
echo (abs(5 - 7));
echo "</br>";
echo (sqrt(43));
echo "</br>";
echo (round(0.60)); // round() function rounds a floating-point number to its nearest integer.
echo "</br>";
echo (rand() % 10); // rand() function generates a random number.
echo "</br>";
echo (rand(10, 100)); // generate random element between 10 and 100 
echo "</br>";

// Constants
/*
    1. Starts with a letter or underscore **without '$' sign
    2. Automatically global 
    3. syntex => define(name, value, case_insensitive)
*/
define("Topic", "Constant");
echo Topic;
echo "</br>";
define("cars", ["BMW", "Maruti", "Audi"]);
echo cars[0];
echo "</br>";

// Funtions
/*
    1. Call by value and call by reference accepted
    2. Return type declaration
*/
function addNumbers(float $a, float $b): int
{
    return (int) ($a + $b);
}
echo addNumbers(1.2, 2.2); // Give 3

// Arrays
echo count($colors); // Length of the array
echo "</br>";
// Associative array
$data = array("Sourav Jana" => 23, "Akash Mahato" => 22, "Jit Mondal" => 21);
$data['Sayek Ariz'] = 24;
foreach ($data as $name => $age) {
    echo $name . ": " . $age;
    echo "</br>";
}

// Multidimensional array
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}

// Sorting array
/*
    1. sort() - sort arrays in ascending order
    2. rsort() - sort arrays in descending order
    3. asort() - sort associative arrays in ascending order, according to the value
    4. ksort() - sort associative arrays in ascending order, according to the key
    5. arsort() - sort associative arrays in descending order, according to the value
    6. krsort() - sort associative arrays in descending order, according to the key
*/
sort($colors);
foreach ($colors as $color) {
    echo $color . " ";
}
echo "</br>";
rsort($colors);
foreach ($colors as $color) {
    echo $color . " ";
}
echo "</br>";
asort($data);
foreach ($data as $name => $age) {
    echo $name . ": " . $age;
    echo "</br>";
}
echo "</br>";
ksort($data);
foreach ($data as $name => $age) {
    echo $name . ": " . $age;
    echo "</br>";
}
echo "</br>";
arsort($data);
foreach ($data as $name => $age) {
    echo $name . ": " . $age;
    echo "</br>";
}
echo "</br>";
krsort($data);
foreach ($data as $name => $age) {
    echo $name . ": " . $age;
    echo "</br>";
}
echo "</br>";
?>