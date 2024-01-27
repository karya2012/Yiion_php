<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = date("H");
    echo "$x" . "\n";
    if($x < 10){
        echo "have a good morning!!";
    }
    elseif($x <20){
        echo "have a good day!!";
    }
    else{
        echo "have a good night!!";
    }


    echo "<br>";

    $color = "orange";
    switch($color){
        case "red":
            echo "color is red.";
            break;

        case "orange":
            echo "color is orange.";
            break;

        case "green";
            echo "color is green.";
            break;

        case "white";
             echo "color is white";
             break;

        default:
        echo "your color is neither red, orange, green nor white";
            }    
            
    ?>
</body>
</html>