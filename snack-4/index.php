<?php
/* 
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta
*/

$myArray = [];

while (count($myArray) < 15) {

    $ran_num = rand(1, 100);

    if (!in_array($ran_num, $myArray)) {
        $myArray[] = $ran_num;
    }
}

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

    <h2>Your random array:</h2>

    <ul>

        <?php for ($i = 0; $i < count($myArray); $i++) { ?>

            <li><?php echo $myArray[$i]; ?></li>

        <?php } ?>

    </ul>
</body>

</html>