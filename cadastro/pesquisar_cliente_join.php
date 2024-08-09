<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT C.IDCLIENTE,
					   IFNULL(C.NOME,'***') AS NOME,
					   IFNULL(C.SEXO,'***') AS SEXO,
					   IFNULL(C.EMAIL,'***') AS EMAIL,
					   IFNULL(C.CPF,'***') AS CPF,
					   IFNULL(T.TIPO,'***') AS TIPO,
					   IFNULL(T.NUMERO,'***') AS NUMERO,
					   IFNULL(E.RUA,'NAO INFORMOU') AS RUA,
					   IFNULL(E.BAIRRO,'***') AS BAIRRO,
					   IFNULL(E.CIDADE,'***') AS CIDADE,
					   IFNULL(E.ESTADO,'***') AS ESTADO
			FROM CLIENTE C
			LEFT JOIN TELEFONE T
			ON C.IDCLIENTE = T.ID_CLIENTE
			LEFT JOIN ENDERECO E
			ON  C.IDCLIENTE = E.ID_CLIENTE
			WHERE NOME = '$pesquisar'	
			LIMIT 5";
    $resultado_cliente=mysqli_query($conexao, $resultado);

    while($rows_cliente=mysqli_fetch_array($resultado_cliente)){
        echo "IDCLIENTE: ".$rows_cliente['IDCLIENTE']."<br>";
        echo "NOME: ".$rows_cliente['NOME']."<br>";
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