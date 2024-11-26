<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-widthinitial-scale=1.0">
<title>Programação web com PHP</title>
<link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>
	<h1>Fundamentos do PHP</h1>

	<form action="../PHP/Exerc8.php" method="post">
        <fieldset>
            <legend> Supermercados AAA - Processamento de vendas </legend>

            <?php

            $valorCompra = $_POST["valor_compra"];

            $desconto = 0;
            if(isset($_POST["forma_pagamento"]))
            {
                $desconto = $valorCompra * (5/100);
            }

            $acrecimo = 0;
            if(isset($_POST["forma_entrega"]))
            {
                $acrecimo = $valorCompra * (2/100);
            }
            

            $valorTotal = $valorCompra - $desconto + $acrecimo;
            $valorTotalFormatado = number_format($valorTotal, 2, "," , ".");
            $valorCompraFormatado = number_format($valorCompra, 2, "," , ".");
            $descontoFormatado = number_format($desconto, 2, "," , ".");
            $acrescimoFormatado = number_format($acrecimo, 2, "," , ".");


            echo("<p> Valor total: $valorTotalFormatado </p> <p> Valor da compra: $valorCompraFormatado </p> <p> Valor do desconto: $descontoFormatado </p> <p> Valor do acréscimo: $acrescimoFormatado </p>");

            ?>

        </fieldset>
    </form>
</body>
</html>
