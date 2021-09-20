<table border="1px">
<tr>
<?php
$m= rand(2,5); $n= rand(2,5);
for($i = 1; $i < $m; $i ++) {
    echo "<td>";
    for($j = 1; $j <= $n; $j ++) {
        echo mt_rand(-100,100);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
