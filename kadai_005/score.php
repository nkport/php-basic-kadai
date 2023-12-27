<?php

$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

$goukei = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
$heikin = $goukei / 10;

echo $goukei;
echo '<br>';
echo $heikin;

// 何も見ずやってみて変だと思い下記は調べたもの「なお以下に関し…」の意味がわかりました。
// $score = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
// $total = array_sum($score);
// $heikin = array_sum($score)/ count($score);
// echo $total;
// echo '<br>';
// echo $heikin;

?>