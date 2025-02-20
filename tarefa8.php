<?php
$arquivo = "notas.txt";

if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    echo "<h3>Conteúdo do arquivo:</h3>";
    echo "<pre>$conteudo</pre>";

    $nova_linha = "\nFinal do conteúdo";
    file_put_contents($arquivo, $nova_linha, FILE_APPEND);

    echo "<p>Texto 'Final do conteúdo' foi adicionado ao arquivo.</p>";
} else {
    echo "<p>O arquivo '$arquivo' não existe.</p>";
}

echo "<p><a href='tarefa8.html'>Voltar</a></p>";
?>
