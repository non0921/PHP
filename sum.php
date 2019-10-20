<?php
function sum($max){
  
  $result = 0;
  
  for($i = 1; $i <= $max; $i++){
    
    $result += $i;
  }
  return $result;
}
echo sum(100);

$string = "ABCDEF";
echo strlen($string);

$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;

$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);

$array = array(2,5,9,7,3,1,8,6,4);

asort($array);
print_r($array);

arsort($array);
print_r($array);

//ここから課題です。課題1
function tech($boost){
  $result = $boost * 2;
  echo $result;
}
echo tech(10);

//課題2
function s($a,$b){
  $result = $a + $b;
  echo $result;
}
echo s(5,4);
//課題3
function aa($arr){
  $total = 1;
  for($arr = 1; $arr <= 9; $arr += 2){
    $total *= $arr;
  }
  return $total;
}
echo aa(0);
//課題4
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number += $a;
    }
  }
  return $max_number;
}
echo max_array(array(10,8,5,4,2));
//課題5 strip_tags
$text = "<h1>Tech Boost<h1>
<h2>non0921<h2>";
echo strip_tags($text);

//array_push
$fruits = array("peach","apple");
array_push($fruits,"orange","grape");
print_r($fruits);

//array_merge
$array1 = array("color" => "red",2,4);
$array2 = array("a","d","color" => "green","orange"=>"fruits",2);
$result = array_merge($array1,$array2);
print_r($result);

//time
$nextweek = time() + (7 * 24 * 60 * 60);
echo "今" . date("y-m-d") ."\n";
echo "来週" . date("y-m-d" , $nextweek) ."\n";

//mktime
echo "2019年 10月1日" . date("r" , mktime(0,0,0,10,1,2019)) , "\n";
echo date('c' , mktime(10,10,10,10,10,2019)) , "\n";

//date
date_default_timezone_set("UTC");
echo date("l");
echo "\n";
?>
