# 📓 BDR Project

As Simple Lib for encode / decode & hashing ( Exclusive Algorithm ):<br>

کتابخانه ای ساده برای رمزنگازی / رمز گشایی و هش کردن (با الگوریتم اختصاصی):

## Usage

### PHP Code Example
```php
<?php
    include 'Bdr.php';
    $bdr = new Bdr();
    
    $str = "Hello";

    // Hashing Method
    echo "Hashed:\n";
    echo $bdr->hash($str) . PHP_EOL;

    // Encoding Method
    echo "Encoded:\n";
    echo $bdr->encode($str) . PHP_EOL;

    // Decoding Method
    echo "Decoded:\n";
    echo $bdr->decode('|33|16|35|39|55|16|24|64|'); // |33|16|35|39|55|16|24|64| => Hello
?>
```

### CLI (Bash)

You can install our cli tool in your linux distro.

Run commands below in your terminal

```bash
$ git clone https://github.com/DevTomy/BDR 
$ cd BDR/cli
$ cp bdr ~/.local/bin/
```

Now we're ready to use it

```bash
$ bdr encode "Hello"
$ bdr decode "|33|16|35|39|55|16|24|64|"
```

## Contact us: 
  - Encode & Decode By: @aryantdot
  - Hash Algorithm & Library By: @DevTomy
  - instagram: instagram.com/DinoSoft.ir
  - WebSite: https://DinoSoft.ir

