<?php
$arr = array(10, 20, 5 => 50);
$arr[3] = 30;
$arr[]  = '10';
$arr[]  = '20';
$arr[5] = '30';
unset($arr[7]);
$arr['4'] = 10;
echo '<pre>';
print_r($arr);
echo '</pre>';