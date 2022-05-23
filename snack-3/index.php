<?php
/* 
Creare un array di array. Ogni array figlio 
avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un 
array di post associati a quella data. 
Stampare ogni data con i relativi post.

Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="text-center p-4 bg-dark">

    <?php foreach ($posts as $key => $value) { ?>

        <h2 class="text-light"><?php echo $key; ?></h2>
        <ul class="list-unstyled">
            <?php foreach ($value as $post) { ?>
                <li>
                    <div class="rounded rounded-4 border border-2 border-dark my-3 p-2 bg-light d-flex flex-column mx-auto">

                        <img class="rounded rounded-4 mb-2" src="http://picsum.photos/500/200" alt="">
                        
                        <h4><?php echo $post['title']; ?></h4>
                        <h6><?php echo $post['author']; ?></h6>
                        <p class="mb-0"><?php echo $post['text']; ?></p>
                        
                    </div>
   
                </li>
            <?php } ?>
        </ul>

    <?php } ?>

</body>

</html>