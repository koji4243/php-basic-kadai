<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>try_foreach</title>
</head>
<body>
    <p>
        <?php
        //Step2
        $sale_datas = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        // var_dump($sale_datas);
        foreach($sale_datas as $key => $value){
            echo "{$key}:{$value} <br>";
        }
        echo "<br>";

        //Step3
        $guys = [ "id" => 1, '名前' => '侍太郎', '年齢' => 30];
        
        foreach($guys as $key => $guy){
            echo "{$key}:{$guy} <br>";
        }
        ?>
    </p>
</body>
</html>