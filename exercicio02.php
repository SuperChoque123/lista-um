<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular tabuada</title>
</head>
<body>
        <form method="POST" action="">
        <label for="numero_tabuada">Verifica tabuada:</label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>
<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') if( isset($_post['verificar_tabuada'])){
            $numero = $_post['numero_tabuada'];
            echo "<p>tabuada do número $numero: </p>";
            echo "<ul>";
            for($i=1;$i<=10;$i++){
                $resultado=$numero*$i;
                echo "<li>$numero x $i = $resultado</li>";
            }
        echo "</ul>";
        }
?>
</body>
</html>