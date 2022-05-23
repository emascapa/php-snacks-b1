<?php
/* 
## Snack 5

Prendere un paragrafo abbastanza lungo, 
contenente diverse frasi. Prendere il paragrafo 
e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.


*/

$myString = "Pikachu (ピカチュウ Pikachū) è un Pokémon base della prima generazione di tipo Elettro. Il suo numero identificativo Pokédex è 25. Nel contesto del franchise creato da Satoshi Tajiri, Pikachu evolve da Pichu al raggiungimento di uno specifico livello di felicità e si evolve a sua volta in Raichu tramite l'utilizzo dello strumento Pietratuono. Ideato dal team di designer della Game Freak, Pikachu fa la sua prima apparizione nel 1996 nei videogiochi Pokémon Rosso e Blu ed è presente nella maggior parte dei videogiochi della serie. Dopo essere stato scelto come personaggio principale della serie animata Pokémon a fianco di Ash Ketchum, è diventato la mascotte ufficiale del franchise. Appare inoltre in tutti i film di Pokémon, nel Pokémon Trading Card Game, dove è il Pokémon più rappresentato in assoluto, e in numerosi manga derivati dalla serie, oltre ad essere protagonista dei videogiochi Pokémon Giallo, Pokémon Dash, Hey You, Pikachu!, PokéPark Wii: La grande avventura di Pikachu e Pokémon Let's Go, Pikachu! Considerato uno dei personaggi più famosi e conosciuti del franchise, Pikachu è assurto a icona della cultura giapponese e kawaii. Per la sua popolarità è stato paragonato all'equivalente giapponese di Topolino ed è stato oggetto di numerose campagne commerciali, omaggi e parodie.";

$arrayStrings = explode(". ", $myString);

/* var_dump($myString);
var_dump($arrayStrings);

foreach ($arrayStrings as $item) {
    var_dump($item);
}; */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Whole paragraph</h2>

    <p><?php echo $myString ?></p>


    <h2>Splitted Paragraphs</h2>

    <ul>
        <?php foreach ($arrayStrings as $item) { ?>
            <li><?php echo $item ?>.</li>
        <?php } ?>
    </ul>

</body>

</html>