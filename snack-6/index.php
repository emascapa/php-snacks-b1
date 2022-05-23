<?php
/* 
## Snack 6

Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un 
rettangolo grigio e i PM in un rettangolo verde.

*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="p-4 bg-dark">

    <div class="bg-secondary rounded rounded-4 mb-3 p-4">
        <h2>Insegnanti:</h2>
        <ul>
            <?php foreach ($db['teachers'] as $teacher) { ?>
                <li><?php echo $teacher['name']?> <?php echo $teacher['lastname']?></li>
            <?php } ?>
        </ul>
    </div>

    <div class="bg-success rounded rounded-4 mb-3 p-4">
        <h2>Pisani Micenei:</h2>
        <ul>
            <?php foreach ($db['pm'] as $pm) { ?>
                <li><?php echo $pm['name']?> <?php echo $pm['lastname']?></li>
            <?php } ?>
        </ul>
    </div>


</body>

</html>