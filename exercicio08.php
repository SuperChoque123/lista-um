<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números pares</title>
</head>
<body>
<form method="POST">
    <label>Digite um número:</label>
    <input type="number" name="numero" required>
    <br>
    <br>
    <button type="submit">Contar Pares</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero < 1) {
        echo "<p>Por favor, informe um número maior ou igual a 1.</p>";
    } else {
        $quantidade_pares = floor($numero / 2);
        echo "<p>Existem <strong>$quantidade_pares</strong> números pares entre 1 e <strong>$numero</strong>.</p>";
    }
}
?>
</body>
</html>
