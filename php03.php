<?php


//1
$name =oRyoko;
    if($name==Ryoko){
        echo "私は あなたの名前 です";
     
        }else {
            echo "あなたの名前ではありません";
        }
 
 //2
 $i=1;
 for($i=1;$i<=10000;$i++){
    $num+=$i;
     }
     echo $num;
     
//3

$fruits=array("banana","apple","peach","grape","orange");
    foreach($fruits as $fruit){
        echo $fruit. "\n";
    }
    
//4
/* for文の始めの値を定義する*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i."\n";
  }
}
     
 
 