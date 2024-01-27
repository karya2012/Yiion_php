<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $txt1 = "learn php";
    $txt2 = "learn laravel";
    $x = 4;
    $y = 59.87;
    var_dump($x);
    var_dump($y);

    #array
    $cars = array("swift","volvo","bmw");
    var_dump ($cars);

    echo "$txt1 <br>";
    echo "$txt2 <br>";
    echo "$x + $y <br>";

    print "$txt1 <br>";
    print "$txt2 <br>";
    print "$x + $y <br>";
    

    
    $x = 50;
    $y = 29;
    echo "value of y before function: $y <br>";

    function mytest()
    {
        global $x, $y;
        $y = $x + $y;
        echo " value of y inside function: $y <br>";
       #echo "variable <b>num</b>  inside function is : $num <br>";

       static $k = 0;
        echo "$k <br>";
        $k++;
    }
    mytest();
    mytest();
    mytest();
    mytest();

    echo "value of y outside function: $y <br>";

?>
</body>
</html>