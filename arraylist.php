<?php
$fruits = array('リンゴ', 'バナナ', 'ぶどう');

$fruits[2] = 'イチゴ';
$fruits[3] = 'メロン';

unset($fruits[1]);
echo '<pre>';


var_dump($fruits);
print_r($fruits);
echo '</pre>';

$arrayList = array
(
  'リンゴ' => 100,
  'バナナ' => 200,
  'ぶどう' => 300
);

$arrayList['イチゴ'] = 400;

$arrayList['リンゴ'] = 80;
echo '<pre>';
print_r($arrayList);
echo '</pre>';