<?php
// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <style>
        * {
            margin: 0;
        }
    </style>
        <?php
            //true昇順　false降順
            function sort_2way(&$array, $order) {
                if ($order === true) {
                    sort($array);  
                } else {
                    rsort($array); 
                }
            }

            // 昇順
            sort_2way($nums, true);
            echo "<p>昇順にソートします</p>";
            foreach($nums as $value){
                echo $value . "<br>";
            }
            // 降順
            sort_2way($nums, false);
            echo "<p>降順にソートします</p>";
            foreach($nums as $value){
                echo $value . "<br>";
            }
        
        ?>
    </p>
</body>
</html>