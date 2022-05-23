<?php 
/* 
Descrizione:
Stampare una stringa verde se la variabile 
password passata in GET è uguale a “Boolean”, 
altrimenti stampare una stringa rossa.

*/

$input = $_GET['password'];


if ($input) {
    var_dump($input);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>
</head>
<body>

    <h1 style="color: <?php echo ($input == 'Boolean') ? 'green' : 'red'; ?>">
        <?php echo $input ?>

    </h1>
    
</body>
</html>