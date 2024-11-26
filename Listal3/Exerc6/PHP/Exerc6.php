<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programação web em PHP - Uso de vetores</title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>

<h1>Fundamentos do php com vetores</h1>

<form action="../HTML/Exerc6.html">

    <div>
    <p>
    <?php

    $nome1 = $_POST['nome1'];
    $nome2 = $_POST['nome2'];
    $nome3 = $_POST['nome3'];

    $idade1 = $_POST['idade1'];
    $idade2 = $_POST['idade2'];
    $idade3 = $_POST['idade3'];

    $vetoridades = [$nome1 => $idade1,
                    $nome2 => $idade2,
                    $nome3 => $idade3];

    Echo "<table> <caption> Informações pessoais </caption> 
                   <tr> 
                   <th> Nome </th>
                   <th> Idade </th>
                   </tr>";

    foreach($vetoridades as $nome => $idade)
    {

        echo "<tr>
              <td>$nome</td>
              <td>$idade</td>
              </tr>";

    }
    echo "</table>";



    ?>
    </p>
    </div>

        <button type="submit">Adicionar outras idades</button>
</form>

</body>
</html>