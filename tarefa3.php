<?php
$i = 1;
while ($i <= 100) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'AB ,';
    } elseif ($i % 3 == 0) {
        echo 'A ,';
    } elseif ($i % 5 == 0) {
        echo 'B ,';
    } else {
        echo $i.' ,';
    }
    $i++;
}
?>