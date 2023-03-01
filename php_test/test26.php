<?php

//課題1

function sum($che){
    $tek = $che * 2;
    return $tek;
}

echo sum(4);

echo "\n";

//課題2

function add($a, $b){
    $plusab = $a + $b;
    return $plusab;
 }
 
 echo add(2,4);
 
 echo "\n";
 
 //課題3
 
function tes($arr) {
    $array = array(1, 3, 5 ,7, 9);
    $mat = array_product($array);
    $reasult = $mat * $arr;
    return $reasult;
}
echo tes(3);

echo "\n";
 
 //課題4 yet
 
 function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
  }

  return $max_number;
}

echo max_array();

echo "\n";

//課題5 strip_tags

$test_tag = "<h1>strip_tags</h1>"
            ."<p>タグ取り除く</p>";
        echo strip_tags($test_tag);
        echo "\n";
        
        $test_tag = "<h1>strip_tags</h1>"
            ."<p>タグ取り除く</p>";
        echo strip_tags($test_tag, "<h1><p>");
        echo "\n";
        
//　array_push

$animals = ["dog", "cat", "pig"];
array_push($animals, "horse", "rabbit");
print_r($animals);

echo "\n";

//　array_merge

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);

print_r($array);

echo "\n";

//　time, mktime

$time = mktime(12);
echo date('Y年m月d日h時i分s秒', $time) . "\n";

$time = mktime(10, 11, 12);
echo date('Y年m月d日h時i分s秒', $time) . "\n";

$time = mktime(0, 0, 0, 1, 2, 2022);
echo date('Y年m月d日h時i分s秒', $time) . "\n";

echo "\n";

//  date

echo date('Y/m/d');

echo "\n";

echo date('Y-m-d H:i:s');

echo "\n";

echo date('Y年m月d日 H時i分s秒');

echo "\n";

echo date('Y-m-d H:i:s', 10);

?>