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

	<form action="../PHP/Exerc5.php" method="post">
		<fieldset>
			<legend>Conversão termometrica com PHP</legend>

			<label class="alinha"> Informe o preço em dólares: : </label>
			<input type="number" name="dolar" autofocus step="0.01">
			<br>

			<button> Converter dólares</button>
		</fieldset>
	</form>

    <?php
    define("TaxaCambio", 5.75);

    $reais = ($_POST['dolar'] * taxa_cambio);
   
    $reais_formatado = number_format($reais, 1 , ",", ".");
    

    echo "<div><p> Conversão </p> <p> Valor em reais: $reais_formatado </p> <p> Valor de câmbio: " . taxa_cambio . " </p> </div>"

    ?>

</body>
</html>