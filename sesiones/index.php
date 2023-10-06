<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
    </head>

    <body>
        <?php if(isset($_SESSION["id"])): ?>
            <h1>!Hola <?= $_SESSION["username"] ?></h1>
            <p>Tu email es <?= $_SESSION["email"] ?></p>
        <?php else: ?>
            <h1>No has inicado Sesion</h1>
        <?php endif; ?>
    </body>
</html>