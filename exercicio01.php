<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número par ou ímpar</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_par">Verifica se é um número primo:</label>
        <input type="number" id="numero_par" name="numero-par" required>
        <button type="submit" name="verificar_par">Verificar</button>
   </form>
   <?php

 if($_SERVER['REQUEST_METHOD'] == 'POST') if( isset($_post['verificar_par'])){
            $numero = $_post['numero_par'];
            
            if( $numero % 2 == 0 ){
                echo "<p> O número $numero é par! </p>";
            }
            else{
                echo "<p> O número $numero é ímpar! </p>";
            };
        };
        
?>
</body>
</html>
