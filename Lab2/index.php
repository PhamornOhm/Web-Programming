<?php


$total =100;
$price = 27 ;

$charge = $total - $price;


if($charge < 0){
    echo "เงินไม่พอ";
    exit();
}
    echo "ยอดเงินทอนทั้งหมด: $charge บาท <div>";
    $coinsSib = (int)($charge / 10); 
        $charge = $charge % 10;

    $coinsHa = (int)($charge /5);
        $charge = $charge %5;

    $coinsNueng = $charge ;

 
    echo "มีเหรียญ 10 บาท $coinsSib <div>";
    echo "มีเหรียญ 5 บาท $coinsHa  <div>";
    echo "มีเหรียญ 1 บาท $coinsNueng <div>";
?>