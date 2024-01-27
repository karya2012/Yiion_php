<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Arrays in php</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <pre>
    <?php
    $cars = array("volvo","bmw","toyota");
    echo count($cars) . "<br>";
    var_dump($cars);   
    
    $cars[1]="swift";
    var_dump($cars);

    array_push($cars,"ford");
    var_dump($cars);

    $students = array("ram"=>"100","lakshman"=>"95","bharat"=>"87","shatrughna"=>"78");
    var_dump($students);

    /*foreach ($cars as &$x){
        $x = "ferrari";
    }
    unset($x);
    var_dump($cars);
    */

    
    #var_dump($students);
    unset($students["shatrughna"]);

    array_splice($cars,1,1);
    var_dump($cars);



    $numbers = array(9,76,5,90,48,72,35);
    sort($numbers);

    $clength = count($numbers);
    echo "sorted array: <br>";
    for($x=0;$x<$clength;$x++){
        echo $numbers[$x];
        echo "<br>";
    }
    rsort($numbers);
    $clength = count($numbers);
    echo "reverse sorted array: <br>";
    for($x=0;$x<$clength;$x++){
        echo $numbers[$x];
        echo "<br>";
    }


    $students = array("ram"=>"100","lakshman"=>"95","bharat"=>"87","shatrughna"=>"78");
    
    echo"acending according to value <br>";
    asort($students);
    foreach($students as $std => $std_value) {
        echo "key is : " . $std ." value is : ". $std_value ."<br>";
    }
    
    echo"acending according to key <br>";
    ksort($students);
    foreach($students as $std => $std_value) {
        echo "key is : " . $std ." value is :". $std_value ."<br>";
    }


    echo"descending according to value <br>";
    arsort($students);
    foreach($students as $std => $std_value) {
        echo "key is : " . $std ." value is : ". $std_value ."<br>";
    }


    echo"descending according to key <br>";
    krsort($students);
    foreach($students as $std => $std_value) {
        echo "key is : " . $std ." value is :". $std_value ."<br>";
    }


    ?>
    </pre>
</body>
</html>