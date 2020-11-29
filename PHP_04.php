<?php
//課題1
$num = 200;
function twice($num){
    $result = $num * 2;
    return $result;
}
echo twice($num);
echo "\n";

//課題2
$a = 5000;
$b = 8000;
function sum($a, $b){
    $result = $a + $b;
    return $result;
}
echo sum($a, $b);
echo "\n";

//課題3
$arr = array(1, 3, 5, 7, 9);
function pro($arr){
    $result = 0;
    foreach($arr as $a){
        if($result == 0){
            $result = $a;
        }else{
            $result *= $a;
        }
    }
    return $result;
}
echo pro($arr);
echo "\n";

//課題4
$arr = array(5, 1, 7, 3, 8, 100, 2, 4, 6, 9);
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($arr);
echo "\n";

//課題5
//strip_tags
$str = "<h1>strip_tags</h1>";
echo strip_tags($str);
echo "\n";

//array_push
$array_push = ["apple", "orange"];
array_push($array_push, "melon", "banana");
print_r($array_push);
echo "\n";

//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array_merge = array_merge($array1, $array2, $array3);
print_r($array_merge);
echo "\n";

//time, mktime
$time = time();
var_dump(date('Y年m月d日h時i分s秒', $time));
echo "\n";
$time = time(10, 10, 10);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo "\n";
$time = mktime();
var_dump(date('Y年m月d日h時i分s秒', $time));
echo "\n";
$time = mktime(10, 10, 10);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo "\n";
$time = mktime(0, 0, 0, 1, 1, 2020);
var_dump(date('Y年m月d日h時i分s秒', $time));
echo "\n";

//date
echo date('Y/m/d');
echo "\n";
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";
echo date('Y-m-d H:i:s', 10);
echo "\n";