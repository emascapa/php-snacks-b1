<?php
/* 
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un 
punto e una chiocciola e che age sia un numero. Se tutto è 
ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

/* 
$name = $_GET('name');
$mail = $_GET('mail');
$age = $_GET('age'); */

//var_dump($_GET);

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


echo $name;
echo $age;
echo $mail;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <p style="padding: 0.5rem; border: 3px solid red; border-radius: 15px; text-align: center;">
        <em>Inserisci i tuoi parametri nome/mail/età aggiungendo nell'html '?name=<strong>nomeInput</strong>&mail=<strong>mailInput</strong>&age=<strong>ageInput</strong>'</em>
    </p>

    <?php if (strlen($name) > 3 && is_numeric($age) && str_contains($mail, '@') && str_contains($mail, '.')) : ?>
        <h2>Accesso Riuscito</h2>
    <?php else : ?>
        <h2>Accesso negato sry</h2>
    <?php endif; ?>

</body>

</html>