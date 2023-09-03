<?php
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

// String
$sen = "multiple arguments cannot be passed in print but echo can";
echo strlen($sen); // Length of sen
echo "</br>";
echo str_word_count($sen); // number of words in a string
echo "</br>";
echo strrev($sen); // reverse a string
echo "</br>";
?>