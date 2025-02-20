<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = isset($_POST["idade"]) ? (int) $_POST["idade"] : 0;

    if ($idade < 18) {
        echo "<p>Você é menor de idade.</p>";
    } elseif ($idade >= 60) {
        echo "<p>Você é maior de idade e também idoso.</p>";
    } else {
        echo "<p>Você é maior de idade.</p>";
    }
} else {
    echo "<p>Por favor, informe sua idade.</p>";
}
?>