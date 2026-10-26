<!DOCTYPE html>
<html lang="pt-br"><head><meta charset="UTF-8"><title>Calculadora</title></head>
<body>
<h2>Calculadora</h2>
<form action="calculadora_back.php" method="post">
    <label>Digite um número: <input type="number" step="any" name="NUM1" required></label><br><br>
    <label>Digite outro número: <input type="number" step="any" name="NUM2" required></label><br><br>
    <label>Operação:
        <select name="OPER" required>
            <option value="+">+</option><option value="-">-</option><option value="*">*</option>
            <option value="/">/</option><option value="^">^ (potência)</option>
        </select>
    </label><br><br>
    <button type="submit">Calcular</button>
    <button type="reset">Limpar</button>
</form>
<p><a href="index.php">Voltar ao menu</a></p>
</body></html>
