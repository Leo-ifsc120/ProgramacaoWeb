<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programação web em PHP - Uso de vetores</title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>

<h1> Uso de vetores no PHP </h1>

<form action="../HTML/Exerc4.html" method="post">
    <fieldset>
        <?php

            $vetorPrecos = ["impressora" => 300.00,
                            "mouse" => 30.85,
                            "teclado" => 150.15];

            $valorTotalCompra = 0;

            if(isset($_POST["produto"]))
            {

                $vetorProdutosComprados = $_POST['produto'];

                foreach($vetorProdutosComprados as $produto)
                {
                    $valorTotalCompra = $valorTotalCompra + $vetorPrecos[$produto];
                }
                $valorTotalCompraFormatado = number_format($valorTotalCompra, 2, ",", ".");

                echo "<div><p>O valor total da compra efetuada é de <span>R$$valorTotalCompra</span></p></div>";

                echo "<div><p>Produtos selecinados<br>";
                foreach($vetorProdutosComprados as $produto)
                {
                    echo "<span> $produto </span><br>";
                }
                echo "</div></p>";
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