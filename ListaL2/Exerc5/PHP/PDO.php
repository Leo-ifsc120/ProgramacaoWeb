<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lava_carros";

try {
    // Corrigindo a string de conexão PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Definindo o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão com sucesso" ;

} catch (PDOException $exception) {
    echo "Erro ao conectar: " . $exception->getMessage();
}

$sql = "SELECT nome FROM funcionarios";
$result = $conn->query($sql);

// Verificando se há resultados
if ($result->rowCount() > 0) {
    // Exibindo os nomes
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "Nome: " . $row['nome'] . "<br>";
    }
} else {
    echo "Nenhum nome encontrado";
}

?>
