<?php
function twice($num){
    return $num*2;
}
echo twice(10);
//2
function f($a,$b){
    return $a+$b; 
}
echo f(10,15);
//3
function array_num($arr){
    $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  return $result;
}
echo array_num(array(1, 3, 5 ,7, 9));
echo "\n";
//4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number <= $a){
     $max_number = $a;
 }
 }
  return $max_number;
 }
 echo max_array([2,4,8,6]);
?>