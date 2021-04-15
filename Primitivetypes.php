*****Strings********

Double Quotes 
"This is a String"

Single Quotes
'This is also a String'

EXAMPLE *****SQL query******
/* If you use double quotes inside you will cancel out the double quotes outside
*/

"SELECT person WHERE name='Daniel' ASC"

INCORRECT
echo 'I'm learning PHP!';
CORRECT
echo'I\'m learning PHP!';

******INTEGER******
<?php
 echo 10;
 echo "10";
?>

<?php
 if ("10" !== 10) {
     echo "this is not the correct data type!";
 }

?>

*****FLOAT*********
<?php

echo 10.5;
echo 27.99;
echo 3654.63277281;
?>

****** BOOLEAN*******
true
false

example 
<?php
$a = true;
if ($a ===true) {
    echo "Variable $a is true!";
}

?>