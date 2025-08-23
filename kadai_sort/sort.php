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
            function sort_2way($array, $order) {
                if ($order === true) {
                    sort($array);  
                    echo "<p>昇順にソートします</p>";
                } else {
                    rsort($array); 
                    echo "<p>降順にソートします</p>";
                }
                foreach($array as $value){
                    echo $value . "<br>";
                }
            }
            // 昇順
            sort_2way($nums, true);
            // 降順
            sort_2way($nums, false);
        ?>
    </p>
</body>
</html>