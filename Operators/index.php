<!-- 
Operator	Name	Example	Result	Show it
+	Addition	$x + $y	Sum of $x and $y	
-	Subtraction	$x - $y	Difference of $x and $y	
*	Multiplication	$x * $y	Product of $x and $y	
/	Division	$x / $y	Quotient of $x and $y	
%	Modulus	$x % $y	Remainder of $x divided by $y	
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power



Assignment	Same as...	Description	Show it
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus




Operator	Name	Example	Result	Show it
==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.



Name	Operator	What does it do?	Example
And	and or &&	It returns true if both the operands(or expressions) returns true.	$a && $b
Or	or or ||	It returns true if any one out of the two operands(or expressions) returns true, or both return true.	$a || $b
Xor	xor	It returns true if any one out of the two operands(or expressions) returns true, but not when both return true.	$a xor $b
Not	!	This is a unary operator. It returns true, if the operand(or expression) returns false.	!$a -->



<?php
    // $a = "study";
    // $b = "tonight";
    // // concatenating $a and $b
    // echo $a.$b;
    
    // // appending $b to $a
    // $a .= $b;
    // echo $a;

// ===============================

// $x = 15;
// $x %= 4;

// echo $x;

// ===================================

// $x = 10;  
// echo --$x;

// $x = 10;  
// echo $x--;

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>