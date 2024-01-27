<html>
    <head>
    </head>
    <body>
        <?php 

        echo" while loop <br>" ;
        $x = 10;
        while ($x <= 100) {
           # if($x == 6) break;
            echo $x;
            $x+= 10;
            echo" <br>";
        }

        echo "<br>";

        echo "do while loop";
        $x = 1;
        do { 
            echo "<br>";
            echo $x;
            $x ++;
          } while ($x <= 10);


        echo "<br>";

        echo "for loop";
        for($x=1;$x<=10;$x++){
            echo"<br>";
            echo $x;
            
        }

        echo "<br>";
        echo "foreach loop <br>";
        $colors= array("red","orange","yellow","black","blue","white") ;
        foreach($colors as $co){
            echo "$co <br>";
        }
        $students=array("narendra"=>"23","amit"=>"26","aditya"=>29,"rajnath"=>21);
        foreach($students as $st => $no){
            echo "<br>";
            echo $st . " : " . $no;
        }
        ?>
    </body>
</html>