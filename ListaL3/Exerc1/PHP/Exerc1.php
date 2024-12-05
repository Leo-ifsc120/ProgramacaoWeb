<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programação web em PHP - Uso de vetores</title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>

<h1>Fundamentos do php com vetores</h1>

<form action="../HTML/Exerc1.html">

    <div>
    <p>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "teste";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p>Connected successfully</p>";

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $vetorNotas = [$nota1, $nota2 , $nota3];

    $vetorNotas = array($nota1, $nota2 , $nota3);

    $media = array_sum($vetorNotas) / count($vetorNotas);

    echo " Caro professor, de acordo dom as notas fornecida, a média geral da turma é $media ";

    $insert = "INSERT INTO notas (nota1, nota2, nota3, media)
               VALUES ($nota1, $nota2, $nota3, $media)";
    $conn->query(@$insert);


    ?>
    </p>
    </div>

        <button type="submit">Adicionar outras notas</button>
</form>

</body>
</html>