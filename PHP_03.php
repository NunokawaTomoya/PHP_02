<?PHP
//課題1
$name = "布川";
if($name == "布川"){
    echo "私は".$name."です。";
    echo "\n";
}else{
    echo $name."ではありません。";
}


//課題2
$sum = 0;
for($i = 1; $i <= 10000; $i++){
    $sum += $i;
}
echo $sum;
echo "\n";


//課題3
$fruits = ["Apple","Orange","Lemon","Grape","Peach"];
foreach($fruits as $fruit){
    echo $fruit;
    echo "\t";
}
echo "\n";


//課題4
$start = 1;
$end   = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}