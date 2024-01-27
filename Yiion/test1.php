<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    class Car{
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }

        public function message(){
            return "my car is a" .  $this->color . " " . $this->model . " !";
        }
    }

        $mycar = new Car("black","bmw");
        var_dump($mycar);
        
        $yourCar = new Car("red","swift");
        var_dump($yourCar);
        ?>
        </body>
        </html>