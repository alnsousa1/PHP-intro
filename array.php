<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        include "menu.php";

        $produto[1] = array(
            "nome"=>"Bolovo",
            "valor"=>8.50
        );
        $produto[2] = array(
            "nome"=>"Xis Beico",
            "valor"=>25.50
        );
        $produto[3] = array(
            "nome"=>"Guaraná Chessus",
            "valor"=>5.45
        );

        //print_r($produto);

        function formatarValor($valor){
            return number_format($valor, 2, ",", ".");
        }

        foreach ($produto as $dados){
            $nome = $dados["nome"];
            $valor = formatarValor ($dados["valor"]); 

            echo "<p>{$nome} {$valor}</p>";
        }

        include "footer.php";
    ?>
</body>
</html>