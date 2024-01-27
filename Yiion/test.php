<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = "kanak";
    echo "namaste $x <br>";
    echo 'namaste $x' . "<br>";


    $str = "hello world";
    echo strlen($str) . "<br>";
    echo str_word_count($str) . "<br>";

    echo strpos("Today is an amazing day", "am") . "<br>";

    echo strtoupper($str) . "<br>";
    echo strtolower($str) . "<br>";
    echo str_replace("world","kanak",$str) . "<br>";
    echo strrev($str) . "<br>";
    echo trim("  hello world  "). "<br>";


    #convert string to array
    $y = explode(" ", $str);
    #echo "$y";
    print_r ($y) . "<br>";

    echo substr($str,6,5) . "<br>";

    $f = 393.28;
    $int_cast = (int)$f;
    echo $int_cast;

    echo (pi()). "<br>";
    echo (max(90,76,9,5,-34,87,12)) . "<br>";
    echo (min(90,76,9,5,-34,87,12)). "<br>";

    define("cars",["volvo","bmw","ferarri","gvagon"]);
    echo cars[0] . "\n";
    echo cars[1] . "\n";
    echo cars[2] . "\n";
    echo cars[3] . "\n";

    ?>
</body>
</html>