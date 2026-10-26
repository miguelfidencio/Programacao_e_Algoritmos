<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Tabuada</title></head><body>
<h2>Tabuada</h2>
<form method="post">
    <label>Tabuada de qual número? <input type="number" name="numero" required></label><br><br>
    <label>Começar em: <input type="number" name="inicio" value="0" required></label><br><br>
    <label>Terminar em: <input type="number" name="fim" value="10" required></label><br><br>
    <button type="submit">Mostrar tabuada</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n=(int)($_POST["numero"]??0); $inicio=(int)($_POST["inicio"]??0); $fim=(int)($_POST["fim"]??10);
    if (abs($fim-$inicio)>500) echo "<p>Escolha um intervalo de até 500 números.</p>";
    else {
        $passo = $inicio <= $fim ? 1 : -1;
        echo "<h3>Tabuada do $n</h3><ul>";
        for ($i=$inicio; $passo>0 ? $i<=$fim : $i>=$fim; $i+=$passo)
            echo "<li>$n × $i = " . ($n*$i) . "</li>";
        echo "</ul>";
    }
}
?>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
