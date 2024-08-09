

<?php
    include("conexao.php");
	
	$IDCLIENTE=$_POST['IDCLIENTE'];
    $TIPO=$_POST['TIPO'];
    $NUMERO=$_POST['NUMERO'];
      

    $sql="INSERT INTO TELEFONE (IDTELEFONE,TIPO,NUMERO,ID_CLIENTE)
        VALUES (null,'$TIPO', '$NUMERO','$IDCLIENTE')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>TELEFONE cadastrado com sucesso</h1>";
        echo "<a href='cadastro_telefone.html'>Cadastrar novo cliente?</a><br>";
        echo "<a href='../index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>