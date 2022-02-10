<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/icons/ico.ico"/>
    <title>Cadastro de Usuário</title>
</head>
<body>
<!-- Cadastro de Usuário -->
<div id="espacoCadastra"> <!-- Formulário para Cadastro -->
    <form id='cadastra' method='POST' action='php/users.php'>
        <span class="login100-form-title p-b-70">
			Cadastrar
		</span>
        <br>
                  
        <label>Nome<input class="input100" type="text" name="nome" id='nomeuser'></label>
		<label>Email<input class="input100" type="email" name="email" id='email'></label>
		<label>Senha<br><input class="input100" type="password" name="senha" id='senha'></label>   
				<br>
		<button class="cadastrar-btn" type='submit'>
			Cadastrar
		</button>


    </form>
    <div class="Erro"> <!-- Mensagem de Erro -->
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





