Internal functions (built in)**********************

examples
<?....
 $a = "Hello World!";
 str_replace ("World", "Kamose", $a);
 /* Kamose replaces world in this instance */
?>

<?...
$a = "Hi";
str_repeat ($greetings, 3);
/* Allows Hi to be repeated 3 times */
?>

<?...
$a = "Hello world!";
$chars = "lo";
stripos ($a, $chars);
?>

User defined functions **************************** 
example 
<?...
function calcAdd($num1, $num2) {
    $value = $num1 + $num2
    return $value;
}
/* $num1 and $num2 = place holders, can be replaced by actual data 
e.g. 2, 4 below*/

echo calcAdd (2, 4);
?>