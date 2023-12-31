<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order)
        {
            if ($order === 'asc') {
                echo '昇順にソートします。<br>';
                sort($array);
            } elseif ($order === 'desc') {
                echo '降順にソートします。<br>';
                rsort($array);
            }
            return $array;
        }

        $nums = [15, 4, 18, 23, 10];

        foreach (sort_2way($nums, 'asc') as $num) {
            echo $num . '<br>';
        }

        foreach (sort_2way($nums, 'desc') as $num) {
            echo $num . '<br>';
        }

        ?>
    </p>
</body>

</html>