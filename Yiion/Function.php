<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Function.php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php

    function setheight($minheight =50){
        echo "height is ".$minheight." !! <br>";
    }
    setheight(90);
    setheight(100);
    setheight( );


    function sum($x,$y){
        return $z = $x + $y;
        return $z;
    }
    sum(8,10);
    sum(12,98);

    
    ?>
</body>
</html>