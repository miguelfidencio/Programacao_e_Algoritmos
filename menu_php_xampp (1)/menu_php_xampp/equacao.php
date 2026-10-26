<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Equação do 2º grau</title></head><body>
<h2>Equação do 2º grau: ax² + bx + c = 0</h2>
<form method="post">
    <label>a: <input type="number" name="a" step="any" required></label><br><br>
    <label>b: <input type="number" name="b" step="any" required></label><br><br>
    <label>c: <input type="number" name="c" step="any" required></label><br><br>
    <button type="submit">Resolver</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a=(float)($_POST["a"]??0); $b=(float)($_POST["b"]??0); $c=(float)($_POST["c"]??0);
    if ($a == 0.0) echo "<p>O coeficiente a deve ser diferente de zero.</p>";
    else {
        $delta=$b*$b-4*$a*$c;
        echo "<p>Delta: " . number_format($delta, 2, ",", ".") . "</p>";
        if ($delta < 0) echo "<p>Não existem raízes reais.</p>";
        elseif ($delta == 0) echo "<p>Uma raiz real: x = " . number_format(-$b/(2*$a), 2, ",", ".") . "</p>";
        else {
            $x1=(-$b+sqrt($delta))/(2*$a); $x2=(-$b-sqrt($delta))/(2*$a);
            echo "<p>x₁ = " . number_format($x1, 2, ",", ".") . "</p>";
            echo "<p>x₂ = " . number_format($x2, 2, ",", ".") . "</p>";
        }
    }
}
?>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
