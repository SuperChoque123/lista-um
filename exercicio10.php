<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
<form method="POST">
    <label>Digite o número:</label>
    <input type="number" name="n1" required>
    <br>
    <button type="submit" name="Verificar">Calcular Soma</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['Verificar'])){
        $numero=$_POST['n1'];
        $i=0;
        $a=1;
        echo "Fibonacci até $numero\n<br>";
        while($i<=$numero){
            echo "$i\n";
            $temp=$i+$a;
            $i = $a;
            $a = $temp;
        }
    }
}
?>
</body>
</html>
