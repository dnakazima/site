<?php
    include("conexao.php");

    
    $IDCLIENTE=$_POST['IDCLIENTE'];
    $RUA=$_POST['RUA'];
    $BAIRRO=$_POST['BAIRRO'];
    $CIDADE=$_POST['CIDADE'];
    $ESTADO=$_POST['ESTADO'];
   

    $sql="INSERT INTO ENDERECO (IDENDERECO,ID_CLIENTE,RUA,BAIRRO,CIDADE,ESTADO)
        VALUES (NULL,'$IDCLIENTE','$RUA', '$BAIRRO','$CIDADE', '$ESTADO')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Endereço cadastrado com sucesso</h1>";
        echo "<a href='cadastro_cliente.html'>Cadastrar novo ENDEREÇO?</a><br>";
        echo "<a href='../index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>