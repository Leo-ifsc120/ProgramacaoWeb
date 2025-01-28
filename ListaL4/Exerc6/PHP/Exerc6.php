<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matrizes na linguagem PHP </title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>

<body>
<h1> Matrizes em PHP - listaL4 - exercício 6 </h1>
<?php
$medic1 = $_POST['medic1'];
$medic2 = $_POST['medic2'];
$medic3 = $_POST['medic3'];

$code1 = $_POST["code1"];
$code2 = $_POST["code2"];
$code3 = $_POST["code3"];

$preco1  = $_POST["preco1"];
$preco2  = $_POST["preco2"];
$preco3  = $_POST["preco3"];

$codepesq = $_POST["codepesq"];

$matrizRemedios = [$code1 => [$medic1, $preco1],
                    $code2 => [$medic2, $preco2],
                    $code3 => [$medic3, $preco3]];

echo "<table>
         <caption> Tabela de remedios </caption>
         <tr>
          <th> Código do medicamento </th>
          <th> Nome do medicamento </th> 
          <th> preço do medicamento </th>
         </tr>";

foreach($matrizRemedios as $code => $vetorInterno)
{
    echo "<tr>
          <td> $code </td>
          <td> $vetorInterno[0] </td>
          <td> $vetorInterno[1] </td>
         </tr>";
}
echo "</table>";

foreach ($matrizRemedios as $code => $vetorInterno)
    {
        $vetorAux[$code] = $vetorInterno[1];
    }

$precoMaisBarato = min($vetorAux);
$codeMedicMaisBarato = array_search($precoMaisBarato, $vetorAux);
$nomeMedicMaisBarato = $matrizRemedios[$codeMedicMaisBarato][0];

echo "<div> <p>Medicamento mais barato: <span>$nomeMedicMaisBarato</span></p> </div>";

$codeEncontrado = array_key_exists($codepesq, $matrizRemedios);
if (!$codeEncontrado)
{
    echo "<div> <p>Caro usuario, o medicameto de código <span>$codepesq</span> não foi encontrado</p> </div>";
}
else
{
    $nomeMedic = $matrizRemedios[$codepesq][0];
    $precoMedic = $matrizRemedios[$codepesq][1];
    echo "<div> <p>Dados do medicamento pesquisado: <br> Código: <span>$codepesq</span> <br> Nome: <span>$nomeMedic</span> <br> Preço: <span>$precoMedic</span</p> </div>";
}

foreach($matrizRemedios as $code => $vetorInterno)
    {

        $vetorAux[$code] = $vetorInterno[0];

    }

asort($vetorAux);

echo "<table>
         <caption> Relação de dados dos medicamentos cadastrados na matriz, ordenados crescentemente, em ordem alfabética </caption>
         <tr>
          <th> Código do medicamento </th>
          <th> Nome do medicamento </th> 
          <th> preço do medicamento </th>
         </tr>";

foreach($vetorAux as $code => $medicamento)
{
    $preco = $matrizRemedios[$code][1];
    echo "<tr>
          <td> $code </td>
          <td> $medicamento </td>
          <td> $preco </td>
         </tr>";
}
echo "</table>";

?>
</body>
</html>