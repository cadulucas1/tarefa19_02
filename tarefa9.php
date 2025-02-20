<?php
function validar_email($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "O e-mail '$email' é válido.";
    } else {
        return "O e-mail '$email' é inválido.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";

    if (!empty($email)) {
        $mensagem = validar_email($email);
        echo "<p>$mensagem</p>";
    } else {
        echo "<p>Por favor, insira um e-mail.</p>";
    }
} else {
    echo "<p>Acesse o formulário primeiro: <a href='tarefa9.html'>Voltar</a></p>";
}
?>
