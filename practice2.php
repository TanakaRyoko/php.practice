<?php
echo "hello php!";

$name="Ryoko";
if($name="Ryoko"){
    echo "私はあなたの名前です。";
} else {
    echo "あなたの名前ではありません。";
}

$sum=0;
for($i=1; $i<=1000; $i++){
$sum+=$i;
}
echo $sum;

$fruits=array("banana","apple","orange","grape","peach");
foreach($fruits as $fruit){
    echo $fruit." ";
}

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if(($i % 5) == 0){
    echo $i;
  }
}
