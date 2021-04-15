********ARITHMETIC OPERATORS*********
<?php
// Arithmetic Operators
$sum = $num + $num2;
$sum = $num - $num2;
$sum = $num / $num2;
$sum = $num * $num2;
// etc...
?>

*******ASSIGNMENT OPERATORS*******
<?php
// Assignment Operators
$num1 += $num2;
// Using += is the same as...
$num1 = $num1 + $num2;
// So just a shorthand.

?>

*******COMPARISON OPERATORS
<?php
// Comparison Operators
$num1 == $num2;
$num1 === $num2;
$num1 != $num2;
$num1 !== $num2;
$num1 < $num2;
$num1 <= $num2;
$num1 > $num2;
$num1 >= $num2;
$num1 <=> $num2;
?>

example 
<?php
$num1 = 1;
$num2 = "2";
$num1 == $num2;
$num1 === $num2;
?>

********LOGICAL OPERATORS********
<?php
// Logical Operators
$num1 = 5;
$num1 = 10;
$num1 === 5 and $num2 === 10;
// Shorthand
$num1 === 5 && $num2 === 10;

?>

<?php
// Logical Operators
$num1 = 5;
$num1 = 10;
$num1 === 5 or $num2 === 6;
// Shorthand
$num1 === 5 || $num2 === 6;

?>

<?php
// Logical Operators
$num1 = 5;
$num1 = 10;
$num1 === 5 xor $num2 === 6;

?>

<?php
// Logical Operators
$num1 = 5;
!$num1 === 6;

?>

******INCREMENT/DECREMENT********
<?php
// Increment
$num1 = 5;
++$num1; // Will output 6
$num1++; // Will output 5

?>

<?php
// Decrement
$num1 = 5;
--$num1; // Will output 4
$num1--; // Will output 5

?>

*******STRING OPERATOR******
<?php
// String operator
$a = "My name";
$b = "is Moe!";
$c = $a . $b;

?>

<?php
// String operator
$a = "My name";
$b = $a . "is Moe!";

?>

