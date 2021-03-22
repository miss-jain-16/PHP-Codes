<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUILT IN FUNCTIONS</title>
</head>
<body>
<?php
$var="MEGHA GARG";
// REVERSE 
echo "REVERSE = ".strrev($var);
echo "<br>";
// LENGTH
echo "LENGTH = ".strlen($var);
echo "<br>";
// WORD COUNTING
echo "WORD COUNT = ".str_word_count($var);
echo "<br>";
$f=200;
// CHECK IS IT INTEGER
echo is_int($f);
echo "<br>";
// FIND MAX
echo max(100,2000,300);
echo "<br>";
// FIND SQUAREROOT
echo "SUAREROOT OF 49 IS =" .sqrt(49);
echo "<br>";
// CASTING
$c=100.8;
$int_cast=(int)$c;
echo $int_cast;
echo "<br>";
?>
</body>
</html>