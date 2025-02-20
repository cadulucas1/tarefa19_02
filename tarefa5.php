<?php
    $fibonacci = [0, 1];

    for ($i = 2; $i < 10; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    echo "<ul>";
    foreach ($fibonacci as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";
?>