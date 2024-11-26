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

	<form action="../PHP/Exerc7.php" method="post">
        <fieldset>
            <legend> Supermercados AAA - Processamento de vendas </legend>
           
            <?php

            $valorCompra = $_POST["valor_compra"];


            if(isset($_POST["forma_pagamento"]))
            {
                $formaPagamento = $_POST["forma_pagamento"];
                if($formaPagamento == "sim")
                {
                    $desconto = $valorCompra * (5/100);
                }
                else
                {
                    $desconto = 0;
                }
            }
            else
            {
                exit("<p> Por favor selecione a forma de pagamento. </p>");
                
            }

            if(isset($_POST["forma_entrega"]))
            {
                $formaEntrega = $_POST["forma_entrega"];
                if($formaEntrega == "sim")
                {
                    $acrecimo = $valorCompra * (2/100);
                }
                else
                {
                    $acrecimo = 0;
                }
            }
            else
            {
                exit("<p> Por favor selecione a forma de entrega. </p>");
                
            }

            $valorTotal = $valorCompra - $desconto + $acrecimo;
            $valorTotalFormatado = number_format($valorTotal, 2, "," , ".");

            echo("<p> Caro usuario de acordo com os dados fornecidos o valor total da compra pago pelo cliente é de <span> $valorTotalFormatado </span> </p>");

            ?>

        </fieldset>
    </form>
</body>
</html>
