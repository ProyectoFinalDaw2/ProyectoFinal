<?php

include_once '../db/db_connect.php';
include_once '../db/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de sesi�n segura: P�gina protegida</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>�Bienvenido, <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
                Este es un ejemplo de p�gina protegida.  Para acceder a esta p�gina, los usuarios
                deber�n iniciar su sesi�n.  En alg�n momento, tambi�n verificaremos el rol 
                del usuario para que las p�ginas puedan determinar el tipo de usuario 
                autorizado para acceder a la p�gina.
            </p>
            <p>Regresar a la<a href="index.php">p�gina de inicio de sesi�n.</a></p>
        <?php else : ?>
            <p>
                <span class="error">No est� autorizado para acceder a esta p�gina.</span> Please <a href="../index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>