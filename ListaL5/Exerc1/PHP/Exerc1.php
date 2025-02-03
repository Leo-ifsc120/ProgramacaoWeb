<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Programação web com PHP - uso de matrizes </title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>

<body>
<h1> Matrizes na linguagem PHP - listaL5 - exercício 1 avaliativo </h1>
<form method="post" action="../HTML/Exerc1.html">
    <fieldset>
        <legend> Sistema de lavação de carros </legend>


        <?php


        //recebendo os dados do formulário
        $chassi1 = $_POST["chassi1"];
        $chassi2 = $_POST["chassi2"];
        $chassi3 = $_POST["chassi3"];
        $chassi4 = $_POST["chassi4"];

        $fabricante1 = $_POST["fabricante1"];
        $fabricante2 = $_POST["fabricante2"];
        $fabricante3 = $_POST["fabricante3"];
        $fabricante4 = $_POST["fabricante4"];

        $precoVenda1 = $_POST["preco1"];
        $precoVenda2 = $_POST["preco2"];
        $precoVenda3 = $_POST["preco3"];
        $precoVenda4 = $_POST["preco4"];

        //matriz de carros
        $matrizCarros = [$chassi1 => [$fabricante1, $precoVenda1],
                         $chassi2 => [$fabricante2, $precoVenda2],
                         $chassi3 => [$fabricante3, $precoVenda3],
                         $chassi4 => [$fabricante4, $precoVenda4]];


        echo "<div>";
        //fabricante mais barato
        $fabricanteBarato = $matrizCarros[$chassi1][0];

        foreach ($matrizCarros as $chassi => $carro) {
            if ($carro[1] < $matrizCarros[$chassi1][1]) {
                $fabricanteBarato = $carro[0];
            }
        }

        echo "<p> O fabricante do carro mais barato é: <span>$fabricanteBarato</span> </p>";

        //preço médio dos carros
        $somaPrecos = 0;
        foreach ($matrizCarros as $chassi => $carro) {
            $somaPrecos += $carro[1];
        }

        $mediaPrecos = $somaPrecos / count($matrizCarros);

        echo "<p> O preço médio dos carros é: <span>$mediaPrecos</span> </p>";


        echo "</div>";
        //ordenando a matriz por preço de venda

        foreach ($matrizCarros as $chassi => $carro) {
            $vetorAux[$chassi] = $carro[1];
        }

        arsort($vetorAux);


        echo "<table> <caption> Carros ordenados por preço de venda </caption>
              <tr>
              <th> Chassi </th>
              <th> Fabricante </th>
              <th> Preço de venda </th>
              </tr>";

        foreach ($vetorAux as $chassi => $carro)
        {
            echo "<tr>
                  <td> $chassi </td>
                  <td> {$matrizCarros[$chassi][0]} </td>
                  <td> $carro </td>
                  </tr>";
        }

        echo "</table>";

        ?>

    </fieldset>

    <button> Fazer outra operação </button>
</form>
</body>
</html>