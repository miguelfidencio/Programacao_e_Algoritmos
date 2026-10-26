<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Resultado da Calculadora</title></head><body>
<h2>Resultado da Calculadora</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["NUM1"], $_POST["NUM2"], $_POST["OPER"])) {
    echo "<p>Preencha a calculadora primeiro.</p>";
} else {
    $a = (float) $_POST["NUM1"];
    $b = (float) $_POST["NUM2"];
    $op = $_POST["OPER"];
    $resultado = null;
    switch ($op) {
        case "+": $resultado = $a + $b; break;
        case "-": $resultado = $a - $b; break;
        case "*": $resultado = $a * $b; break;
        case "/":
            if ($b == 0.0) { echo "<p>Erro: não é possível dividir por zero.</p>"; }
            else { $resultado = $a / $b; }
            break;
        case "^": $resultado = $a ** $b; break;
        default: echo "<p>Operação inválida.</p>";
    }
    if ($resultado !== null) echo "<p>" . htmlspecialchars((string)$a) . " " . htmlspecialchars($op) . " " . htmlspecialchars((string)$b) . " = " . htmlspecialchars((string)$resultado) . "</p>";
}
?>
<p><a href="calculadora.php">Voltar à calculadora</a></p><p><a href="index.php">Menu principal</a></p>
</body></html>
