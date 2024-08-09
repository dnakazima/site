<style>
.wrong {
    margin-top: 5px;
    padding: 5px;
    background-color: blue;
    border: 2px solid #666;
    width: 300px;
    color: #ffffff;
}
</style>




<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT C.IDCLIENTE,
					   C.NOME,
					   C.SEXO,
					   C.EMAIL,
					   C.CPF,
					   T.TIPO,
					   T.NUMERO,
					   E.RUA,
					   E.BAIRRO,
					   E.CIDADE,
					   E.ESTADO
			FROM CLIENTE C
			INNER JOIN TELEFONE T
			ON C.IDCLIENTE = T.ID_CLIENTE
			INNER JOIN ENDERECO E
			ON  C.IDCLIENTE = E.ID_CLIENTE
			WHERE NOME = '$pesquisar'	
			LIMIT 5";
    $resultado_cliente=mysqli_query($conexao, $resultado);

    while($rows_cliente=mysqli_fetch_array($resultado_cliente)){
		
        echo "IDCLIENTE: ".$rows_cliente['IDCLIENTE']."<br>";
		
        echo "<div class='wrong'>".'NOME: '.$rows_cliente['NOME'].'<br>'."</div>";
		
        echo "SEXO: ".$rows_cliente['SEXO']."<br>";
        echo "EMAIL: ".$rows_cliente['EMAIL']."<br>";
        echo "CPF: ".$rows_cliente['CPF']."<br>";
		echo "TIPO: ".$rows_cliente['TIPO']."<br>";
        echo "NUMERO: ".$rows_cliente['NUMERO']."<br>";
        echo "RUA: ".$rows_cliente['RUA']."<br>";
        echo "BAIRRO: ".$rows_cliente['BAIRRO']."<br>";
        echo "CIDADE: ".$rows_cliente['CIDADE']."<br>";
		echo "ESTADO: ".$rows_cliente['ESTADO']."<br>";
        echo "<br>";
        echo "<a href='../index.html'>Página inicial</a>";
    }
?>