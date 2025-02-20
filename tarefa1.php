        <?php
        if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
            $numero1 = intval($_POST['numero1']);
            $numero2 = intval($_POST['numero2']);

            $soma = $numero1 + $numero2;
            $subtracao = $numero1 - $numero2;
            $multiplicacao = $numero1 * $numero2;
            $divisao = ($numero2 != 0) ? $numero1 / $numero2 : "Indefinido (divisão por zero)";

            echo "<h2>Resultados:</h2>";
            echo "<p><strong>Soma:</strong> $soma (Tipo: " . gettype($soma) . ")</p>";
            echo "<p><strong>Subtração:</strong> $subtracao (Tipo: " . gettype($subtracao) . ")</p>";
            echo "<p><strong>Multiplicação:</strong> $multiplicacao (Tipo: " . gettype($multiplicacao) . ")</p>";
            echo "<p><strong>Divisão:</strong> $divisao (Tipo: " . gettype($divisao) . ")</p>";
        } else {
            echo "<p>Por favor, insira dois números no formulário.</p>";
        }
        ?>
