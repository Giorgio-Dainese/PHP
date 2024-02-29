<!-- nel file conta.php usando un ciclo scrivere i numeri da uno a 100 , uno per riga -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
for($i=1;$i<101;$i++){
    echo '<span>' . $i . '</span><br>';
}
?>
   
</body>
</html>