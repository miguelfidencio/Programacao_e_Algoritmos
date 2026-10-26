<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Média</title></head><body>
<h2>Média de 4 notas</h2>
<form method="post">
<?php for ($i=1; $i<=4; $i++): ?>
    <label>Nota <?php echo $i; ?> (0 a 10):
        <input type="number" name="nota<?php echo $i; ?>" min="0" max="10" step="any" required>
    </label><br><br>
<?php endfor; ?>
    <button type="submit">Calcular média</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $notas = [];
    for ($i=1; $i<=4; $i++) $notas[] = (float)($_POST["nota$i"] ?? -1);
    if (min($notas) < 0 || max($notas) > 10) {
        echo "<p>Digite notas entre 0 e 10.</p>";
    } else {
        $media = array_sum($notas) / 4;
        // Faixas de menção adotadas neste exemplo; ajuste se o professor forneceu outras.
        if ($media >= 9) $mencao = "MB";
        elseif ($media >= 7) $mencao = "B";
        elseif ($media >= 5) $mencao = "R";
        else $mencao = "I";
        echo "<p>Média: " . number_format($media, 2, ",", ".") . "</p>";
        echo "<p>Menção: <strong>$mencao</strong></p>";
    }
}
?>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
