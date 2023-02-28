<?php
// 課題1

$a = 3;
$b = 7;
$ab = $a + $b;
echo $ab;

echo "\n";

// 課題2

$array_month = ["１月", "２月","３月" ,"４月" ,"５月" ,"６月" ,"７月" ,"８月" ,"９月" ,"１０月" ,"１１月" ,"１２月"];
echo $array_month[7];

echo "\n";

// 課題3

$hello = "Hello";
$name = "ryusei";
$world = "s World";
$hnw = $hello . $name . $world;
echo $hnw;

echo "\n";

//課題4

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

echo "\n";

//課題5

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calendar_2018["December"];

?>