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

	<form action="../HTML/Exerc10.HTML" method="post">
        <fieldset>
            <legend> Supermercados AAA - Processamento de vendas </legend>
            
            <?php

            $valorCompra = $_POST['valor_compra'];

            if(!isset($_POST['faixa_etaria']))
            {

                die('<p>selecione uma faixa etária</p>');


            }
            else
            {

                $faixaEtaria = $_POST['faixa_etaria'];
                $taxaDesconto = 0;


                switch ($faixaEtaria)
                {
                    case 0:
                        $taxaDesconto = 0;
                        break;
                    case 1:
                        $taxaDesconto = 5;
                        break;
                    case 2:
                        $taxaDesconto = 7;
                        break;

                }
                if (isset($_POST['fidelidade']));
                {
                    $taxaDesconto += 5;
                }

                $desconto = $valorCompra * $taxaDesconto / 100;

                $valorFinalCompra = $valorCompra - $desconto;

                $valorCompraFormatado = number_format($valorCompra, 2, ",", ".");
                $descontoFormatado = number_format($desconto, 2, ",", ".");
                $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

                echo("<p> Resultado da venda dos medicamentos: 
                          <br>
                          Valor inicial da compra: R$$valorCompra
                          <br>
                          Taxa de desconto.......: $taxaDesconto
                          valor do desconto......: $descontoFormatado
                          <br>
                          Valor final da compra..: $valorFinalCompraFormatado");

                

            }
            ?>
            <button> Processar uma nova conta </button>

        </fieldset>
    </form>
</body>
</html>