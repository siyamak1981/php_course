<?php
// $txt = "Hello world!";
// $x = 5;
// $y = 10.5;


// =============================================

// $txt = "php_course.com";
// echo "I love " . $txt . "!";

// =============================================

// $x = 5;
// $y = 4;
// echo $x + $y;
// =============================================


// $x = 5; // global scope

// function myTest() {
//     // using x inside this function will generate an error
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";
// ================================================= 


// function foo() {
//     $x = 5; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// // using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";
// ====================================================


// $x = 5;
// $y = 10;

// function myTest() {
//     global $x, $y;
//     $y = $x + $y;
// }

// myTest();
// echo $y;
// ======================================================
// Note:
// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
// This array is also accessible from within functions and can be used to update global variables directly.

// $x = 5;
// $y = 10;

// function myTest() {
//     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y; // outputs 15
// ===========================================================


// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x++;
// }

// myTest();
// myTest();
// myTest();
?>

