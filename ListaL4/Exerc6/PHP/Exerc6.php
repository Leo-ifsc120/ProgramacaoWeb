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
         <caption> Relação de dados acadêmicos dos alunos do CTDS/PRWI - ordenação pela média, decrescentemente </caption>
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

echo "<div> <p>Medicamento mais barato: <span>$nomeMedicMaisBarato</span></p> </div>"

?>
</body>
</html>