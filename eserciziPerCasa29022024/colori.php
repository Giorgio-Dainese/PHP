<!-- 
    nel file colori.php stampare una tabella che contiene i colori, 
    uno per riga e a fianco del colore indicare la sensazione che determina nel carattere 
    delle persone. Usare un array a due dimensioni fatto in questo modo: 
 $colori=[
[‘giallo’, ‘felicità],
…
[‘verde, ‘speranza]
];
 -->

 <?php
$colori=[
        ['giallo', 'felicità'],
        ['verde', 'speranza'],
        ['blu', 'lealtà'],
        ['viola', 'superbia'],
        ['rosso', 'passione'],
        ['arancione', 'gioia'],
        ['rosa', 'affetto'],
        ['marrone', 'tristezza'],
        ['grigio', 'freddezza'],
        ['bianco', 'innocenza'],
        ['nero', 'lutto']
    ];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <table style="border: 1px solid black;">
        <tr>
            <td style="border: 1px solid black;">Colore</td>
            <td style="border: 1px solid black;">Sensazione</td>
        </tr>
       
       <?php
        foreach($colori as $colore){
        echo '<tr><td style="border: 1px solid black;">' . $colore[0] . '</td><td style="border: 1px solid black;">' . $colore[1] . '</td></tr>';
        }
       ?>
    </table>
 </body>
 </html>