<?php
include 'main.php';

$Bdr = new Bdr();

$str="Hello";

// Hashing Method
echo "Hashed : \n";
echo $bdr->hash($str)."\n\n";

// Encoding Method
echo "Encoded : \n";
echo $bdr->encode($str)."\n\n";

// Decoding Mrthod
echo "Decoded : \n";
echo $bdr->decode('|33|16|35|39|55|16|24|64|'); // |33|16|35|39|55|16|24|64| => Hello