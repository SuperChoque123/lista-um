<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    
   <form method="POST" action="">
        <label for="numero_+-=">calcular fatorial do:</label>
        <input type="number" id="numero_fatorial" name="numero_fatorial" required>
        <button type="submit" name="numero_fatorial">Verificar</button>
   </form>

<?php
if ($SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero_fatorial'])) {
    $numero = intval($POST['numero_fatorial']);
    if ($numero < 0) {
        echo "Não é possível calcular o fatorial de um número negativo.";
    } else {
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        echo "O fatorial de $numero é $fatorial.";
    }
}
?>
</body>
</html>
