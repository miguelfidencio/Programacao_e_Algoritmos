<?php
session_start();
if (!isset($_SESSION["numero_secreto"])) {
    $_SESSION["numero_secreto"] = random_int(0, 100);
    $_SESSION["tentativas"] = 0;
}
$mensagem = "";
if (isset($_POST["reiniciar"])) {
    $_SESSION["numero_secreto"] = random_int(0, 100);
    $_SESSION["tentativas"] = 0;
    $mensagem = "Novo jogo iniciado!";
} elseif (isset($_POST["palpite"])) {
    $palpite = filter_var($_POST["palpite"], FILTER_VALIDATE_INT);
    if ($palpite === false || $palpite < 0 || $palpite > 100) {
        $mensagem = "Digite um número inteiro de 0 a 100.";
    } else {
        $_SESSION["tentativas"]++;
        if ($palpite == $_SESSION["numero_secreto"]) {
            $mensagem = "Parabéns! Você acertou em " . $_SESSION["tentativas"] . " tentativa(s).";
            $_SESSION["finalizado"] = true;
        } elseif ($palpite < $_SESSION["numero_secreto"]) $mensagem = "Muito baixo! Tente um número maior.";
        else $mensagem = "Muito alto! Tente um número menor.";
    }
}
if (!isset($_SESSION["finalizado"])) $_SESSION["finalizado"] = false;
?>
<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Joguinho da Adivinhação</title></head><body>
<h2>Joguinho da Adivinhação</h2>
<p>Tente adivinhar o número secreto de 0 a 100.</p>
<?php if ($mensagem !== "") echo "<p>" . htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8") . "</p>"; ?>
<?php if (!$_SESSION["finalizado"]): ?>
<form method="post">
    <label>Seu palpite: <input type="number" name="palpite" min="0" max="100" step="1" required></label>
    <button type="submit">Tentar</button>
</form>
<?php endif; ?>
<form method="post"><button type="submit" name="reiniciar" value="1">Começar novo jogo</button></form>
<p>Tentativas: <?php echo (int)$_SESSION["tentativas"]; ?></p>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
