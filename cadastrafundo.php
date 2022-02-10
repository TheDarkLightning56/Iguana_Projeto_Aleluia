<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/icons/ico.ico"/>
    <title>Inicio</title>
</head>
<body>

<!-- Página de Cadastro de Fundo -->

    <div id="barralateral"><!-- Barra de Menu-->
        <div id='menu'>
            <ol>
                <li><a href='dashboard.php'>Upload(Carteira)</a></li>
                <li><a href='cadastrafundo.php'>Cadastra Fundo</a> </li>
                <br>
                <br>
                <br>
                <div id='Sair'><li><a href='php/sair.php' >Sair</a> </li></div>
            </ol>
        </div>
    </div> 
    <div id='espaco'> <!-- Espaço para a função -->
  
				    <form id='cadastra' method='POST' action='php/fundo.php'>
                  
                         <label>Nome do Fundo<input class="input100" type="text" name="nomefundo"></label>
                         <label>Mnemonico<input class="input100" type="text" name="apelido"></label>
                         <label>CNPJ<input class="input100" type="text" name="cnpj"></label>   
                        <br>

                            XML<input type="radio" name="tipoArquivo" id="XML" value="XML"><br>
                            XLS<input type="radio" name="tipoArquivo" id="XLS" value="XLS"><br>
                            PDF<input type="radio" name="tipoArquivo" id="PDF" value="PDF"><br>
                        <br>
                       
                        <button class="cadastrar-btn">
							Cadastrar
						</button>
					    
				    </form>
        <div id="Erro"> <!-- Sessão de Mensagem de Erro -->
		<p>
            <?php 
            session_start(); 
			
			if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
            }?>
        </p>
		</div>

 
</div>
            
            
			
        
        
 
   
    
</body>
<!--
    Developed by Renan Corrêa
-->
</html>