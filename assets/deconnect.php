<?php
    session_start();
    require 'verif.php';
    require 'config.php';

    if(($_POST["deconnexion"])==="deconnexion"){
        session_destroy();
        header("Location:../store.php");
    }
?>