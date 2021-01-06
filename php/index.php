<?php
include 'Bdr.php';

$Bdr = new Bdr();

$str = "Hello";

// Hashing Method
echo "Hashed:\n";
echo $Bdr->hash($str) . PHP_EOL;

// Encoding Method
echo "Encoded:\n";
echo $Bdr->encode($str) . PHP_EOL; 

// Decoding Method
echo "Decoded:\n";
echo $Bdr->decode('|33|16|35|39|55|16|24|64|') . PHP_EOL; // |33|16|35|39|55|16|24|64| => Hello
