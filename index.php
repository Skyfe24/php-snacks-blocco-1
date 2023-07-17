<!--   # Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

# Snack 2
Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
altrimenti “Accesso negato”

# Bonus
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo.    -->

<?php 

$games = [
    [
        'squadra_di_casa' => 'Blue Team',
        'punteggio_squadra_di_casa' => 122,
        'squadra_ospite' => 'Red Team',
        'punteggio_squadra_ospite' => 18,




],
['squadra_di_casa' => 'Pink Team',
'punteggio_squadra_di_casa' => 99,
'squadra_ospite' => 'Black Team',
'punteggio_squadra_ospite' => 99,




],
['squadra_di_casa' => 'Yellow Team',
'punteggio_squadra_di_casa' => 67,
'squadra_ospite' => 'Crimson Team',
'punteggio_squadra_ospite' => 88,




],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Snacks 1 </title>
</head> 
<body>
    <ul>
    <?php foreach ($matches as [
        'squadra_di_casa' => $squadra_di_casa,
        'punteggio_squadra_di_casa'=> $punteggio_squadra_di_casa,
        'squadra_ospite'=> $squadra_ospite,
        'punteggio_squadra_ospite'=> $punteggio_squadra_ospite,
    
    ]) : ?> <li>
        
        <?=  $squadra_di_casa   ?> - <?=  $squadra_ospite   ?> <br> <?=  $squadra_ospite   ?> - <?=  $punteggio_squadra_ospite   ?>
    </li>
    <?php endforeach ?>


    
    </ul>
    



</body>
</html>















