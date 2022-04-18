<?php
    include_once "conecta.php";
    include_once "telas/tela-login.php";

    $email = $_POST['email'];
    $senha = $_POST['password'];
    $confirmaSenha = $_POST['confirm-password'];

    $verifica = mysqli_query($con, "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");

    if($senha == $confirmaSenha){
        if(mysqli_num_rows($verifica)>0){
            header("Location: telas/tela-principal.php");
            die();
        }else{
            header('Location: telas/tela-login.php');
            die();
        }
    }else{
        header('Location: telas/tela-login.php');
        die();
    }
    
?>