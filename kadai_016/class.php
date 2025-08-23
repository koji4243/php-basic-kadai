<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>

    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

                        // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            
            function show_price(){
                echo $this->price;
            }
        }

        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

                        // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            function show_height(){
                echo $this->height;
            }
        }

        // インスタンス化する
        $food = new Food("banana",120);
        print_r($food);
        echo "<br>";
        $animal = new Animal("dog",130,"40");
        print_r($animal);
        echo "<br>";

        $food->show_price();
        echo "<br>"; 
        $animal-> show_height();
        echo "<br>";
        ?>
    </p>
</body>

</html>