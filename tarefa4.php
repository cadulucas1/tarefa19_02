<?php
function calcular_area($comprimento, $largura) {
    return $comprimento * $largura;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comprimento = isset($_POST["comprimento"]) ? (float) $_POST["comprimento"] : 0;
    $largura = isset($_POST["largura"]) ? (float) $_POST["largura"] : 0;

    if ($comprimento > 0 && $largura > 0) {
        $area = calcular_area($comprimento, $largura);
        echo "<p>A área do retângulo é: $area</p>";
    } else {
        echo "<p>Por favor, insira valores válidos para comprimento e largura.</p>";
    }
} else {
    echo "<p>Acesse o formulário primeiro: <a href='tarefa4.html'>Voltar</a></p>";
}
?>
