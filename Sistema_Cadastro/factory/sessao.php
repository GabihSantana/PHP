<?php
    session_start();

    if(!isset($_SESSION['login']) == true and !isset($_SESSION['login']) == true){
        header('location: ../index.php');
    }

    $logado = $_SESSION['login'];

?>