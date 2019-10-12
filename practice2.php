<?php

//1

function twice($i){
return $i*2;
}
echo twice(2);

//2
function f($a,$b){
    return $a + $b;
}
echo f(3,6);

//3

   function times($array){
    $num=1;
    foreach($array as $value){
    $num *= $value;
       }
    return $num;
}
  $list=[1,2,5,4,5];
  echo times($list);
    
    
//4
  function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
if($max_number<$a){
    $max_number = $a;
}
 }
 return  $max_number;
 }
 $list=[4,6,3,4,5];
 echo max_array($list);

 //5
 
//strip_tags
$text = '<p>今日も</p><!-- Comment --> <a href="#fragment">頑張りましょう！</a>';
echo strip_tags($text);
echo "\n";

//array_push
$fruit = array("banana","apple","orange");
array_push($fruit,"grape","peach");
print_r($fruit) ;

//array_merge

$name=array("keiko","michiko","satoko","yuko");
$name2=array("nastuko","sachiko");
$name3=array("kanta","satoshi");
$names=array_merge($name,$name2,$name3);

print_r($names);

//time, mktime
	$timestamp = time() ;
	echo $timestamp ;
	
//date


    