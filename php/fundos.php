<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Inicio</title>
</head>
<body>
<!--código de inserção de fundo no banco de dados (via cadastrafundo.php)-->
  
<?php
session_start(); 

$NomeFundo = $_POST['nomefundo'];
$cnpj = $_POST['cnpj'];
$mne = $_POST['apelido'];
$tipoArquivo = $_POST['tipoArquivo'];


$conn = new mysqli("localhost","root","root","iguana");
mysqli_set_charset($conn,"utf8");

$res = $conn->query("INSERT INTO fundos (NomeFundo,CNPJ,Mnemonico,tipoArquivo) VALUES ('$NomeFundo','$cnpj','$mne','$tipoArquivo')");

if($res){
    header("Location: cadastrafundo.php");
    $_SESSION['mensagem'] =  "Dados Cadastrados";
   
}
else{
    header("Location: cadastrafundo.php");
    $_SESSION['mensagem'] =  "Falha no Cadastro";
}
?>
            
            
			
        
        
 
   
    
</body>
<!--
    Developed by Renan Corrêa
-->
</html>