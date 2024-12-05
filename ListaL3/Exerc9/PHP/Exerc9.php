<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programação web em PHP - Uso de vetores</title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>

<h1> Uso de vetores no PHP </h1>

<form action="../HTML/Exerc9.html" method="post">
    <fieldset>
        <?php

            $vetorPrecos = ["tomate" => 10.50,
                            "cebola" => 6.40,
                            "alho" => 5.99,
                            "batata" => 4.00];

            $valorTotalCompra = 0;

            if(isset($_POST["produto"]))
            {

                $vetorProdutosComprados = $_POST['produto'];

                foreach($vetorProdutosComprados as $produto)
                {
                    $valorTotalCompra = $valorTotalCompra + $vetorPrecos[$produto];
                }
                $valorTotalCompraFormatado = number_format($valorTotalCompra, 2, ",", ".");

                echo "<div><p>Produtos selecinados<br>";
                foreach($vetorProdutosComprados as $produto)
                {
                    echo "<span> $produto </span><br>";
                }
                echo "</div></p>";
            }

        if(isset($_POST["cartao"]))
        {

            $desconto = $valorTotalCompra * 5 / 100;
            $valorFinal = $valorTotalCompra - $desconto;
            $valorFinalFormatado = number_format($valorFinal, 2, ",", ".");

            echo "<div><p>Desconto de 5% para cartão fidelidade.<br> O valor total da compra efetuada é de <span>R$$valorFinalFormatado</span></p></div>";

        }
        else
        {

            echo "<div><p>O valor total da compra efetuada é de <span>R$$valorTotalCompra</span></p></div>";

        }


        ?>


        <button> Refazer compra </button>

    </fieldset>
</form>

</body>
</html>