<?php
/*Código de validação de usuário */
include_once 'connect.php'; /*Conexão ao banco*/

if((isset($_POST['email'])) || (isset($_POST['senha']))){   
    $emailLogin = $_POST['email'];
    $senhaLogin = $_POST['senha'];
    //$senha = md5($senha);

    $validacaoLogin =  "SELECT * FROM users WHERE email = '$emailLogin' and senha = '$senhaLogin'";

    $resultadovalidacao=mysqli_query($strcon, $validacaoLogin);
    $resultado = mysqli_fetch_array($resultadovalidacao);
    session_start();
    $_SESSION['emailusuario'] = $resultado['email'];
    $_SESSION['senhausuario'] = $resultado['senha'];





    if ($resultado){
    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['email'] = $resultado['email'];
    header("Location:../dashboard.php");    
    }

    else{
        $_SESSION['loginErro'] = "Usuário ou senha Inválido. <br> <strong>Digite os Dados Corretamente</strong>";
        header("Location: ../index.php");
    }
}
else{
        $_SESSION['loginErro'] = "Digite o Email e a Senha";
    header("Location: ../index.php");
    
    
    }
    
    
    
    //Developed by Renan Corrêa
    ?>

