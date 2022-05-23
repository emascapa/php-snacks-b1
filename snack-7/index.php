<?php
/* 
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti 
scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$class = [
    [
        "name" => "Pippo",
        "surname" => "Baudo",
        "grades" => [
            6,
            7,
            4,
            5,
            9
        ]
    ],
    [
        "name" => "Naruto",
        "surname" => "Uzumaki",
        "grades" => [
            9,
            10,
            3,
            7,
            9
        ]
    ],
    [
        "name" => "Cippa",
        "surname" => "Lippa",
        "grades" => [
            8,
            6,
            7,
            9,
            6
        ]
    ],
    [
        "name" => "Sandro",
        "surname" => "Sondrio",
        "grades" => [
            3,
            4,
            5,
            3,
            5
        ]
    ],
    [
        "name" => "Gigina",
        "surname" => "Lippi",
        "grades" => [
            6,
            9,
            10,
            5,
            9
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>

    <h1>Classe 5° A:</h1>

    <ul>
        <?php for ($i = 0; $i < count($class); $i++) { ?>
            <li>
                <strong>
                    <?php echo $class[$i]['name'] ?> <?php echo $class[$i]['surname'] ?>.
                </strong>
                
                Media Voti:
                <?php
                $sum = 0;

                for ($j = 0; $j < count($class[$i]['grades']); $j++) {

                    $sum = $sum + $class[$i]['grades'][$j];
                }

                $media = $sum / count($class[$i]['grades']);

                echo $media;

                ?>
            </li>
        <?php } ?>
    </ul>

</body>

</html>