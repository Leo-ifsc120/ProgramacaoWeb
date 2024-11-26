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

	<form action="../HTML/Exerc9.HTML" method="post">
        <fieldset>
            <legend> Supermercados AAA - Processamento de vendas </legend>
            
            <?php

            $valorCompra = $_POST["valor_compra"];
            $desconto = 0;
            $acrescimo = 0;
            if(isset($_POST["forma_pagamento"]))
            {

                $formaPagamento = $_POST["forma_pagamento"];
                switch ($formaPagamento)
                {

                    case 0:
                        $desconto = $valorCompra * 5/100;
                        break;
                    case 1:
                        $acrescimo = $valorCompra * 2/100;
                        break;

                }

            }
            else
            {

                die("<p> Forma de pagamento não informada </p> <button> Processar uma nova conta </button>");

            }

            $mensagem = "O cliente Não pagou com um cartão Visa Sorteio. não disponivel";

            if(isset($_POST["pagamento_visa"]))
            {
                $mensagem = "O cliente pagou com um cartão Visa Sorteio. disponivel";
            }

            $valorTotal = $valorCompra - $desconto + $acrescimo;
            $valorTotalFormatado = number_format($valorTotal, 2, "," , ".");
            $valorCompraFormatado = number_format($valorCompra, 2, "," , ".");
            $descontoFormatado = number_format($desconto, 2, "," , ".");
            $acrescimoFormatado = number_format($acrescimo, 2, "," , ".");

            
            echo("<p> $mensagem </p><p> Valor total: $valorTotalFormatado </p> <p> Valor da compra: $valorCompraFormatado </p> <p> Valor do desconto: $descontoFormatado </p> <p> Valor do acréscimo: $acrescimoFormatado </p>");

            ?>

            <button> Processar uma nova conta </button>

        </fieldset>
    </form>
</body>
</html>