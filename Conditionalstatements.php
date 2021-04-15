if
elseif
else
switch

******IF STATEMENT******
<?php
if (condition) {
    // code...
}
?>

EXAMPLE 
<?php
$a = 1;
$b = 5;

if ($a === $b) {
    echo "They are the same!";
}
elseif ($b ===5) {
    echo "Variable 'b' is equal to 5!";
}
else {
    echo "They are not the same!";
}

?>

*****SWITCH******
<?php

$a = 50;

switch ($a) {
    case 25:
        echo "Variable is equal to 25";
        break;
     case 50:
        echo"Variable is equal to 50!";
        break;
    default:
        echo "None were true!";
        break; 
}
?>
******BUELIAN IF STATEMENT*****

<?php
$a = true;

if ($a === true) {
    echo "Variable is true!";
}
elseif ($a === false){
    echo "Variable is false!";
}
?>