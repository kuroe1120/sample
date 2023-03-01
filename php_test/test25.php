<?php
//課題1

$name = "ogami";
if ($name = "ogami") {
    echo "私はogamiです";
} else {
    echo "ogamiではありません";
}

echo "\n";

//課題2

$total = 0;
for ($i = 0; $i <=10000; $i++) {
    $total += $i;
}
echo $total;

echo "\n";

//課題3

$fruits = array("りんご","オレンジ","レモン","ぶどう","メロン");
    foreach ($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

//課題4

$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++){

  if ($i % 5 === 0) {
    echo $i;
    echo "\n";
  }
}

?>