<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
    include("conexao.php");
	
	$IDCLIENTE=$_POST['IDCLIENTE'];
    $CABECALHO=$_POST['CABECALHO'];
	$VALOR=$_POST['VALOR'];
	
    $sql="UPDATE CLIENTE SET $CABECALHO = '$VALOR' WHERE IDCLIENTE = $IDCLIENTE";

    if(mysqli_query($conexao, $sql)){
        echo "Cadastro ALTERADO";
    }
    else{
        echo "Não foi realizada a operação".mysqli_error($conexao);
    }
    mysqli_close($conexao);

?>
</body>
</html>