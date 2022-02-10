<?php
/*Código de inserção de usuário */
include_once "connect.php";
session_start(); 

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//$senha = md5($senha);



if((isset($_POST['nome'])) && (isset($_POST['email']) && (isset($_POST['senha'])))){
    if(((empty($_POST['nome'])) || (empty($_POST['email']) || (empty($_POST['senha']))))){
        header("Location: ../cadastraUsers.php");
        $_SESSION['mensagem'] =  "Digite os Dados Solicitados";
        echo $_SESSION['mensagem'];
    }
    else{
        

        $res = $strcon->query("INSERT INTO users (nome,email,senha) VALUES ('$nome','$email','$senha')");

        if($res){
            header("Location:  ../cadastraUsers.php");
            $_SESSION['mensagem'] =  "Dados Cadastrados";
	        echo $_SESSION['mensagem'] ;
    
        }
        else{
            header("Location: ../cadastraUsers.php");
            $_SESSION['mensagem'] =  "Falha no Cadastro";
	        echo $_SESSION['mensagem'];
        }
    }
}

/*
Developed by Renan Corrêa
*/
?>