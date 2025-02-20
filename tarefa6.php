<?php
function remover_vogais($texto) {
    return preg_replace("/[aeiouAEIOUáéíóúÁÉÍÓÚãõÃÕ]/u", "", $texto);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = isset($_POST["texto"]) ? $_POST["texto"] : "";

    if (!empty($texto)) {
        $resultado = remover_vogais($texto);
        echo "<p>Texto original: $texto</p>";
        echo "<p>Texto sem vogais: $resultado</p>";
    } else {
        echo "<p>Por favor, insira um texto válido.</p>";
    }
} else {
    echo "<p>Acesse o formulário primeiro: <a href='tarefa6.html'>Voltar</a></p>";
}
?>
