<?php
function formatar_data() {
    setlocale(LC_TIME, "pt_BR.utf8", "Portuguese_Brazil");
    return strftime("%A, %d de %B de %Y");
}

$data_formatada = formatar_data();
echo "<p>Data atual: $data_formatada</p>";
echo "<p><a href='tarefa7.html'>Voltar</a></p>";
?>
