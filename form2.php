<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Ex02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "menu.php";

    ?>
    <h1>Preencha os campos:</h1>
    <form name="form1" method="get" action="ex2.php">
        <label for="nome">Preencha o nome:</label>
        <input type="text" name="nome" id="nome" size="50">
        <br>
        <label for="idade">Preencha a idade:</label>
        <input type="number" name="idade" id="idade" size="10" inputmode="numeric">
        <br>
        <button type="submit">Enviar Dados</button>
    </form>

    <?php
        include "footer.php";

    ?>
</body>
</html>