<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Nome e Sobrenome</title></head>
<body>
<h2>Nome e Sobrenome</h2>
<form method="post">
    <label>Nome: <input name="nome" required></label><br><br>
    <label>Sobrenome: <input name="sobrenome" required></label><br><br>
    <button type="submit">Mostrar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $sobrenome = trim($_POST["sobrenome"] ?? "");
    if ($nome !== "" && $sobrenome !== "") {
        echo "<p>Resultado: " . htmlspecialchars($sobrenome . " " . $nome, ENT_QUOTES, "UTF-8") . "</p>";
    }
}
?>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
