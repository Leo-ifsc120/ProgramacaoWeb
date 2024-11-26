<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programação web em PHP - Uso de vetores</title>
    <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>
<body>

<h1>Fundamentos do php com vetores</h1>

<form action="../HTML/Exerc3.html">


        <div class="tabela">
            <?php

            $nome1 = $_POST['nome1'];
            $nome2 = $_POST['nome2'];
            $nome3 = $_POST['nome3'];

            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nota3 = $_POST['nota3'];

            $vetorAlunos = [$nome1 => $nota1, $nome2 => $nota2, $nome3 => $nota3 ];


            Echo "<table> <caption>Relação de dados academicos dos alunos do CTDS/PRWI </caption> <tr> <th> Nome do aluno </th><th> Nota de PRWI </th> </tr>";

            arsort($vetorAlunos);

            foreach($vetorAlunos as $nome => $nota)
            {

                echo "<tr> <td>$nome</td> <td>$nota</td> </tr>";

            }
            echo "</table>";

            $maiorNota = max($vetorAlunos);
            $maiorNome = array_search($maiorNota, $vetorAlunos);

            echo "<p> Aluno destaque: </p><p>nome: <span>$maiorNome</span></p><p>nota: <span>$maiorNota</span></p>";

            ?>

            <button type="submit">Adicionar outras notas</button>

        </div>

</form>

</body>
</html>