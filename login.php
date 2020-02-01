<?php
    include("models/aluno.php");

    session_start();

    if(isset($_POST["login"]) && isset($_POST["senha"])){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
    }
    $al = Aluno::authenticate($login,$senha);
    $_SESSION['user'] = serialize($al);
    header('location:user_logged/');

?>