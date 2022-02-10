<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/ico.ico"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="espacoLogin"><!-- Login -->
					
					<form id='cadastra' method='POST' action='php/valida.php'>
                  		<span class="login100-form-title p-b-70">
							Iguana Investimentos
						</span>
						<br>
						<br>
                         <label>Email<input class="input100" type="email" name="email" id="email"></label>
                         <label>Senha<input class="input100" type="password" name="senha" id="senha"></label>
                           
                        <br>
                       
                        <button class="cadastrar-btn">
							Login
						</button>
					    
				    </form>
				
					
		<div class="Erro"> <!-- Mensagem de Erro -->
		
		
            <?php 
			session_start();
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        
		</div>
					
				
			
	</div>



	


</body>
<!--
    Developed by Renan Corrêa
-->
</html>