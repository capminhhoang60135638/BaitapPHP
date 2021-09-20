<?php

function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function dem($n){
    $c = 0;
    while($n >= 10) {
        
            
            $n/=10;
            $c ++ ;
        
        
    }
    return $c + 1;
}
function chusolonnhat($n){
    $arr= array();
    $soluong = dem($n);
    $index = 0;
    while($n >0) {
        
        $arr[$index] = $n%10;    
        $n/=10;
        
        $index ++ ;
    
    
    }
    $max = $arr[0];
    
    for($i = 1; $i < $soluong; $i++) {
        if($arr[$i] >= $max) {
            $max=$arr[$i];
        }
    }
    return $max;
    
}
    $rand = rand(10,1000);
    echo "So ngau nhien la : " . $rand."<br>";

    //cau a : so nguyên tố nhỏ hơn n;
    echo "a. Số nguyên tố nhỏ hơn ". $rand." la: ";
    for($i = 1; $i <=$rand;$i ++){
        if(isPrimeNumber($i)){
            echo($i . " ");
        }
    }
    echo "<br>";
    //cau b: Cho biết số nguyên này có bao nhiêu chữ số.
    echo "b. So chu so la : ". dem($rand)."<br>";
    //cau c. Cho biết chữ số lớn nhất trong số nguyên này.
   
    echo "c. Chu so lon nhat la : ". chusolonnhat($rand)."<br>";
?>