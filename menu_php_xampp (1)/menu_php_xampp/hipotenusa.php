<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Hipotenusa</title></head><body>
<h2>Cálculo da Hipotenusa</h2>
<form method="post">
    <label>Cateto A: <input type="number" name="a" min="0" step="any" required></label><br><br>
    <label>Cateto B: <input type="number" name="b" min="0" step="any" required></label><br><br>
    <button type="submit">Calcular</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = (float)($_POST["a"] ?? 0); $b = (float)($_POST["b"] ?? 0);
    if ($a < 0 || $b < 0) echo "<p>Os catetos devem ser positivos.</p>";
    else echo "<p>Hipotenusa: " . number_format(sqrt($a*$a + $b*$b), 2, ",", ".") . "</p>";
}
?>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
