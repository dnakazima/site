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
			
			$IDCLIENTE=$_POST['ALTERAR'];
			$TABELA=$_POST['TABELA'];
			$CAMPO=$_POST['CAMPO'];
			$NOVO=$_POST['NOVO'];
			
			IF(($TABELA=='ENDERECO') || ($TABELA=='TELEFONE')){
				
				$sql="UPDATE $TABELA SET $CAMPO = '$NOVO' WHERE ID_CLIENTE = '$IDCLIENTE'";
				
				if(mysqli_query($conexao, $sql)){
					echo "Alterado!!!<br>";
					
					echo "<a href='update2.html'>Alterar outro campo?</a><br>";
					echo "<a href='../index.html'>Página inicial</a>";
					
				}
				else{
					echo "Não foi realizada a operação".mysqli_error($conexao);
					echo "<a href='update2.html'>Alterar outro campo?</a><br>";
					echo "<a href='../index.html'>Página inicial</a>";
				}
				
				mysqli_close($conexao);
				
				
				}ELSE{
				
				
				$sql="UPDATE $TABELA SET $CAMPO = '$NOVO' WHERE IDCLIENTE = '$IDCLIENTE'";
				
				if(mysqli_query($conexao, $sql)){
					echo "Alterado!!!<br>";
					echo "<a href='update2.html'>Alterar outro campo?</a><br>";
					echo "<a href='../index.html'>Página inicial</a>";
				}
				else{
					echo "Não foi realizada a operação".mysqli_error($conexao);
					echo "<a href='update2.html'>Alterar outro campo?</a><br>";
					echo "<a href='../index.html'>Página inicial</a>";
				}
				mysqli_close($conexao);
			}
			
		?>
	</body>
</html>