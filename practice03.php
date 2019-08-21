<?php
//1
$name = "Arika";
if ($name == "Arika"){
    echo "私はArikaです。";
} else {
    echo "Arikaではありません。";
}
//2
$total = 0;
for($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
//3
$fruits = array("banana","peach","orange","rmeon","melon");
foreach($fruits as $fruit){
    echo "好きなフルーツは" . $fruit;
    $fruits = null;
}
//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}