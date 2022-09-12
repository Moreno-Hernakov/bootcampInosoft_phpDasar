<?php
// ==============================================
// === Moreno Hernakov || BackEnd Gelombang 2 ===
// ==============================================
function luasLingkaran($a){
    $r = $a / 3;
    $L = 3.14 * pow($a, 2);
    return sprintf("%.2f", $L)."<br>";
}

function kelilingLingkaran($a){
    $r = $a / 5;
    $K =  2 * 3.14 * $r;
    return sprintf("%.2f", $K)."<br>";
}

function persegiPanjang($a){
    $p = $a / 3;
    $l = $a / 5;
    $L = $p * $l;
    return sprintf("%.2f", $L)."<br>";
}

for($i = 1; $i <= 100; $i++){
    
    if($i % 5 == 0 && $i % 3 == 0){
        echo persegiPanjang($i);
    }

    else if($i % 5 == 0){
        echo kelilingLingkaran($i);
    }

    else if($i % 3 == 0){
        echo luasLingkaran($i);
    }
    
}