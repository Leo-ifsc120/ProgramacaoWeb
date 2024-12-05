<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programação web em PHP - Uso de vetores</title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>

<h1>Fundamentos do php com vetores</h1>

<form action="../HTML/Exerc5.html">

    <div>
    <p>
    <?php

    $idade1 = $_POST['idade1'];
    $idade2 = $_POST['idade2'];
    $idade3 = $_POST['idade3'];

    $vetorNotas = [$idade1, $idade2 , $idade3];

    $vetoridades = array($idade1, $idade2 , $idade3);

    $media = array_sum($vetoridades) / count($vetoridades);
    $mediaFormatada = number_format($media, 2, ",", ".");

    echo "A média de idades das tres pessoas é <span>$mediaFormatada</span> ";

    ?>
    </p>
    </div>

        <button type="submit">Adicionar outras idades</button>
</form>

</body>
</html>