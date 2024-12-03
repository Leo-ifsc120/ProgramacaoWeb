<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programação web em PHP - Uso de vetores</title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>

<h1> Uso de vetores no PHP </h1>

<form action="../HTML/Exerc8.html" method="post">
    <fieldset>
        <?php

            $vetorPrecos = ["dipirona" => 10.00,
                            "parecetamol" => 15.12,
                            "rivotril" => 80.15];

            $valorTotalCompra = 0;

            if(isset($_POST["remedio"]))
            {

                $vetorRemediosComprados = $_POST['remedio'];

                foreach($vetorRemediosComprados as $remedio)
                {
                    $valorTotalCompra = $valorTotalCompra + $vetorPrecos[$produto];
                }
                $valorTotalCompraFormatado = number_format($valorTotalCompra, 2, ",", ".");

                echo "<div><p>O valor total da compra efetuada é de <span>R$$valorTotalCompra</span></p></div>";

                echo "<div><p>Produtos selecinados<br>";
                foreach($vetorRemediosComprados as $remedio)
                {
                    echo "<span> $remedio </span><br>";
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