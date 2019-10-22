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
function double_number($boost){
  $result = $boost * 2;
  return $result;
}
echo double_number(10);
echo "\n";

//課題2
function a_b($a,$b){
  $result = $a + $b;
  return $result;
}
echo a_b(5,4);
echo "\n";

//課題3
function arry($arr){
  $total = 1;
  foreach($arr as $ar){
    $total *= $ar;
  }
  return $total;
}
echo arry(array(1,3,5,7,9));
echo "\n";

//課題4
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
      }
    }
  return $max_number;
}
echo max_array(array(8,10,4,20,5));
echo "\n";

//課題5 strip_tags
$text = "<h1>Tech Boost<h1>
<h2>non0921<h2>";
echo strip_tags($text);
echo "\n";

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
echo "今" . date("y-m-d-l") ."\n";
echo "来週" . date("y-m-d-l" , $nextweek) ."\n";

//mktime
echo "2019年 10月1日" . date("l" , mktime(0,0,0,10,1,2019)) , "\n";
echo date('c' , mktime(10,10,10,10,10,2019)) , "\n";

//date
date_default_timezone_set("EET");
echo date("j");
echo date("l");
echo "\n";
?>
