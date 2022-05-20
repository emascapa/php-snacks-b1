<?php

/* Creiamo un array contenente le partite di basket 
di un’ipotetica tappa del calendario. Ogni array avrà 
una squadra di casa e una squadra ospite, punti fatti 
dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$calendar = [
    [
        'home_team' => 'Gorgonzola',
        'guest_team' => 'Osnago',
        'home_points' => 45,
        'guest_points' => 98
    ],
    [
        'home_team' => 'Cantù',
        'guest_team' => 'Lecco',
        'home_points' => 20,
        'guest_points' => 82
    ],
    [
        'home_team' => 'Milano',
        'guest_team' => 'Calco',
        'home_points' => 77,
        'guest_points' => 55
    ],
    [
        'home_team' => 'Como',
        'guest_team' => 'Lodi',
        'home_points' => 12,
        'guest_points' => 34
    ],
    [
        'home_team' => 'Bergamo',
        'guest_team' => 'Brescia',
        'home_points' => 55,
        'guest_points' => 55
    ],
    [
        'home_team' => "Trezzo sull'Adda",
        'guest_team' => 'Merate',
        'home_points' => 47,
        'guest_points' => 48
    ]

];

//var_dump($calendar[i])


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

    <ul>


        <?php for ($i = 0; $i < count($calendar); $i++) { ?>

            <li><?php echo $calendar[$i]['home_team'] ?> - <?php echo $calendar[$i]['guest_team'] ?> | <?php echo $calendar[$i]['home_points'] ?>-<?php echo $calendar[$i]['guest_points'] ?></li>

        <?php } ?>
    </ul>


</body>

</html>