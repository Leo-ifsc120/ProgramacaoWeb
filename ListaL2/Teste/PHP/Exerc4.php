<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> Começando com JavaScript </title>
 <link rel="stylesheet" href="../CSS/formata-pagina.css">
</head>

<body>
 <h1> Fundamentos php </h1>


    <form action="../PHP/Exerc4.php" method="post">
        <fieldset>
            <legend> Conversor de Temperaturas </legend>

            <input name="type"  type="radio" value="C" checked>
            <label>Celsius ºC</label>
            <input name="type" type="radio" value="F">
            <label>Fahrenheit ºF</label>


            <br>
            <label>Informe a temperatura: </label>
                <input type="number" name="temp" step="0.1">
            
            <button id="Button" type="submit">Conversão</button>

        </fieldset>
    </form>

    <?php
    
    $temp = $_POST["temp"];

    switch($_POST['type'])
    {
        case "F":
            $temp = ($temp - 32) * (5/9);
            $conversao_formatado = number_format($temp, 1 , ",", ".");
            break;

        case "C":
            $temp = ($temp * 9/5) + 32;
            $conversao_formatado = number_format($temp, 1 , ",", ".");
            break;
    }

    echo "<div> <p> Conversão </p> <p> Dado convertido: $conversao_formatado </p> </div>";

    ?>

</body>
</html>