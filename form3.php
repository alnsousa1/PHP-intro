<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Ex03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "menu.php";
    ?>
    <h1>Preencha o Formulário</h1>
    <form name="form1" method="post" action="ex3.php">
        <label for="nome">Preencha o nome:</label>
        <br>
        <input type="text" name="nome" id="nome" size="50">
        <br>
        <label for="salario">Preencha o salário:</label>
        <br>
        <input type="text" name="salario" id="salario" size="20" inputmode="numeric">
        <br>
        <label for="desconto">Preencha o desconto:</label>
        <br>
        <input type="text" name="desconto" id="desconto" size="20" inputmode="numeric">
        <br>
        <button type="submit">Enviar Dados</button>
    </form>

    <?php
        include "footer.php";

    ?>
    
</body>
</html>