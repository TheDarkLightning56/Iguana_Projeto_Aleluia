<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Leitura de Planilha</title>
</head>
<body>
    <!--código de leitura dos dados de Excel (via dashboard.php)-->
    <?php
    session_start();
        if(isset($_POST['enviar'])){
            $conn = new mysqli("localhost","root","root","iguana");
            mysqli_set_charset($conn,"utf8");



            $tipoArquivo = array("xlsx","xls","xml","csv","pdf");
            $ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            $arquivo=$_FILES['arquivo']['tmp_name'];

            if(in_array($ext,$tipoArquivo)){
                require_once "../Classes/PHPExcel.php";
                $reader= PHPExcel_IOFactory::createReaderForFile($arquivo);
                $excel = $reader -> load($arquivo);


                $worksheet=$excel->getActiveSheet();

                $NomeFundo = $worksheet->getCell('B1')->find() ;       
                $DataCar = ($worksheet->getCell('B4')->getValue()) ;           
                $PL=$worksheet->getCell('B13')->getValue() ;
                $QtdCota= $worksheet->getCell('B14')->getValue() ;
                $ValorCota= $worksheet->getCell('B15')->getValue();
                
                echo $DataCar;
                echo"<br>";
                echo $PL;
                echo"<br>";
                echo $QtdCota;
                echo"<br>";
                echo $ValorCota;
                echo"<br>";
                $res = $conn->query("INSERT INTO carteiras (NomeFundo,DataCar,PL,QtdCota,ValorCota) VALUES ('$NomeFundo','$dataForm','$PL','$QtdCota','$ValorCota')");
                if($res){
                    echo "Cadastro Feito";
                }
                else{
                    echo "Cadastro Negado"; 
                }
                }
            else{
                header("Location: ../dashboard.php");
                $_SESSION['mensagem']= "Arquivo Inválido, <strong>verifique e tente novamente</strong>";
                
                
            }
        }
    



    
    ?>
    
</body>
<!--
    Developed by Renan Corrêa
-->
</html>