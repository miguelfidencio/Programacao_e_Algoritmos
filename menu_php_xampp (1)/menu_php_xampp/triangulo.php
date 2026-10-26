<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Triângulo</title></head><body>
<h2>Verificar Triângulo</h2>
<form method="post">
    <label>Lado A: <input type="number" name="a" min="0.01" step="any" required></label><br><br>
    <label>Lado B: <input type="number" name="b" min="0.01" step="any" required></label><br><br>
    <label>Lado C: <input type="number" name="c" min="0.01" step="any" required></label><br><br>
    <button type="submit">Verificar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a=(float)($_POST["a"]??0); $b=(float)($_POST["b"]??0); $c=(float)($_POST["c"]??0);
    if ($a>0 && $b>0 && $c>0 && $a+$b>$c && $a+$c>$b && $b+$c>$a) {
        if ($a==$b && $b==$c) $tipo="equilátero";
        elseif ($a==$b || $a==$c || $b==$c) $tipo="isósceles";
        else $tipo="escaleno";
        echo "<p>Os lados formam um triângulo $tipo.</p>";
    } else echo "<p>Essas medidas não formam um triângulo.</p>";
}
?>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
