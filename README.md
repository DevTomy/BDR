# 📓 BDR Project

As Simple Lib for encode / decode & hashing ( Exclusive Algorithm ):<br>

کتابخانه ای ساده برای رمزنگازی / رمز گشایی و هش کردن ( با الگوریتم اختصاصی ):

## Get Started :

    <?php
    include 'bdr.php';
    $bdr = new bdr();
    
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
    ?>

## Contact Us : 

  - Telegram : @DinoSoft / @DevTomy
  - instagram : instagram.com/DinoSoft.ir
  - WebSite : https://DinoSoft.ir
