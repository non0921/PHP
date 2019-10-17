<?php
$height = 230;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else  if ($height >= 200){
  echo "200cm 以上の方はご乗車できません。";
}else {
  echo "ご乗車になれます。";
}
$weekday = "木曜";
switch ($weekday) {
  case "月曜":
  case "木曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
}


for($i = 0; $i < 10; $i++){
  echo $i;
}
$total = 0;
echo $total;

for($i = 0; $i <= 100; $i++){
  $total += $i;
}
echo $total;

$fruits = array("apple","orange","lemon");

echo count($fruits);

for($i = 0; $i < count($fruits); $i++){
  echo "要素は" . $fruits[$i];
  echo "\n";
}
$animals = array("dog" , "cat" , "panda");

foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}
//ここから課題です。課題1
$name = "sasakinozomu";

if($name == "sasakinozomu"){
  echo "私は" . $name . "です";
} else {
  echo $name . "ではありません";
}
//課題2
$total = 0;

for($t = 0; $t <= 10000; $t++){
  $total += $t;
}
echo $total;
//課題3
$fruits = array("banana" , "apple" , "orange" , "lemon" ,"peach");

foreach($fruits as $kudamono){
  echo "好きなフルーツは" . $kudamono;
  echo "\n";
}
//課題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
?>
