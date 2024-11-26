<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Programação web com PHP </title>
 <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>

<body>

    <h1> Fundamentos do PHP </h1>

    <form action="../PHP/Exerc6.php" method="post">
        <fieldset>
            <legend> Fundamentos do PHP </legend>

            <label class="alinha"> Informe o valor total feito em compras pelo cliente: </label><br>
            <input type="number" name="valorCompra" step="0.01"  autofocus ><br>

            <label class="alinha"> Informe o percentual da comissão para o vendedor: </label><br>
            <input type="number" name="percentualComissao">
            <span>%</span><br>

            <button> Calcular total recebido </button>
        </fieldset>

    </form>

    <?php
    
    $valor = $_POST['valorCompra'];
    $comissao = $_POST['percentualComissao'];

    $valorcom = ($valor * ($comissao / 100));
    $valorcom_formatado = number_format($valorcom, 1 , ",", ".");
    

    echo "<div><p> Comissão </p> <p> Valor da comissão ganha: $valorcom </p> </div>"

    ?>

</body>

</html>