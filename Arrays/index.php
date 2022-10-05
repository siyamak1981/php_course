<?php
// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// =========================================

// $cars = array("Volvo", "BMW", "Toyota", 44);
// echo count($cars);

// ======================================


$lamborghinis = array("Urus", "Huracan", "Aventador");
// find size of the array
$size = count($lamborghinis);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    echo $lamborghinis[$i]."<br>", "\n";
}

// ======================================

// $lamborghinis = array("Urus", "Huracan", "Aventador");
// $lamborghinis[1] = "parsa";
// // // using the foreach loop
// foreach($lamborghinis as $lambo)
// {
    //     echo $lambo. "\n";
    // }
    

// ===================================================

$lamborghinis = array("Urus", "Huracan", "Aventador");

// find size of the array
$size = count($lamborghinis);

// getting the array of keys/index strings
$keys = array_keys($lamborghinis);
var_dump($keys);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    echo $lamborghinis[$keys[$i]] ." is a/an ". $keys[$i] ." car \n";
}
// =============================================


// $lamborghinis = array("Ali", "hoseyn", "parsa");

// // using the foreach loop
// foreach($lamborghinis as $key => $value)
// {
//     echo $value ." is a/an ". $key ." car \n";
// }

// =====================================================



// $suzuki[0] = "Swift";
// $suzuki[1] = "Baleno";
// $suzuki[2] = "Ertiga";
// $suzuki[3] = "Brezza";
// $suzuki[4] = "Vitara";

// echo "Accessing the 2nd array...";
// echo $suzuki[0], "\n";
// echo $suzuki[3], "\n";
// echo $suzuki[2], "\n";
// ============================================



/* 
    multidimensional array initialization
*/
// $cars = array("hello parsa", array("name"=>"parsa", "type"=>"SUV", "brand"=>"Porsche"), 255);


// echo $cars[1]['type'];
// echo "<br />";
// echo $cars[1]['name'];
// echo "<br />";
// echo $cars[2];

// =======================================================


?>