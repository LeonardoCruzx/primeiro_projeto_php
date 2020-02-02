<?php
    include("../../models/aluno.php");
    session_start();
    $user = unserialize($_SESSION['user']);
    var_dump($user);
?>

<html>
    <body>
    <form action="../../controllers/teste.php" method="POST">
            login: <input type=text name=login><br>
            senha: <input type=text name=senha><br>
        <input type=submit value="OK">
        </form>
    </body>
</html>