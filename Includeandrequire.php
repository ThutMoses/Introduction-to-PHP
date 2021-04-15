How to include files inside other files*****************
include 'test.php';
include_once 'test.php';
require 'test.php';
require_once 'test.php';

If inside a folder then you will have to include the whole path
'foldername/test.php'

Example ************
including data from from a specific page 

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'test.php';
        echo $a;
    ?>
    </body>
</html>
