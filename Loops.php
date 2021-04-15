******** LOOPS*********
Different type of loops
    while
    do-while
    for
    foreach 

example **** WHILE*********************************
<?php

$a = 1;
$b = 5;

while ($a < $b) {
    echo "Keep looping this!";

    $a++
}

?>

****** INFINITE LOOP = BAD ******

while (true === true) {
    echo "This will continue forever!";
}

****Looping ++ increment*******


<?php

$a = 1;

while ($a < 10) {
    echo "Loop number" . $a++;
/* Will loop until $a is greater than 10 */
}

?>

****EXAMPLE do-while********************************
<?php

$a = 1;

do {
    echo "Loop number  " . $a++;
} while ($a < 10);
/* Will run the code atleast and then will check if code is true */
?>

****EXAMPLE for-loop ********************************

<?php

for ($i = 0; $i < 10; $i++) {
    echo "This will loop 10 times!";
} 
/* $ i stand for iteration */
?>

****EXAMPLE foreach-loop ******************************

<?php

$array = ["Lee", "Tommy", "Jennifer"];

foreach ($array as $value) {
    echo $value;
} 
/* Will run the code atleast and then will check if code is true */

?>

ASSOCIATE ARRAY

<?php

$array = [
    "Name" => "Tommy", 
    "Eyecolor" => "Brown"
];

foreach ($array as $Key => $value) {
    echo $key . ": " . $value;
} 
/* First LOOP = Name: Tommy */
/* Second LOOP = Eyecolor: Brown */
?>
