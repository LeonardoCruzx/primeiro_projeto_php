<?php
    include("../models/aluno.php");
    session_start();
    $user = unserialize($_SESSION['user']);
    var_dump($user);
?>

<html>
    <body>
        <p><?php ?></p>
    </body>
</html>