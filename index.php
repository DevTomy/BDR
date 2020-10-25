<?php
include 'main.php';

$Bdr = new Bdr();

$str="Hello";

// Hashing Method
echo "Hashed : \n";
echo $Bdr->hash($str)."\n\n";

// Encoding Method
echo "Encoded : \n";
echo $Bdr->encode($str)."\n\n";

// Decoding Mrthod
echo "Decoded : \n";
echo $Bdr->decode('|33|16|35|39|55|16|24|64|'); // |33|16|35|39|55|16|24|64| => Hello
