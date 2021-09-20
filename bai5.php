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
    
    $rand = rand(0,100);
    if(isPrimeNumber($rand))
    {
        $soNT=fopen("soNT.txt","a");
        fwrite($soNT,$rand." ");
        echo $rand. " la so nguyen to";
        fclose($soNT);
    }
    else
        echo $rand." khong phai so nguyen to";
    //sleep(5);

    
?>