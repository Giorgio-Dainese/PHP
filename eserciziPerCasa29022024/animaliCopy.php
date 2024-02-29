<!-- 
    scrivere un file animali.html ed elencare in forma di elenco ordinato 10 animali
    creare una copia del file in formato php in cui i nomi degli animali sono definiti 
    nella variabile $animali di tipo array
 -->


 <?php

    $animali =  [
                    "Mucca",
                    "Cavallo",
                    "Tonno",
                    "Aquila",
                    "Nasello",
                    "Calamaro",
                    "Quokka",
                    "Rinoceronte",
                    "Elefante",
                    "Cigno"
                ]

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php 
        foreach($animali as $animale){
            echo '<li>' . $animale . '</li>';
        }
        ?> 
    </ol>
</body>
</html>