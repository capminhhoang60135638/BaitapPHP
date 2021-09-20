<?php 
    $n =rand(1,10);
    echo "So random la: " . $n."<br>";
    for($i=1;$i<=10;$i++)
    {
        $tich = $n*$i;
        echo $n ."x".$i."=". $tich ."<br>";
    }
?>