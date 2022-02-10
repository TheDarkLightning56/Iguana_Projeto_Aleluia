<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.js" type="text/javascript"> </script>
    <link rel="icon" type="image/png" href="images/icons/ico.ico"/>
    <title>Inicio</title>
</head>
<body>
    


<div id="barralateral"><!-- Barra de Menu-->
        <div id='menu'>
            <ol>
                <li><a href='dashboard.php'>Upload(Carteira)</a></button></li>
                <li><a href='cadastrafundo.php'>Cadastra Fundo</a></button> </li>
                <br>
                <br>
                <br>
               <div id='sair'> <li><a href='php/sair.php' >Sair</a></button> </li></div>
            </ol>
        </div>
    </div> 
    <div id="espaco">
        <form id="arquivos" method="POST" action="php/aleluia.php" enctype="multipart/form-data">
            <input type="file" name="arquivo" id="arquivo"><br><!-- Botão para add o arquivo em Xls -->
            <button class="arquivo-btn" type="file" type="submit" name="enviar"><!-- Botão efetivar a leiturax'-->

                <img src="images/pasta.png" width="50%" height="50%">
                <h1>Enviar Relatório</h1>
            </button>
            <br>
            <div class="Erro"> <!-- Mensagem de Erro -->
		
            <?php 
			session_start();
			if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
            }?>
        
		</div>
        </form>
        
    </div>

</body>





<!--
    Developed by Renan Corrêa
-->
</html>