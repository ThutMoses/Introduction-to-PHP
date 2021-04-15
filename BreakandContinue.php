*****EXAMPLE Brear-loop ****************
<?php

$a = 1;

while  ($a <= 10) {
    if ($a === 5) {
        break;
    }
    echo $a++;
}
/* if 1 or $a is less than 10 then the code will loop/ 
If $a = 5 the loop will break */

?>

NESTED STATEMENT *****************************

<?php

$a = 1;

while  ($a++) {
    echo $a;
    while ($a >= 10) { 
        break 2;
    }
}
/* loop will break out of the 2 loops */

?>

** CONTINUE loop ****************************************
<?php

$a = 1;

while ($a < 10) {
    $a++;
    if ($a === 5) {
        continue;
    }
    echo $a;
}

?>